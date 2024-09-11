<!doctype html>
<html lang="en">


<!-- Mirrored from sanatandharmajagruti.in/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2024 05:51:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

<link href="https://fonts.googleapis.com/css2?family=Acme&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/main8023.css?v=1726033884">
<script src="../code.jquery.com/jquery-2.2.4.min.js"></script>
<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="css-loader-master/dist/css-loader8023.css?v=1726033884">

<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css" integrity="sha512-8D+M+7Y6jVsEa7RD6Kv/Z7EImSpNpQllgaEIQAtqHcI0H6F4iZknRj0Nx1DCdB+TwBaS+702BGWYC0Ze2hpExQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<link rel="stylesheet" href="../cdn.jsdelivr.net/npm/sweetalert2%4011.0.18/dist/sweetalert2.min.css">


<script src="../cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
<script src="../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="../maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="../cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.js" integrity="sha512-Y+cHVeYzi7pamIOGBwYHrynWWTKImI9G78i53+azDb1uPmU1Dz9/r2BLxGXWgOC7FhwAGsy3/9YpNYaoBy7Kzg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="../cdn.jsdelivr.net/npm/sweetalert2%4011.0.18/dist/sweetalert2.min.js"></script>
<script>
function alert_success(title){
    $.toast({
    heading: 'Success',
    text: title,
    showHideTransition: 'slide',
    icon: 'success'
    })
}
function alert_danger(title){
    $.toast({
    heading: 'Error',
    text: title,
    showHideTransition: 'slide',
    icon: 'error'
    })
}
</script>
<style>
    .cke_notifications_area { display: none; }
</style>
      <link rel="stylesheet" href="../unpkg.com/aos%403.0.0-beta.6/dist/aos.css" />
    <link rel="stylesheet" href="css/index8023.css?v=1726033884">
    <link rel="stylesheet" href="css/gallery_slider8023.css?v=1726033884">
    <link rel="stylesheet" href="css/timeline_slider8023.css?v=1726033884">
    <link rel="manifest" href="manifest.json">
</head>

<body>
        <button id="problem_btn" type="button" name="button" data-aos="fade-up">आपकी समस्या दर्ज करें</button>
    <a href="https://wa.me/+919355255407" data-aos="fade-up" id="phone_btn" target="_blank" ><img src="../img.icons8.com/color/70/000000/whatsapp--v1.png" alt=""></a>
    <a href="donation.html" id="donation_btn" target="_blank" data-aos="fade-up">Donate</a>
    <!--=============================================navbar start======================================================-->
    <style>

@import url('https://fonts.googleapis.com/css2?family=Bakbak+One&amp;display=swap');

*{
    padding:0;
    margin:0;
    box-sizing:border-box;
}
.navbar_margin{
    margin-top:120px;
}
body{
    overflow-x:hidden;
}
.main_navbar{
    background:#fff;
    box-shadow: 0px 5px 10px -10px var(--text-color);
}
.navbar_relative{
    height:75px;
}
/*==========================changes here*/
.website_title,.website_social_icon a,.buttons a button{
    color:var(--text-color);
}
.sidenav2,#member_slider_indicators .card,#management_slider_indicators .card{
    background:var(--background-color);
}
/*========================================*/

.card1,
.right-div-p,
.left-div-p,
.buttons button,
.contact-footer,.head_item2,.head_item3 span,
.member_slider .carousel-inner .card, {
background: rgb(41,24,114);
background: linear-gradient(175deg, rgba(41,24,114,1) 50%, rgba(214,36,32,1) 50%);

}

.blur_main_div{
    height:100vh;
    width:100vw;
    position:fixed;
    top:0;
    left:0;
    background:rgba(0,0,0,.7);
    z-index:99999;
    display:none;
}
.main_navbar{
    position:fixed;
    top:0;
    width:100%;
    z-index:9999;
}
.navbar_relative{
    position:relative;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:5px;
}
#menu_toggle_btn{
    display:none;
}
.website_logo{
    margin-left:30px;
 cursor:pointer;
z-index:999;
}
.website_logo img{
  height:65px;

}
.website_title {
    position:absolute;
    top:0;
    left:50%;
    transform:translateX(-50%);
    width:100%;
    text-align:center;
    font-family: 'Bakbak One', sans-serif;
    margin:0;
    padding:0;
    display:flex;
    flex-direction:column;
}
.website_title p{
    font-size:45px;
    font-weight:bold;
    margin-bottom: 0px!important;
}
/*.website_title p:nth-child(2){*/
/*    font-size:18px;*/
    /*margin-top:-38px;*/
/*}*/
.website_social_icon{
    display:flex;
    align-items:center;
    justify-content:center;
    grid-column-gap:12px;
    margin-right:10px;
    z-index:999;
}
.website_social_icon a{
    font-size:25px;
    cursor:pointer;
    transition:all .3s;
}
.website_social_icon a:hover{
    font-size:25px;
    color:rgba(0,0,0,1);
    transition: all .3s;
}
/*=============================*/
.navar_small_img{
    display:none;
    position:relative;
}
.nav-bar {
    /*top: 0;*/
    /*z-index: 111;*/
}

.social_link {
    display: flex;
    justify-content: space-around;
}

.social_link a {
    text-decoration: none;
}

.nav-item img {
    height: 40px;
    width: 40px;
    margin-left: 10px;
    margin-top: 5px;
}

.sidenav2 {
    position: fixed;
    top: 70px;
    display: flex;
    align-items:center;
    justify-content:center;
    flex-wrap:wrap;
    text-align: center;
    padding:0;
    margin:0;
    z-index:99999;
    width:100%;
    color:#fff;
    border-bottom:2px solid #fff;

}

.sidenav2 a {
    padding: 12px 16px;
    text-decoration: none;
    font-size: 15px;
    margin: 0;
    font-weight: 600;
    color: #fff;
    text-align: center;
    transition: 0.3s;

}
.sidenav2 a .fa{
    margin-left:6px;
    text-align:center;
}

.sidenav2 a:hover {
    color: white;

}

.category {
    display: none;
}

.fa-home {
    font-size: 34px!important;
}

/* ========================= */
li a,
.dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 10px 10px 10px !important ;
    text-decoration: none;
}

li a:hover,
.dropdown:hover .dropbtn {
    background-color: rgba(0,0,0,.4);
    color: #fff;
}
li.active .dropbtn{
    background-color: rgba(0,0,0,.4);
    color: #fff;
}
li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right:0;
    background-color: #f9f9f9;
    min-width: 190px;
    box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
    z-index: 999;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown-content i{
    margin-right:8px!important;
}
.dropdown-content a:hover {
    background-color: rgba(0,0,0,.5);

}

.dropdown:hover .dropdown-content {
    display: block;
}


