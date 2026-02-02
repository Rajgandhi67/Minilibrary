<?php
include "config.php";

if($_POST){
    $s = $_POST['student'];
    $b = $_POST['book'];
    $d = date("Y-m-d");

    mysqli_query($conn,"INSERT INTO issue_books VALUES('','$s','$b','$d')");
    $msg = "Book Issued Successfully";
}
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
<h2>Issue Book</h2>
<?php if(isset($msg)) echo $msg; ?>

<form method="POST">
<input name="student" placeholder="Student Name"><br><br>
<input name="book" placeholder="Book Title"><br><br>
<button>Issue</button>
</form>

<a href="dashboard.php">Back</a>
</div>

</body>
</html>
