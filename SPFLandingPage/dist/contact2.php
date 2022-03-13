<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<?php
require_once("contact.php");
    if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email'])&& $_POST['email'] !=''))
    {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $comments = $conn->real_escape_string($_POST['msg']);
    $sql="INSERT INTO form (name, email, phone, msg) VALUES ('".$name."','".$email."', '".$phone."', '".$comments."')";
    if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Mulțumesc! Vei fi contactat în curând!");'; 
        echo 'window.location.href = "index.html";';
        echo '</script>';
    }
    }
    else
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Vă rog introduceți-vă datele corect!");'; 
        echo 'window.location.href = "index.html";';
        echo '</script>';
    }
?>
    <?php
        include("index.html");
    ?>
</body>
</html>

