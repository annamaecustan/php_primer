<?php 
    $title = "Functions";
    include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
    <?php
        /*Defining a Function */
        function writeMessage(){
            echo "You are a really good person <br/>";
        }
        // Calling a Function
        writeMessage();
        echo "<hr/>";
        writeMessage();

        /* functions with parameters */

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            $num2 = $num2 + 1; //if nag plus 1 ka, ang 20 mahimong 21, not replace to 1
            echo "The dum of $num1 and $num2 is: $sum <br/>";
        }

        function changeNum(&$num){ //& is important para ma change judt
            $num = $num + 10;
            //can be type as $num+= 10;
        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $num = 500;
        addFunction(10,20);
        addFunction(10, $num);
        addFunction('10',"50");

        changeNum($num);
        echo $num . '<br/>';

        $return_value = returnProduct(10,200);
        echo $return_value . '<br/>';
        
    ?>
<?php require 'includes/footer.php' ?>