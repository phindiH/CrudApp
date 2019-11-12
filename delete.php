<?php 
include 'db.php';

$id = (int)$_GET['taskid']; /* it can be $_GET['id'] and also change it in index.php*/



/*echo $id;*/
/*Create veriable SQL delete to function and go back to index page*/
$sql = "delete from tasks where id = '$id'";

// on success delete : redirect the page to original page using header() method
if($db->query($sql)){
	/*echo "done";*/
	header ('location: index.php');
}

/*or it can be 

$val = $db->query($sql);

if($val){
	header ('location: index.php');
}
*/

?>