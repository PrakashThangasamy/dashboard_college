<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM new_user WHERE email = ? AND password = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $email, $password);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows === 1) {
    header("Location: ../../index.html");
    exit();
  } else {
    $error = "Email or password is incorrect";
    echo '<script>alert("'.$error.'"); window.location.href = "UserLogin.html";</script>';
    exit();
  }
  $stmt->close();
  $conn->close();
}
?>