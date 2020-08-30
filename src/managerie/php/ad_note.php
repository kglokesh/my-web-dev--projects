<html>
<head>
    <style>
        body{background-color: darkviolet;
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: chartreuse;
    font-size: 20px;
        }  
        echo{
            color: #000;
        }
        a{
            color: red;
            font-size: 25px;
            background: #ffffff;
            font-family: algerian;
        }
        p{
            color: red;
            font-size: 25px;
            background: #ffffff;
            font-family: algerian;
        }
    </style>
</head>
    <body>
<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "aldb";

$conn = new mysqli($host, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$notices=$_POST ["notices"];

$sql ="INSERT INTO notice (notices) VALUES('$notices')";

if (mysqli_query($conn, $sql)) {
    echo "<a href=adfront.html>Your notice posted successfully</a><br/>";
    echo "<p><a href=no1.php>click here to check</a></p>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
    </body>
</html>