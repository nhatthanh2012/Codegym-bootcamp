<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table td {
            width: 15px;
            height: 15px;
        }
    </style>
</head>

<body>
    <form method='post'>
        <input type='text' name='width' placeholder='width'/><br/>
        <input type='text' name='height' placeholder='height'/><br/>
        <input type="radio" name="shape" value="rectangle" checked/>Rectangle<br/>
        <input type="radio" name="shape" value="triangle"/>Triangle<br/>
        <input type='submit' value='Draw'/>
    </form>
    <?php
        function drawRectangle($width,$height) {
            $text = "";
            for ($row=0; $row<$height; $row++) {
                $text .= "<tr>";
                for ($col = 0; $col < $width; $col++) {
                    $text .= "<td>*</td>";
                };
                $text .= "</tr>";
            }
            return $text;
        }
        function drawTriangle($width,$height) {
            $text = "";
            
                    $i = 1;
                    for ($row=0; $row<$height; $row++) {
                        $text .= "<tr>";
                        for ($col = 0; $col < $i; $col++) {
                            $text .= "<td>*</td>";
                        };
                        $text .= "</tr>";
                        $i++;
                    }
                    return $text;
                }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $width = $_POST['width'];
            $height = $_POST['height'];
      
            $shape = $_POST['shape'];
            $patternInteger = "/^[1-9]{1}\d*$/";
                $text ="<table>";
                switch ($shape) {
                    case 'rectangle':
                        $text .= drawRectangle($width, $height);
                        break;
                    case 'triangle':
                        $text .= drawTriangle($width, $height);
                        break;
                };
                $text .= '</table>';    
                echo $text; 
            } 
            
        
    ?>
</body>
</html>