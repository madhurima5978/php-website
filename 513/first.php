
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
    
        $showError=false;
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            include '_dbconnect.php';
            $email = $_POST['email'];
            $pass = $_POST['pwd'];
            $name = $_POST['name'];
            $cpass = $_POST['cpawd'];
            $exists = false;
            if($pass == $cpass && $exists == false){
                $err = false;
                $sql = "INSERT INTO contacts1 VALUES ( '','$name', '$email', '$pass');";
                $result = mysqli_query($conn, $sql);
                $exists = false;
                if($result)
                {
                   $err = true;
                   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>SUccess!!</strong>your email '. $email .' and pwd '.$pass.' '.$name.' submitted successfully
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button>';
                }
                else{
                    echo "the record was not inserted successfully";
                }
            }
            else{
                $showError = "passwords do not match";
            }
            
           
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
            <li class="nav-item" style="position: absolute; right: 30px;"><a class="nav-link"href="login.php">Log-in</a></li>
            </ul>
        </nav>
    </div>
</head>
<body>
    <div class="sign row">
        <div class="col-lg-4"></div>
        <form action="/513/first.php" method="post" name = "signup" onsubmit="return validate()" class="col-lg-4 row">
            <label for="name" class="col-lg-6 v">Your Name</label>
            <input type="text" name="name" class="col-lg-6 v" id="name">
            <label for="email" class="col-lg-6 v">Enter your email address</label>
            <input type="email" name="email" id="d" class="col-lg-6 v">
            <label for="pwd" class="col-lg-6 v">Enter Password</label>
            <input type="password" name="pwd" id="c" class="col-lg-6 v">
            <label for="cpawd" class="col-lg-6 v">Confirm password</label>
            <input type="password" name="cpawd" class="col-lg-6 v" id="b">
            <input type="submit" name="submit" id="a">
        </form>
        <div class="col-lg-4"></div>
    </div>
</body>
<script>
    function validate()
    {
        name = document.signup.name.value;
        email = document.signup.email.value;
        pass = document.signup.pwd.value;
        cpass = document.signup.cpawd.value;

        if(name == ""|| name == NULL)
        {
            alert("Name attribute cannot be empty");
            return false;
        }
        else if(email == ""|| email == NULL)
        {
            alert("email address cannot be empty");
            return false;
        }
        else if(pass<6)
        {
            alert("Password cannot be less than 6 letters");
            return false;
        }
        else if(cpass!=pass)
        {
            alert("Passwors are not same");
            return false;
        }
        else
        {
            return true;
        }

    }
</script>
</html>