@media only screen and (max-width:768px){
.navbar_relative{
    height:60px;
}
.website_logo img{
    height:55px;
}
.navbar_margin{
    margin-top:61px;
}
.dropdown_open {
   background-color: rgba(0,0,0,.4)important;
    color: #fff!important;
    transition all .3s;
}
.dropdown_open a{
    color:#fff!important;
}
.dropdown_open .dropdown-content a{
    color:#000!important;
    background-color: #fff!important;
    transition all .3s;
}
.dropdown_open_none{
    display:none!important;
}
.navar_small_img{
    display:flex;
    justify-content:space-between;
    padding:10px;
    width:100%;
    color:#000;
    background:#fff;
}

.navar_small_img img{
  height:70px;
 width:auto; 
 margin:0;
 padding:0;
 
}
.sidenav2 {
    position:fixed;
    top:0;
    height:100%;
    width:200px;
    flex-wrap:inherit;
    flex-direction:column;
    justify-content:inherit;
    align-items:start;
    overflow-Y:auto;
    left:-100%;
    z-index:99999;
    transition: all .3s;
}
.sidenav2  .dropdown,.sidenav2 a{
    width:100%;
    text-align:left!important;
    
}
.dropbtn{
    padding-left:15px;
}
.sidenav2 a:hover {
    color: unset;
}
li a:hover,
.dropdown:hover .dropbtn {
    background-color: unset;
    color: unset;
}
.dropdown-content a:hover {
    background-color: rgba(0,0,0,.2)!important;
}
.dropdown:hover .dropdown-content {
    /*display: none;*/  
}

.navar_small_img a{
    color:#000;
    font-size:30px;
    padding:0;
    padding-left:10px;
    text-align:right!important;
}
.dropdown-content {
    display: none;
    position: static;
}


/*=============================*/
#menu_toggle_btn{
    position:absolute;
    display:block;
    top:50%;
    left:10px;
    font-size:20px;
    transform:translateY(-50%);
    color:#000;
    z-index:9999;
}
.website_logo{
    margin-left:30px;
}
.website_title{
    position:static;
    right:10px;
    transform:translate(0,0);
    font-weight:bold;
    width:100%;
    text-align:center;
}
.website_title p{
    font-size:25px;
}
/*.website_title p:nth-child(2){*/
/*    font-size:16px;*/
/*}*/
.website_social_icon{
    display:none;
}
}


</style> 
 
 
<div class="blur_main_div"></div>
  <div class="main_navbar">
      <div class="navbar_relative">
         <i class="fa fa-bars" id="menu_toggle_btn" onclick="openNav()" aria-hidden="true"></i>
        <div class="website_logo">
            <a href="index-2.html"><img src="webimg/LOGO%20_02282024155556.png"></a>
        </div>
        <div class="website_title">
            <p>सनातन धर्म जागृति सेना</p>
            <!--<p>जागृति विकास परिषद (रजि.)</p>-->
        </div>
        <div class="website_social_icon">
            <a href="https://www.facebook.com/profile.php?id=100095516823320" target="_blank"><i class="fa fa-facebook"
            aria-hidden="true"></i></a>
            <a href="https://twitter.com/SDJVP_INDIA" target="_blank"><i class="fa fa-twitter"
            aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/sdjvp_india/" target="_blank"><i class="fa fa-instagram"
            aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/channel/UC8xcbGDJi5UJhTds6IH73yw" target="_blank"><i class="fa fa-youtube"
            aria-hidden="true"></i></a>
                        <a href="admin-login.html" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
                    </div>
      </div>
    </div>
    <div class="nav-bar" id="nav-bar">
    <div class="sidenav2">
        <div class="navar_small_img"><a href="index-2.html"><img src="webimg/LOGO%20_02282024155556.png"></a>
        <a href="javascript:void(0)" id="close-btn" class="closebtn menu" onclick="closeNav()"><i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
        
        <li class="dropdown">
            <a style="padding:6px!important;margin:0!important;width:100%" href="index-2.html" class="dropbtn"><i
                    style="padding:0!important;margin:0!important;" class="fa fa-home" aria-hidden="true"></i></a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="users-apply-form.html" class="dropbtn">Member Apply</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="gallery.html" class="dropbtn">Gallery</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="id-card-download.html" class="dropbtn">ID Card Download</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="upcoming-event.html" class="dropbtn">Upcoming Event</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="donation_form.html" class="dropbtn">Donate</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="donars.html" class="dropbtn">List of Donors</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="contact-us.html" class="dropbtn">Contact Us</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="javascript:void(0)" class="dropbtn">About Us<i style="margin-top:1.5px!important;" class="fa fa-sort-desc" aria-hidden="true"></i></a>
            <div class="dropdown-content">
                <a href="aboutus.html">About Us</a>
                <a href="management-team.html">Management Team</a>
                <a href="our-team.html">Our Team</a>
            </div>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="javascript:void(0)" class="dropbtn">Important Links<i
                    style="margin-top:1.5px!important;" class="fa fa-sort-desc" aria-hidden="true"></i></a>
            <div class="dropdown-content">
                <a href="crowdfunding.html">Crowdfunding</a>
                <a href="solutions.html">Our Solutions</a>
                <a href="complain-form.html">Your Problems</a>
                <a href="our-project.html">Our Project</a>
            </div>
        </li>

        
        <li class="dropdown">
            <a style="display:flex;" href="javascript:void(0)"  class="dropbtn">Login<i
                    style="margin-top:1.5px!important;" class="fa fa-sort-desc" aria-hidden="true"></i></a>
            <div class="dropdown-content">
                <a href="user-registration.html">User Signup</a>
                                <a href="user-login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
                                <a href="coordinator-login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Coordinator Login</a>
                <a href="admin-login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Admin Login</a>

            </div>
        </li>
        
        
    </div>
</div>
<div class="navbar_margin"></div>

<script src="../ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).on('click','.sidenav2 .dropdown',function(){
        if (event.target !== this) {
    $('.dropdown').removeClass('dropdown_open');
    $(this).toggleClass('dropdown_open');
        }
})
$(document).on('click','.sidenav2 .dropdown_open',function(event){

      $(this).find('.dropdown-content').toggleClass('dropdown_open_none')

   
})

function openNav() {
  $(".sidenav2").eq(0).css("left", "0");
  $(".blur_main_div").eq(0).css("display", "inherit");
  $("#open-btn").css("display", "none");
}

function closeNav() {
  $(".sidenav2").eq(0).css("left", "-100%");
  $(".blur_main_div").eq(0).css("display", "none");
  $("#open-btn").css("display", "block");
}

function opensearch() {
  $("#search_div").css("top", "0");
}

function closesearch() {
  $("#search_div").css("top", "-100%");
}

function checkScreenSizeAndExecute() {
  // Check screen width
  const screenWidth = window.innerWidth || document.documentElement.clientWidth;

  // If screen width is less than 768px, perform your action
  if (screenWidth < 768) {
    $(document).on('click', function(e) {
    var sideMenu = $('.sidenav2');
    var toggleBtn = $('#menu_toggle_btn');

    // Check if the click occurred outside the menu and toggle button
    if (!sideMenu.is(e.target) && !toggleBtn.is(e.target) && sideMenu.has(e.target).length === 0) {
      closeNav();
    }
  });
  }
}

// Initial check on page load
checkScreenSizeAndExecute();

// Event listener for window resize
window.addEventListener('resize', checkScreenSizeAndExecute);




</script>
<script>
$(document).ready(function() {
    // Get the current URL and split it by "/"
    var url = window.location.pathname;
    var urlParts = url.split('index.html');

    // Get the last part of the URL (path name)
    var lastPart = urlParts[urlParts.length - 1];
    
    // Find the corresponding <a> tag with an href attribute equal to the path name
    $('.sidenav2 .dropdown a').each(function() {
        var href = $(this).attr('href');
        var hrefParts = href.split('index.html');
        var hrefLastPart = hrefParts[hrefParts.length - 1];

        // Compare the last part of the href with the last part of the URL
        if (hrefLastPart === lastPart) {
            // If they match, add an "active" class to its parent <li> element
            $(this).closest('li').addClass('active');
        }
    });
});

