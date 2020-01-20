<html>

    <title></title>
    <link rel="stylesheet" href="bootsrap.min.css" >
    <form class = "form-group" method = "post" action = "Login.php">
             
            
             <label> Username </label>
             <input type = "text" name = "username" class = "form-control" style = "width:30%"/><br>
             <label> Password </label>
             <input type = "password" name = "password" class = "form-control" style = "width:30%"/><br>
             <button class = "btn btn-primary" type = "submit" name = "Login"> Login </button>
             <h6>Don't have an account?..<a href = "register.php">Register</a>


         </form>
 </html>
        <?php 
              $con = mysqli_connect("localhost","root","","lab_test2");
              if (isset($_POST ['Login']))
              {
        
                  $username = $_POST['username'];
                  $Password = $_POST['password'];
                  $Password = md5($Password);
                  $sql = "SELECT * FROM members WHERE username = '$username' AND password = '$Password'";
                  $Result = mysqli_query($con, $sql);
                  if (mysqli_num_rows($Result)>0)
                   {
                       echo "login succesful..added to db";
                       header('location:Homepage.php');
                   }
                   else 
                   {
                       echo "Login unsuccesful";
                   }

                  
              }
             
         ?>