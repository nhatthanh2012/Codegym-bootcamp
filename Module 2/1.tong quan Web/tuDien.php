<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    h2 {
        color: blue;
    }
    input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc; 
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
    #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
    }
</style>
<body>
    <form method='post'>
    <h2>TỪ ĐIỂN ANH - VIỆT</h2>
    <input type='text' name='word'>
    <input type='submit' id ='submit' value= 'Search'>
    </form>
   
    <?php
        $dictionary = array('hello'=>'xin chào', 'car'=>'ô tô', 'computer'=>'máy tính', 'bicycle'=> 'xe đạp');
        $searchWord;
        if ($_SERVER["REQUEST_METHOD"]==="POST"){
            $searchWord = $_POST["word"];
            $flag = false;
            foreach($dictionary as $word =>$mean){
                if($searchWord===$word){
                    echo 'từ cần tìm: '. $searchWord.'<br>';
                    echo 'Nghĩa tiếng Việt: '.$mean;
                    $flag = true;                
                }
            } 
            if ($flag===false){
                echo 'đang cập nhật';
            }
            
        }
    ?>
</body>
</html>