</script>

    <!--=============================================navbar end======================================================-->

    <!--==============================================slider start=======================================================-->
        <div id="carouselExampleIndicators" class="carousel slide main_slider" data-ride="carousel" >
        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators"  data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" ></li>
                            <li data-target="#carouselExampleIndicators"  data-bs-slide-to="1" aria-label="Slide 2" ></li>
                            <li data-target="#carouselExampleIndicators"  data-bs-slide-to="2" aria-label="Slide 3" ></li>
                            <li data-target="#carouselExampleIndicators"  data-bs-slide-to="3" aria-label="Slide 4" ></li>
                            <li data-target="#carouselExampleIndicators"  data-bs-slide-to="4" aria-label="Slide 5" ></li>
                    </ol>

        <div class="carousel-inner">
                            <div class="carousel-item active">
                    <img src="testinomial-img/Screenshot_2024-03-06-21-07-04-80_6012fa4d4ddec268fc5c7112cbb265e7_0362024164141.jpg" class="d-block w-100" alt="...">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="opacity:.1;posiiton:absolute;top:0;left:0;background: var(--background-color);">
                    
                </div>
                    <div class="carousel-caption d-md-block">
                        <h5>सनातन धर्म जागृति सेना </h5>
                        <!--<p></p>-->
                    </div>
                </div>
                            <div class="carousel-item ">
                    <img src="testinomial-img/Shri%20Ram%20Mandir_12272023075723.jpg" class="d-block w-100" alt="...">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="opacity:.1;posiiton:absolute;top:0;left:0;background: var(--background-color);">
                    
                </div>
                    <div class="carousel-caption d-md-block">
                        <h5>Shri Ram</h5>
                        <!--<p></p>-->
                    </div>
                </div>
                            <div class="carousel-item ">
                    <img src="testinomial-img/Image%20SDJVP_12272023075635.jpg" class="d-block w-100" alt="...">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="opacity:.1;posiiton:absolute;top:0;left:0;background: var(--background-color);">
                    
                </div>
                    <div class="carousel-caption d-md-block">
                        <h5>सनातन धर्म जागृति विकास परिषद (रजि.)</h5>
                        <!--<p>सनातन धर्म जागृति विकास परिषद (रजि.)</p>-->
                    </div>
                </div>
                            <div class="carousel-item ">
                    <img src="testinomial-img/20240306_221806_0362024170139.jpg" class="d-block w-100" alt="...">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="opacity:.1;posiiton:absolute;top:0;left:0;background: var(--background-color);">
                    
                </div>
                    <div class="carousel-caption d-md-block">
                        <h5>सनातन धर्म जागृति सेना </h5>
                        <!--<p></p>-->
                    </div>
                </div>
                            <div class="carousel-item ">
                    <img src="testinomial-img/IMG-20240602-WA0149_0622024093045.jpg" class="d-block w-100" alt="...">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="opacity:.1;posiiton:absolute;top:0;left:0;background: var(--background-color);">
                    
                </div>
                    <div class="carousel-caption d-md-block">
                        <h5>सनातन धर्म जागृति सेना </h5>
                        <!--<p>सनातन धर्म जागृति सेना </p>-->
                    </div>
                </div>
                    </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        <!--==============================================slider end=======================================================-->


    <!--==============================================Grid Container Start=======================================================-->
    <div class="grid_container">
        <div class="grid_left_div">
            <div class="right_content_1">
                <div>
                    <div class="head_item3"><span>Recent actvity</span></div>
                    <div class="marquee_parent" data-aos="zoom-in">
                        <div class="marquee_parent_sub">
                            <marquee direction="up" height="250" width="90%" scrollamount="3">
                                                                    <p>स्वतंत्रता दिवस पर हार्दिक शुभकामनाएं </p>
                                                                    <p>मध्य प्रदेश मिटींग </p>
                                                                    <p>जल वितरण कार्यक्रम </p>
                                                                    <p>जल एवं श्रीराम जी के कलैंडर वितरण कार्यक्रम </p>
                                                                    <p>अपरा एकादशी पर मीठा जल वितरण कार्यक्रम </p>
                                                                    <p>भजन संध्या </p>
                                                                    <p>गणतंत्र दिवस की हार्दिक शुभकामनाएं </p>
                                                                    <p>राष्ट्रीय बालिका दिवस की हार्दिक शुभकामनाएं </p>
                                                                    <p>श्रीराम  के अयोध्या मंदिर प्राण प्रतिष्ठा का दीपोत्सव </p>
                                                                    <p>मेरे प्रभु श्रीराम आ रहें हैं।</p>
                                                                    <p>मध्य प्रदेश पदाधिकारी सभा</p>
                                                                    <p>श्रीराम </p>
                                                                    <p>सदस्यता अभियान </p>
                                                                    <p>सनातन धर्म जागृति विकास परिषद (रजि.)</p>
                                                                    <p> NGO Video </p>
                                                            </marquee>
                        </div>
                    </div>
                </div>
                <!--===============================================================-->
                <div class="img_div mt-2" style=" height: auto!important;">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100095516823320&amp;tabs=timeline&amp;width=340&amp;height=331&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="340" height="331" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                <!--===============================================================-->
            </div>
            <div class="content">
                <a href="users-apply-form.html">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80">
                    <div class="content-details">
                        <h3 class="content-title">Member Apply<i class="fa fa-arrow-right arrow"></i></h3>
                    </div>
                </a>
            </div>
            <div class="content">
                <a href="donation_form.html">
                    <div class="content-overlay"></div>
                    <img class="content-image" src="https://images.unsplash.com/photo-1542627088-6603b66e5c54?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2069&amp;q=80">
                    <div class="content-details">
                        <h3 class="content-title">donation<i class="fa fa-arrow-right arrow"></i></h3>
                    </div>
                </a>
            </div>


            
        </div>

        <div class="grid_center_div">
            <!--========================= buttons ===================================-->
            <div class="buttons">

                <a href="users-apply-form.html">
                    <button type="submit" id="member">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>Member Apply
                    </button>
                </a>
                <a href="council_form.html">
                    <button type="submit" id="member">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>Get Certificate
                    </button>
                </a>

                <a href="upcoming-event.html">
                    <button type="submit" id="prog">
                        <i class="fa fa-tasks" aria-hidden="true"></i>Upcoming Events
                    </button>
                </a>
                 <a href="management-team.html">
                    <button type="submit" id="downcard">
                        <i class="fa fa-users" aria-hidden="true"></i>Management Team
                    </button>
                </a>
                <a href="donation_form.html">
                    <button type="submit" id="donate">
                        <i class="fa fa-money" aria-hidden="true"></i>Donate
                    </button>
                </a>

                <a href="crowdfunding.html">
                    <button type="submit" id="crowdfunding">
                        <i class="fa fa-question" aria-hidden="true"></i>Crowd Funding
                    </button>
                </a>
            </div>
            <!--========================================================================-->
            <div class="head_item3"><span>Latest Activity</span></div>
            <div class="center-div" style="margin-bottom:30px;">
                <div class="row d-flex align-items-center justify-content-center timeline_data " >
                </div>
            </div>
        </div>


        <!--========================================================================================================================-->
        <div class="grid_right_div">
            
            <div class="left_content_1">
                

                <!--=======================Management slider==================-->
                <div>
                    <div class="head_item3"><span>Management Team</span></div>
                    <div id="management_slider_indicators" class="carousel slide member_slider" data-ride="carousel" data-aos="zoom-in">
                        <ol class="carousel-indicators" >
                                                            <li data-target="#management_slider_indicators"  data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" ></li>
                                                            <li data-target="#management_slider_indicators"  data-bs-slide-to="5" aria-label="Slide 2" ></li>
                                                            <li data-target="#management_slider_indicators"  data-bs-slide-to="5" aria-label="Slide 3" ></li>
                            
                        </ol>
                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                    <div class="card">
                                        <img class="card-img-top rounded" src="user_img/IMG-20240102-WA0044_0892024010938.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">नमः शिवाय सोनी </h5>
                                            <h5 class="card-title text-center">(राष्ट्रीय अध्यक्ष (कामगार सेना))</h5>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="carousel-item ">
                                    <div class="card">
                                        <img class="card-img-top rounded" src="webimg/Screenshot_2023-12-23-21-09-40-012_com.google.android.apps.photos-edit_12232023154505.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">सुनीता सिंह </h5>
                                            <h5 class="card-title text-center">(राष्ट्रीय अध्यक्ष (दुर्गा शक्ति))</h5>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="carousel-item ">
                                    <div class="card">
                                        <img class="card-img-top rounded" src="webimg/Image_12162023114331.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">ठाकुर एम० पी० सिंह</h5>
                                            <h5 class="card-title text-center">(राष्ट्रीय अध्यक्ष एवं संस्थापक)</h5>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        <a class="carousel-control-prev" href="#management_slider_indicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#management_slider_indicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <a href="management-team.html" class="view_all_btn">View All</a>
                </div>
                
                <!--=======================member slider==================-->
                <div>
                    <div class="head_item3"><span>Member</span></div>
                    <div id="member_slider_indicators"  class="carousel slide member_slider" data-ride="carousel" data-aos="zoom-in">
                        <ol class="carousel-indicators">
                                                            <li data-target="#member_slider_indicators"  data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" ></li>
                                                            <li data-target="#member_slider_indicators"  data-bs-slide-to="5" aria-label="Slide 2" ></li>
                                                            <li data-target="#member_slider_indicators"  data-bs-slide-to="5" aria-label="Slide 3" ></li>
                                                            <li data-target="#member_slider_indicators"  data-bs-slide-to="5" aria-label="Slide 4" ></li>
                                                            <li data-target="#member_slider_indicators"  data-bs-slide-to="5" aria-label="Slide 5" ></li>
                            
                        </ol>
                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                    <div class="card">
                                        <img class="card-img-top rounded" src="userimg/1000045228_09102024152338.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">राकेश सिंह लोधी </h5>
                                            <h5 class="card-title text-center">(जिला महामंत्री - ग्वालियर (म० प्र०))</h5>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="carousel-item ">
                                    <div class="card">
                                        <img class="card-img-top rounded" src="userimg/1000045046_09102024094150.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">नरेन्द्र कुमार पटेल </h5>
                                            <h5 class="card-title text-center">(जिला महामंत्री - दाहोद (गुजरात))</h5>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="carousel-item ">
                                    <div class="card">
                                        <img class="card-img-top rounded" src="userimg/Videoshot_20240818_080435_0992024100839.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Prince Kumar </h5>
                                            <h5 class="card-title text-center">(Member)</h5>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="carousel-item ">
                                    <div class="card">
                                        <img class="card-img-top rounded" src="userimg/c836a7f8-968b-4fab-887e-5f0548940d67_0962024232311.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Jatin Soni</h5>
                                            <h5 class="card-title text-center">(Member)</h5>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="carousel-item ">
                                    <div class="card">
                                        <img class="card-img-top rounded" src="userimg/1000043517_0962024170832.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">बाबू कुमार </h5>
                                            <h5 class="card-title text-center">(जिला संयोजक - फतेहपुर (उ०प्र०))</h5>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        <a class="carousel-control-prev" href="#member_slider_indicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#member_slider_indicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <a href="our-team.html" class="view_all_btn">View All</a>
                </div>
            </div>

        </div>
    </div>
    <!--==============================================Grid Container End=======================================================-->

    <!-- =============================== About Us ================================ -->
    <div class="head_item3"><span>Abouts Us </span></div>

    <div class="row bg-white rounded p-0" style="width:90%;margin:auto;" data-aos="fade-right">
        <div class="col-md-4 about_relative_div">
            <img class=" rounded" src="webimg/LOGO%20_02282024155556.png" alt="">
        </div>
        <div class="col-md-8 p-3 pl-3 pl-md-0">
            <div class="blog-slider__text">
                <p><strong>संगठन के बारे में.......</strong><br />
