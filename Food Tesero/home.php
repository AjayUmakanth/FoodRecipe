
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Food Tesero</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  </head>


  <body  data-offset="60">




      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header col-sm-4">
            <a class="navbar-brand" href="home.php">Food Tesoro</a>
		             </div>
             <div class="collapse navbar-collapse" id="custom-collapse">
           <ul class="nav navbar-nav navbar-right">
              <li><a href="#news">All</a></li>            
              <li><a href="#news">North Indian</a></li>
              <li><a href="#contact">South Indian</a></li>
              <li><a href="#contact">Continental</a></li>
              <li><a href="#contact">Chinese</a></li>
              <li style="float:right;background-color:#4CAF50;" ><a href="upload.html">Upload</a></li>
            </ul>
         </div>
        </div>
      </nav>



   <section id="intro" data-speed="6" data-type="background" data-background="image/13.jpg">
     <div class="container-wrapper">
     </div>
   </section>




           <section class="module-extra-small bg-dark align=text-center"><h4 align="center">End to Your Cravings</h4></section>



         <div class="main showcase-page">
           <section class="module-medium" id="demos">
             <div class="container">
               <div class="row multi-columns-row">


                 <div class="col-md-4 col-sm-6 col-xs-12">
                   <a class="content-box" href="paneer.html">
                     <div class="content-box-image">
                       <img width=660px height=660px src="image/paneer-butter-masala.jpg" >
                        </div>
                          <button class="accordion">Paneer Butter Masala</button>

                   </a>
                 </div>

                 
<?php
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $db='ajay';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            $sql = "SELECT * FROM food";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc())
            {
                 echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                 echo '<a class="content-box">';
                 echo '<div class="content-box-image">';
                 echo '<img  width=660px height=660px src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                 echo '</div>';
                 echo '</a>';
                 echo '<button onClick="myFunction('.$row['ID'].')" class="accordion">'.$row['name'].'</button>';
                 echo '</div>';
            }
?>
                 <div class="col-md-4 col-sm-6 col-xs-12">
                   <a class="content-box" href="gobi.html">
                     <div class="content-box-image">
                       <img width=660px height=660px src="image/gobi.jpg" >
                        </div>
                          <button class="accordion">Gobi Manchurian</button>

                   </a>
                 </div>

                 <div class="col-md-4 col-sm-6 col-xs-12">
                   <a class="content-box" href="chicken-fry.html">
                     <div class="content-box-image">
                       <img width=660px height=660px src="image/chicken-fry.jpg" >
                        </div>
                          <button class="accordion">Chicken Fry</button>

                   </a>
                 </div>

                 <div class="col-md-4 col-sm-6 col-xs-12">
                   <a class="content-box" href="kane-fish-fry.html">
                     <div class="content-box-image">
                       <img width=660px height=660px src="image/Kane-Fish-Fry.jpg" >
                        </div>
                          <button class="accordion">Kane Fish Fry</button>

                   </a>
                 </div>

                 <div class="col-md-4 col-sm-6 col-xs-12">
                   <a class="content-box" href="chicken-biriyani.html">
                     <div class="content-box-image">
                       <img width=660px height=660px src="image/chicken-biriyani.jpeg" >
                        </div>
                          <button class="accordion">Chicken Biriyani</button>

                   </a>
                 </div>
            </div>
          </div>
         </section>
      </div>


      <div class="copyright py-4 text-center text-white module-extra-small bg-dark" >
        <div class="container">
         <small>Kobis &copy;  2018</small>
        </div>
      </div>


</body>



<button onclick="topFunction()" id="myBtn" title="Go to top">
  <i class="fa fa-angle-double-up"></i></button>



<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

function myFunction(id)
{
    alert(id);
}
</script>


<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

  </body>
</html>
