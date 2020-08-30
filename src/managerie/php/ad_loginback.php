<html>
<head>
    <style>
        body{background-color:greenyellow;
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%,-50%);
        }  
    </style>
</head>
    <body>
<?php
//before running add credentials in cofigs.php
$configs = include('config.php');

$conn = new mysqli($configs->host,$configs->username,$configs->pass,$configs->database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username=$_POST["username"];
$password=$_POST["password"];

$sql ="select * from adlogin where username='$username' && password='$password'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count>0)
{
    header("location:../html/adfront.html");
    
}
else {
    echo "Incorrect username or password";
}

mysqli_close($conn);
?>
    </body>
</html>