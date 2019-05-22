<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <form action="/discount" method = 'post'>
    @csrf
        <tr>
            <td><p>Product Description:</p></td>
            <td><input type="text" name = 'description'></td>
        </tr>
        <tr>
            <td><p>List Price:</p></td>
            <td><input type="text" name = 'price'></td>
        </tr>
        <tr>
            <td><p>Discount Percent (%):</p></td>
            <td><input type="text" name = 'discountPercent'></td>
        </tr>
        <tr>           
            <td colspan = '2'><input type="submit"  value = 'Calculate'></td>
        </tr>       
    </form>
    </table>
</body>
</html>