<!DOCTYPE html>
<html>
	
<!-- Mirrored from sanatandharmajagruti.in/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2024 05:52:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<title>Photo Gallery</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap%405.0.0-alpha1/dist/css/bootstrap.min.css">
		<script src="../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="../cdn.jsdelivr.net/npm/bootstrap%405.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
		<!-- <link rel="stylesheet" href="css/gallery.css?v=1726033886"> -->
		<link rel="stylesheet" href="css/index2602.css?v=1726033886">
	</head>
	<style>
	.event-heading {
	margin-top: 140px;
	padding-bottom: 10px;
	}
	
	* {
		box-sizing: border-box;
	}
	body {
		font-family: Arial, sans-serif;
		margin: 0;
	}
	h1 {
		text-align: center;
		padding: 20px;
	}
	.gallery_div {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
	
	}
	.gallery  {
	background: #fff;
    margin: 20px 15px 20px;
    border-radius: 15px;
    padding-top: 1px;
    box-shadow: 0px 14px 22px -9px #bbcbd8;
	}
		.gallery_img{
		    	position: relative;
    overflow: hidden;
    border-radius: 10px;
    height: 250px;
		}
	.gallery_img img  {
width: auto;
    height: auto;
    max-height: 94%;
    max-width: 98%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    transition: transform 0.2s linear;
	}
	</style>
	<body>

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
            <a href="index.php"><img src="webimg/logo.jpeg"></a>
        </div>
        <div class="website_title">
            <p>नवयान परिवार सदस्यता अभियान</p>
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

	   <div class="head_item3"><span class="mt-3">Photo Gallery</span></div>

		
		<div class="gallery_div">
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="testinomial-img/s1.jpeg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="testinomial-img/s2.jpeg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="testinomial-img/s3.jpeg">
			</div>
			</div>
						<!-- <div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG-20240116-WA0003_01152024191852.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG-20240117-WA0113_01172024153901.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG-20240117-WA0111_01172024153901.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG-20240117-WA0110_01172024153901.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG-20240117-WA0112_01172024153901.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/Screenshot_2024-01-11-22-47-28-85_a23b203fd3aafc6dcb84e438dda678b6_01212024174352.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG20240122190753_01222024140208.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG20240122190705_01222024140208.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG20240122190701_01222024140208.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG20240122190645_01222024140208.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG20240122190436_01222024140208.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/crafto_1706035770342_01232024184946.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/crafto_1706289536384_01262024172212.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/crafto_1706289528716_01262024172212.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/crafto_1706289476190_01262024172212.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/crafto_1706289450528_01262024172212.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/crafto_1706289431951_01262024172212.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG20240408202719_0492024151656.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG20240408202524_0492024152102.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG20240408202613_0492024152140.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG20240408202537_0492024152140.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG20240602122743_0622024105536.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG20240602121440_0622024110257.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG-20240811-WA0068_08112024171751.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG-20240811-WA0067_08112024171751.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG-20240811-WA0066_08112024171751.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG-20240811-WA0062_08112024171751.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/IMG-20240811-WA0061_08112024171751.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/crafto_1723659656603_08142024182322.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/crafto_1723659645379_08142024182322.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/Happy%20Independence%20Day627_494_08142024182322.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/20240814_233859_08142024182322.jpg">
			</div>
			</div>
						<div class='gallery'>
			<div class='gallery_img'>
			<img class="view-image" src="timeline-img/20240814_233722_08142024182322.jpg">
			</div>
			</div> -->
					</div>
		<div class="preview"></div>
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
		 z-index: 999999;
		 overflow: hidden;
		 display: none;
		 font-family: Tahoma;
	 }
	 .image_preview div{
		 height: 100vh;
		 width: 100%;
		 position: relative;
		 margin:auto;
		 

	 }
	 .image_preview img{
		 width: auto;
		 max-width:95vw;
		 height: auto;
		 max-height:95vh;
		 position: absolute;
		 top: 50%!important;
		 left:50%!important;
		 transform:translate(-50%,-50%)!important;
		 z-index: 999999999;
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
		 box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
		 z-index: 9999999999;
	 }
	 img{
		 cursor: pointer;
	 }
	 .image_preview p:hover{
		 background: #e8524a;
		 color:#fff;
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
<script type="text/javascript">
    function preview() {
        
        $('.preview').html(
            `

		 
		<div class="image_preview">
		 <div class="">
			 <p id="preview_cancel"><i class="fa fa-times" aria-hidden="true"></i></p>
			 <img src="complain_img/Screenshot (2)_0412022140228.png" alt="">
		 </div>
	 </div>
		`
        );
        $(document).on('click', '.view-image', function() {
            var src = $(this).attr('src');
            $('.image_preview img').attr('src', src);
            $('.image_preview').css('display', 'block');
        })
        $(document).on('click', '#preview_cancel', function() {
            $('.image_preview').css('display', 'none');
        })
    }
    preview();

    </script>
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
                                <span> प्रधान कार्यालय :- निकट न्यू पेट्रोल पम्प कटका नूरपुर कला-अम्बेडकर नगर (उ. प्र.) 224139</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">
                            <div class="cta-text">
                                <h4>  <i class="fa fa-phone "></i> &nbsp;Call us</h4>
                                <span>7318444855.   9565977052</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">
                           
                            <div class="cta-text">
                                <h4> <i class="fa fa-envelope "></i> &nbsp;Email </h4>
                                <span>n.Jeevanparivationfoundation@gmail.com</span>
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
                                <a href="index.php"><img src="webimg/logo.jpeg" class="img-fluid"
                                        alt="logo"></a>
                            </div>
                            <!--<div class="footer-text">-->
                            <!--    <p><p><strong>संगठन के बारे में.......</strong><br />
सनातन धर्म जागृति सेना एक � <a style="text-decoration:none;" href="aboutus.php">read more ..</a></p>-->
                            <!--</div>-->
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#" target="_blank"><i
                                        class="fa fa-facebook-f facebook-bg"></i></a>
                                <a href="#" target="_blank"><i
                                        class="fa fa-twitter twitter-bg"></i></a>
                                <a href="#" target="_blank"><i
                                        class="fa fa-instagram google-bg"></i></a>
                                <a href="#" target="_blank"><i
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
                                <li><a href="index.php">Home</a></li>
                                <li><a href="upcoming-event.php">Latest Event</a></li>
                                <li><a href="users-apply-form.php">Member Apply</a></li>
                                <li><a href="donation.php">Donation</a></li>
                                <li><a href="our-team.php">Team&nbsp;Member</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="donars.php">List of Donors</a></li>
                                <li><a href="management-team.php">Management&nbsp;Team</a></li>
                                <li><a href="contact-us.php">Contact&nbsp;Us</a></li>
                                <li><a href="id-card-download.php">ID Card Download</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget my-3">
                            <div class="img_div">
                               <iframe src="index.php" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
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
                            <p>Copyright &copy; 2024, All Right Reserved <a href="index.php">नवयान जीवन परिवर्तन फाउंडेशन</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-lg-block text-center">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Refund Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Mirrored from sanatandharmajagruti.in/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2024 05:52:09 GMT -->
</html>