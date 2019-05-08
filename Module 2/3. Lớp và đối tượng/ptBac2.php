<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method='post'>
        Number 1: <input type = 'text' name='soA'><br><br>
        Number 2: <input type = 'text' name='soB'><br><br>
        Number 3: <input type = 'text' name='soC'><br><br>
        <input type = 'submit' name='TÍNH'>
    </form>
    <?php
     class QuadraticEquation
     {
        private $a;
        private $b;
        private $c;
        function __construct($_a,$_b,$_c){
            $this->a = $_a;
            $this->b = $_b;
            $this->c = $_c;
        }
        function delta(){
            return $this->b*$this->b - 4*$this->a*$this->c;
        }
        function timNghiem(){
            if($this->delta()<0){
                echo 'phương trình vô nghiệm';
            }
            else if($this->delta()===0){
                echo 'x1 = x2= '.-$this->b/(2*$this->a);
            }
            else {
                echo 'phương trình có 2 nghiệm <br> x1 = '.(-$this->b + sqrt($this->delta()))/2*$this->a;
                echo '<br> x2 = '.(-$this->b - sqrt($this->delta()))/2*$this->a;
            }
        }
     }
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $soA = $_POST['soA'];
        $soB = $_POST['soB'];
        $soC = $_POST['soC'];
    
        $phuongtrinh = new QuadraticEquation($soA,$soB,$soC);
        $phuongtrinh->delta();
        $phuongtrinh ->timNghiem();
    }
    ?>
</body>
</html>