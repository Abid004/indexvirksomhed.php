<?php
include("./function.php");
include("./controlle.php");
?>
<hr>
<!DOCTYPE html>
</html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width. initial-scale=1.0">
        <title>Prototype(Farstrup Furniture A/S)</title>
        <link rel = "stylesheet" href="style.css">
</head>
<style>
  p { 
    text-align: center;
  }
  img { 
   
    position: relative;
    top: -1950px;
    width: 140px;
    border-radius: 40PX;
    float: right;
    height: 125px;
  }
  </style>
  <div class= "container">
    <div class= "glass">
 <img src="images/pp.jpeg", style = "top:-1950px">
</div>
<div class= "container">
    <div class= "glass">
 <img src="images/aa.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/ss.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/bear 6510.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Cantate 6000.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Cantate 6010.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/plus 5900.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Plus5980.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Plus 5060.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Casa5197.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/edge 7900.jpeg",> 
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/scala 5411.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Senator5390&5391.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Armstol182.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Gyngestol183.jpeg",>
 </div>
<body bgcolor="#008000">
  <form method="post">
    <input type="text" name="product">
    <butto type="submit">Add</button>

  <form>


  <ul>
    <?php foreach(getFromFile() as $i => $product) { ?>
        <li><?php echo $product;?>
        <a href="?i=<?php echo $i; ?>">delete</a>
        </li>
          <?php } print_r($_GET);
          ?>
  <ul>
 </body>
 </html>





        


    
