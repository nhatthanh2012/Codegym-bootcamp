<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        SIDE 1 <input type="text" name="side1"><br><br>
        SIDE 2 <input type="text" name="side2"><br><br>
        SIDE 3 <input type="text" name="side3"><br><br>
        COLOR <input type="text" name="color"><br><br>
        <input type="submit" value="Tính"><br><br>
    </form>
    <?php
        include_once "triangle.php";
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $_side1 = (int) $_POST['side1'];
            $_side2 = (int) $_POST['side2'];
            $_side3= (int) $_POST['side3'];
            $_color = $_POST['color'];
            
            // $shape = new Shape($_color);
            // echo 'tam giác màu : '. $shape->color;
            $triangle = new Triangle($_color,$_side1,$_side2,$_side3);
            echo '<br> chu vi = '.$triangle->getPerimeter();
            echo '<br> color = '.$triangle->color;
        }
    ?>
</body>
</html>
