
<?php 
    $title = "Index"; // we need this para makita natu ang page title niya sa ibabaw
    include 'includes/header.php' 
?>
<!-- basic html -->
<h1>Hello World - PHP Primer</h1>
<br/>
<?php 
/* afdasf*/
//Printing to html using echo
    echo 'Hello PHP!';
    // purpose ani is mo second line siya before sa hello php
    echo '<br/>';
    echo 'second line';
    //if you want to break line, just type br before the text second line or before the echo name for display
    echo '<br/>';
    
//this name is stored somewhere
    $name = 'Trevoir Williams'; 
    $age = 21;
    echo $name;
    //this is if you want a header text
    //also if you want to call the name instead of typing it manually
    //note that the dollar name is called dynamic since it can be used to anywhere
    echo '<h1>My name is : '.$name.'</h1>';
    echo '<h1>My Age is : '.$age.'</h1>';
?>
    <button type="button" class="btn btn-dark">Click me!</button>
    <button type="button" class="btn btn-primary">Click me!</button>
    <button type="button" class="btn btn-success">Click me!</button>
<?php 
require 'includes/footer.php' ?>