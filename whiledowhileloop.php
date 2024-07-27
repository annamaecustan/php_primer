<?php 
    $title = "While Loop";
    include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1> 
    <!-- dira na part is dili na ntu need mag butang og title mismo since na declare na natu sa ibabaw -->
    <?php 
        $grade = 0;
        // THIS IS INFNITE LOOP
       // while($grade < 10){
            //echo '<p> I AM LESS THAN 10!</p>';
       // }
       //PRE-CONDITION
       while($grade < 10){
            echo '<p> I AM LESS THAN 10!</p>';
            $grade++; //needed this para dili infinite loop just until ma reach niya ang statement
       }
       echo 'EXIT LOOP!';
    ?>
    <h1>Do-While Loop</h1>
    <?php 
        //post-condition loop
        $grade = 0; //you can reset the value here but ika 10 na siya mag loop/print
        do{
            echo '<p> I AM DO WHILE LOOP</p>';
            $grade++;
        }while($grade < 10);
        echo 'EXIT LOOP!';
    ?>
<?php require 'includes/footer.php' ?>