<?php
if(isset($_POST["product"])){
    onSave();

}
if(isset($_GET['i'])) {
    deleteItem($_GET['i']);
}
?>
