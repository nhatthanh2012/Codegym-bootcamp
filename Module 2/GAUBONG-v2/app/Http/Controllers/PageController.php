<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use App\Customer;
use App\Bills;
use App\BillDetail;
use App\User; 
use App\Comment; 
use Hash;
use Auth;
use Mail;
use Session;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all(); 
        $new_product = Product::where('new', 1)->paginate(4); 
        $promotion_product = Product::where('promotion_price', '<>', 0)->paginate(8); 
        $productType = ProductType::all();        
        return view('page.home', compact('slide', 'new_product', 'promotion_product','productType'));
    }

    public function getProductType($type)
    {
        $productByType = Product::where('id_type', $type)->get();
        $productOthers = Product::where('id_type', '<>', $type)->paginate(3);
        $productType = ProductType::all();
        $productType_id = ProductType::where('id', $type)->first();       
        return view('page.productType', compact('productByType', 'productOthers', 'productType', 'productType_id'));
    }
    public function postComment($id)
    {
        $comment = new Comment;       
        $comment->email = request('email');
        $comment->name = request('name');
        $comment->content = request('content');
        $comment->id_product = $id;
        $comment->save();
        return redirect()->back();
    }
    public function getProductDetail($id)
    {
        $comments = Comment::where('id_product', $id)->get(); 
        $productKey = 'product_'.$id;
        if (!Session::has($productKey)) {
            Product::where('id', $id)->increment('view');
            Session::put($productKey, 1);
        }
        $product = Product::where('id', $id)->first();        
        $product_related = Product::where('id','<>', $id)->paginate(6);
        $new_product = Product::where('new', 1)->paginate(10); 
             
        return view('page.productDetail', compact('product', 'product_related', 'new_product', 'comments'));
    }

    public function getContact()
    {
        return view('page.contact');
    }

    public function getIntroduction()
    {
        return view('page.introduction');
    }

    public function getAddCart(Request $request, $id)
    {
        $product = Product::find($id);
        $amount = request('num-product');
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        if($amount )
        {
            for($i=1; $i<= $amount; $i++)
            {
                $cart->add($product, $product->id);
            }
        }
        else
        {
            $cart->add($product, $product->id);
        }               
        $request->session()->put('cart', $cart);        
        return redirect()->back();
    }
  
    public function getShoppingCart()
    {
        return view('page.shoppingCart');
    }

    public function getDeleteItem($id)
    {
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0)
        {
            Session::put('cart', $cart);
        }
        else 
        {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getCheckout()
    {              
        return view('page.order');
    }

    public function postCheckout(request $request)
    {
        
        $customer = new Customer;
        $cart = Session::get('cart');         
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->email  = $request->email;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone;
        $customer->notes = $request->notes;
        $customer->save();

        $bill = new Bills;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = Request('payment'); 
        $bill->save();     
        
        foreach($cart->items as $key=>$value)
        {
            $billDetail = new BillDetail;
            $billDetail->id_bill = $bill->id;
            $billDetail->id_product = $key;
            $billDetail->quantity = $value['qty'];
            $billDetail->unit_price = ($value['price'] / $value['qty']);
            $billDetail->save();
        } 

        $data['info'] = $request->all();        
        $email = $request->email;  
        
        Mail::send('page.email', $data,function($message) use($email)
        {
            $message->from('phanhoaingan2601@gmail.com', 'Gấu bông shop');
            $message->to($email, $email);                    
            $message->subject('Xác nhận hóa đơn mua hàng');
        });             
        Session::forget('cart');
        return redirect()->back()->with('information', 'Bạn đã đặt hàng thành công! Vui lòng kiểm tra email để xem thông tin đơn hàng của bạn');
    }

    public function complete()
    {
        return view('page.complete');
    }

    public function register()
    {
        return view('page.register');
    }

    public function postRegister(request $request)
    {
        $dataValidate = $request->validate(
            [
                'email'=> 'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập vào email',
                'email.email'=>'Email không đúng định dạng',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập vào password',
                'password.min'=>'Password tối thiểu 6 ký tự',
                'password.max'=>'Password tối đa 20 ký tự',
                're_password.same'=>'mật khẩu không giống nhau',
                're_password.required'=>'Vui lòng nhập vào password',
                'fullname.required'=>'Fullname không được để trống'
            ]);
        
        $user = new User;
        $user->name = $request->fullname;
        $user->email = $request->email;        
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->save();
        return redirect()->back()->with('success', 'Đã đăng ký thành công');
    }

    public function login()
    {
        return view('page.login');
    }

    public function postLogin()
    {
        request()->validate(
            [
                'email'=>'required|email',
                'password'=> 'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập password',
                'password.min'=>'Mật khẩu tối thiểu 6 ký tự',
                'password.max'=>'Mật khẩu tối đa 20 ký tự'
            ]
        );
        
        $verify = array('email'=>request('email'), 'password'=>request('password'));
        if(Auth::attempt($verify))
        {
            return redirect()->back()->with(['flag'=>'success'],['inform ', 'Đăng nhập thành công']);
        }
        else
        {
            return redirect()->back()->with(['flag'=>'danger'],['inform ', 'Đăng nhập không thành công']);
        }
    }

    public function logout()
    {
        Auth::logout();
        if(Session::has('cart'))
        {
            Session::forget('cart');
        }       
        return redirect()->route('page.home');
    }

    public function search(request $request)
    {
        $products = Product::where('name', 'like', '%'.$request->key . '%')
                         ->orWhere('unit_price', 'like', '%'.$request->key. '%')->get();
        return view('page.search', compact('products'));
    }    

    
}
