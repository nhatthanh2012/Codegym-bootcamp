<?php
function chia($a,$b){
    if ($b===0){
        throw new Exception(' error');
    }
    return $a/$b;
}
try {
    echo chia(4,2).'<br>';
    echo chia(4,0).'<br>';
} catch(Exception $exception){
    echo ' lỗi ...' .$exception ->getMessage();
}
finally{
    echo 'ket thuc 1'.'<br>'
}

?>
