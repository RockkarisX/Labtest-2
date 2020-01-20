<html>

    <title></title>
    <link rel="stylesheet" href="bootsrap.min.css" >
     <body>
         <table class ="table table-striped style" style= "width:50%;">
             <tr>
                 <th>ID</th>
                 <th>username</th>
                 <th>email</th>
                 <th>update</th>
                 <th>Delete</th>
             </tr>

             <?php 
             $con = mysqli_connect("localhost","root","","lab_test2");
             $query1 = 'SELECT * FROM members';
             $result = mysqli_query($con, $query1);
             while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
                echo '<tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td> 
                    <td><button class="btn btn-success">Update</button></td>
                    <td><button class="btn btn-danger">Delete</button></td> 
                    
                </tr>';
             }
             
            ?>
         </table>