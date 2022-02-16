<html> 

    <h1>Hello <?php echo test_input($_POST["fname"]) . " " . test_input($_POST["lname"]); ?>!<br></h1>
    <h2>Confirmation: </h2>

    <form action="results.php" method="post">

        <h3>Name:</h3>

        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname" value=<?php echo test_input($_POST["fname"]) ?>><br>

        <label for="lname">Last Name: </label>
        <input type="text" id="lname" name="lname" value=<?php echo test_input($_POST["lname"]) ?>><br><br>



    <h3>Courses: </h3>

    <table>
        <?php 

            $i = 1;
            foreach ($_POST as $key => $value) {
                if($key != 'fname' && $key != "lname" && $key != "essay"){
                    echo "<tr>";
                    echo "<td>";
                    echo "Course " . $i. ':';
                    echo "</td>";
                    echo "<td>";
                    echo $value;
                    echo "</td>";
                    echo "</tr>";
                    $i++;

                    echo "<input type='hidden' id='".$key."' name='".$key."' value='".$value."'>";

                }
            }
        ?>
    </table>

    <h3>Essay: </h3>

    <textarea name="essay" cols="75" rows="50"><?php echo test_input($_POST["essay"]) ?></textarea><br><br>

    <input type="submit" value="Confirm">

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

