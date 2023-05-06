<!DOCTYPE html>
<html lang="en">

<head>
<title>Maha Salon</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Salon">
<meta name="keywords" content="Salon">
<meta name="author" content="Olivegrapes">

<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/owl.theme.default.min.css" />
<link rel="stylesheet" href="css/owl.carousel.min.css" />
<link rel="stylesheet" href="css/animate.css" />
<link rel="stylesheet" href="css/icofont.css" />
<link rel="stylesheet" href="css/nounicon.css" />
<link rel="stylesheet" href="css/makeover-icon.css" />
<link rel="stylesheet" href="css/nice-select.css" />
<link rel="stylesheet" href="css/jquery.datetimepicker.min.css" />
<link rel="stylesheet" href="css/slick.css" />
<link rel="stylesheet" href="css/lightcase.css" />
<link rel="stylesheet" href="css/lightslider.css" />

<link rel="stylesheet" href="css/settings.css">
<link rel="stylesheet" href="css/preset.css" />
<link rel="stylesheet" href="css/ignore_for_wp.css" />
<link rel="stylesheet" href="css/theme.css" />
<link rel="stylesheet" href="css/responsive.css" />


<link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
<style type="text/css">.social_icons {
               display: inline-block;
               position: fixed;
               bottom:10px;
               left:10px;
               max-width:30px;
               z-index: 9999;
               animation: whsAnim 2s linear 1s infinite;
            }
            .social_icons1 {
               display: inline-block;
               position: fixed;
               bottom:10px;
               right:10px;
               max-width:30px;
               z-index: 9999;
               animation: whsAnim1 2s linear 1s infinite;
            }
            @keyframes whsAnim {
               0% { bottom:10px;left: 10px;transform:scale(1,1); }
               25% { bottom:30px;left: 40px;transform:scale(0.85,1.15); }
               50% { bottom:60px;transform:scale(1.15,1.85); }
               100% { bottom:10px;transform:scale(1,1); }
            }
            @keyframes whsAnim1 {
               0% { bottom:10px;right: 10px;transform:scale(1,1); }
               25% { bottom:30px;right: 40px;transform:scale(0.85,1.15); }
               50% { bottom:60px;transform:scale(1.15,1.85); }
               100% { bottom:10px;transform:scale(1,1); }
            }
            .social_icons1 img {
               width:100%;
               border-radius : 50%;
            }
            .social_icons img {
               width:auto;
            }
           /** section.ulockd-copy-right {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
}***/
/****Social media*****/
@import url(http://weloveiconfonts.com/api/?family=entypo);
/* entypo */
[class*="entypo-"]:before {
  font-family: 'entypo', sans-serif;
}
label p {
    font-size: 18px;
    letter-spacing: 5px;
    text-transform: uppercase;
    display: inline-block;
    width: 20px;
    transform: rotate(-90deg);
    margin: 0px;
    color : #000;
}
label p.center {
    margin: 80px auto;
}
#content {
  text-align: center;
    position: absolute;
    right: 0px;
    margin: auto;
    top: 35%;
    padding: 0px;
    width: 45px;
    height: 120px;
    background: #fee0a2;
    z-index: 9999;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
}
input[type="checkbox"]{display:none;}
.checkbox:checked + .label{
}
.checkbox:checked ~ .social {
  opacity:1;
  -webkit-transform: scale(1) translateX(-80px);
  -moz-transform:scale(1) translateX(-80px) ;
  -o-transform:scale(1) translateX(-80px);
  transform:scale(1) translateX(-80px);
    -webkit-transition:.5s;
  -moz-transition:.5s;
  -o-transition:.5s;
  transition:.5s;
}
.label {
    font-size: 16px;
    cursor: pointer;
    margin: 0;
    padding: 0px;
    border-radius: 10%;
    color: #7B7484;
}
.social {
  transform-origin:0% -50%;
  -webkit-transform: scale(0) translateX(-190px);
  -moz-transform:scale(0) translateX(-190px);
  -o-transform:scale(0) translateX(-190px);
  transform:scale(0) translateX(-190px);
  opacity:0;
}
#content ul {
    position: relative;
    left: 0;
    right: 0;
    margin: auto;
    color: #000;
    height: 150px;
    width: 50px;
    background: #fee0a2;
    padding: 0;
    list-style: none;
    top: -200px;
}
#content ul li {
  font-size:20px;
  cursor:pointer;
  width:50px;
  margin:0;
  padding:12px 0;
  float:left;
  height:35px;
}
#content ul li:hover {color:rgba(0,0,0,.5);}
#content ul:after {
  content: '';
    display: block;
    position: absolute;
    left: 0;
    right: 0;
    margin: 50px;
    height: 0;
    width: 0;
    border-top: 18px solid transparent;
    border-bottom: 18px solid transparent;
    border-left: 18px solid #dbc597;
}
/****li.facebook {background:#3B5998;padding:12px 0;}
li.twitter {background:#6CDFEA;padding:12px 0;}
li.gplus {background:#ff0000;padding:12px 0;}
li.insta i {background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);}
Social media*****/

