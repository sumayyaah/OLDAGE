<?php
    session_start();
    require("db.class.php");
    $ob=new db_operations();
    /*$contact=$_POST['number'];*/
      /*$name=$_POST['name'];*/

   $email=$_POST['username'];
   $_SESSION['userid']=$_POST['username'];
    $insert1= "select * from login where username='$email'";

    $resr=$ob->db_read($insert1);
        if(mysqli_num_rows($resr)==0)
        {


          ?>
          <script>
            alert("Can't Find User");
            window.location='index.html'
          </script>;
          <?php
          }
          else
          {

              $result=mysqli_fetch_array($resr);
       if($result['password']==$_POST['password'])
       {

                 if($result['type']=='A')
               {
       ?>
       <script>

         window.location='admin/BS3/dashboard.php'
       </script>;
       <?php
     }

        else if($result['type']=='g'){
          ?>
          <script>

            window.location='admin/BS3/guardiandashboard.php'
          </script>;
          <?php
        }




        else if($result['type']=='d'){
          ?>
          <script>

            window.location='admin/BS3/staffdashboard.php'
          </script>;
          <?php
        }


     }
       else {
         ?>
         <script>
          alert("Invalid UserName or Password");
          $message="invalid Username or password";
           window.location='index.html'
         </script>;
         <?php
       }

            ?>
            <script>

              window.location='profile.php'
            </script>;
            <?php
          }




$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
?>
