<?php
function view($name)
{
    include("./src/Views/$name.view.php");
}
view("index");
?>


