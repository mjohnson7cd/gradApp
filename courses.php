<html>

        <h1>Hello <?php echo test_input($_POST["fname"]) . " " . test_input($_POST["lname"]); ?>!<br></h1>

        <form action="essay.php" method="post">

            <h3>Change Name:</h3>

            <label for="fname">First Name: </label>
            <input type="text" id="fname" name="fname" value=<?php echo test_input($_POST["fname"]) ?>><br>

            <label for="lname">Last Name: </label>
            <input type="text" id="lname" name="lname" value=<?php echo test_input($_POST["lname"]) ?>><br>

            <h3>Completed Courses: </h3>

            <input type="checkbox" id="OOP" name="OOP" value="Object-oriented programming">
            <label for="OOP"> Object-oriented programming</label><br>
            
            <input type="checkbox" id="SAD" name="SAD" value="Systems analysis & design">
            <label for="SAD"> Systems analysis & design</label><br>

            <input type="checkbox" id="AP" name="AP" value="Advanced programming">
            <label for="AP"> Advanced programming</label><br>
            
            <input type="checkbox" id="IN" name="IN" value="Introduction to Networking">
            <label for="IN"> Introduction to Networking</label><br>

            <input type="checkbox" id="ICS" name="ICS" value="Introduction to Computer Security">
            <label for="ICS"> Introduction to Computer Security</label><br><br>
            
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
