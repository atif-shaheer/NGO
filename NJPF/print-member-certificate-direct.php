<!DOCTYPE html>
<html>


<!-- Mirrored from sanatandharmajagruti.in/print-member-certificate-direct.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2024 05:53:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Print Certificate</title>
    <meta charset="utf-8">
    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../kendo.cdn.telerik.com/2017.2.621/js/kendo.all.min.js"></script>
    <link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap%404.6.1/dist/css/bootstrap.min.css">
    <script src="../cdn.jsdelivr.net/npm/jquery%403.5.1/dist/jquery.slim.min.js"></script>
    <script src="../cdn.jsdelivr.net/npm/popper.js%401.16.1/dist/umd/popper.min.js"></script>
    <script src="../cdn.jsdelivr.net/npm/bootstrap%404.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        .certificate_img {
            width: 700px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }

        #certificate_img {
            height: 100%;
            width: 100%;
        }

        .detail {
            position: absolute;
            transform: translateX(-50%);
            left: 50%;
            top: 310px;
        }

        .detail p {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .detail p:nth-child(1) {
            font-size: 30px;
            color: #D30808;
        }

        .matter {
            position: absolute;
            transform: translateX(-50%);
            left: 50%;
            top: 450px;
            width: 80%;
        }

        .matter p {
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }

        #sign {
            position: absolute;
            bottom: 100px;
            right: 50px;
        }

        .date p {
            position: absolute;
            top: 220px;
            right: 30px;
            font-size: 14px;
            font-weight: bold;
        }

        .id p {
            position: absolute;
            top: 220px;
            left: 30px;
            font-size: 14px;
            font-weight: bold;
        }

        #profile {
            position: absolute;
            top: 280px;
            right: 30px;
            border: 2px solid #FF6600;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    </body>
<script src="../html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
    const elementToSave = document.querySelector("#row");
    // Download with right click
    function screenshot() {
        html2canvas(elementToSave).then(canvas => {
            const a = document.createElement("a");
            a.href = canvas.toDataURL("Certificate/png");
            a.download = "_Certificate.html";
            a.click();
        });
    }
</script>


<!-- Mirrored from sanatandharmajagruti.in/print-member-certificate-direct.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Sep 2024 05:53:56 GMT -->
</html>
