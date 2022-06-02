<?php
    $cookie_name = "user";
    $cookie_value = "Hazel Pontilla";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    // 86400 = 1 day
?>

<!-- Modifying a cookie
    you just have to change the cookie value above then your good to go
    
    para inin an ubos sugad ha igbaw
    setcookie($cookie_name, "", time() - (86400 * 30), "/");
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create / Retrieve a Cookie</h1>
    <?php
        if(!isset($_COOKIE[$cookie_name])) //this is how to retrieve a cookie
        {
            echo "Cookie named '" .$cookie_name . "' is not yet set!";
        }
        else
        {
            echo "Cookie '" . $cookie_name . "' is set! <br>";
            echo "Value is: " .$_COOKIE[$cookie_name]; 
            //this cookie last for a month and reapply depends ha igbaw na ginset nimo
        }

    ?>


<!-- Delete a cookie 
    php kemi didi, pareho la ha igbaw
    .. so if you want to delete a cookie also you can change the time like past na magana inin hinya
        
        if(isset($_C00KIE['user]))
        {
            echo "Cookie 'user' still exist.";
        }
        else
        {
            echo "Cookie 'user' is already deleted";
        }
-->
</body>
</html>