<h1>Add new blog</h1>
<table>
<form action="{{ route('store') }}" method = 'post'>
@csrf
    <tr>
        <td>TITLE</td>
        <td><input type="text" name ='title'></td>
    </tr>
    <tr>
        <td>CONTENT</td>
        <td><input type="text" name ='content'></td>
    </tr>
    <tr>
        <td>WRITER</td>
        <td><input type="text" name ='writer'></td>
    </tr>
    <tr>
        <td>COMMENT</td>
        <td><input type="text" name ='comment'></td>
    </tr>
    <tr>        
        <td colspan= '2'><input type="submit" value ='ADD'></td>
    </tr>
</form>
</table>