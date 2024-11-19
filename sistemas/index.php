<?php
if($_SERVER['HTTP_HOST'] == 'localhost'){
    header('Location:views/index.php');
}else{
    header('Location:  http://172.31.4.21/views/index.php');
}

