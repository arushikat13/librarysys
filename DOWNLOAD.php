<?php 
include('admin/includes/config.php');
?>
<html>
     <style>
          .foodpic img
{
    height: 200px;
    width: 50%;
    transform: scale(0.8);
    transition: transform 0.5s;
}
.foodpic img:hover
{
    transform: scale(0.9);
    transition: transform 0.5s;
}
</style>
<body>


<img src="assets/img/offline.jpg" alt="Welcome,user!" width="300" height="233">

</body>
<section>
        <br><br>
         <u><h3 class="d"  h3 style="font-family:arial;" h3 style="font-size:300%">DOCUMENTS AVAILABLE TO VIEW OFFLINE</h3></u>
        <div class="container-fluid">
         <div class="row">
                <?php  $img=mysqli_query($con,"SELECT * FROM tbldocuments");
                $i=1;
                while($rows=mysqli_fetch_assoc($img)){
                ?>
            <div class="col-md-3">
                <div class="foodpic">
                    <a href="admin/upload/"> 
    <img src="admin/upload/<?php echo trim($rows['file']);?>">              
                    </a> 
    <span class="dd"><?php echo $rows['name'];?></span> 

                </div>
            </div>
             <?php }?>
        </div></div></section>
        </html>
        