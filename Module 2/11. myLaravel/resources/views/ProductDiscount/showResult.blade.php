<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOW RESULT</title>
</head>
<body>
<form action="/discount" method = 'post'>

    <?php
      echo 'tên sản phẩm: '. $decscription.'<br>';
      echo 'giá sản phẩm'. $price.'<br>';
      echo '% chiết khấu: '.$discountPercent.'<br>';

      $discountAmount = $price * $discountPercent /100;
      $discountPrice = $price - $discountAmount;
      echo 'số tiền chiết khấu: '.$discountAmount.'<br>';
      echo 'giá sau chiết khấu: '. $discountPrice.'<br>';
    ?>
</form>
</body>
</html>