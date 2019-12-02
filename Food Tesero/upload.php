<?php
            $dbhost = 'localhost';
            $dbuser = 'Ajay';
            $dbpass = '';
            $db='ajay';
            $conn = mysqli_connect($dbhost, 'Ajay', $dbpass,$db);

               $rname = $_POST['rname'];
               $ing = $_POST['ing'];
               $dir = $_POST['dir'];
               //$image = addslashes(file_get_contents($_FILES['images']['tmp_name']));
               echo $_FILES;
               $chin = isset($_POST['chin'])? 1 : 0;
               $soth = isset($_POST['soth'])? 1 : 0;
               $nrth = isset($_POST['nrth'])? 1 : 0;
               $cont = isset($_POST['cont'])? 1 : 0;
                $qry="INSERT INTO `food`(`name`, `ingredients`, `directions`, `image`, `CHINESE`, `South Indian`, `North Indian`, `Continental`) VALUES ('$rname','$ing','$dir','10101',$chin,$soth,$nrth,$cont)";
                $result=mysqli_query($conn,$qry);
                if($result)
                {
                echo "<script type='text/javascript'>alert('Success');</script>";
                echo "<script> location.href='home.php'; </script>";

                }
                else
                {
                  echo "<script type='text/javascript'>alert('Failiure');</script>";
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  echo("Error description: " . mysqli_error($conn));

                }                
?>