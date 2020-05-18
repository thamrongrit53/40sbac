<?php  
include 'con_DB.php';
mysqli_set_charset($conn,"utf8");

$query = "SELECT * FROM post40sbac WHERE status='1' ORDER BY id DESC";
$result = mysqli_query($conn,$query);


?>
<!DOCTYPE html>
<html>
<head>
	<title>SBAC</title>
    <meta charset="utf-8">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">

<style type="text/css">
body {
  background-image: linear-gradient(to top, #3399ff 0%, #b3d9ff 100%);
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.inner{
  overflow: hidden;
}
.inner img{
transform: all 2.5s ease;

}
.inner:hover img{
  transform: scale(1.5);
}
  </style>
  
</head>
<body style="font-family: 'Sarabun', sans-serif;">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="http://sbac.online/">sbac.online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://sbac.online/">หน้าแรก</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register_ch.html">สมัครเรียน</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">ติดต่อเรา</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top: 30px;">  
<div class="text-center">
<h1>40ปี เรื่องเล่าในรั้ว บธว.</h1>
</div>
     <br />  
    <div align="right" class="text-center">
     <button type="button" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">โพสต์&nbsp;40ปี&nbsp; เรื่องเล่า&nbsp; บธว.</button>
    </div>
     </div>
     <div class="container" style="margin-top: 20px;">
     <div class="row">
            <div class="card-columns">
      <?php
      while($row = mysqli_fetch_array($result))
      {
      ?> 
     
  <div class="card">
    <div class="inner">
         <img src="img_post40sbac/<?php echo $row["image"]; ?>" class="card-img-top" alt="...">
       </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["title"]; ?></h5>
                        <br/>
                        <a href="post_40sbac.php?id=<?php echo $row["id"]; ?>">อ่านเพิ่ม..</a>
<!--                         <p class="card-text"><?php echo $row["caption"]; ?></p>
 -->                        <p class="card-text"><small class="text-muted">โพสต์โดย <?php echo $row["name"]; ?>  วันที่<?php echo $row["date"];?></small></p>
                    </div>  
    </div>
                 
             
      <?php
      }
      ?>
    
   </div>
</div>
  </div>
</div>
</div>

<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">โพสต์&nbsp;40ปี &nbsp;เรื่องเล่า&nbsp; บธว.</h4>
   </div>
   <div class="modal-body">
    <form method="POST" action="insert_post.php" enctype="multipart/form-data" id="insert_form" >
     <label>ชื่อ-นามสกุล</label>
     <input type="text" name="name" id="name" class="form-control" />
     <br/>
     <label>ชื่อเรื่อง</label>
     <input type="text" name="title" id="title" class="form-control" />
     <br/>
     <label>เรื่องเล่า</label>
     <textarea name="caption" id="caption" class="form-control"></textarea>
     <br />
      
     <label>รูปภาพ</label>
     <input type="file" name="file" id="file">
     <br />  
    
     <input type="submit" name="insert" id="insert" value="โพสต์" class="btn btn-success" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
   </div>
  </div>
 </div>
</div>


<script>  
$(document).ready(function(){
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#name').val() == "")  
  {  
   alert("กรุณากรอก ชื่อ-นามสกุล");  
  }  
  else if($('#title').val() == '')  
  {  
   alert("กรุณากรอก ชื่อเรื่องเล่า");  
  }  
  else if($('#caption').val() == '')
  {  
   alert("กรุณากรอก เรื่องเล่า");  
  }
   
  else  
  {  
    success:function(data){  
     $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');  
     $('#post40sbac').html(data);  
    }  
  }  
 });

});  

 </script>

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="403996436383599"
  logged_in_greeting="สวัสดี...จ้า"
  logged_out_greeting="สวัสดี...จ้า">
      </div>
      <!-- Footer -->
 <footer id="sticky-footer" class="py-4 bg-dark text-white-50" style="margin-top: 20px;">
    <div class="container text-center">
      <small>Copyright &copy; Sbac.online</small>
    </div>
  </footer>
<!-- Footer -->
</body>
</html>