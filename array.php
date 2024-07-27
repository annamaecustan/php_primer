<?php 
    $title = "Array and Printouts";
    include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
    <?php 
        // a variable
        $num = 3;
        //an array
        //only one datatype , also called homogenous array
        $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,24,14,15,16,17,20,21);
        echo $numbers[5];
        echo "<p>$numbers[9]</p>";
        $size = count($numbers);
        echo "<p>Array Numbers is size: $size</p>";
        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>
<?php require 'includes/footer.php' ?>