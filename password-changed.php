<?php require_once "index1.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: index.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
    <title>Password Change</title>
</head>
<body>
   <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Forgot Password</span>

                <form action="index.php" method="POST">
                     <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                    
                    

                    <div class="input-field button">
                        <input type="submit" name="login-now" value="Login Now" >
                    </div>
                </form>

                
            </div>

            
            
        </div>
    </div>

    <script src="scriptjs.js"></script>
 
    
</body>
</html>