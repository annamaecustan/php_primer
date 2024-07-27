<?php 
    $title = "For Loop";
    include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
    <?php 
        //for loops
        for($count = 0; $count < 10; $count++){
            echo '<p> Hello Wprld</p>';
        }
        for($count = 0; $count < 10; $count++){
            //if you are using double qoute, you don't have to use concatenation
            //but there is problem ir not using concatenation, while p tag sa space function
            echo "<p>The Count is: $count </p>";
           
        }
    ?>
<?php require 'includes/footer.php' ?>