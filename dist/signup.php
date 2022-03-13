<?php
session_start();

include("conexiune_db.php");
include("check.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = $_POST['username'];
  $parola = $_POST['parola'];

  if (!empty($username) && !empty($parola)) {
echo "aici";
    $user_id = random_num(20);
    $query = "insert into users(user_id,user_name,password) values ('$user_id','$username','$parola')";

    mysqli_query($con, $query);

    header("Location: login.php");
    die;
  } else {
    echo '
		<script>
			 setTimeout( alert("Te rog să completezi toate câmpurile!"), 5000);
			</script>
	';
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
  <title>Formular De Înregistrare</title>
</head>

<body>
  <div id="form" class="contact-form">
    <form method='POST'>
      <h1>Formular De Înregistrare</h1>
      <div class="textb">
        <label>Nume de utilizator :</label>
        <input type="text" name="username" id="text" value="" placeholder="Enter Your Username" required>
      </div>

      <div class="textb">
        <label>Parola :</label>
        <input type="password" name="parola" it="text" value="" placeholder="Enter Your password" required>
      </div>
      <input class="btn" id="button" type="submit" value="Signup">
      <br><br>
      <a href="login.php">Ai un cont deja? Conectează-te!</a>
      <br>
      <a href="index.php">Înapoi acasă</a>
    </form>
  </div>
</body>

</html>