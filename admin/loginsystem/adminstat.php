<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Admin Acess</title>
    <style>
    form{
        font-size:2rem !important;
        display:grid;
        justify-content:center;
        align-items:center;
    }
    input{
        background-color:green;
        color:white;
        cursor:pointer;
        margin-top:100px;
        padding:10px;
    }
        
    </style>
</head>
<body>

<form action="includes/logout.inc.php" method="POST">
<?php

echo "Sorry You are not admin to access this system. please Verify your admin status from authority to access this";


?>
          <input class="btn btn-dark" value="Go back" type="submit" name="submit"/>
</form>
</body>
</html>


