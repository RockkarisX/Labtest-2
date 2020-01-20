<html>

<title></title>
<link rel="stylesheet" href="bootsrap.min.css" >
    <form class = "form-group" method = "post" action = "register.php">
             
             <label> Email </label>
             <input type = "email" name = "email" class = "form-control" style = "width:30%"/><br>
             <label> Username </label>
             <input type = "text" name = "username" class = "form-control" style = "width:30%"/><br>
             <label> Password </label>
             <input type = "password" name = "password" class = "form-control" style = "width:30%"/><br>
             <button class = "btn btn-primary" type = "submit" name = "register"> Register </button>
             <h6>Have an account? Go to <a href = "Login.php">Login</a></h6>


         </form>
</html>
         <?php
                $con = mysqli_connect("localhost","root","","lab_test2");
                if (isset($_POST ['register']))
                {
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $Password = $_POST['password'];
                    $Password = md5($Password);

                    $sql1 = "INSERT into members (username, email, password)
                                    VALUES ('$username', '$email', '$Password')";
                    mysqli_query($con, $sql1);
                }
         ?>