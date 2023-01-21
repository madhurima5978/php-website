
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="nav">
     <!--logo and image-->
    
<!--navigation bar -->
    </div>
    <?php
    $login = false;
    include '_dbconnect.php';
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $email = $_POST['email'];
            $pass = $_POST['pwd'];

            $email = stripcslashes($email);
            $pass = stripcslashes($pass);
            $email = mysqli_real_escape_string($conn, $email);
            $pass = mysqli_real_escape_string($conn, $pass);

            
            $sql = "SELECT * from contacts1 where email = '$email' and password = '$pass'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

            if($count == 1)
            {
                echo"<h1><center>Login Successful</center></h1>";
            }
            else{
                echo"<h1><center>Login Failed. Invalid username or password</center></h1>";
            }
            /*if($num == 1)
            {
                $login = true;
            }
            else{
                $showError = "Invalid credentials";
            }*/
            echo "<br>";

            
}

        

        echo "Welcome!!";
    
?>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link"href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link"href="clubs.html">Clubs</a></li>
               
            <li class="nav-item"><a class="nav-link"href="#">Gallery</a></li>
            <li class="nav-item"><a class="nav-link"href="#">Contact Us</a></li>
            <li class="nav-item" style="position: absolute; right: 100px;"><a class="nav-link"href="first.php">Sign-in</a></li>
            <p style="position: absolute; right: 90px; color: white; font-size: 20px; top: 5px;">/</p>
            <li class="nav-item" style="position: absolute; right: 30px;"><a class="nav-link"href="login.html">Log-in</a></li>
            </ul>
        </nav>
    </div>
</head>
<body>
    <div class="sign row">
        <div class="col-lg-4"></div>
        <form action="/513/login.php" method="post" class="col-lg-4 row">
            <label for="email" class="col-lg-6 v">Enter your email address</label>
            <input type="text" name="email" id="d" class="col-lg-6 v">
            <label for="pwd" class="col-lg-6 v">Enter Password</label>
            <input type="password" name="pwd" id="c" class="col-lg-6 v">
            <input type="submit" name="submit" id="a">
        </form>
        <div class="col-lg-4"></div>
    </div>
    <?php
    if($login){
        echo '<div class="alert alert-success alert dismissable fade show" role="alert">
        <button type = "button" class = "close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    ?>
</body>
</html>