<?php session_start();?>
<?php
if (!$_SESSION["UserID"]){  //check session

      Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{
    //$_SESSION['frmAction'] = md5('itoffside.com' . rand(1, 9999));
}

$_SESSION['message'] = ''; /*เเสดงข้อความ Error*/


include_once 'connect.php';

$mysqli = new mysqli('localhost', 'root', '', 'projectdb'); //เชื่อมฐานข้อมูล
$mysqli->query("set names utf8"); //กำหนดภาษา

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$id = null;
if(isset($_GET["event_id"]))
 {
    $id = $_GET["event_id"]; 
} 

isset($banner);
 $id = $_POST['event_id'];
  $create_by = $mysqli->real_escape_string($_POST['name']);
  $filename = date("Ymdhis").$_FILES['banner']['name'][0];
   $path = "_files/_banner/".$filename;
  move_uploaded_file( $_FILES['banner']['tmp_name'][0],  $path );
    

    $sql = "INSERT INTO banners (event_id, name, file_path ,create_by)"
            . "VALUES('$id','$filename',  '$path', '$create_by')";

//เก็บข้อมูลลง DB

            if($mysqli->query($sql) == true)
            {
Header("Location: admin_status_event.php");

            }
            else{

            }


        }
  $initialPreview = array();
$initialPreviewConfig = array();



?>
    <!doctype html>
    <html >

    <head>
    <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>MBS | เพิ่มแปลน</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <!-- Bootstrap core CSS     -->
        <link href="css/m/bootstrap.min.css" rel="stylesheet" />
                <!--  Material Dashboard CSS    -->
        <link href="css/m/material-dashboard.css?v=1.2.0" rel="stylesheet" />
                <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="css/m/demo.css" rel="stylesheet" />

                <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/piexif.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/sortable.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/plugins/purify.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>

<script src="js/locales/LANG.js"></script>
    <style type="text/css">
        .form-group.required .control-label:after { 
        content:"*";
        color:red;
}
    </style>
    <script type="text/javascript" src="js/epoch_classes.js"></script> 

</head>
    </head>

    <body>
        <div class="wrapper">
            <div class="sidebar" data-color="red">

                <div class="logo">
                    <a href="admin_home.php" class="simple-text">
                        ADMIN
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li>
                            <a href="admin_home.php">
                                <i class="material-icons">dashboard</i>
                                <p>หน้าแรก</p>
                            </a>
                        </li>


                        <li>
                            <a href="admin_add_user.php">
                                <i class="material-icons">library_add</i>

                                <p>ผู้ดูแลระบบ</p>
                            </a>

                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">event</i>
                                <p>งานนิทรรศการ</p>
                            </a>
                            <ul class="dropdown-menu">

                                <li>
                                    <a href="admin_add_event.php">เพิ่มข้อมูลงานนิทรรศการ</a>
                                </li>
                                <li class="active">
                                    <a href="admin_status_add_event.php">เพิ่มข้อมูลโซนและบูธ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">assessment</i>
                                <p>คำขออนุมัติ</p>
                            </a>
                            <ul class="dropdown-menu">


                                <li>
                                    <a href="">คำขออนุมัติการจอง</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">event</i>
                                <p>ตรวจสอบสถานะ</p>
                            </a>
                            <ul class="dropdown-menu">

                                <li>
                                    <a href="admin_status_user.php">คำขออนุมัติผู้ประกอบการสมาชิก</a>
                                </li>
                                <li>
                                    <a href="admin_status_event.php">งานนิทรรศการ</a>
                                </li>
                                <li>
                                    <a href="event_index.php">การจอง</a>
                                </li>

                            </ul>
                        </li>
                </div>
            </div>


            <div class="main-panel">
                <nav class="navbar navbar-transparent navbar-absolute">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="admin_add_banner.php"> เพิ่มแบรนเนอร์</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                        <li >
                            <a href="show.php">
                                <i class="material-icons">shopping_cart</i>
                                ข้อมูลการจอง
                            </a>

                        </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">person</i>
                                        <?php if (isset($_SESSION['UserID']))  ?>
                                        <?php echo $_SESSION['Name']; ?>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">แก้ไขโปรไฟล์</a>
                                        </li>
                                        <li>
                                            <a href='logout.php'>
                                                LOG OUT

                                            </a>
                                        </li>

                                    </ul>
                                </li>

                            </ul>

                        </div>
                    </div>
                </nav>



                <div class="content">
                    <div class="container-fluid">
                        <form action="admin_add_banner.php" method="post" enctype="multipart/form-data"> 
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header" data-background-color="red">
                                            <h4 class="title">เพิ่มแบรนเนอร์</h4>
                                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                                        </div>
                                        <div class="card-content table-responsive">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="file-loading">
                                                            <input id="banner" name="banner[]" type="file" multiple>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        <?php
//ถ้ามีการส่งค่าข้อมูล
include('connect.php');

?>
                        <?php


$id = null;
if(isset($_GET["event_id"]))
 {
    $id = $_GET["event_id"]; 
} 

$sql = "SELECT * FROM `events` WHERE event_id = '".$id."' ";
$query = mysqli_query($con,$sql);
$data=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>                                     <center>

 <input type="hidden"  name="event_id" id="event_id" value="<?php echo "$data[event_id]"; ?>">
  <input type="hidden"  name="name" id="name" value=" <?php echo $_SESSION['Name']; ?>">
                                                <button type='reset' name='reset' class='btn  btn-danger'>ยกเลิก</button>
                                                <button type='submit' name='submit' class='btn btn-success'>บันทึก</button>

                                            </center>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                            </div>
    </body>







    <script src="js/m/material.min.js" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <script src="js/m/chartist.min.js"></script>
    <!--  Dynamic Elements plugin -->
    <script src="js/m/arrive.min.js"></script>
    <!--  PerfectScrollbar Library -->
    <script src="js/m/perfect-scrollbar.jquery.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="js/m/bootstrap-notify.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="js/m/material-dashboard.js?v=1.2.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="hjs/m/demo.js"></script>


    <script type="text/javascript">
        $("#banner").fileinput({
            overwriteInitial: false,
            initialPreview: <?= json_encode($initialPreview);?>,
            initialPreviewAsData: false, // defaults markup
            initialPreviewFileType: 'image', // image is the default and can be overridden in config below
            initialPreviewConfig: <?= json_encode($initialPreviewConfig); ?>,
                showUpload : false,
                    showRemove : false,
                        maxFileCount : 1,
});

    </script>

    </html>