सनातन धर्म जागृति सेना एक धार्मिक एवं सामाजिक संगठन है, यह सनातन धर्म, संस्कृति और राष्ट्र हित को ध्यान में रखते हुए सनातन धर्म के प्रचार, प्रसार और हिन्दूओं को जागरूक करने का कार्य करता है।<br />
सनातन धर्म जागृति सेना सम्पूर्ण भारत वर्ष में निवास करने वाले सभी सनातनीयो ( हिन्दूओं) को एकता के सूत्र में पिरोकर उनमें आपसी सम्बन्धों को बल प्रदान करना एवं देश के सभी सनातनी भाईयों का एक दूसरे से परिचित कराना है, साथ ही अपने आत्मीय जनों को धार्मिक एवं सामाजिक रूप से जागरूक करते हुए उन्हें अपने धर्म एवं राष्ट्र विरोधियों के षड्यंत्रों से परिचित कराते हुए अपने भारत वर्ष के स्वर्णिम इतिहास एवं संस्कृति के महत्व को पुनः स्थापित करना है।</p>

<p><strong>संगठन के मुख्य कार्य</strong><br />
1. हिंदू समाज की गरीब लड़कियों की शादी कराना।<br />
2. हिंदू समाज के दिव्यांग लोगों की सहायता करना।<br />
3. हिंदू धर्म के प्रमुख त्यौहार सभी के साथ मिलकर मनना।<br />
4. हिंदू समाज के गरीब बच्चों को ड्रेस, कॉपी, पेंसिल, जुराब एवं जूते आदि उपलब्ध कराना।<br />
5. राष्ट्रीय पर्व 15 अगस्त, 26 जनवरी व अन्य राष्ट्रीय पर्व का आयोजन करना।<br />
6. भारतवर्ष के महापुरुषों और शहीदों की जयंती मनाना।<br />
7. समय-समय पर हिंदुओं को जागृत करने के लिए सम्मेलन का आयोजन करना।<br />
8. धर्म परिवर्तन के विरोध में हिंदुओं को जागृत करना।<br />
9. देश में रह रहे अवैध रूप से घुसपैठियों को जल्द से जल्द उनको देश भेजने के लिए समय-समय पर आवाज उठाना।<br />
10. सी.ए.ए, एन.आर.सी. जैसे कानूनों का समर्थन करना।<br />
11. देश में जनसंख्या नियंत्रण पर सख्त कानून बनाने के लिए समय-समय पर आंदोलन करके सरकार से संसद में बिल बनाने की मांग करना ।<br />
12. समय-समय पर ब्लड डोनेशन कैंप लगाना, मेडिकल कैंप लगाकर निशुल्क दवाइयों का वितरण करना।</p>

