<?php
$name = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$telephoneNumber = $_POST['telephoneNumber'];
$extraSupport = $_POST['extraSupport'];
$GCSEs = $_POST['GCSEs'];
$ALevels = $_POST['ALevels'];
$prevEducation = $_POST['prevEducation'];
$CGrade = $_POST['CGrade'];
$courseLevel = $_POST['courseLevel'];
$courseApplication = $_POST['courseApplication'];




$conn = new mysqli('localhost','root','','nptc');
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
} else{
$stmt = $conn->prepare("insert into request(name, lname, email,DOB, gender, nationality, telephoneNumber, extraSupport, GCSEs, ALevels, prevEducation, CGrade, courseLevel, courseApplication)
values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssissisiissss",$name,$lname,$email,$DOB,$gender,$nationality,$telephoneNumber,$extraSupport,$GCSEs,$ALevels,$prevEducation,$CGrade,$courseLevel,$courseApplication);
$stmt->execute();
$stmt->close();
$conn->close();
}


include ("Success.html");


?>
