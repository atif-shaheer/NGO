<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sanatandharmajagruti.in/admin-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2024 05:52:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../www.google.com/recaptcha/api.js" async defer></script>
  

<link href="https://fonts.googleapis.com/css2?family=Acme&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/maina340.css?v=1726033885">
<script src="../code.jquery.com/jquery-2.2.4.min.js"></script>
<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="css-loader-master/dist/css-loadera340.css?v=1726033885">

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
  <link rel="stylesheet" href="css/admin-logina340.css?v=1726033885">
  <link rel="stylesheet" href="css/indexa340.css?v=1726033885">
</head>
		<body>
    <div class="loader loader-double"></div>
    <div class="w-50 mx-auto main-div" style="padding:20px;background:white;">
      <h1 class="text-center text-info login-title mt-4">ADMIN LOGIN</h1>
      <form class="" id="form_submit" method="post">
           <input type="hidden" id="token_response" name="token_response" value="">
        <div class="form-group form-group-2">
          <label class="mt-3" for="">Email</label>
          <input type="email" name="email" class="form-control" value="">
          <label for="">Password</label>
          <input type="password" name="pass" class="form-control" value="">
          <div class="g-recaptcha" id="captcha" style="margin-top:20px;" data-sitekey="6LcStWAoAAAAANkLTSRrc9ts_sd_w5jZ9LjZViU5"></div>
          <span id='invalid'></span><br>
          <input type="submit" class="btn btn-grad  mb-0" name="login" value="Login">

        </div>
      </form>
    </div>
</body>
<script>
    $(document).on('submit','#form_submit',function(e){
        e.preventDefault();
        $('.loader').addClass('is-active');
        $.ajax({
            url:'ajax/admin-login.php',
            type:'post',
            data:$(this).serialize(),
            success:function(data){
                grecaptcha.reset();
                if(data == 2){
                    alert('invalid captcha');
                    $('.loader').removeClass('is-active');
                }
                else if(data == 1){
                    window.location.href="admin-login.html";
                    $('.loader').removeClass('is-active');
                }else{
                  var invalid = $('#invalid').html('Invalid Email or Password');
                if( $('#invalid').html('Invalid Email or Password'))
                setTimeout(function(){ $('#invalid').html('');}, 3000);
                $('.loader').removeClass('is-active');
                }
            }
        })
    })
</script>

<!-- Mirrored from sanatandharmajagruti.in/admin-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2024 05:52:03 GMT -->
</html>