<p><strong>संगठन के लक्ष्य</strong><br />
1. हिन्दू राष्ट्र हमारा लोकतांत्रिक अधिकार है।<br />
2. आतंकवाद व कट्टरवाद का कड़ा विरोध करना।<br />
3. हिन्दुस्तान में केवल हिन्दुओं को नागरिक अधिकार व मताधिकार शासकीय प्रशासकीय नौकरियों में अचल सम्पत्ति रखने खरीदने व बेचने का अधिकार केवल हिन्दुओं को ही होना चाहिए।<br />
4. निःशुल्क व समान शिक्षा, निःशुल्क स्वास्थ्य संगठन स्वास्थ्य सेवाओं की व्यवस्था की जायेगी।<br />
5. धर्म परिवर्तन पर कानूनी प्रतिबन्ध/विदेशी धार्मिक प्रचार व आर्थिक सहायता पर प्रतिबन्ध लगाया जायेगा।<br />
6. शीघ सुलभ न्याय की निःशुल्क व्यवस्था की जायेगी।<br />
7. जाति विहीन समाज की रचना करना।<br />
8. दहेज प्रथा की समाप्ति व स्त्रियों के मान सम्मान की रक्षा करना व सुरक्षा उपलब्ध कराना।<br />
9. गौहत्या पर सम्र्पूण भारत वर्ष में पूर्ण प्रतिबन्ध।<br />
10. हिन्दू धार्मिक स्थलों का पुरात्व विभाग की सूचीनुसार पुनः निर्माण को मान्यता देना।<br />
11. भ्रष्टाचार को जड़ से समाप्त करना।<br />
12. देशद्रोह व असभ्य अपराध पर कठोर कानून लाना के लिये।<br />
13. वक्फ बोर्ड जैसे काले कानून को समाप्त करना चाहिए क्योंकि यह हिन्दूओं की जमीन को बिना कागज दिखायें ले सकता है, लेकिन हिन्दूओं के पास जमीन के कागज होने के बावजूद उस कागज का कोई महत्व नहीं है और वह अपनी जमीन के लिए न्यालय भी नहीं जा सकता है, इसलिए अपने आने वाले बच्चों एवं अपनी सम्मति बचाने के लिए संगठन इस काले कानून को हटाने के लिए पूर्ण प्रयास करेंगे ।<br />
14. मुस्लिम समुदाय को अल्पसंख्यक के साथ पिछड़ा वर्ग का दोहरा फायदा मिल रहा है, लेकिन हिन्दूओं को सिर्फ अल्पसंख्यक या पिछड़ा वर्ग एक ही फायदा मिल रहा है, जिससे अल्पसंख्यक हिन्दूओं के समानता के अधिकार का हनन हो रहा है, संगठन की कोशिश रहेगी कि या तो अल्पसंख्यक हिन्दूओं को भी दोनों अधिकार मिले अथवा मुस्लिम समुदाय को भी एक ही वर्ग का फायदा मिले।<br />
15. हिंदू समाज को मजबूत करना हिंदू जीवन दर्शन और आध्यात्म की रक्षा, संवर्द्धन और प्रचार विदेशों में रहनेवाले हिंदुओं से तालमेल रखना, हिंदू और हिंदुत्व की रक्षा के लिए उन्हें संगठित करना और मदद करना।</p>

<p><strong>सनातन धर्म वीर के कर्म</strong><br />
1. आपस में एक दूसरे से मिलने पर जय जय श्री राम कहकर अभिवादन करना।<br />
2. बैठक से पूर्व गायत्री मंत्र का उदघोष करना।<br />
3. प्रत्येक सनातन धर्म वीर व पदाधिकारी का प्राथमिक सदस्य ज़रुरी होना।<br />
4. हिन्दुस्तान की एकता अखण्डता में पूर्ण विश्वास।<br />
5. संगठन के प्रति पूर्ण निष्ठा व पदाधिकारियों पर पूर्ण विश्वास कर उनके आदेशों का पालन करना।<br />
6. दहेज रहित व जाति विहीन समाज की रचना करना।<br />
7. माता-पिता तथा गुरू की आज्ञा का पालन व सम्मान करना।<br />
8. आपस में निन्दा चुगली का त्याग कर हिन्दूओं को सम्मान देना व निर्भीक रहना।<br />
9. धार्मिक उत्सवों को मनाना व उनमें भाग लेना, अपने क्षेत्र के मन्दिरों की रक्षा करना।<br />
10. केवल हिन्दूओं को अपना अभिन्न मित्र बनाना।<br />
11. समाज में बढ़ रही कुरीतियों को दूर करना समाज में अन्धविश्वास व आडम्बरों का विरोध करना।</p>
            </div>
            <a href="aboutus.html" class="blog-slider__button">READ MORE</a>
        </div>
    </div>
    <!-- =============================== President Message ================================ -->
    <div class="head_item3 mt-4"><span>President Message </span></div>

    <textarea hidden id="pre_content"><p>सनातन धर्म जागृति सेना, सनातन धर्म जागृति विकास परिषद (रजि०) द्वारा संचालित राष्ट्रीय हिन्दू धार्मिक एवं सामाजिक संगठन है, इसका उद्देश्य सनातन धर्म एवं संस्कृति के प्रति लोगों को जागृत करना, सनातन को जन-जन तक पहुंचाना और समाज में फैली कुरीतियों को दूर करना है इसलिये सभी हिन्दू भाइयों और बहनों से निवेदन है कि राष्ट्र निर्माण एवं हिन्दुओं के सम्मान के लिये और समाज में सोये हुए हिन्दूओं को जगाने के लिये सनातन धर्म जागृति सेना के सदस्य बनें।</p>

<p><strong>ठाकुर एम० पी० सिंह<br />
<em>राष्ट्रीय अध्यक्ष एवं संस्थापक<br />
सनातन धर्म जागृति सेना&nbsp;</em></strong></p>
</textarea>
    <div class="row bg-white rounded p-0" style="width:90%;margin:auto;" data-aos="fade-right">
        <div class="col-md-4 p-0 about_relative_div">
            <img class=" rounded" src="webimg/president_12132023112057.jpg" alt="">
        </div>
        <div class="col-md-8 p-3 pl-3 pl-md-0">
            <div class="" id="pre_msg">
                <p>सनातन धर्म जागृति सेना, सनातन धर्म जागृति विकास परिषद (रजि०) द्वारा संचालित राष्ट्रीय हिन्दू धार्मिक एवं सामाजिक संगठन है, इसका उद्देश्य सनातन धर्म एवं संस्कृति के प्रति लोगों को जागृत करना, सनातन को जन-जन तक पहुंचाना और समाज में फैली कुरीतियों को दूर करना है इसलिये सभी हिन्दू भाइयों और बहनों से निवेदन है कि राष्ट्र निर्माण एवं हिन्दुओं के सम्मान के लिये और समाज में सोये हुए हिन्दूओं को जगाने के लिये सनातन धर्म जागृति सेना के सदस्य बनें।</p>

