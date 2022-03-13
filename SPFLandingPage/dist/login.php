<?php

session_start();

include("conexiune_db.php");
include("check.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = $_POST['username'];
  $parola = $_POST['parola'];

  if (!empty($username) && !empty($parola)) {

    $query = "select * from users where user_name = '$username' limit 1";
    $result = mysqli_query($con, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {

        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['password'] === $parola) {

          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: index.php");
          die;
        }
      }
    }

    echo 'Parola sau username-ul este invalid!';
  } else {
    echo 'Te rog să completezi toate câmpurile!';
  }
}

?>
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style1.css">
  <title>Formular De Logare</title>
</head>

<body>
  <div id="form" class="contact-form">
    <form method='POST'>
      <h1>Formular De Logare</h1>
      <div class="textb">
        <label>Nume de utilizator :</label>
        <input type="text" name="username" id="text" value="" placeholder="Enter Your Username" required>
      </div>

      <div class="textb">
        <label>Parola :</label>
        <input type="password" name="parola" it="text" value="" placeholder="Enter Your password" required>
      </div>
      <input class="btn" id="button" type="submit" value="Login">
      <br><br>
      <a href="signup.php"> Nu ai un cont? Înregistrează-te!</a>
      <br><a href="index.php">Înapoi acasă</a>
    </form>
  </div>
</body>

</html>