<table>
<form action="{{ route('city.store') }}" method = 'post'>
@csrf
    <tr>
        <td>THE PROVINCE NAME</td>    
        <td><input type="text" name = 'nameprovince'></td>
    </tr>
    <tr>
        <td colspan = '2'><input type="submit" value = 'ADD PROVINCE'></td>
    </tr>
</form>
</table>