<h1>Edit new blog</h1>
<table>
<form action="{{ route('update', $blog->id) }}" method = 'post'>
@csrf
    <tr>
        <td>TITLE</td>
        <td><input type="text" name ='title' value= '{{ $blog->title }}'></td>
    </tr>
    <tr>
        <td>CONTENT</td>
        <td><input type="text" name ='content' value= '{{ $blog->content }}'></td>
    </tr>
    <tr>
        <td>WRITER</td>
        <td><input type="text" name ='writer' value= '{{ $blog->writer }}'></td>
    </tr>
    <tr>
        <td>COMMENT</td>
        <td><input type="text" name ='comment' value= '{{ $blog->comment }}'></td>
    </tr>
    <tr>        
        <td colspan= '2'><input type="submit" value ='EDIT'></td>
    </tr>
</form>
</table>