<?php
function onSave() {
    saveToFile($_POST['product']);
}
function saveToFile($product){
    $productsArray = getFromFile();
    $productsArray[] = $product;
    $jsonProduct = json_encode ($productsArray);
    file_put_contents("./product.json", $jsonProduct);

}
function getFromFile() {
    $jsonProduct = file_get_contents("./product.json");
    $productsArray = json_decode($jsonProduct, true);
    return $productsArray;

}
function deleteItem($index) {
    $productsArray = getFromFile();
    unset($productsArray[$index]);
    $jsonProduct = json_encode ($productsArray);

    file_put_contents("./product.json", $jsonProduct);
    header("location: index.php");
    
}
?>
<?php
if(isset($_GET["choice"])) {
    $stole=$_GET["choice"];
    $c= count($stole);
    $price= 0.0;

    for($i=0;$i<$c;$i++) {
        if($stole[$i]==8900){
            $price=$price+14.995;
            echo "du har bestilt Nobel 8900<br>"; 
        }
        if($stole[$i]==8920){
            $price=$price+5.595;
            echo "du har bestilt Nobel 8920<br>"; 
        } 
        if($stole[$i]==6360){
            $price=$price+27.545 ;
            echo "du har bestilt Munin 6360<br>"; 
        }
        if($stole[$i]==6510){
            $price=$price+17.450;
            echo "du har bestilt Bear R 6510<br>"; 
        }
        if($stole[$i]==6010){
            $price=$price+14.445;
            echo "du har bestilt Cantate 6010<br>"; 
        }
        if($stole[$i]==5900){
            $price=$price+11.260;
            echo "du har bestilt Plus 5900<br>"; 
        }
        if($stole[$i]==5980){
            $price=$price+15.550;
            echo "du har bestilt Plus 5980<br>"; 
        }
        if($stole[$i]==5060){
            $price=$price+17.110;
            echo "du har bestilt Plus 5060<br>"; 
        }
        if($stole[$i]==5197){
            $price=$price+11.480 ;
            echo "du har bestilt Casa 5197<br>"; 
        }
        if($stole[$i]==7900){
            $price=$price+11.260;
            echo "du har bestilt Edge 7900<br>"; 
        }
        if($stole[$i]==5411) {
            $price=$price+9.975;
            echo "du har bestilt Scala 5411<br>"; 
        }
        if($stole[$i]==5391){
            $price=$price+8.965;
            echo "du har bestilt Senator 5390 & 5391<br>"; 
        }
        if($stole[$i]==182){
            $price=$price+5180;
            echo "du har bestilt Armstol 182<br>"; 
        }
        if($stole[$i]==183){
            $price=$price+5.760;
            echo "du har bestilt Gyngestol 183<br>"; 
        }
        if($stole[$i]==5040){
            $price=$price+32.660 ;
            echo "du har bestilt 5040 Multiplus<br>"; 
        }
        if($stole[$i]==6311){
            $price=$price+23.270;
            echo "du har bestilt Home-Line 6311<br>"; 
        }
        if($stole[$i]==6341){
            $price=$price+27.700;
            echo "du har bestilt Home-Line 6341<br>"; 
        }
        if($stole[$i]==5463){
            $price=$price+12.810 ;
            echo "du har bestilt Fastoflex 5463<br>"; 
        }
        if($stole[$i]==2550 ){
            $price=$price+4.370;
            echo "du har bestilt 2550 Stag W<br>"; 
        }
        if($stole[$i]==2500){
            $price=$price+4.215;
            echo "du har bestilt 2500 Stag S<br>"; 
        }
        if($stole[$i]==210){
            $price=$price+3.320;
            echo "du har bestiltNo. 210r<br>"; 
        }
        if($stole[$i]== 2411){
            $price=$price+4.420;
            echo "du har bestilt Scala 2411<br>"; 
        }
        if($stole[$i]==182){
            $price=$price+5.180;
            echo "du har bestilt Armstol 182<br>"; 
        }


    }
    echo "Total Price is: " . $price. "<br>";
}

else{

    echo "kurvn er tømt venlig valg vare";
}
