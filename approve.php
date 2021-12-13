<?php
$id=$_GET['id'];
$ty=$_GET['ty']

require("db.class.php");
$ob=new db_operations();




$sel="update reg set status=1 where id='$id'";
$res2=$ob->db_write($sel);
if($res2)
{


	?>
	<script>
		alert("Approved Sussesfully");
		window.location='reqtable.php?id=<?php echo $ty;?>';
	</script>;
	<?php
	}
?>