<p><strong>ठाकुर एम० पी० सिंह<br />
<em>राष्ट्रीय अध्यक्ष एवं संस्थापक<br />
सनातन धर्म जागृति सेना&nbsp;</em></strong></p>
            </div>
        </div>
    </div>

    <!-- ===============================Our Objective start ================================ -->
    <div class="head_item3 mt-4"><span>Our Objectives </span></div>
    <a >
        <div class="motive">
                            <div class="img" data-aos="zoom-in" onClick="window.location.href='motive48f8.html?motive_id=657c341db3030'">
                    <div class="motive_img_div">
                     <img src="motive-img/ram-bhagwan-png_12152023111021.png">
                    </div>
                    <p>Protection of Religious</p>
                </div>
                            <div class="img" data-aos="zoom-in" onClick="window.location.href='motivee37a.html?motive_id=6447c4e97e4cf'">
                    <div class="motive_img_div">
                     <img src="motive-img/Social%20Welfare_04252023121745.jpg">
                    </div>
                    <p>Social Welfare</p>
                </div>
                            <div class="img" data-aos="zoom-in" onClick="window.location.href='motive7cda.html?motive_id=6447c4c9b1c82'">
                    <div class="motive_img_div">
                     <img src="motive-img/Health%20%26%20Research_04252023121713.jpg">
                    </div>
                    <p>Health & Research</p>
                </div>
                            <div class="img" data-aos="zoom-in" onClick="window.location.href='motiveac44.html?motive_id=6447c4a2f3b73'">
                    <div class="motive_img_div">
                     <img src="motive-img/Education%20%26%20Training_04252023121634.jpg">
                    </div>
                    <p>Education & Training</p>
                </div>
                            <div class="img" data-aos="zoom-in" onClick="window.location.href='motivec24b.html?motive_id=6447c46a7a6db'">
                    <div class="motive_img_div">
                     <img src="motive-img/Human%20Rights_04252023121538.jpg">
                    </div>
                    <p>Human Rights</p>
                </div>
                            <div class="img" data-aos="zoom-in" onClick="window.location.href='motive2050.html?motive_id=6447c44237153'">
                    <div class="motive_img_div">
                     <img src="motive-img/Anti%20Crime_04252023121458.jpg">
                    </div>
                    <p>Anti Crime</p>
                </div>
                    </div>
    </a>
    <!--====================================Youtube Videos====================-->
                <div class="head_item3 mt-4"><span>Youtube Videos </span></div>

        <div class=" youtube_div">
            <div class="row_youtube row m-0">
                <div class="youtube_div2 col-md-6">
                    <div class=" youtube_2 ">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/_4fn9UFYR50" frameborder="0" allowfullscreen></iframe>                    </div>
                </div>
                <div class="youtube_div2 col-md-6">
                    <div class=" youtube_2">
                         <iframe width="560" height="315" src="https://www.youtube.com/embed/hIVFhOxv35A" frameborder="0" allowfullscreen></iframe>                    </div>
                </div>
            </div>
        </div>
        <!--==============================================Gallery And Testinomailas=======================-->
    <!-- start count stats -->
<!-- ==================================CSS ====================================================== -->
<!-- ==================================CSS ====================================================== -->
<!-- ==================================CSS ====================================================== -->
<style media="screen">
@import url(https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700);
@import url(../maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css);

body {}

/*/ start count stats /*/

section#counter-stats {
    display: flex;
    justify-content: center;
    margin-top: 100px;
    /* background: #E7E9EB; */
    height: auto;
    padding-top: 30px;
    margin-bottom: 40px;
}

.stats {
    text-align: center;
    font-size: 35px;
    font-weight: 700;
    font-family: 'Montserrat', sans-serif;
}

.stats .fa {
    color: rgba(238, 114, 2, 1);
    font-size: 60px;
}

/*/ end count stats /*/
</style>
<style media="screen">
@import "https://fonts.googleapis.com/css?family=Open+Sans:800&amp;display=swap";

.main_slider_2 {
    width: 100%;
    margin: 0;
    padding: 0;
    font-family: open sans;
    height:330px;
    background: #f8f8f8;
}

.testimonial h3 {
    text-align: center;
    margin: 6% auto;
    font-size: 1.8rem;
    font-weight: 800;
    color: #444;
}

#test_head {
    margin: 20px 0px;
}

.main_slider_2 .slider {
    display: flex;
    height: auto;
    max-height: auto;
    overflow-y: hidden;
    overflow-x: scroll !important;
    padding: 16px;
    transform: scroll(calc(var(--i, 0)/var(--n)*-100%));
    scroll-behavior: smooth;
}
.main_slider_2  .slide{
    height:300px;
    width:300px;
    position:relative;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}
.main_slider_2 
.slider::-webkit-scrollbar {
    height: 5px;
    width: 150px;
    display: none;
}

.main_slider_2r::-webkit-scrollbar-track {
    background: transparent;
}

.main_slider_2r::-webkit-scrollbar-thumb {
    /* background: #888; */
}

.main_slider_2r::-webkit-scrollbar-thumb:hover {
    /* background: #555; */
}

.main_slider_2r img:hover {
    transform: scale(1.05);
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.15);
}

.main_slider_2 {

    position: relative;
}

.main_slider_2 .slide img {
    height:auto;
    width:auto;
    max-height:95%;
    max-width:95%;
    border-radius: 5px;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    cursor: pointer;
    transition: .25s ease-in-out;
}

.control-prev-btn {
    position: absolute;
    top: 26%;
    left: 0;
    background-color: rgba(255, 255, 255, 0.55);
    height: 100px;
    line-height: 100px;
    width: 45px;
    text-align: center;
    box-shadow: 0 1px 3px #888;
    user-select: none;
    color: #444;
    cursor: pointer;
}

.control-next-btn {
    position: absolute;
    top: 26%;
    right: 0;
    background-color: rgba(255, 255, 255, 0.55);
    height: 100px;
    line-height: 100px;
    width: 45px;
    text-align: center;
    box-shadow: 0 1px 3px #888;
    user-select: none;
    color: #444;
    cursor: pointer;
}

.main_slider_2 img.zoomed {
    width: 500px;
    height: auto;
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: 1000;
    /* transform: scale(1) translatey(0) !important; */

}

.overlay {
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, .45);
    top: 0;

    display: none;
}

.overlay.active {
    display: block;
}

@media only screen and (max-width: 420px) {
    .main_slider_2r {
        padding: 0;
    }

    .main_slider_2 {
        padding: 16px 10px;
    }

    .main_slider_2 img {
        margin: 0;
    }

    .control-prev-btn {
        top: 37%;
    }

    .control-next-btn {
        top: 37%;
    }
}
</style>
<style media="screen">
.testimonial {
    border-right: 4px solid var(--text-color);
    /* box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2); */
    padding: 30px 30px 30px 130px;
    margin: 0 15px 30px 15px;
    overflow: hidden;
    position: relative;
    min-height: 250px;
    background-color: #fff;
    border-radius: 10px;
}

.testimonial:before {
    content: "";
    position: absolute;
    bottom: -4px;
    left: -17px;
    border-top: 25px solid var(--text-color);
    border-left: 25px solid transparent;
    border-right: 25px solid transparent;
    transform: rotate(45deg);
}

.testimonial:after {
    content: "";
    position: absolute;
    top: -4px;
    left: -17px;
    border-top: 25px solid var(--text-color);
    border-left: 25px solid transparent;
    border-right: 25px solid transparent;
    transform: rotate(135deg);
}

.testimonial .pic {
    display: inline-block;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    position: absolute;
    top: 60px;
    left: 20px;
}

.testimonial .pic img {
    width: 100%;
    height: auto;
}

.testimonial .description {
    font-size: 15px;
    letter-spacing: 1px;
    color: #6f6f6f;
    line-height: 25px;
    margin-bottom: 15px;
}

.testimonial .title {
    display: inline-block;
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--text-color);
    margin: 0;
}

.testimonial .post {
    display: inline-block;
    font-size: 17px;
    color: #0F0F7E;
    font-style: italic;
}

.owl-theme .owl-controls .owl-page span {
    border: 2px solid var(--text-color);
    background: #fff !important;
    border-radius: 0 !important;
    opacity: 1;
}

.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls .owl-page:hover span {
    background: var(--background-color)!important;
    border-color: var(--text-color);
}

@media only screen and (max-width: 767px) {
    .main_slider_2 .slider{
        gap:20px;
    }
    .testimonial {
        padding: 20px;
        text-align: center;
    }

    .testimonial .pic {
        display: block;
        position: static;
        margin: 0 auto 15px;
    }
}
</style>

<!-- ==================================CSS ====================================================== -->
<!-- ==================================CSS ====================================================== -->
<!-- ==================================CSS ====================================================== -->

<!-- ================================================================================== -->
<!-- ================================================================================== -->
<!-- ================================================================================== -->
   <div class="preview">
    </div>
