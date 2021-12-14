<?php
include("./function.php");
include("./controlle.php");
include("./functionall.php");
?>

<hr>
<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width. initial-scale=1.0">
   <title>Prototype(Farstrup Furniture A/S)</title>
   <link rel = "stylesheet" href="style.css">
</head>
<body>
  <h1> add what you want to by</h1>
  <h2> put the product number if you want to add to cart</h2>
    <form action= "function.php" method="get"/>
    <input type = "Lænerstole" name = "choice[]" eksist = "8900"/>Nobel 8900, Price: 14.995 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "8920"/>Nobel 8920, Price:15.595 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "6360"/>Munin 6360, Price: 27.545 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "6510"/>Bear R 6510, Price: 17.450 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "6010"/>Cantate 6010, Price:14.445 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "5900"/>Plus 5900, Price:11.260 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "5980"/>Plus 5980, Price:15.550 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "5060"/>Plus 5060, Price:17.110 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "5197"/>Casa 5197, Price:11.480 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "7900"/>Edge 7900, Price: 11.260 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "5411"/>Scala 5411, Price:9.975 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "5391"/>Senator 5390 & 5391, Price: 8.965 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "182"/>Armstol 182, Price: 5180 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "183"/>Gyngestol 183, Price:5.760 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "5040"/>5040 Multiplus, Price:32.660 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "6311"/> Home-Line 6311, Price: 23.270 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "6341"/>Home-Line 6341, Price:27.700 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "5463"/>Fastoflex 5463, Price:12.810 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "2550"/> 2550 Stag W, Price:4.370 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "2500 "/>2500 Stag S, Price: 4.215 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "210"/>No. 210r, Price:  3.320 Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "2411"/>Scala 2411, Price: 4.420Kr. <br/>
    <input type = "Lænerstole" name = "choice[]" eksist = "182"/>Armstol 182, Price:5180Kr. <br/> 
    <input type="submit" eksist="order"/>
</form>
</body>
<body bgcolor="#FF00000">
    <form method="post">
        <input type="text" name="product">
        <butto type="submit">Add coment</button>
        <form>
    <ul>
      <?php foreach(getFromFile() as $i => $product) { ?>
          <li><?php echo $product;?>
       <a href="?i=<?php echo $i; ?>">delete</a>
       </li>
          <?php } print_r($_GET);
          ?>
<style>
  p { 
    text-align: center;
  }
  img { 
   
    position: relative;
    top: -5700px;
    width: 170px;
    border-radius: 40PX;
    float: right;
    height: 177px;
  }
  </style>
  <div class= "container">
    <div class= "glass">
 <img src="images/pp.jpeg", style = "top:-5700px">
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
 <img src="images/Multiplus5040.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Homeline 6311.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Homeline6341.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Fastoflex 5463.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Stag W.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/StagS.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/No210.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Scala 5413.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Scala 2411.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Armstol 182.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Plus 5031.png",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Scala 5413.jpeg",>
 </div>
 <div class= "container">
    <div class= "glass">
 <img src="images/Senator5373.jpeg",>
</div>
</head>
    <ul>
 </body>
 </html>





        


    
