<form action="{{ route('store') }}" method = 'post'>
    @csrf
    <input type="text" name = 'hoten' placeholder= 'enter your name'><br><br>
    <input type="text" name = 'sdt' placeholder= 'enter your phone'><br><br>
    <input type="text" name = 'email' placeholder= 'enter your email'><br><br>
    <input type="submit" value = 'CREATE'>
</form>