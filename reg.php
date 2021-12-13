<?php

  $i=0;
    require("db.class.php");
    $ob=new db_operations();
    /*$contact=$_POST['number'];*/
      /*$name=$_POST['name'];*/

  // $_SESSION['userid']

  $insertq="insert into reg(username,name,contact,house,street,city,district,pic,doc)values('$_POST[email]','$_POST[name]','$_POST[ph]','$_POST[house]','$_POST[street]','$_POST[city]','$_POST[district]','$_POST[pic]','$_POST[id]')";
  //  echo $insertq;
  $insertlog="insert into login values('$_POST[email]','$_POST[password]','$_POST[type]')";
  $insertstaff="insert into countm values('$_POST[email]',0)";

  $select="select * from login where username='$_POST[email]'";
  $ob=new db_operations();
  $selr=$ob->db_read($select);
  echo mysqli_num_rows($selr);
  if((mysqli_num_rows($selr))>0)
  {


    ?>
<script>
 alert("user already exists");
 window.location='index.html'
</script>;
<?php


  }
  if((mysqli_num_rows($selr))==0){
  $res=$ob->db_write($insertq);
  //echo $insertq;
  //echo $res;
  //echo $insertlog;
  if($res)
  {
    $res2=$ob->db_write($insertlog);
  }
  if(($res)&&($res2))
  {
    $ob->db_write($inserttest_part);
        if($_POST[type]=='d')
        {
      $ob->db_write($insertstaff);
    }
    ?>
   <script>
       alert("Succesfully Registered");
       window.location='index.html'
   </script>;
   <?php
  }

}
?>
