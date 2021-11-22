<?php
include('includes/header1.php');
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
body{
  font-family: 'lato' !important;
  /*background-color: black;*/
   background-image: url("teacher.png");
   background-size: 1400px 700px;
     background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);

http://localhost:8080/FYP/admin/view_enquiry.php}

/*navbar start*/

@media(min-width:768px) {

body {
  margin-top: 50px;
}
}

#wrapper {
  padding-left: 0;    
}

#page-wrapper {
  width: 100%;        
  padding: 0;
}

/* Side Navigation */

@media(min-width:768px) {

#wrapper {
  padding-left: 225px;
}

#page-wrapper {
  padding: 2px 10px;
}

.side-nav {
  position: fixed;
  top: -21px;
  left: 225px;
  width: 225px;
  margin-left: -225px;
  border: none;
  border-radius: 0;
  overflow-y: auto;
  background-color: #313131;
  bottom: 0;
  overflow-x: hidden;
  padding-bottom: 40px;
  margin-top: 20px;
}

.side-nav>li>a {
  width: 225px;
  border-bottom: 1px solid #6C7278;
  margin-top: 15px;
} 
}

.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
  border-color: #616060 !important;
}

.navbar-ex1-collapse{
  background-color: #fff;
}

.logostyle{
  width: 50%;
  max-width: 186px;
  margin-top: 10px;
  margin-left: 55px;
}

.navbar-inverse .navbar-nav > li > .active{
  border-left: 3px solid white;
}

.nav > li > a {
  position: relative;
  display: block;
  padding: 12px 15px;
  margin-right: 15px;
}

.nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
  background-color: transparent;
  border-color: white;
}

a {
  color: white !important;
  text-decoration: none;
}

.form-control-serch {
  height: 32px;
  padding: 0px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 0px 22px 22px 0px;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.search-btn-icon{
  background-color: #fff;
  border:1px solid #E8E8E8;
  border-right: transparent !important; 
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
  height: 32px;
  margin-left: 200px;
}
 
.search-box{
  border-left:transparent !important;
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;
  border:1px solid #E8E8E8;
  height: 32px;
}

.fasett {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 25px;
  text-rendering: auto;
  color: white;
  margin-top: 10px;
  margin-right: 30px;
  cursor: pointer;
}

a:hover {
  background-color: transparent !important;
}

.editpro h5 {
  margin-right: 15px;
  margin-top: 15px;
  color: white;
}

/*navbar end*/
@media screen and (max-device-width: 640px) { 

.search-btn-icon{
  background-color: #fff;
  border:1px solid #E8E8E8;
  border-right: transparent !important; 
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
  height: 32px;
  margin-left: 115px;
}

.editpro h5 {
    margin-right: 12px;
    margin-top: 15px;
    color: white;
    margin-left: 158px;
}

.dashhead h1{
   margin-top: 180px;
}
}
</style>
</head>
<body>

<div id="noty-holder"></div>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
 <!--       <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color: #616060; border:1px solid #616060;">-->
            <ul class="nav navbar-nav side-nav">
                              <li>
                   <a class="active" href="dashboard.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-home" aria-hidden="true"></i>   <span style="color:white;">  Home </span></a>
                </li>
                <li>
                    <a href="admin/insert_package.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-user-o" aria-hidden="true"></i>   <span style="color:white;">  Insert Package </span></a>
                </li>
                <li>
                    <a href="admin/view_packages.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-calendar" aria-hidden="true"></i>   <span style="color:white;"> View Package</span></a>
                </li>
                <li>
                    <a href="admin/view_enquiry.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-sing-out" aria-hidden="true"></i>   <span style="color:white;"> View Enquiry</span></a>
                </li>
				<li>
                    <a href="admin/view_bookings.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-sing-out" aria-hidden="true"></i>   <span style="color:white;"> View orders</span></a>
                </li>
				<li>
                    <a href="index.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-sing-out" aria-hidden="true"></i>   <span style="color:white;"> Logout </span></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
  </nav>
  
</div>
</div>
</div>

<img src="images/6.jpg" width="100%" height="100%">
  </div><!-- /#wrapper -->
</html>