<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from sanatandharmajagruti.in/print-user-card-two.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2024 05:53:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>ID Card</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../kendo.cdn.telerik.com/2017.2.621/js/kendo.all.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Molengo&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    .card{
    position: relative;
    height: 474px;
    width: 310px;
    border-radius: 5px;
    margin-top: 60px;
    margin-bottom: 50px;
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow: 5px 8px 10px 5px #888888;
    }
    #profile{
    position: absolute;
    top: 110px;
    transform: translate(-50%);
    left: 50%;
    border: 2px solid #E80000;
    border-radius: 10px;

    }
    #seal{
    position: absolute;
    top: 180px;
    right: 40px;
    }
    
    .row{
    display: flex;
    justify-content: space-around;
    }
    
    .name{
    position: absolute;
    transform: translate(-50%, -50%);
    left: 50%;
    width: 100%;
    top: 284px;
    }
    .name p {
    text-align:center;
    font-weight: bold;
    font-size: 15px;
    margin: 0;
    padding: 0;
    }
    .name p:nth-child(1) {
    color:#F10207!important;
    font-size: 20px;
    text-transform: uppercase;
    }
    .detail_main{
    position: absolute;
    top: 312px;
    font-weight: bold;
    left :50%;
    transform: translateX(-50%);
    }
    .detail{
    display: flex;
    justify-content: space-around;
    margin: auto;
    }
    .detail p {
    margin: 2px;
    padding: 0;
    font-size: 13px;
    }
    .detail p:nth-child(1){
    width: 48px;
    color: #EC3237;
    }
    
    .detail p:nth-child(2){
    padding:0 5px;
    }
    .detail p:nth-child(3){
    width: max-content;
    min-width: 140px;
    max-width: 180px;
    }
    span{
    color: #EC3237;
    }

    .address_main{
    position: absolute;
    top: 205px;
    font-weight: bold;
    left :50%;
    transform: translateX(-50%);
    }
    .address{
    display: flex;
    justify-content: space-around;
    margin: auto;
    }
    .address p {
    margin: 1px;
    padding: 0;
    font-size: 13px;
    }
    .address p:nth-child(1){
    width: 80px;
    color: #EC3237;
    }
    
    .address p:nth-child(2){
    padding:0 5px;
    }
    .address p:nth-child(3){
    width: 180px;
    }
    .qrcode{
    position: absolute;
    top: 100px;
    transform: translate(-50%);
    left: 50%;
    }
    .back-side{
    position: relative;
    height: 474px;
    width: 310px;
    border-radius: 5px;
    margin-top: 60px;
    margin-bottom: 50px;
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow: 5px 8px 10px 5px #888888;
    }
    #branch{
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 84px;
        color: #fff;
        z-index: 1;
        font-size: 17px;
        font-weight: 700;
    }
    </style>
  </head>
  <body>
      
  
 
<script src="../html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<script>
  const elementToSave = document.querySelector("#row");
  
  // Download as PDF
  function downloadPDF() {
    html2canvas(elementToSave, { scale: 2 }).then(canvas => {
      const imgData = canvas.toDataURL("image/png");
      const pdf = new jspdf.jsPDF();
      const imgProps = pdf.getImageProperties(imgData);
      const pdfWidth = pdf.internal.pageSize.getWidth();
      const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
      
      pdf.addImage(imgData, "PNG", 0, 0, pdfWidth, pdfHeight);
      pdf.save("_ID_CARD.html");
    });
  }
</script>
  
  
</body>

<!-- Mirrored from sanatandharmajagruti.in/print-user-card-two.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2024 05:53:45 GMT -->
</html>

