<?php
include 'config.php';

$state = $_POST["state"];
$district = $_POST["district"];
$societyType = $_POST["societyType"];
$consumerName = $_POST["consumerName"];
$address = $_POST["address"];
$panNo = $_POST["panNo"];
$tanNo = $_POST["tanNo"];
$authorizedPerson = $_POST["authorizedPerson"];
$designation = $_POST["designation"];
$mobileNumber = $_POST["mobileNumber"];
$email = $_POST["email"];
$serviceTaxNo = $_POST["serviceTaxNo"];
$password = $_POST["password"];
$cpass = $_POST["cpass"];

// Insert the data into the database
$sql = "INSERT INTO new_user(State, District, Societytype, ConsumerNo, Address, PANNo, TANNo, AuthorizedPerson, Designation, Mobile, Email, ServiceTax, Password, Cpassword) VALUES ('$state', '$district', '$societyType', '$consumerName', '$address', '$panNo', '$tanNo', '$authorizedPerson', '$designation', '$mobileNumber', '$email', '$serviceTaxNo', '$password', '$cpass')";

if ($conn->query($sql) === TRUE) {
  $conn->close();
  echo '<script>alert("Registered! Please login to continue."); window.location.href = "UserLogin.html";</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>