<?php
session_start();

  if(isset($_SESSION["admin_email"])){
    header("Location: dashboard.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/login.css?v=<?php echo time();?>">
    <title>login</title>
</head>
<body>
    <section>
        <div class="form-container">
            <h1>Login</h1>
        <form action="login_handle.php" method="POST">
            <div class="control">

            <label for="name">Email</label>
            <input type="email" placeholder="Enter  your email" name="email" id="name" required="required" >
            </div>

            <div class="control">
            <label for="psw">Password</label>
            <input type="password" placeholder="Enter Password" name="password" id="psw" required="required" >
            </div>

            <div class="control">
            <input type="submit" class="btn" name="Login" value="Login">
            </div>

            <?php
                if (isset($_GET['error'])) { ?>

                <p style=" color: red; padding: 5px; margin: 10px 0;"> <?php echo $_GET['error']; ?> </p>        
             <?php
                }
             ?>

        </form>
        </div>
    </section>
</body>
</html>