<div class="head_item3 mt-4" style="margin-bottom:-100px!important;margin-top:50px!important;"><span>Gallery </span></div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div id="news-slider" class="owl-carousel">
                 <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/cow_12112023102043.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/1cow_12112023102043.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/1000015152_12312023164652.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG-20240116-WA0003_01152024191852.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG-20240117-WA0113_01172024153901.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG-20240117-WA0111_01172024153901.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG-20240117-WA0110_01172024153901.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG-20240117-WA0112_01172024153901.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/Screenshot_2024-01-11-22-47-28-85_a23b203fd3aafc6dcb84e438dda678b6_01212024174352.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG20240122190753_01222024140208.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG20240122190705_01222024140208.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG20240122190701_01222024140208.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG20240122190645_01222024140208.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG20240122190436_01222024140208.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/crafto_1706035770342_01232024184946.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/crafto_1706289536384_01262024172212.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/crafto_1706289528716_01262024172212.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/crafto_1706289476190_01262024172212.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/crafto_1706289450528_01262024172212.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/crafto_1706289431951_01262024172212.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG20240408202719_0492024151656.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG20240408202524_0492024152102.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG20240408202613_0492024152140.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG20240408202537_0492024152140.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG20240602122743_0622024105536.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG20240602121440_0622024110257.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG-20240811-WA0068_08112024171751.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG-20240811-WA0067_08112024171751.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG-20240811-WA0066_08112024171751.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG-20240811-WA0062_08112024171751.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/IMG-20240811-WA0061_08112024171751.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/crafto_1723659656603_08142024182322.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/crafto_1723659645379_08142024182322.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/Happy%20Independence%20Day627_494_08142024182322.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/20240814_233859_08142024182322.jpg" alt="">
          </div>
        </div>
                <div class="post-slide">
          <div class="post-img">
            <img src="timeline-img/20240814_233722_08142024182322.jpg" alt="">
          </div>
        </div>
              </div>
    </div>
  </div>
</div>

<div class="overlay"></div>

<!-- ================================================================================== -->
<!-- ================================================================================== -->

<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

<div class="head_item3 mt-4"><span>Testimonials </span></div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
                                <div class="testimonial">
                    <div class="pic">
                        <img src="testinomial-img/IMG_20240227_171309_0422024140000.jpg">
                    </div>
                    <p class="description">आपके संगठन में विशेष योगदान के लिए हार्दिक अभिनन्दन।</p>
                    <h3 class="title">देवी लाल रावत जी </h3>
                    <small class="post">- प्रदेश अध्यक्ष - मध्य प्रदेश </small>
                </div>
                                <div class="testimonial">
                    <div class="pic">
                        <img src="testinomial-img/IMG-20240102-WA0044_0162024095520.jpg">
                    </div>
                    <p class="description">आपके संगठन में विशेष योगदान के लिए हार्दिक अभिनन्दन।</p>
                    <h3 class="title">नमः शिवाय सोनी जी </h3>
                    <small class="post">- राष्ट्रीय नियुक्ति प्रभारी </small>
                </div>
                            </div>
        </div>
    </div>
</div>







<script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
</script>

<script>
$(document).ready(function() {
    $("#testimonial-slider").owlCarousel({
        items: 2,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [990, 2],
        itemsTablet: [768, 1],
        pagination: true,
        navigation: false,
        navigationText: ["", ""],
        slideSpeed: 1000,
        autoPlay: true
    });
});
</script>
<!-- ================================================================================== -->
<!-- ================================================================================== -->
<!-- ================================================================================== -->
<script type="text/javascript">
// number count for stats, using jQuery animate

$('.counting').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');

    $({
        countNum: $this.text()
    }).animate({
            countNum: countTo
        },

        {

            duration: 3000,
            easing: 'linear',
            step: function() {
                $this.text(Math.floor(this.countNum));
            },
            complete: function() {
                $this.text(this.countNum + '+');
                //alert('finished');
            }

        });


});

function prev() {
    document.getElementById('slider-container').scrollLeft -= 270;
}

function next() {
    document.getElementById('slider-container').scrollLeft += 270;
}


// $(".slide img").on("click", function() {
//     $(this).toggleClass('zoomed');
//     $(".overlay").toggleClass('active');
// })
// $(".overlay").on("click" , function(){
// 	$(".overlay").hide();
// })



    function preview() {
        
        $('.preview').html(
            `
		<style>
		.image_preview{
		 position: fixed;
		 top: 50%;
		 left: 50%;
		 transform:translate(-50%,-50%);
		 height: 100vh;
		 width: 100vw;
		 background: rgba(0,0,0,.9);
		 box-shadow: 0px 0px 5px 1px lightgray;
		 border-radius: 10px;
		 z-index: 999;
		 overflow: hidden;
		 display: none;
		z-index: 999999999999;
	 }
	 .image_preview div{
		 height: 100%;
		 width: 100%;
		 position: relative;
		 margin:auto;
		 overflow-y:auto;


	 }
	 .image_preview img{
		 width: 50%;
		 height: auto;
		 position: absolute;
		 top: 20px;
		 left:50%;
		 transform:translatex(-50%);
		 z-index: 99999999999;
	 }
	 .image_preview p{
	    position:fixed;
	    top:30px;
	    right:30px;
		 display:flex;
		 align-items:center;
		 justify-content:center;
		 height:50px;
		 width:50px;
		 background: rgb(255,255,255);
		 border-radius:50%;
		 text-align: center;
		 color: #000;
		 font-size: 25px;
		 transition: .3s;
		 cursor: pointer;
		 z-index: 9999999999999;
	 }
	 img{
		 cursor: pointer;
	 }
	 .image_preview p:hover{
		 background: #e8524a;
		 transition: .3s;
	 }
	 @media only screen and (max-width:700px){
	     .image_preview img{
		 width: 90%;
		 top:80px;
		 height: auto;
		 position: absolute;
		 
	 }
	 }
		</style>
		 
		<div class="image_preview">
		 <div class="">
			 <p id="preview_cancel">x</p>
			 <img src="complain_img/Screenshot (2)_0412022140228.png" alt="">
		 </div>
	 </div>
		`
        );
        $(document).on('click', '#gallery_slider img', function() {
            var src = $(this).attr('src');
            $('.image_preview img').attr('src', src);
            $('.image_preview').css('display', 'block');
        })
        $(document).on('click', '#preview_cancel', function() {
            $('.image_preview').css('display', 'none');
        })
    }
    preview();
   $(document).ready(function() {
    $("#news-slider").owlCarousel({
        items : 3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true
    });
});
</script>



</body>


<!-- Mirrored from sanatandharmajagruti.in/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2024 05:52:00 GMT -->
</html>
<style type="text/css">
ul {
    margin: 0px;
    padding: 0px;
}
.contact-footer .container{
    margin-bottom:0!important;
    margin-top:0!important;
    padding:0!important;
}
.footer-section {
    background: rgba(0,0,0,.8);
    position: relative;
    text-align: center;
}

.footer-cta {
    border-bottom: 1px solid var(--text-color);
}

.single-cta i {
    color: #fff;
    font-size: 20px;
    float: ;
    margin-top: 8px;
}

.cta-text {
    padding-left: 15px;
    display: inline-block;
    /*margin-bottom:10px;*/
}

.cta-text h4 {
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 2px;
}

.cta-text span {
    color: #fff;
    font-size: 15px;
}

.footer-content {
    position: relative;
    z-index: 2;
}

.footer-pattern img {
    position: absolute;
    top: 0;
    left: 0;
    height: 330px;
    background-size: cover;
    background-position: 100% 100%;
}

