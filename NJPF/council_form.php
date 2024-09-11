<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from sanatandharmajagruti.in/council_form.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2024 05:52:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title> Certificate  Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

<link href="https://fonts.googleapis.com/css2?family=Acme&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/main5342.css?v=1726033893">
<script src="../code.jquery.com/jquery-2.2.4.min.js"></script>
<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="css-loader-master/dist/css-loader5342.css?v=1726033893">

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
    <link rel="stylesheet" href="css/user-form5342.css?v=1726033893">
    <link rel="stylesheet" href="css/index5342.css?v=1726033893">
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       .upload_image_main_div{
           height:120px;
           width:120px;
           border:1px dashed #EEEEF2;
           border-radius:10px;
           font-family: Tahoma;
           /*margin:10px;*/
           
       }
       .upload_image_main_div .image_file_input{
           height:0px;
           width:0px;
           z-index:9999;
           position:absolute;
           top:50%;
           left:30%;
           transform:translate(-50%,-50%);
           /*opacity:0;*/
       }    
       .upload_image_main_div.bg-image-div{
           
           cursor:pointer;
       }
       .upload_image_main_div .empty_image_div:hover{
           border:1px dashed blue;
       }
       .upload_image_main_div .empty_image_div{
           height:100%;
           width:100%;
           display:flex;
           gap:10px;
           align-items:center;
           justify-content:center;
           flex-direction:column;
           box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
           margin:0!important;
           border-radius:10px;
       }
       .upload_image_main_div .empty_image_none{
           display:none!important;
       }
       .upload_image_main_div .upload_preview_div{
           position:relative;
           top:0x;
           width:100%;
           height:100%;
           border:1px dashed black;
           border-radius:10px;
       }
       .upload_image_main_div .upload_preview_div_none{
           display:none;
       }
       .upload_image_main_div .preview_image_div_box_img{
           position:absolute;
           top:50%;
           left:50%;
           transform:translate(-50%,-50%);
           width:auto;
           max-width:90%;
           max-height:90%;
       }
       .upload_image_main_div .upload_img_control{
           position:absolute;
           top:50%;
           left:50%;
           transform:translate(-50%,-50%);
           width:90%;
           height:90%;
           background:rgba(0,0,0,.7);
           display:none;
       }
       .upload_image_main_div:hover .upload_img_control{
           display:flex;
       }
       .upload_img_control{
           display:flex;
           align-items:center;
           justify-content:center;
           gap:15px;
           color:#fff;
           font-size:18px;
           opacity:.7;
       }
       /*preview*/
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

    <div class="preview">
    </div>
    
    
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>-->
    <script>
        function handleFileInput(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var previewDiv = $(input).siblings('.upload_preview_div');
                    previewDiv.find('.preview_image_div_box_img').attr('src', e.target.result);


                    previewDiv.removeClass('upload_preview_div_none');

                    $(input).siblings('.empty_image_div').addClass('empty_image_none');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        
        // Function to handle delete image icon click
        function handleDeleteImageIcon(icon) {
            var previewDiv = $(icon).closest('.upload_preview_div');
            previewDiv.addClass('upload_preview_div_none');

            $(icon).closest('.upload_image_main_div').find('.empty_image_div').removeClass('empty_image_none');

            var fileInput = $(icon).closest('.upload_image_main_div').find('.image_file_input');
            fileInput.val('');
            var image_post =  $(icon).closest('.upload_image_main_div').find('.image_file_input_txt');
            image_post.val(`unlink_image_${image_post.val()}`);
     
        }
        $(document).on('change','.image_file_input',function(){
            handleFileInput(this);
        })
        $(document).on('click','.delete-image',function(){
             handleDeleteImageIcon(this);
        })
       
       
       
       function resetImage(parentContainer) {
            parentContainer.find('.upload_preview_div').addClass('upload_preview_div_none');
            parentContainer.find('.empty_image_div').removeClass('empty_image_none');
            parentContainer.find('.image_file_input').val('');
            parentContainer.find('.image_file_input_txt').val('');
        }

    </script>
    
    
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
            var src = $(this).closest('.upload_preview_div').find('.preview_image_div_box_img').attr('src');
            $('.image_preview img').attr('src', src);
            $('.image_preview').css('display', 'block');
        })
        $(document).on('click', '#preview_cancel', function() {
            $('.image_preview').css('display', 'none');
        })
    }
    preview();

    </script>

    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="js/cities.js"></script>
