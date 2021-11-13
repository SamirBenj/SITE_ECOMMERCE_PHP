<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profile</title>
</head>
<body>
    <?php session_start() ?>
    <h2>Bonjour <?php echo $_SESSION['user_email'] ?> </h2> 

<!-- </body>
</html>