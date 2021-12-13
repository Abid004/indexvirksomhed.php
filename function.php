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