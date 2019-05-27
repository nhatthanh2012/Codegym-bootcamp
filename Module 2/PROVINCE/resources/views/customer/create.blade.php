<h1>ADD NEW CUSTOMER</h1>
<table>
<form action=" {{ route('customer.store') }}" method = 'post'>
@csrf 
    <tr>
        <td>FULL NAME</td>
        <td><input type="text" name='fullname'></td>
    </tr>
    <tr>
        <td>DOB</td>
        <td><input type="date" name='dob'></td>
    </tr>
    <tr>
        <td>EMAIL</td>
        <td><input type="text" name='email'></td>
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