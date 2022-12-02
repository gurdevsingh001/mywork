<?php
session_start();
if(isset($_SESSION['user']))
{
	$_SESSION['login'] = 1;
$user=$_SESSION['user'];
$id=$_SESSION['id'];
echo "Hi ".$user.' welcome,';
echo "<pre>";
//echo $id;
//echo $_SESSION['id'];
?>
<a href="logout.php?id=<?php echo $id;?>">Logout</a>
<?php
}
else{
header('Location: index.php');
}
?>

