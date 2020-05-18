<?php
 include 'con_DB.php';
 mysqli_set_charset($conn,"utf8");

if((isset($_POST['insert'])))
{
 $output = '';
 $name = $_POST["name"];  
    $title = $_POST["title"];  
    $caption = $_POST["caption"];  
    $image = $_FILES['file']['name'];  
    $target = "img_post40sbac/".basename($image);
    $status =1;
    if (move_uploaded_file($_FILES['file']['tmp_name'],$target)) {
        $msg = "Image uploaded successfully";
     }else{
        $msg = "Failed to upload image";
     }
    $query = "
    INSERT INTO post40sbac(name,title,caption,image,status)  
     VALUES('$name','$title','$caption','$image','$status')
    ";
    
    if(mysqli_query($conn, $query))
    {
     $output .= '<label class="text-success">โพสต์ของคุณกำลังถูกตรวจสอบ</label>';
     $select_query = "SELECT * FROM post40sbac WHERE status='2' ORDER BY id DESC";
     $result = mysqli_query($conn, $select_query);
     
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
      <div class="card-columns">
      <div class="card">
      <img class="card-img-top" src="img_post40sbac/<?php echo $row["image"]; ?>" alt="Card image cap" class="rounded">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row["title"]; ?></h5>
         <a href="#post<?php echo $row["id"]; ?>" data-toggle="collapse">อ่านเพิ่ม..</a>
    <div id="post<?php echo $row["id"]; ?>" class="collapse">
      <p><?php echo $row["caption"]; ?></p>
      <p><strong>โพสต์โดย<?php echo $row["name"]; ?>  วันที่<?php echo $row["date"];?></strong></p>
    </div>
    </div>
  </div>
  </div>
      ';
     }
     
    }
    echo $output;
}
?>
<script type="text/JavaScript">
    setTimeout("location.href = 'http://sbac.online/40sbac.php';",2000);
  </script>