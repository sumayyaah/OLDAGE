<?php
session_start();

$id=$_SESSION['id'];
$ty=$_SESSION['type'];

require("db.class.php");
$ob=new db_operations();




$sel="update reg set status=2 where id='$id'";
$reas="insert into rejected values('$id','$_POST[rejection]')";
$res2=$ob->db_write($sel);
$res3=$ob->db_write($reas);
if(($res2)&&($res3))
{


	?>
	<script>
		alert("Application Rejected");
		window.location='reqtable.php?id=<?php echo $ty;?>';
	</script>;
	<?php
	}
?>
