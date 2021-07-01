
<!DOCTYPE html>
<html>
<head>
  <title>index</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body onload="message();">
<?php
require("functions.php");
$sql="select * from users";
//$sql="select * from students";
$res=mysqli_query($con,$sql);
$someData=array();
$i=0;
echo '<table border="1">';
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
  if($i==0){
    echo '<tr>';
    foreach($row as $k => $v){
      echo '<td>'.$k.'</td>';
    }
    echo '</tr>';
  }
  echo '<tr>';
  foreach($row as $k => $v){
    echo '<td>'.$v.'</td>';
  }
  echo '</tr>';
$someData[$i]=$row;
  $i++;
}
?>
<script>
function message(){
  alert("Please copy and past the table to the excel sheet Use Ctrl + A then Ctrl + C");
}
</script>
</body>
</html>
