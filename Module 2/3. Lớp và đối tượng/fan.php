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
         const SLOW =1;
         const MEDIUM =2;
         const FAST =3;
        class Fan 
        {   
           
            private $speed = SLOW;
            private $On = false; //tat
            private $radius= 5;
            private $color= 'blue';
            //set
            function setFan(){
                return $this->speed = $speed;
            
                return $this->On = $On;//false
          
                return $this->radius = $radius;
          
                return $this->color = $color;
            }
            //get
            function getSpeed(){
                return $this->speed ;
            }
            function getOn(){
                return $this->On; //false-tat
            } 
            function getRadius(){
                return $this->radius;
            }      
            function getColor(){
                return $this->color;
            }
            
            function  toString(){
                if($this->getOn()===true){
                    echo "fan is on". '<br> tốc độ:'. $this->getSpeed(). '<br> quạt có màu:' .$this->getColor().
                    '<br> bán kính: '.$this->getRadius();
                }else if($this->getOn()===false){
                    echo "fan is off".  '<br> quạt có màu:' .$this->getColor().
                    '<br> bán kính: '.$this->getRadius();
                }
            }

        }
        $fan = new Fan;
        $fan -> toString();
        
    ?>
</body>
</html>