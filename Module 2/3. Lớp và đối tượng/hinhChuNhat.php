<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        class Rectanggle
        {
            var $width;
            var $height;
            function __construct($_width,$_height){
                $this->width = $_width;
                $this->height = $_height;
            }
            function getArea(){
                return $this->width * $this->height;
            }
            function getPerimeter(){
                return ($this->width + $this->height)*2;
            }
            function display(){
                return 'width: '.$this->width.'<br> height: '.$this->height.'<br>';
            }
        }
        $rectanggle = new Rectanggle(30,20);
        echo $rectanggle-> display();
        echo 'Area = '. $rectanggle-> getArea().'<br>';
        echo 'Perimeter = '.$rectanggle-> getPerimeter();
    ?>
</body>
</html>