<?php
session_start();
if (!empty($_SESSION['error'] )) {
    foreach ($_SESSION['error'] as $item )
    {
        echo $item;
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Auth form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container mt-4">
    <?php
    if ($_SESSION['user'] == ''):
    ?>
    <div class="row">
        <div class="col">
            <form action="validation-form/check.php" method="post">
                <h1>Registration form</h1>
                <input type="text" class="form-control" name="login" id="login"
                       placeholder="Enter login">
                <br>
                <input type="password" class="password" name="pass" id="pass"
                       placeholder="Enter pass">
                <br>
                <button class="btn btn-success" type="submit">Submit</button>
                <br>
            </form>
        </div>
        <div class="row">
            <div class="col">
                <form action="validation-form/auth.php" method="post">
                    <h1>Auth form</h1>
                    <input type="text" class="form-control" name="login" id="login"
                           placeholder="Enter login">
                    <br>
                    <input type="password" class="password" name="pass" id="pass"
                           placeholder="Enter pass">
                    <br>
                    <button class="btn btn-success" type="submit">Auth</button>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
    <p>Привет. Для выхода нажми здесь  <?
        $_SESSION['user']['login'] ?> <a href="validation-form/exit.php">Выход</a></p>
<?php endif;?>
</body>
</html>
