








<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="zxx"> <!--<![endif]-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="stock stars.com">


  
  <title>Stock Stars</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font.v-2/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  

</head>
<style>
    .hero-area{
 background-image: url('images/slider/bg.jpg');
    }
    
 </style>


<body id="body"> 
<?php include 'particle/header2.php' ?>

<?php


    include 'particle/_dbconn.php';

    $sql="select * from expert";
    $result = mysqli_query($conn, $sql); 
    $rec = mysqli_fetch_assoc($result);
  
  
  while($rec = mysqli_fetch_assoc($result)){


    

    $name=$rec['FName'];
    $dec=$rec['Expertise'];
  
    echo '<div class="card" style="width: 18rem;">
      <img src="images/client-logo/clients-1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$name.'</h5>
        <p class="card-text">'.$dec.'</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>';
  }
  
  
  
  
  
?>

</body>


</html>
