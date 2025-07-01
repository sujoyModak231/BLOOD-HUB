<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    
   
    $file = 'blood donors.xlsx'; 
    $fp = fopen($file, 'a');
    
    
    fwrite($fp, "$name,$email\n");
    
    
    fclose($fp);
    
    echo "Data submitted successfully!";
} else {
    echo "Error: Method not allowed.";
}
?>
