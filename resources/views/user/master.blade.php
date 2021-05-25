<!DOCTYPE html>
<html dir="rtl">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Barlow&family=Luckiest+Guy&family=Potta+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 70px;
  position: fixed;
  z-index: 1;
  
  right: 0;
  background-color: #034939ec;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 0;
}

.sidebar a {
  /* padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s; */
  font-family: 'Almarai', sans-serif;
  font-weight: bold;
  color: white;
  
  text-decoration: none;
  font-size: 15px;
  padding-top:10px;
  padding-bottom: 10px;
  padding-right: 15px;
  display: inline-block;
    overflow: hidden;
    white-space: nowrap;
}
.col-col-hidden a span.nav-col{
    visibility: hidden;
  opacity: 0;
  
}
.col-col a.nav-col{
    
    visibility: visible;
    opacity: 1;
   
}

.sidebar a:hover {
    color: #034939;
  background-color: white;
}
.sidebar .side-link:hover {
  color: #034939;
  background-color: white;
}
.sidebar .closebtn {
  position: absolute;
  top: 0;
  left: 25px;
  font-size: 36px;
  margin-right: 50px;
}

.openbtn {
  display: none;
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  
  padding: 16px;
  margin-right: 70px;
  
}

.navbar-text{
    font-family: 'Almarai', sans-serif;
    font-weight: bold;
    color: white !important;

}
.nav-header {
    padding-top: 10px;
    padding-bottom: 10px;
    padding-right: 15px;
    font-family: 'Almarai', sans-serif;
    font-weight: bold;
    background-color: #034939;
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
    
}
.nav-header img{
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
}

.nav-header p{
    opacity: 1;
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
    margin-right: 10px;
    margin-top: -20px
}

.nav-header p.hide{
    opacity: 0;
}
.sidebar i{
    margin-right: 10px;
    margin-left: 15px;
}



/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
/* @media screen and (max-height: 450px) {
  .sidebar {
      padding-top: 15px;
      

}
  .sidebar a {font-size: 18px;}
  .navbar-text{
    font-weight: normal;
    margin-right: 0;
    text-align: right;

    }
    

} */
@media (max-width: 768px) {
    .sidebar {
      /* padding-top: 15px; */
      /* width: 0; */

    }
    .openbtn {
        /* display: block; */
    }
    
}

</style>
</head>
<body class="text-right">
@include('user.inc.nav')
<div class="container-fluid">

    <div id="mySidebar" class="sidebar col-col-hidden" onmousemove="openNav()" onmouseout="closeNav()">
        <div class="container-fluid  mx-0 nav-header text-right text-white">
            <img class="" width="40px" height="40px" src="images/default.png" alt="">
            <p class="hide">اسم المؤسسة</p>
            
        </div>
      {{-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a> --}}
        <div class="side-link">
            <a href="#">
                <i class="fa fa-home" aria-hidden="true" style="font-size: 18px"></i>
                <span class="nav-col">الصفحة الرئيسية</span>
            </a>
        </div>
        <div class="side-link">
            <a href="#">
                <i class="fa fa-bell" aria-hidden="true"></i>
                <span class="nav-col">الإشعارات</span>
            </a>
        </div>
         <div class="side-link">
            <a href="#">
                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                <span class="nav-col">إدارة ملف المؤسسة</span>
            </a>
        </div>
        <div class="side-link">
            <a href="#">
                <i class="fa fa-search" aria-hidden="true"></i>
                <span class="nav-col">إدارة التقييم</span>
            </a>
        </div>
        <div class="side-link">
            <a href="#">
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                <span class="nav-col">إدارة التدريب و بناء القدرات</span>
            </a>
        </div>
        <div class="side-link">
            <a href="#">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                <span class="nav-col">إدارة الاستشارات الفنية</span>
            </a>
        </div>
        <div class="side-link">
            <a href="#">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span class="nav-col">الدعم</span>
            </a>
        </div>
    </div>
    
    <div id="main">
      <button class="openbtn" onclick="openNav()" onmousemove="openNav()" onmouseout="closeNav()">☰</button>  
      <h2>Content</h2>
    </div>
</div>    





<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("mySidebar").style.display = "block";
  var orgTitle= document.querySelector(".nav-header p");
  var sidebarContainer = document.querySelector(".sidebar");
  sidebarContainer.classList.remove("col-col-hidden");
  sidebarContainer.classList.add("col-col");
  orgTitle.classList.remove("hide");
  
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "70px";
  document.getElementById("mySidebar").style.display = "block";
  var sidebarContainer = document.querySelector(".sidebar");
  sidebarContainer.classList.remove("col-col");
  sidebarContainer.classList.add("col-col-hidden");
  var orgTitle= document.querySelector(".nav-header p");
  orgTitle.classList.add("hide");
  

  
}
</script>

<script src="{{asset('/js/main.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html> 
