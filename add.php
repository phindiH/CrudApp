<?php 

include 'db.php';

if(isset($_POST['add'])){

$name = htmlspecialchars($_POST['task']); /*htmlspecialchars - Used to prevent any sql injections*/

$sql = "insert into tasks (name) values ('$name')";

$val = $db->query($sql);

if ($val){
	/*echo "<h1>Succefuly added</h1>";*/
	/*When data is inseted the bottom code will take you to the indesx page not the succesful added page*/
	header('location: index.php');

}
}
?>