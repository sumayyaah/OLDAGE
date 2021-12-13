<?php
session_start();
require("db.class.php");
$ob=new db_operations();
cap=$_POST['bed'];
$up="update availability set total=total+cap";
$up2="update availability set available=available+cap";
$st=$ob->db_write($up);
$st2=$ob->db_write($up2);
if(($st)&&($st2))
{


  ?>
  <script>
    alert("Updated");
    window.location='dashboard.php'
  </script>;
  <?php
  }
?>
