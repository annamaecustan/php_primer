<?php 
    $title = "PHP String Manipulation";
    include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
    <?php 
        $phrase1 = "Student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "trevoir williams";
        //echo $phrase2;
        //echo $phrase1;
        //if you'll put them together it is called concatenation
        echo $phrase1 . ", named tiffany, ".$phrase2;
        echo '<br/>';
        echo '<hr/>';
        //string transformation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
        echo 'Upercase: '. strtoupper($name).'<br/>';
        echo 'Upercase: '. strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<hr/>'; //hr means lines
        echo 'Repeat String: ' . str_repeat('a',10) .'<br/>';
        echo 'Repeat String: ' . strtoupper(str_repeat('a',10)) .'<br/>';
        echo 'Get a Substring: ' . substr($name, 5, 10) .'<br/>'; //para kuhaon nimu ang words na gusto nimu sugdan
        echo 'Get position of String: ' . strpos($name,'w') .'<br/>';
        //returns null
        echo 'Find Character "R": ' . strchr($name,'R') .'<br/>';
        echo 'Find Character "r": ' . strchr($name,'r') .'<br/>';
        echo 'Find Character "s": ' . strchr($name,'s') .'<br/>';
        echo 'Find Character "e": ' . strchr($name,'e') .'<br/>';

        echo 'Find Length of String: ' . strlen($name) .'<br/>';

        echo 'Without Trim: ' . "A" . " B C D " . "E" . '<br/>';
        echo 'Trim Spaces on both sides: ' . "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . '<br/>';

        echo ' Replace String with another: ' . str_replace("stand", "sit", $phrase2 ) .'<br/>';

        
    ?>
<?php require 'includes/footer.php' ?>