.social1 {
    position: fixed;
    top: 165px;
    right: 5px;
    z-index: 9999;
}
.social1 ul {
    padding: 0px;
    -webkit-transform: translate(270px, 0);
    -moz-transform: translate(270px, 0);
    -ms-transform: translate(270px, 0);
    -o-transform: translate(270px, 0);
    transform: translate(270px, 0);
}
.social1 ul li {
    display: block;
    margin: 5px;
    background: rgba(0, 0, 0, 0.36);
    width: 300px;
    text-align: left;
    padding: 10px;
    -webkit-border-radius: 30px 30px 0px 30px;
    -moz-border-radius: 30px 30px 0px 30px;
    border-radius: 30px 30px 0px 30px;
    -webkit-transition: all 1s;
    -moz-transition: all 1s;
    -ms-transition: all 1s;
    -o-transition: all 1s;
    transition: all 1s;
    height : 60px;
}
.social1 ul li:hover {
    -webkit-transform: translate(-110px, 0);
    -moz-transform: translate(-110px, 0);
    -ms-transform: translate(-110px, 0);
    -o-transform: translate(-110px, 0);
    transform: translate(-110px, 0);
    background: rgba(247, 230, 181, 0.9);
}
.social1 ul li a {
    line-height: 40px;
    padding: 10px;
    color: #000;
}
.social1 ul li:hover i {
    color: #fbfbfb;
    background: #fbd277;
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
    -webkit-transition: all 1s;
    -moz-transition: all 1s;
    -ms-transition: all 1s;
    -o-transition: all 1s;
    transition: all 1s;
}
.social1 ul li i {
    color: #000;
    background: #fff;
    padding: 10px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    font-size: 20px;
    background: #ffffff;
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
    float : left;
}
    </style>
<div class="preloader text-center">
<div class="la-ball-scale-multiple la-2x">
<div></div>
<div></div>
<div></div>
</div>
</div>


<header class="header_03 isSticky fixedHeader animated slideInDown" style="background-color: #f1c357;">
<div class="container-fluid">
<div class="row">

<div class="col-lg-12 menu-col">
<div class="logo2">
<a href="index.php">
<img src="images/brand/yolo-logo.png" alt="Makeover">
</a>
</div>
<a href="javascript:void(0)" class="menu_btn"><i class="icofont-navigation-menu"></i></a>
<nav class="mainMenu">
<ul>
<li class="current-menu-item"><a href="index.php">Home</a></li>
<li><a href="about.php">About Us</a></li>
<li class="menu-item-has-children">
 <a href="javascript:void(0);">Our Brands</a>
<ul class="sub-menu">
<li><a href="">Maha Unisex Salon</a></li>
<li><a href="yolo.php">Yolo</a></li>
<li><a href="">Thoya</a></li>
</ul>
</li>
<li><a href="training.php">Training Academy</a></li>
</ul>
<div class="logo">
<a href="index.php">
<img src="images/brand/yolo-logo.png" alt="Makeover">
</a>
</div>
<ul>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="franchise.php">Franchise</a></li>
<li><a href="locator.php">Store Locator</a></li>
<li><a href="carrer.php">Career</a></li>
</ul>
</nav>
</div>

</div>
</div>
</header>
