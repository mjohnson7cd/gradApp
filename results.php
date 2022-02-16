<html></html>
<?php

    if (admit()){
        echo "<h1>Congratulations " . test_input($_POST["fname"]) . " " .  test_input($_POST["lname"]) . "!</h1>"; 
        echo "You are accepted for an phone interview!";
    } else {
        echo "<h1>" . test_input($_POST["fname"]) . " " .  test_input($_POST["lname"]) . ","; 
        echo "Sorry, your application was rejected.";
    }
     
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function admit() {

        foreach (explode(" ", $_POST["essay"]) as $word){
            if (strtolower($word) == "honors"){
                $honors = True;
            }
        }
    
        $count = 0;
        foreach ($_POST as $key) {
            
            if($key != 'fname' && $key != "lname" && $key != "essay"){
                $count++;
            }
        }
        
        if (($count/5.0) >= .50){
            $classesCompleted = True;
        }

        if ($honors && $classesCompleted){
            return True;
        } else {
            return False;
        }
    }
?>