</head>
<style>

.body_div {
    border: 1px solid red;
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    z-index: 999;
    /*background: red;*/
    width: 100%;
    user-select: none !important;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    display: flex;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.donation{
    margin: auto;
    margin-top: 20px;
    width: auto;
    height: auto;
    padding: 10px;
    padding-left: 30px;
    /* text-align: center; */
    box-shadow: 0px 0px 5px 2px lightgrey;
    border-radius: 10px;
    background: var(--background-color);
    }
    .donation p{
    /* margin-top:20px; */
    font-size: 20px;
    color: #fff;
    }
	.qrcode{
    margin: auto;
    margin-top: 20px;
    width: 250px;
    height: auto;
    padding: 20px;
    text-align: center;
    box-shadow: 0px 0px 5px 2px lightgrey;
    border-radius: 10px;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    }
	.d_none{
 
    display: none;
    
    }

		 @media only screen and (max-width: 600px) {
    .donation {
      width:100%;
      margin: auto;
    }
    .donation p {
    font-size: 18px;
    }

    }
    @media only screen and (max-width: 370px) {
      .donation {
      width: 100%;
      }
      .donation p {
      font-size: 18px;
      }

    }
</style>

<body>
        <div class="preview">
    </div>
    <div class="loader loader-double"></div>
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

    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
        </div>
    </div>
        <div class="head_item3"><span class="mt-3"> Certificate Form</span></div>
    <div class="body_div2"></div>

    <div class="container mt-3  main-div"
        style="border-radius:10px;border:1px solid grey; background:white; margin-bottom: 80px;">
        <div class="container mt-5">
            <form id="user_form" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                     <div class="row">
                           <div class="col-md-3">
                            <label for="">Certificate Type<span id="red">*</span>:</label>
                        </div>
                         <div class="col-md-3">
                          <select id="service" name="Type"  class="form-control">
   <option value="धर्म रक्षक">धर्म एवं संस्कृति</option>
    <option value="गऊ रक्षक">गऊ रक्षा एवं संरक्षण </option>
    <option value="पर्यावरण रक्षक">जल एवं पर्यावरण संरक्षण	</option>
    <option value="शिक्षा प्रचारक">सर्वशिक्षा जन जागृति </option>
    <option value="साहित्य सेवक">साहित्य एवं कला  </option>
    <option value="समाज सेवक">सामाजिक जागृति एवं समाज सेवा</option>


  </select>
                        </div>

                        
                         </div>
                    </div>
                   <div class="line-all">
                </div>
                    <div class="row">
                           <div class="col-md-3">
                            <label for="">Name<span id="red">*</span>:</label>
                        </div>
                         <div class="col-md-3">
                            <input type="text" required name="name" value="" class="form-control"
                                placeholder="Full Name">
                        </div>

                        
                        <div class="col-md-3">
                            <label for="">Mobile No.<span id="red">*</span>:</label>
                        </div>

                        <div class="col-md-3">
                            <input type="text" required name="mobile" max='10'  pattern="[1-9]{1}[0-9]{9}" value="" class="form-control"
                                placeholder="Mobile Number">
                        </div>
                    </div>
                </div>
                  <div class="line-all">
                </div>
               
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Address<span id="red">*</span>:</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="address" required placeholder="Address" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="line-all">
                </div>
                
                <div class="form-group">
                    
                    <div class="row">
                        <div class="col-md-3">
						<label for="">Photo<span id="red"> *</span>:</label>
						</div>
						<div class="col-md-3">
						    <div class="upload_image_main_div bg-image-div bg-image-div-hover"><label for="photo_id" class="empty_image_div"><span><i class="fa fa-plus" aria-hidden="true"></i></span><span>Upload</span></label><input class="image_file_input"  id="photo_id" type="file" name="photo" accept="image/*" required><div class="upload_preview_div upload_preview_div_none"><div class="preview_image_div_box"><img class="preview_image_div_box_img" src="#"><div class="upload_img_control"><i class="fa fa-eye view-image" aria-hidden="true"></i><i class="fa fa-trash-o delete-image" aria-hidden="true"></i></div></div></div></div>						</div>
                       
                        
                    </div>
                </div>
                <div class="line-all">
                </div>
                           
                
                <div class="form-group">
                    <center><button type="submit" id="submit" class="btn btn-grad sub-btn pl-4 pr-4 pt-2 pb-2 mb-2"
                            name="button">Submit</button></center>
                </div>
            </form>
        </div>
    </div>
    
<script src="../checkout.razorpay.com/v1/checkout.js"></script>
<script>

function redirect(url, data, method, target) {
        // Create a form element
        var form = $('<form></form>');
        form.attr('method', method || 'post'); // Default method is POST
        form.attr('action', url);
        if (target) {
            form.attr('target', target); // Set the target attribute if provided
        }
    
        // Add the data as hidden input fields to the form
        $.each(data, function(key, value) {
            var input = $('<input>');
            input.attr('type', 'hidden');
            input.attr('name', key);
            input.val(value);
            form.append(input);
        });
    
        // Append the form to the body and submit it
        $('body').append(form);
        form.submit();
    }
    
    function loadRazor(type) {
        
        var amount = 51*100;
        var domain_name = window.location.origin;
        var options = {
            "key": "rzp_live_T94MzcW4lp83AX",
            "amount": amount.toString(),
            "currency": "INR",
            "name": "SANATAN DHARMA JAGRUTI DEVELOPMENT COUNCIL",
            "description": "",
            "image": "https://sanatandharmajagruti.in/webimg/LOGO _02282024155556.png",
            "handler": function (response) {
                var formData = new FormData($('#user_form')[0]);
                var payment_id = response.razorpay_payment_id;
                formData.append('payment_id', payment_id);
                $('.loader').addClass('is-active');
                        // redirect('print-certificate-council.php', {user_id: 'data'}, 'POST', '_blank');
                $.ajax({
                    type: 'post',
                    url: 'insert_council.php',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $('.loader').removeClass('is-active');
                        if (response == 0) {
                            alert('something went wrong')
                            } else {
                                $.ajax({
                                    url:'print-certificate-council.php',
                                    type:'post',
                                    data:{user_id:response},
                                    success:function(response2){
                                        $('body').html(response2);
                                    }
                                })
                                 $('#user_form')[0].reset();
                                resetImage($('#user_form'));
                            }
                            }
                });
            },
        };

        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function (response) {
            // Handle payment failure here
            alert(response.error.code);
            alert(response.error.description);
            // Other error alerts
        });
        rzp1.open();
    }

    $(document).on('submit','#user_form',function(e){
        e.preventDefault();
        loadRazor();
    })

    $(".close").on("click", function() {
        $("#myModal").hide();
    });

    $(window).on("click", function(event) {
        if (event.target == $("#myModal")[0]) {
            $("#myModal").hide();
        }
    });

    $("#myBtn").on("click", function() {
        $("#myModal").show();
    });


</script>

 
<!--================================ Razor Pay End ===========================================-->
        
    



    
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
</div></body>


<!-- Mirrored from sanatandharmajagruti.in/council_form.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2024 05:52:42 GMT -->
</html>