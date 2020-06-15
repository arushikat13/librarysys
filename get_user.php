<?php 
require_once("includes/config.php");
if(!empty($_POST["id"])) {
  $id= strtoupper($_POST["id"]);
 
    $sql ="SELECT FullName,Status FROM tblstudents WHERE id=:id";
$query= $dbh -> prepare($sql);
$query-> bindParam(':id', $id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
foreach ($results as $result) {
if($result->Status==0)
{
echo "<span style='color:red'>  ID Blocked </span>"."<br />";
echo "<b>Name-</b>" .$result->FullName;
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else {
?>


<?php  
echo htmlentities($result->FullName);
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
}
 else{
  
  echo "<span style='color:red'> Invaid Id. Please Enter Valid id .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
}
}



?>
