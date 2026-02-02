<?php
session_start();
include "config.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $u = $_POST['username'];
    $p = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$u' AND password='$p'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)==1){
        $_SESSION['admin'] = $u;
        setcookie("last_login", date("d-m-Y H:i:s"), time()+3600);
        header("Location: dashboard.php");
    } else {
        $error = "Invalid Login";
    }
}
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
<h2>Admin Login</h2>
<?php if(isset($error)) echo $error; ?>

<form method="POST">
<input name="username" placeholder="Username"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>
<button>Login</button>
</form>
</div>

</body>
</html>
