<?php
include_once 'includes/config.php';
$result = mysqli_query($conn,"SELECT * FROM tbldocuments");
?>
<!DOCTYPE html>
<html>
<head>
<title>Documents available to viw offline</title>
</head>
<body>
<table>
<tr>
<td>id</td>
<td>name</td>
<td>file</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["file"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html> 