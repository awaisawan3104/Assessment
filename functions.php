<?php
//$con=mysqli_connect("localhost",'root','','uni');
$con=mysqli_connect("localhost","testdb","","testdb");
if(!$con){
  echo "Database connection error";
}
$title='TEST ';
function clean($str) {
  global $con;
$str = @trim($str);
if(get_magic_quotes_gpc()) {
$str = stripslashes($str);
}
return mysqli_real_escape_string($con,$str);
}
function stats(){
  global $con;
  $sql="select count(id) as x,status from visitors group by status order by x desc";
  $res=mysqli_query($con,$sql);
  $sum=0;
  $Attending=0;
  while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
    $sum+=$row['x'];
    if($row['status']=='Attending'){
      $Attending=$row['x'];
    }
  }
  echo 'Attendees '.$Attending.'/'.$sum;
}

 ?>
