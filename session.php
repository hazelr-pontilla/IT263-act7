<?php
    session_start();

    $_SESSION["fname"] = "Hazel"; //balyuon la an mga name didi nga nabutang
    $_SESSION["lname"] = "Pontilla";
?>

<!-- Modify a Session 
    you can just only change the name above 
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
    <h1>Not an Activity for Session</h1>

    <?php
        echo "First Name: " . $_SESSION["fname"] . "<br>";
        echo "Last Name: " . $_SESSION["lname"];
    ?>
</body>
</html>

<!-- Delete a Session 
     similar to the above like:
     
     php format start
     $_SESSION['user'] = 'Hazel Pontilla';
     php format end

     then html
     body  php format start
        if(isset($_SESSION['user']))
        {
            echo "Session 'user' still exist.';
        }
        else
        {
            echo "Session 'user' is already deleter.";
        }
     php format end

-->

<!-- So if you want to delete a specific data you can do this

    same php format above in this delete comment

    body
    php format start

    -- will delete the specific 'user' data
    unset($_SESSION['user']);

    -- will delete all the session data
    session_destroy();

    if(isset($_SESSION['user']))
    {
        echo "Session 'user' still exist.";
    }
    else
    {
        echo "Session 'user' is already deleted.";
    }
    php format end

-->
