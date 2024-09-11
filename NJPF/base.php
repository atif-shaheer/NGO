<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

<link href="https://fonts.googleapis.com/css2?family=Acme&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/mainec0d.css?v=1726033866">
<script src="../code.jquery.com/jquery-2.2.4.min.js"></script>
<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="css-loader-master/dist/css-loaderec0d.css?v=1726033866">

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
    <link rel="stylesheet" href="css/indexec0d.css?v=1726033866">
    <link rel="stylesheet" href="css/gallery_sliderec0d.css?v=1726033866">
    <link rel="stylesheet" href="css/timeline_sliderec0d.css?v=1726033866">
    <link rel="manifest" href="manifest.json">
</head>
<body>
<button id="problem_btn" type="button" name="button" data-aos="fade-up">आपकी समस्या दर्ज करें</button>
    <a href="https://wa.me/+917318444855" data-aos="fade-up" id="phone_btn" target="_blank" ><img src="../img.icons8.com/color/70/000000/whatsapp--v1.png" alt=""></a>
    <a href="donation.php" id="donation_btn" target="_blank" data-aos="fade-up">Donate</a>
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
.member_slider .carousel-inner .card {
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
            <a href="index.php"><img src="webimg/logo.jpeg"></a>
        </div>
        <div class="website_title">
            <p>नवयान जीवन परिवर्तन फाउंडेशन</p>
            <!--<p>जागृति विकास परिषद (रजि.)</p>-->
        </div>
        <div class="website_social_icon">
            <a href="#" target="_blank"><i class="fa fa-facebook"
            aria-hidden="true"></i></a>
            <a href="#" target="_blank"><i class="fa fa-twitter"
            aria-hidden="true"></i></a>
            <a href="#" target="_blank"><i class="fa fa-instagram"
            aria-hidden="true"></i></a>
            <a href="#" target="_blank"><i class="fa fa-youtube"
            aria-hidden="true"></i></a>
                        <a href="admin-login.php" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
                    </div>
      </div>
    </div>
    <div class="nav-bar" id="nav-bar">
    <div class="sidenav2">
        <div class="navar_small_img"><a href="index.php"><img src="webimg/logo.jpeg"></a>
        <a href="javascript:void(0)" id="close-btn" class="closebtn menu" onclick="closeNav()"><i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
        
        <li class="dropdown">
            <a style="padding:6px!important;margin:0!important;width:100%" href="index.php" class="dropbtn"><i
                    style="padding:0!important;margin:0!important;" class="fa fa-home" aria-hidden="true"></i></a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="users-apply-form.php" class="dropbtn">Member Apply</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="gallery.php" class="dropbtn">Gallery</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="id-card-download.php" class="dropbtn">ID Card Download</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="upcoming-event.php" class="dropbtn">Upcoming Event</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="donation_form.php" class="dropbtn">Donate</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="donars.php" class="dropbtn">List of Donors</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="contact-us.php" class="dropbtn">Contact Us</a>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="javascript:void(0)" class="dropbtn">About Us<i style="margin-top:1.5px!important;" class="fa fa-sort-desc" aria-hidden="true"></i></a>
            <div class="dropdown-content">
                <a href="aboutus.php">About Us</a>
                <a href="management-team.php">Management Team</a>
                <a href="our-team.php">Our Team</a>
            </div>
        </li>
        
        <li class="dropdown">
            <a style="display:flex;" href="javascript:void(0)" class="dropbtn">Important Links<i
                    style="margin-top:1.5px!important;" class="fa fa-sort-desc" aria-hidden="true"></i></a>
            <div class="dropdown-content">
                <a href="crowdfunding.php">Crowdfunding</a>
                <a href="solutions.php">Our Solutions</a>
                <a href="complain-form.php">Your Problems</a>
                <a href="our-project.php">Our Project</a>
            </div>
        </li>

        
        <li class="dropdown">
            <a style="display:flex;" href="javascript:void(0)"  class="dropbtn">Login<i
                    style="margin-top:1.5px!important;" class="fa fa-sort-desc" aria-hidden="true"></i></a>
            <div class="dropdown-content">
                <a href="user-registration.php">User Signup</a>
                                <a href="user-login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
                                <a href="coordinator-login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Coordinator Login</a>
                <a href="admin-login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Admin Login</a>

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
    var urlParts = url.split('index.php');

    // Get the last part of the URL (path name)
    var lastPart = urlParts[urlParts.length - 1];
    
    // Find the corresponding <a> tag with an href attribute equal to the path name
    $('.sidenav2 .dropdown a').each(function() {
        var href = $(this).attr('href');
        var hrefParts = href.split('index.php');
        var hrefLastPart = hrefParts[hrefParts.length - 1];

        // Compare the last part of the href with the last part of the URL
        if (hrefLastPart === lastPart) {
            // If they match, add an "active" class to its parent <li> element
            $(this).closest('li').addClass('active');
        }
    });
});

</script>












</body>
</html>
