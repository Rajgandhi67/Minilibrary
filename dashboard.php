<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
<h2>Library Dashboard</h2>

<p>Last Login:
<?php echo $_COOKIE['last_login'] ?? "First Time"; ?>
</p>

<a href="add_book.php">Add Book</a>
<a href="issue_book.php">Issue Book</a>
<a href="logout.php">Logout</a>
</div>

</body>
</html>
