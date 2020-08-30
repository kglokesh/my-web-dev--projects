<html>
    <head>
        <title>
            suggestion show
        </title>
        <style>
            body{
                background: blueviolet;
                color: white;
                font-family:serif;
                
            }
            table{
                align-content: center;
                border: 2px solid aqua;
                padding: 5px;
            }
            th{
                padding: 10px;
                font-size: 25px;
            }
            td{
                padding: 10px;
                font-size: 20;
            }
            h1{
                text-align: center;
                border: 2px solid aqua;
            }
            
            
        </style>
    </head>
    <body>
        <h1>User suggestion</h1>
        <table border="2" align="center">
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>sugges</th>
            </tr>
            <?php
$conn=mysqli_connect("localhost","root","","aldb");
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from suges";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while ($rows=$result->fetch_assoc())
{
echo "<tr><td>$rows[name]</td> <td>$rows[email]</td> <td>$rows[sugges]</td><tr>";

}

}
else
{
echo "No notice available...";
}
$conn->close();
?>
        </table>
    </body>
</html>