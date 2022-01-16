<?php
session_start();
if (isset($_POST['next1'])) {
    $_SESSION['twitter'] = $_POST['twitter'];
    $_SESSION['facebook'] = $_POST['facebook'];
    $_SESSION['gplus'] = $_POST['gplus'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: #333;
            font-size: 14px;
            background-color: #dadada;
            padding: 100px;
        }
    </style>

<body>
    <h4>Here is what you have entered.</h4><br />
    <p>Email: <?php echo $_SESSION['email']; ?> </p>
    <p>Google Plus: <?php echo $_SESSION['gplus']; ?></p>
    <p>Twitter: <?php echo $_SESSION['twitter']; ?></p>
    <p>Facebook: <?php echo $_SESSION['facebook']; ?></p>
</body>

</html>