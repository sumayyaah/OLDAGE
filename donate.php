<?php


require("db.class.php");
$ob=new db_operations();



$d3=date('d/m/y');
$sel="insert into donation(name,email,ph,item,quantity,date,status)values('$_POST[name]','$_POST[email]','$_POST[ph]','$_POST[item]',$_POST[q],'$d3',0)";
$res2=$ob->db_write($sel);
if($res2)
{


	?>
	<script>
		alert("Registered");
		window.location='index.html';
	</script>;
	<?php
	}
?>
