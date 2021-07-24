

<?php echo '<hr>'; echo "<h2>1st class?</h2>";?>


This is our SUPER amazing custom theme.

<?php echo '<hr>'; echo "<h2>7. PHP Functions</h2>";?>


<?php 
    echo 2 + 3; 
?>

<?php 
    function myFirstFunction(){
        echo 2 + 2;
    }
    myFirstFunction();
    myFirstFunction();
    myFirstFunction();
?>

<?php  
    function mySecondFunction() {
        echo "<p>Hello, this is my second function.<p>";
    }
    mySecondFunction();
    mySecondFunction();
?>

<?php echo '<hr>';?>


<?php 
    function greet($name, $color) {
        echo "<p>Hi, my name is $name and my favorite color is $color.</p>";
    }
    greet('Tony','Green');
    greet('Sally','Grey');
    greet('Cliff','White');
?>

<?php echo '<hr>';?>

<!-- Calls the name of the website -->
<h1><?php bloginfo('name'); ?></h1> 

<!-- Calls the tagline of the website -->
<p><?php bloginfo('description'); ?></p>

<?php echo '<hr>'; echo "<h2>8. PHP Arrays</h2>";?>

<!-- Creates variable -->
<?php  
    $myName = "Cliff"
?>

<!-- Calls the varialble above into a string -->
<p>Hi, my name is <?php echo $myName ?>.</p>


<!-- Creates an array for storing many names -->
<?php 
    $names = array('Brad','John','Jane','Meowsalot');
?>

<!-- Calls the array for Jane -->
<p>Hi, my name is <?php echo $names[0] ?>.</p>


<!-- This while loop will create a counter print all numbers all the way to 10.
<?php  
    $count = 1;

    while($count < 11){
        echo "<li>$count</li>";
        $count++;
    }

?> -->



<?php  
    // Resets the count to zero.
    $count = 0;

    while($count < count($names)) {
        // Prints a list of names
        echo "<li>Hi, my name is $names[$count] </li>";
        // Adds plus 1
        $count++; 
    }
?>

<?php echo '<hr>'; echo "<h2>9. The Famous Loop in WordPress</h2>";?>
