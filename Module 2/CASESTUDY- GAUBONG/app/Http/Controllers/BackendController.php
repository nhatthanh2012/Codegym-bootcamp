<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;
use App\User;
class BackendController extends Controller
{
    public function showProduct()
    {
        $products = Product::paginate(10);        
        return view('product.show', compact('products'));
    }

    public function createProduct()
    {      
        $productType = ProductType::all();
        return view('product.create', compact('productType'));
    }

    public function postProduct(request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->id_type= $request->id_type;
        $product->unit_price = $request->unit_price;
        $product->promotion_price = $request->promotion_price;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $newNameFlie = date('Y-m-d-H-i-m').'-'.$file->getClientOriginalName();
            $file->move('source/image/product', $newNameFlie);
            $product->image = $newNameFlie;
        }        
        $product->new = $request->new;
        $product->save();
        return redirect()->back()->with('success', 'Thêm mới thành công');
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        $productType = ProductType::all();
        return view('product.edit', compact('product', 'productType'));
    }

    public function updateProduct(request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->id_type= $request->id_type;
        $product->unit_price = $request->unit_price;
        $product->promotion_price = $request->promotion_price;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $newNameFlie = date('Y-m-d-H-i-m'). '-'.$file->getClientOriginalName();
            $file->move('source/image/product', $newNameFlie);
            $request->image = $newNameFlie;
        }
        $product->image = $request->image;
        $product->new = $request->new;
        $product->save();
         return redirect()->back()->with('success', 'chỉnh sửa thành công');
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id); 
        $product->delete();
        return redirect()->back()->with('success', 'Đã xóa 1 sản phẩm');
    }

    public function showCategory()
    {
        $productType = ProductType::all();        
        return view('category.show', compact('productType'));
    }

    public function createCategory()
    {
        return view('category.create');
    }

    public function postCategory(request $request)
    {
        $productType = new ProductType;
        $productType->name = $request->name;
        $productType->description = $request->description;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $newNameFile = date('Y-m-d-H-i-m').'-'.$file->getClientOriginalName();
            $file->move('source/image/product', $newNameFile);
            $productType->image = $newNameFile;
        }        
        $productType->save();
        return redirect()->back()->with('success', 'Đã thêm 1 một sản phẩm');
    }

    public function editCategory($id)
    {
        $productType = ProductType::find($id);        
        return view('category.edit', compact('productType'));
    }

    public function updateCategory(request $request, $id)
    {
        $productType = ProductType::find($id);  
        $productType->name = $request->name;
        $productType->description = $request->description;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $newNameFile = date('Y-m-d-H-i-m').'-'.$file->getClientOriginalName();
            $file->move('source/image/product', $newNameFile);
            $productType->image = $newNameFile;
        }        
        $productType->save();
        return redirect()->back()->with('success', 'Đã chỉnh sửa thông tin');
    }

    public function deleteCategory($id)
    {
        $productType = ProductType::find($id);
        $productType->delete(); 
        return redirect()->back()->with('success', 'Đã xóa 1 sản phẩm');
    }

    public function showUser()
    {
        $users = User::all();
        return view('user.show', compact('users'));
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function updateUser($id)
    {
        $user = User::find($id);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->phone = request('phone');
        $user->address = request('address');   
        $user->save();    
        return redirect()->back()->with('success', 'Đã chỉnh sửa thành công');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Đã xóa thành công');
    }
}