.footer-logo {
    margin-bottom: 30px;
}

.footer-logo img {
    max-width: 150px;
}

.footer-text p {
    margin-bottom: 14px;
    font-size: 16px;
        text-align: justify;

    color: #7e7e7e;
    line-height: 28px;
}

.footer-social-icon span {
    color: #fff;
    display: block;
    font-size: 20px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 20px;
}

.footer-social-icon a {
    color: #fff;
    font-size: 16px;
    margin-right: 15px;

}

.footer-social-icon i {
    height: 40px;
    width: 40px;
    text-align: center;
    line-height: 38px;
    border-radius: 50%;
}

.facebook-bg {
    background: #3B5998;
}

.twitter-bg {
    background: #55ACEE;
}

.google-bg {
    background: #DD4B39;
}

.footer-widget-heading h3 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 40px;
    position: relative;
}

.footer-widget .img_div {
    display: block;
    margin: auto;
}

.img_div iframe {
  
    height: 400px !important;
}

.footer-widget-heading h3::before {
    content: "";
    position: absolute;
    left: 45%;
    bottom: -15px;
    height: 2px;
    width: 50px;
    background: #fff;
}

.footer-widget ul li {
    display: inline-block;
    float: left;
     text-align: left;
    width: 50%;
    /* margin-bottom: 12px; */
}

.footer-widget ul li a:hover {
    color: #fff;
}

.footer-widget ul li a {
    color: #fff;
    font-size: 16px;
    text-transform: capitalize;
    padding:5px 10px!important;
}

.subscribe-form {
    position: relative;
    overflow: hidden;
}

.subscribe-form input {
    width: 100%;
    padding: 14px 28px;
    background: #2E2E2E;
    border: 1px solid #2E2E2E;
    color: #fff;
}

.subscribe-form button {
    position: absolute;
    right: 0;
    background: var(--text-color);
    padding: 13px 20px;
    border: 1px solid var(--text-color);
    top: 0;
}

.subscribe-form button i {
    color: #fff;
    font-size: 22px;
    transform: rotate(-6deg);
}

.copyright-area {
    background: #202020;
    padding: 5px 0;
    height:auto;
    display:flex;
    align-items:center;
}

.copyright-text p {
    margin: 0;
    font-size: 14px;
    color: #fff;
}

.copyright-text p a {
    color: var(--text-color);
}

.footer-menu li {
    display: inline-block;
    /* margin-left: 20px; */
}

.footer-menu li:hover a {
    color: #fff;
}

.footer-menu li a {
    font-size: 14px;
    color: #fff;
    padding:2px 10px!important;
}

.footer_last {
    background: #000;
    color: #fff;
    margin: 0;
    padding: 8px;
    text-align: left !important;
}

.footer_last p {
    text-align: left;
    padding: 0;
    margin: 0;
    font-size: 12px;
}

.footer_last a {
    text-decoration: none;
    cursor: pointer;
}
</style>
<div class=" contact-footer ">
        <footer class="footer-section">
        <div class="container-fluid " style=' width: 90%;
    display: block;
    margin: auto;'>
            <div class="footer-cta pt-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">
                            <div class="cta-text">
                                <h4> <i class="fa fa-map-marker"></i> &nbsp;Address</h4>
                                <span> A - 289, Gali No. - 8, Keshav Nagar, New Delhi - 110036</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">
                            <div class="cta-text">
                                <h4>  <i class="fa fa-phone "></i> &nbsp;Call us</h4>
                                <span>+919999225407, +919999225408</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">
                           
                            <div class="cta-text">
                                <h4> <i class="fa fa-envelope "></i> &nbsp;Email </h4>
                                <span>sanatandharmajagruti@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content  ">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget my-3">
                            <div class="footer-logo">
                                <a href="index-2.html"><img src="webimg/LOGO%20_02282024155556.png" class="img-fluid"
                                        alt="logo"></a>
                            </div>
                            <!--<div class="footer-text">-->
                            <!--    <p><p><strong>संगठन के बारे में.......</strong><br />
सनातन धर्म जागृति सेना एक � <a style="text-decoration:none;" href="aboutus.php">read more ..</a></p>-->
                            <!--</div>-->
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="https://www.facebook.com/profile.php?id=100095516823320" target="_blank"><i
                                        class="fa fa-facebook-f facebook-bg"></i></a>
                                <a href="https://twitter.com/SDJVP_INDIA" target="_blank"><i
                                        class="fa fa-twitter twitter-bg"></i></a>
                                <a href="https://www.instagram.com/sdjvp_india/" target="_blank"><i
                                        class="fa fa-instagram google-bg"></i></a>
                                <a href="https://www.youtube.com/channel/UC8xcbGDJi5UJhTds6IH73yw" target="_blank"><i
                                        class="fa fa-youtube google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget my-3">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="upcoming-event.html">Latest Event</a></li>
                                <li><a href="users-apply-form.html">Member Apply</a></li>
                                <li><a href="donation.html">Donation</a></li>
                                <li><a href="our-team.html">Team&nbsp;Member</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="donars.html">List of Donors</a></li>
                                <li><a href="management-team.html">Management&nbsp;Team</a></li>
                                <li><a href="contact-us.html">Contact&nbsp;Us</a></li>
                                <li><a href="id-card-download.html">ID Card Download</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget my-3">
                            <div class="img_div">
                               <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100095516823320&amp;tabs=timeline&amp;width=340&amp;height=331&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="340" height="331" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2024, All Right Reserved <a href="index-2.html">सनातन धर्म जागृति सेना</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-lg-block text-center">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="term_condition.html">Terms & Condition</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="disclaimer.html">Disclaimer</a></li>
                                <li><a href="refund_policy.html">Refund Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="footer_last">
    <p>Website Designed By - <a href="https://fragron.com/"> Fragron Infotech, Mob. - 7000131032</a></p>
</div>    <script src="app8023.js?v=1726033884"></script>
    <script>
        function loadTable() {
            $.ajax({
                url: "ajax/ajax-timeline-load.php",
                type: "POST",
                success: function(data) {
                    $('.timeline_data').html(data);
                }
            });
        }
        loadTable();
         $(document).on("click", ".delete_cmt", function(e) {
            var id = $(this).attr('data-cmt_id');
            var conf = confirm('Do you want to delete this comment?');
            if (conf == true) {
                $.ajax({
                    url: "ajax/delete_comment.php",
                    type: 'post',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        if (data == 1) {
                            loadTable();
                        }
                    }
                });
            }
        });

        $('#problem_btn').click(function() {
            window.location.href = "complain-form.html";
        });
        $(document).on('click', '.timeline_data img', function() {
            var Event_id = $(this).attr('data-id');
            $(`#${Event_id}`).submit();
        });
        $(document).on('click', '.timeline_data .timeline_img', function() {
            var Event_id = $(this).attr('data-id');
            $(`#${Event_id}`).submit();
        });
        // about us read more
        function read_less() {
            var len = $('#pre_content').text().length;
            if (len > 1000) {
                $('#pre_msg').html($('#pre_content').text().substr(0, 800) + '...' + '<a class="blog-slider__button mt-5 text-white" onclick="read_more()" style="cursor:pointer;">READ MORE</a>');
            }
        }

        function read_more() {
            $('#pre_msg').html($('#pre_content').text() + '<a class="blog-slider__button mt-5 text-white" onclick="read_less()" style="cursor:pointer;">READ LESS</a>')
        }
        read_less();
    </script>
    <script src="../unpkg.com/aos%403.0.0-beta.6/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

</body>

</html>
