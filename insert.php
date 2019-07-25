<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "languages_rating";

//database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$detail="INSERT INTO details (FirstName, MiddleName, LastName, email, sex, mobile_number, addres, city, stat, C, Cpp, Java, Python)
        VALUES ('$_POST[first_name]','$_POST[middle_name]','$_POST[last_name]','$_POST[email]', '$_POST[sex]','$_POST[phone_number]','$_POST[home_address]',
                '$_POST[city]','$_POST[states]','$_POST[optRadioC]','$_POST[optRadioCplus]','$_POST[optRadioJava]','$_POST[optRadioPython]')";


if(mysqli_query($conn, $detail)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $detail. " . mysqli_error($conn);
}
 
mysqli_close($conn);

?>