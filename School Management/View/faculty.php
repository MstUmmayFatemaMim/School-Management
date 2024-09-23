<?php 
    session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Registration</title>
   
</head>
<body>
    
        <h2>Faculty Registration</h2>
        <form  method="POST" action="../Controller/loginCheck.php">
        Name:<input type="text" name="name"><br>
        ID:<input type="text" name="id"> <br>   
        Pass:<input type="pass" name="pass"><br> 
        Notice:<input type="text" name="notice"><br>
        <?php 
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset ($_SESSION['error']);
            }
        ?>
        
            <button name="register">Register</button>
       
        
          </form>
    
</body>
</html>