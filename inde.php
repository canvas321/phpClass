<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        echo "Hello";
        // phpinfo();
    
    // // echo $_SERVER['HTTP_USER_AGENT'];

    // if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    //     echo 'You are using Internet Expplorer. <br />';
    // }

    /*
    $txt = "well?";
    $number = 01;
    echo $txt ." ".$number." ".strlen($txt);*/

    // echo strpos("try me today", 'me');
    
    // $d = date("D");

    // // if ($d=="Friday") {
    // //     echo "Have a nice weekend";
    // // } else {
    // //     echo "Have a lovely day";
    // // }

    // if ($d=="Friday") {
    //     echo "Have A Nice Weekend";
    // } else if ($d=="Thursday"){
    //     echo "Happy TBT";
    // }else {
    //     echo "Hiii";
    // }

    $x = 0;
    switch ($x) {
        case 0:
            echo 'Number 0';
            break;

        case 1:
            echo "number one";
            break;
    }
    
    
    ?>
</body>
</html>