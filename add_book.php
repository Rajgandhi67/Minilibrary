<?php
include "config.php";

if($_POST){
    $t = $_POST['title'];
    $a = $_POST['author'];
    mysqli_query($conn,"INSERT INTO books VALUES('','$t','$a')");
    $msg = "Book Added Successfully";
}
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
<h2>Add Book</h2>
<?php if(isset($msg)) echo $msg; ?>

<form method="POST">
<input name="title" placeholder="Book Title"><br><br>
<input name="author" placeholder="Author Name"><br><br>
<button>Add</button>
</form>

<a href="dashboard.php">Back</a>
</div>

</body>
</html>
