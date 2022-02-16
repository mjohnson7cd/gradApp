<html> 

    <h1>Hello <?php echo test_input($_POST["fname"]) . " " . test_input($_POST["lname"]); ?>!<br></h1>

    <form action="confirm.php" method="post">

        <h3>Change Name:</h3>

        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname" value=<?php echo test_input($_POST["fname"]) ?>><br>

        <label for="lname">Last Name: </label>
        <input type="text" id="lname" name="lname" value=<?php echo test_input($_POST["lname"]) ?>><br><br>

        <h3>Essay: </h3>

        <textarea name="essay" cols="75" rows="50"></textarea><br><br>


        <?php
            foreach ($_POST as $key => $value) {
                if($key != 'fname' && $key != "lname"){
                    echo "<input type='hidden' id='".$key."' name='".$key."' value='".test_input($value)."'>";
                    
                }
            }
        ?>

        <input type="submit" value="Submit">

    </form>

</html>

<?php 
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>