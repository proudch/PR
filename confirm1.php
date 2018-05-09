<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/n/apple-icon.png">
    <link rel="icon" type="image/png" href="img/n/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>MBS | ชื่องานนิทรรศการ</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
    />
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
    <nav class="navbar navbar-expand-lg bg-primary " >
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

    <div class="container">
        <br>
        <h1 class="mt-4 mb-3">ยืนยันการจอง</h1>
        <br>
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <fieldset disabled>
                                    <label for="disabledTextInput">ชื่อผู้ประสานงาน</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </fieldset>
                            </div>
                        </div>



                        <div class="col-lg-6">
                            <div class="form-group">
                                <fieldset disabled>
                                    <label for="disabledTextInput">นามสกุลผู้ประสานงาน</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </fieldset>
                            </div>
                        </div>


                    </div>

                    <div class="form-group">
                        <label>ตำแหน่ง</label>
                        <input type="text" class="form-control" id="exampleInputEmail1">

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <fieldset disabled>
                                    <label for="disabledTextInput">เบอร์โทร</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </fieldset>
                            </div>
                        </div>



                        <div class="col-lg-6">
                            <div class="form-group">
                                <fieldset disabled>
                                    <label for="disabledTextInput">email</label>
                                    <input type="email" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </fieldset>
                            </div>
                        </div>


                    </div>

                    <div class="form-group">
                        <label for="exampleSelect1">ประเภทสินค้า</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>ชื่อที่ใช้ในการประชาสัมพันธ์(Brand name)</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label>ชื่อสำหรับทำป้ายชื่อบูธ(ไม่เกิน 25 ตัวอักษร)</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <center>

                        <a href="http://localhost/mbs/public/confirm">
                            <button type="button" class="btn btn-success">ชำระเงิน</button>
                        </a>
                    </center>
                </form>
            </div>


            <!-- Sidebar Widgets Column -->
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card mb-4">
                    <h3 class="card-header">
                        สรุปการจอง
                        <span>(1 items)</span>
                    </h3>
                    <div class="card-body">
                        <h4>Zone:</h4>
                        <table class="table ">
                            <thead>
                                <tr class="table-info">
                                    <th>บูธ</th>
                                    <th>ขนาด</th>
                                    <th>จำนวน</th>
                                    <th>ราคา</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                        <h4>เพิ่มเติม</h4>
                        <table class="table ">
                            <thead>
                                <tr class="table-warning">
                                    <th>สิ่งที่เพิ่มเติม</th>
                                    <th>ราคา</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>

                                </tr>
                            </tbody>
                        </table>
                        <table class="table ">
                            <thead>
                                <tr class="">
                                    <th>คิดเป็นจำนวนเงิน</th>
                                    <th>XXXX</th>
                                </tr>
                            </thead>

                        </table>
                        <table class="table ">
                            <thead>
                                <tr class="">
                                    <th>ภาษีมูลค่าเพิ่ม(7%)</th>
                                    <th>XXXX</th>
                                </tr>
                            </thead>

                        </table>

                        <table class="table ">
                            <thead>
                                <tr class="">
                                    <th>รวมเงินทั้งหมด</th>
                                    <th class="table-success">XXXX</th>
                                </tr>
                            </thead>

                        </table>

                        <!-- Indicates a successful or positive action -->

                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -- >            



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