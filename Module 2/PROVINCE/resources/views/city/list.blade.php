<h1>LIST PROVINCE</h1>
<table border = '1'>
    <tr>
        <th>STT</th>
        <th>ID</th>
        <th>NAME PROVINCE</th>   
        <th>A MOUNT OF CUSTOMER</th>
        <th>ACTION</th>     
    </tr>
    <tbody>
        @if(count($cities)=== 0)
            <tr>khong co du lieu</tr>
        @else 
            @foreach($cities as $key=>$city)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $city->id }}</td>
                    <td>{{ $city->name_province }}</td>
                    <td>{{ count($city->customers) }}</td>
                    <td>
                        <a href=" {{ route('city.create') }}">ADD</a>
                        <a href="{{ route('city.edit', $city->id) }}">EDIT</a>
                        <a href="{{ route('city.delete', $city->id) }}" onclick = "return confirm('are sure to delete')">DELETE</a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>