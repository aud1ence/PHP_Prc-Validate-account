

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validate Account</title>
</head>
<body>
<form method="post">
    <input type="text" name="input">
    <button>Check</button>
</form>
<?php
$data = $_POST['input'];
function validateAccount($data)
{
    $pattern = '/^[a-z0-9_]{6,}$/';
    if (preg_match($pattern, $data)) {
        echo "Account hop le";
    } else {
        echo "Account khong hop le";
    }
}

validateAccount($data);
?>
</body>
</html>
