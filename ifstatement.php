<?php 
    $title = "Switch Statement";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php 
        $grade = 'C';
        switch($grade){
            case 'A':
                echo '<h2 style="color: green">you are a superstar!</h2>';
                //if it doesn't have a break, sigera siya og print
                break;
            case 'B':
                echo '<h2 style="color: blue">YOU DID WELL</h2>';
                break;
            default:
                echo '<h2 style="color: red">YOU HAVE FAILED......</h2>';
                break;
                //you can add more case statement just remeber to add deafult at last
        }
    ?>

<?php require 'includes/footer.php' ?>