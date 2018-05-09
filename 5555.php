<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/n/apple-icon.png">
    <link rel="icon" type="image/png" href="img/n/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>MBS | จองบุธชื่องานนิทรรศการ</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="css/n/bootstrap.min.css" rel="stylesheet" />
    <link href="css/n/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="css/n/demo.css" rel="stylesheet" />
</head>

<body class="template-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top " color-on-scroll="100">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="index.php" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
                    MBS 
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="img/n/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <!-- <i class="now-ui-icons business_bank"></i> -->
                            <p>หน้าแรก</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">
                         <!--  <i class="now-ui-icons files_paper"></i> -->
                         <p>คู่มือผู้ประกอบการ</p>
                     </a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="">

                        <p>ติดต่อเรา</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="btn btn-info">
                        สมัครสมาชิก
                    </a>
                </li>

                <!--login-->
                <li class="nav-item">
                    <a href="login.php" class="btn btn-success">
                        เข้าสู่ระบบ
                    </a>


                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="wrapper">


    <div class="main">
      <div class="section ">
        <div class="container">
           <br>
           <?php
//ถ้ามีการส่งค่าข้อมูล
           include('connect.php');

           $id = null;
           if(isset($_GET["event_id"]))
           {
            $id = $_GET["event_id"]; 
        } 

        $sql = "SELECT * FROM `events` WHERE event_id = '".$id."' ";
        $query = mysqli_query($con,$sql);
        $data=mysqli_fetch_array($query,MYSQLI_ASSOC);

        ?>  
        <input type="hidden"  name="event_id" id="event_id" value="<?php echo "$data[event_id]"; ?>">

        <h2>ชื่องานนิทรรศการ: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data["ev_name"];?></h2>
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <!-- <img class="card-img-top" src="_files/4.jpg" alt=""> -->
                <?php
//ถ้ามีการส่งค่าข้อมูล
                include('connect.php');

                $event_id = null;
                if(isset($_GET["event_id"]))
                {
                    $event_id = $_GET["event_id"]; 
                } 

                $sql = "SELECT * FROM `banners` WHERE event_id = '".$event_id."' ";
                $query = mysqli_query($con,$sql);
                $data1=mysqli_fetch_array($query,MYSQLI_ASSOC);

                ?>  
                <img class="card-img-top" src="_files/_banner/<?php echo $data1["name"];?>">
            </div>


            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <form>
                    <div class="form-group">

                        <div class="row">
                            <div class="col-md-6">
                                <h3>Zone:</h3>

                                <select class="form-control" id="zone">
                                    <?php

                                    $zevent_id = null;
                                    if(isset($_GET["event_id"]))
                                    {
                                        $zevent_id = $_GET["event_id"]; 
                                    } 

                                    $sql = "SELECT * FROM `zones` WHERE event_id = '".$zevent_id."' ";
                                    $query = mysqli_query($con,$sql);
                                    while ($data2 = mysqli_fetch_array($query) ) { ?>
                                    <option value="<?php echo $data2["zone_id"];?>"><?php echo $data2["name"];?></option>
                                    <?php
                                }
                                ?>
                            </select>

                        </div>
                    </div>
                </div>


                <h3>บูธ:</h3>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">

                           <label>บูธ:</label>
                           <select class="form-control" id="size">
                            <?php
                            $sevent_id = null;
                            if(isset($_GET["zone_id"]))
                            {
                                $zone_id = $_GET["zone_id"]; 
                            } 

                            $sql = "SELECT * FROM `booths` WHERE zone_id = '".$sevent_id."' ";
                            $query = mysqli_query($con,$sql);
                            while ($data3 = mysqli_fetch_array($query) ) { ?>
                            <option value="<?php echo $data3["booth_id"];?>"><?php echo $data3["name"];?></option>
                            <?php
                        }
                        ?>

                    </select>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>ขนาดของบูธ:</label>
                    <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </fieldset>
            </div>
        </div>



    </div>
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-12">

            <div class="form-group">
                <label for="disabledTextInput">บูธที่ทำการจอง</label>
                <table class="table">
                  <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>บูธ</th>
                        <th>ขนาด</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>2*2</td>
                      <td><button type="button" class="btn btn-info">แก้ไข</button>

                        <button type="button" class="btn btn-danger">ลบ</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

</div>
<center>
    <a href="confirm.php">
        <button type="button" class="btn btn-success">ยืนยัน</button>
    </a>
</center>
</form>
<?php
mysqli_close($con);
?>



</body>
<!--   Core JS Files   -->
<script src="js/n/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/n/core/popper.min.js" type="text/javascript"></script>
<script src="js/n/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="js/n/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/n/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="js/n/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="js/n/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>