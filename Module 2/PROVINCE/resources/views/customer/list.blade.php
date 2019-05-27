<table border ='1'>
    <tr>
        <th>STT</th>
        <th>FULLNAME</th>
        <th>DOB</th>
        <th>EMAIL</th>
        <th>PROVINCE</th>
        <th>ACTION</th>
    </tr>
    <tbody>
         @foreach($customers as $key=>$customer)
        <tr>            
                <td>{{ ++$key }}</td>
                <td>{{ $customer->fullname }}</td>
                <td>{{ $customer->dob }}</td>
                <td>{{ $customer->email }}</td> 
                <td>
                @if($customer->cities !=null)                          
                    {{ $customer->cities->name_province }}
                @endif  
                </td>               
                <td>
                    <a href="{{ route('customer.create') }}">ADD</a>
                    <a href="{{ route('customer.edit', $customer->id) }}">EDIT</a>
                    <a href="{{ route('customer.delete', $customer->id) }}">DELETE</a>e
                </td>
        </tr>
        @endforeach
    </tbody>
</table>