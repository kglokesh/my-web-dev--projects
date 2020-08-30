<!DOCTYPE html> 
<html lang="en">
<head>
<style> 
a{
color:#cd1b71;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a,.dropbtn {
  display: inline-block;
  color:white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover,.dropdown:hover .dropbtn
{
  background-color: green;
}
li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: peachpuff;
  min-width: 150px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align:left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display:block;
}
img {
  max-width: 130%;
  height: auto;
  opacity: 0.8;
}
h2{
    color:red;
    background-color: cyan;
    background-color: blue;
    padding: 5px;
    border: 10px solid aqua;
    
}
h6{
    color:FFFF33;
}
h3{
    color: green;
    text-decoration: chartreuse;
    
}
h4{
    font-size: 25px;
    color: red;
}
.row{
                display:flex;
            }
.column{
                
                flex: 50%;
                padding:5px;
            }
            img{
                width: 800px;
                height: 560px;
                float:left;
                border-color: black;
            }
            .lnote{
                float:right;
                text-align:left;
                padding: 20px;
                border:10px solid yellow;
                background: gold;
                
            }
            p{
                font-size: 15px;
                font-family: sans-serif;
               
                
            }
            .r{
                background: cyan;
                color: blue,100%;
                background-color: cyan;
            }
</style>

</head>
<body bgcolor="66FF66">	
    <div class="container">
        
    </div>
<div id="content-topmenu-section" class="clearfix">  
<div style="float:left" class="container">
        <div class="header-cart">
</div>
</div>
&nbsp;
&nbsp;
</div>
    <div class="r"><h2 align="center">MENAGERIE <BR>Zoo and Animal Details</h2></div>
<ul>
  <li><a href="#Home">Home</a></li>
  <li><a href="page_one.html">TN Zoo</a></li>
  <li><a href="ani_info_display.php">Animal details</a></li>
  <li><a href="no2.html">Gallery</a></li>
  <li><a href="guinness.php">Guinness Record.</a></li>
  <li><a href="suggestion.php">Suggestions</a></li>
  <li class="dropdown">
  <a href="#" class="dropbtn">About</a>
  <div class="dropdown-content">
      <a href="abt_site.html">About this site</a>
  <a href="ad_login.html">admin</a>
  
  </div>
</li>
</ul>
<marquee bgcolor="cyan">TN zoo contain all the information about the zoo available in Tamilnadu</marquee>

<div class="row">
    <div class="column">
        
        
            <img class="mySlides" src="C:\Users\LOKESH\Downloads\zoo photos\gi.gif">
            <img class="mySlides" src="C:\Users\LOKESH\Downloads\zoo photos\gi1.gif">
            <img class="mySlides" src="C:\Users\LOKESH\Downloads\zoo photos\gi2.gif">
            <img class="mySlides" src="C:\Users\LOKESH\Downloads\zoo photos\gi3.gif">
            <img class="mySlides" src="C:\Users\LOKESH\Downloads\zoo photos\gi4.gif">
            <img class="mySlides" src="C:\Users\LOKESH\Downloads\zoo photos\gi5.gif">
   <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 3000);
            }
        </script>
</div>
    <div class="lnote" style="align:center" >
        <h4>Notification:</h4>
        <h3><u>This contain zoo instruction and notice in recent activity</u> </h3>
       <?php
$conn=mysqli_connect("localhost","root","","aldb");
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from notice order by ";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while ($rows=$result->fetch_assoc())
{
echo "<p> $rows[notices]</p>";
echo '<hr/>';
}

}
else
{
echo "No notice available...";
}
$conn->close();
?>
    </div>
</div>


</body>
</html>
