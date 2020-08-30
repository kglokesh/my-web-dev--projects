
<html>
    <head>
<style>
h1{
font-size:20px;
padding: 10px;
color:darked;
}
input{
border-radius:10px;
width:200px;height:35px;
text-indent:5px;
}
input:focus{
outline:none;
}
fieldset{
    top: 40;
width:40%;
height:500px;
background-color: coral;
border-radius:10px;
outline:orange;
padding-left: 300;


}


table{
    top: 40%;
font-size:25px;
font-family: serif;
}
td{
line-height:05px;
}
input[type="submit"]{
width:120px;
height:30px;
background-color:yellow ;
}
input[type="submit"]:hover{
background-color:"green";
}
input[type="reset"]{
width:120px;
height:30px;
background-color: appworkspace;
}
input[type="button"]
{
    background: #4caf50;
    font-family: sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: floralwhite;
}
center{
    top:25%;
}
.ll{
    float: right;
   right: 120;
    top:200;
    position: absolute;
    border: 10px solid aqua;
    padding: 20px;
   
}
 
</style>
<title> Animals details</title>
    </head>
    <body bgcolor="darkvoilet">
        <div class="ll">
            <a href="ani_all_display.php"><input type="button" value="View"></a><br><br><br>
            
            <a href="ad_delete_ani.html"><input type="button" value="Delete"></a>
        </div>
        <form method="POST" action="ad_ani_info.php"  enctype = "multipart/form-data">
<fieldset>
<table border=0 cellspacing=1>
<h1>Animals details</h1>
<tr>
<td>ANIMAL_NAME</td>
<td><input type="text" name="animalname" placeholder="ANIMAL Name" required></td>
</tr>
<tr>
<td>Height</td>
<td><input type="text" name="height" placeholder="height in cms or m" required></td>
</tr>
<tr>
<td>Weight</td>
<td><input type="number" name="weight" placeholder="weight"></td>
</tr>
<tr>
<td>Pragnancy</td>
<td><input type="number" name="pragnancy" placeholder="In months"></td>
</tr>
<tr>
<td>INFO 1</td>
<td><input type="text" name="info1" placeholder="tell something about"></td>
</tr>
<tr>
<td>INFO 2</td>
<td><input type="text" name="info2"  placeholder="Add something about"></td>
</tr>
<tr>
<td>INFO 3</td>
<td><input type="text" name="info3" placeholder="add few more thing"></td>
</tr>
<tr>
    <td>Animal Image</td>
    <td><input type="file" name="image" /></td>
</tr>
</table>
<div>
<tr>
<br>
<td>
<input type="submit" value="upload" name="upload"/>
</td>
<td>
<input type="reset" value="reset" name="reset">
</td>
</tr>
</div>
</fieldset>
</form>
</center>
<?php
    //before running add credentials in cofigs.php
    $configs = include('config.php');
    $db=mysqli_connect($configs->host,$configs->username,$configs->pass,$configs->database);
  $msg="";
  if(isset($_POST['upload']))
  {
    
      
        $animalname= mysqli_real_escape_string($db,$_POST['animalname']);
        $height=mysqli_real_escape_string($db,$_POST['height']);
        $weight=mysqli_real_escape_string($db,$_POST['weight']);
        $pragnancy=mysqli_real_escape_string($db,$_POST['pragnancy']);
        $info1=mysqli_real_escape_string($db,$_POST['info1']);
        $info2=mysqli_real_escape_string($db,$_POST['info2']);
        $info3=mysqli_real_escape_string($db,$_POST['info3']);
        
        $image=$_FILES['image']['name'];

        $target= "../appdata/uploads/".basename($image);
      
      $sql="INSERT INTO animalinfo(animalname,height,weight,pragnancy,info1,info2,info3,image) "
              . "VALUES('$animalname','$height','$weight','$pragnancy','$info1','$info2','$info3','$image')";
      
      
      
      $res= mysqli_query($db, $sql);
      
      if(!$res)
      {
          echo "Faild";
      }
 else {
          echo "Success<br>";    
      }
      
      if($sql==TRUE){
          
      
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
        {
          
         
             $msg = "Image uploaded successfully";
         }
         else{
  		$msg = "Failed to upload image";
  	}
      }
      echo "$msg";
  }
  
    ?> 
</body>
</html>