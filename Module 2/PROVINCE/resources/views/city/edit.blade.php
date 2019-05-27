<table>
<form action="{{ route('city.update', $city->id) }}" method = 'post'>
@csrf
    <tr>
        <td>THE PROVINCE NAME</td>    
        <td><input type="text" name = 'nameprovince' value = '{{ $city->name_province }}'></td>
    </tr>
    <tr>
        <td colspan = '2'><input type="submit" value = 'ADD PROVINCE'></td>
    </tr>
</form>
</table>