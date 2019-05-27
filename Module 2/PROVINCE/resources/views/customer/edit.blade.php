<h1>EDIT NEW CUSTOMER</h1>
<table>
<form action=" {{ route('customer.update', $customer->id) }}" method = 'post'>
@csrf 
    <tr>
        <td>FULL NAME</td>
        <td><input type="text" name='fullname' value='{{ $customer->fullname }}'></td>
    </tr>
    <tr>
        <td>DOB</td>
        <td><input type="date" name='dob' value='{{ $customer->dob }}'></td>
    </tr>
    <tr>
        <td>EMAIL</td>
        <td><input type="text" name='email' value='{{ $customer->email }}'></td>
    </tr>
    <tr>
        <td>ID CITY</td>
        <td>
            <select name="cityid">
                                                  
                                 
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name_province }}</option>
                        @endforeach
                    
            </select>
        </td>
    </tr>
    <tr>       
        <td colspan='2'><input type="submit" value='ADD NEW CUSTOMER'></td>
    </tr>
</form>

</table>