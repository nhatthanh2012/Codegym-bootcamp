<body>
<h1>Content a blog</h1>
    <table border = '1'>
        <tr>            
            <th>ID</th>
            <th>TITLE</th>
            <th>CONTENT</th>
            <th>WRITER</th>
            <th>COMMENT</th>            
        </tr>
        <tbody>         
        <tr>            
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->content }}</td>
            <td>{{ $blog->writer }}</td>
            <td>{{ $blog->comment }}</td>           
        </tr>       
        </tbody>
    </table>
</body>