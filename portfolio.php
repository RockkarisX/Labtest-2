<html>
    <style type="text/css">
        .mainframe { display: flex; }
        .samples { float:left; display:inline; display:flex; flex-direction:row; }
        .mainframe2 { display: flex; }
        .samples2 { float:left; display:inline; display:flex; flex-direction:row; }
        </style>
         <link rel="stylesheet" href="../css/bootstrap.min.css"> 
<title>Portfolio</title>
<a href="index.html"> <b>Home      | </b></a> 
<a href="portfolio.html"> <b>About Us      | </b></a> 
<a href="contactus.html"> <b>Contact Us     | </b></a> 
<br>
<body>
    <div class="mainframe">
        <div class = samples>
            <figure>
            <img src="sample1.jpeg" alt="my img" style = "width:200px; height:100px;"/>
            <figcaption> sample1 </figcaption>
            </figure>
        </div>

        <div class="samples">
            <figure>
            <img src="sample2.jpg" alt="my img" style = "width:200px; height:100px;"/>
            <figcaption> sample2 </figcaption>
            </figure>
        </div>

        <div class="samples">
            <figure>
            <img src="sample3.jpg" alt="my img" style = "width:200px; height:100px;"/>
            <figcaption> sample3 </figcaption>
            </figure>
        </div>

    </div>

    <div class="mainframe2">
        <div class = samples2>
            <figure>
            <img src="sample4.jpg" alt="my img" style = "width:200px; height:100px;"/>
            <figcaption> sample4 </figcaption>
            </figure>
        </div>

        <div class="samples2">
            <figure>
            <img src="sample5.jpg" alt="my img" style = "width:200px; height:100px;"/>
            <figcaption> sample25</figcaption>
            </figure>
        </div>

        <div class="samples2">
            <figure>
            <img src="sample6.jpg" alt="my img" style = "width:200px; height:100px;"/>
            <figcaption> sample36</figcaption>
            </figure>
        </div>

    </div>
   
    <?php
      echo "Hellow world";
      $num1 = 10;
      $num2 = 20;
      $sum = $num1 + $num2;
      $product = $num1 * $num2;

      echo "<br> first number:".$num1;
      echo "<br>second number:".$num2;
      echo "<br>the sum is".$sum;
      echo "<br>the product is".$product; 
      echo '<div class="alert alert-success" role="alert">
      THE SUM IS '.$sum.'
    </div>';
    echo "<div class='alert alert-primary' role='alert'>
   PRODUCT IS ".$product."
  </div>";

    ?>

<p> the productwas <?=$product?> </p>
    <div class="alert alert-danger" role="alert">
      A simple primary alert—check it out!
    </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Value1</th>
            <th scope="col">value2</th>
            <th scope="col">Product</th>
            <th scope="col">sum</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?php echo "$num1"?></td>
            <td><?php echo "$num2"?></td>
            <td><?php echo "$product"?></td>
            <td><?php echo "$sum"?></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>eliud</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>the man</td>
          </tr>
        </tbody>
      </table>

        
    



</body>




</html>