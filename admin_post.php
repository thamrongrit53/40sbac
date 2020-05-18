<?php 
include 'con_DB.php';
mysqli_set_charset($conn,"utf8");
$query = "SELECT * FROM post40sbac ORDER BY id DESC";
$result = mysqli_query($conn,$query);
   
?>
<html>
<head>
<meta charset="utf-8">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
<title>SBAC</title>

<style type="text/css">
body {
  background-image: linear-gradient(to top, #485460 0%, #fff 100%);
}
h2,h5 {
  color: #fff;
  
}
a,h6{
  color: #fff;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
  border: none;
  &:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
  }
  a {
    color: initial;
    &:hover {
      text-decoration: initial;
    }
  }
  .text-muted i {
    margin: 0 10px;
  }
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }

}
/*p {
  color: #2C3A47;
}*/
.card-text{
  color: #2C3A47;
}
.card-title{
  color: #2C3A47;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 100%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding:5px 5px;
  cursor: pointer;
  margin-top: 5px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
.comment-form-container {
  background: #F0F0F0;
  border: #e0dfdf 1px solid;
  padding: 20px;
  border-radius: 2px;
}

.input-row {
  margin-bottom: 20px;
}

.input-field {
  width: 100%;
  border-radius: 2px;
  padding: 10px;
  border: #e0dfdf 1px solid;
}

.btn-submit {
  padding: 10px 20px;
  background: #333;
  border: #1d1d1d 1px solid;
  color: #f0f0f0;
  font-size: 0.9em;
  width: 200px;
  border-radius: 2px;
    cursor:pointer;
}

ul {
  list-style-type: none;
}

.comment-row {
  border-bottom: #e0dfdf 1px solid;
  margin-bottom: 15px;
  padding: 15px;
}

.outer-comment {
  background: #F0F0F0;
  padding: 20px;
  border: #dedddd 1px solid;
}

span.commet-row-label {
  font-style: italic;
}

span.posted-by {
  color: #09F;
}

.comment-info {
  font-size: 0.8em;
}
.comment-text {
    margin: 10px 0px;
}
.btn-reply {
    font-size: 0.8em;
     color: #09F;
    cursor:pointer;
/*    text-decoration: underline;
*/    
    
}
#comment-message {
    margin-left: 20px;
    color: #189a18;
    display: none;
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
     </div>
     <div class="container">
         <div class="row">
     <div class="col-sm-2"></div>
     <div class="col-sm-8">
    <?php 

      while($row = mysqli_fetch_array($result))
      {
        if ($row["status"] == 1) {
             $status = "ไม่อนุมัติ";
        } else {
            $status = "อนุมัติ";
        }
        
     ?>
            <div class="card" style="margin-top: 20px;">
            <p align="right" style="margin-top: 10px;"> โพสต์โดย <?php echo $row["name"]; ?>  วันที่<?php echo $row["date"];?></p>
          <img class="card-img-top" src="img_post40sbac/<?php echo $row["image"]; ?>" alt="Card image" class="rounded">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row["title"]; ?></h5>
          <p><?php echo $row["caption"]; ?></p>
        </div>
        <div style="margin-bottom: 20px;margin-left: 20px;"> 
          <label>สถานะ => 
                <?php echo $status;  ?>
          </label>
          <form action="" method="">
          <input type="radio" id="1" name="status" value="1">
  <label for="1">ไม่อนุมัติ</label><br>
  <input type="radio" id="2" name="status" value="2">
  <label for="2">อนุมัติ</label><br>
          </form>
          <button class="btn btn-danger">ลบ</button>
        </div>
      </div>
  <?php  
      }
      ?>
    
     </div>
     
     <div class="col-sm-2">
</div>
  </div>
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