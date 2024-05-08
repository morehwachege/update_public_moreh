<?php

$btnShort = "https://daftar.tv/misigacor"; //LINK SHORTBUTTON
$amp = "https://pub-71dd8c54bc3748f0b22ad2882d1e4d0b.r2.dev/bloker15.html"; //LINK AMP

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
}

if (isset($_GET['lucu'])) {
    $filename = "brands.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['lucu']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}
?>
 
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title><?php echo $BRANDS; ?> - LINK <?php echo $BRANDS; ?> - LOGIN <?php echo $BRANDS; ?> - <?php echo $BRANDS; ?></title>
     <meta name="description" content="<?php echo $BRANDS; ?> adalah situs  agen  togel toto terpercaya & resmi <?php echo $BRANDS; ?> memiliki game togel dengan pasaran telengkap dan sangat menarik, daftar <?php echo $BRANDS; ?>, login <?php echo $BRANDS; ?>">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="amphtml" href="<?php echo $amp ?>">
     <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/0c0KVHm/hjtrhtrh.jpg">		
     <link rel="canonical" href="<?php echo $urlPath; ?>">
 
     <style>
     body {
       color:#ffffff;
       font-size:14px;
       background-color: rgb(0, 0, 0);
       background-image:url(https://anonymous214782.files.wordpress.com/2023/11/1a3472d0a818abcd776ff6e7208f7885.jpg);
       background-repeat:repeat;background-position:50% 50%;background-size:auto;
     }
     a, a:hover {
       color:#ffffff;
     }
     #wrapper {
       background-color:rgba(0,0,0,0.4);
       border-radius:10px;-webkit-border-radius:10px;-moz-border-radius:10px;
     }
     /* DEFAULT */
 
         #wrapper {
           width:96%;
           max-width:900px;
           margin:0 auto;
         }
         a:hover {
           text-decoration:none;
         }
 
         .btn_ {
           font-family:Arial;
         }
 
         .btn_grey {
           -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
           -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
           box-shadow:inset 0px 1px 0px 0px #ffffff;
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9));
           background:-moz-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
           background:-webkit-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
           background:-o-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
           background:-ms-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
           background:linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9',GradientType=0);
           background-color:#f9f9f9;
           -moz-border-radius:6px;
           -webkit-border-radius:6px;
           border-radius:6px;
           border:1px solid #dcdcdc;
           display:inline-block;
           cursor:pointer;
           color:#666666;
           font-size:18px;
           font-weight:bold;
           padding:8px 20px;
           text-decoration:none;
           text-shadow:0px 1px 0px #ffffff;
         }
         .btn_grey:hover {
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9));
           background:-moz-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
           background:-webkit-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
           background:-o-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
           background:-ms-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
           background:linear-gradient(to bottom, #e9e9e9 5%, #f9f9f9 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9',GradientType=0);
           background-color:#e9e9e9;
           color:#333333;
         }
         .btn_grey:active {
           position:relative;
           top:1px;
         }
 
         .btn_green {
           -moz-box-shadow:inset 0px 1px 0px 0px #a4e271;
           -webkit-box-shadow:inset 0px 1px 0px 0px #a4e271;
           box-shadow:inset 0px 1px 0px 0px #a4e271;
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #89c403), color-stop(1, #77a809));
           background:-moz-linear-gradient(top, #89c403 5%, #77a809 100%);
           background:-webkit-linear-gradient(top, #89c403 5%, #77a809 100%);
           background:-o-linear-gradient(top, #89c403 5%, #77a809 100%);
           background:-ms-linear-gradient(top, #89c403 5%, #77a809 100%);
           background:linear-gradient(to bottom, #89c403 5%, #77a809 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#89c403', endColorstr='#77a809',GradientType=0);
           background-color:#89c403;
           -moz-border-radius:6px;
           -webkit-border-radius:6px;
           border-radius:6px;
           border:1px solid #74b807;
           display:inline-block;
           cursor:pointer;
           color:#ffffff;
           font-size:18px;
           font-weight:bold;
           padding:8px 20px;
           text-decoration:none;
           text-shadow:0px 1px 0px #528009;
         }
         .btn_green:hover {
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77a809), color-stop(1, #89c403));
           background:-moz-linear-gradient(top, #77a809 5%, #89c403 100%);
           background:-webkit-linear-gradient(top, #77a809 5%, #89c403 100%);
           background:-o-linear-gradient(top, #77a809 5%, #89c403 100%);
           background:-ms-linear-gradient(top, #77a809 5%, #89c403 100%);
           background:linear-gradient(to bottom, #77a809 5%, #89c403 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77a809', endColorstr='#89c403',GradientType=0);
           background-color:#77a809;
           color:#FFF;
         }
         .btn_green:active {
           position:relative;
           top:1px;
         }
 
         .btn_blue {
           -moz-box-shadow:inset 0px 1px 0px 0px #97c4fe;
           -webkit-box-shadow:inset 0px 1px 0px 0px #97c4fe;
           box-shadow:inset 0px 1px 0px 0px #97c4fe;
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #3d94f6), color-stop(1, #1e62d0));
           background:-moz-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
           background:-webkit-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
           background:-o-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
           background:-ms-linear-gradient(top, #3d94f6 5%, #1e62d0 100%);
           background:linear-gradient(to bottom, #3d94f6 5%, #1e62d0 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3d94f6', endColorstr='#1e62d0',GradientType=0);
           background-color:#3d94f6;
           -moz-border-radius:6px;
           -webkit-border-radius:6px;
           border-radius:6px;
           border:1px solid #337fed;
           display:inline-block;
           cursor:pointer;
           color:#ffffff;
           font-size:18px;
           font-weight:bold;
           padding:8px 20px;
           text-decoration:none;
           text-shadow:0px 1px 0px #1570cd;
         }
         .btn_blue:hover {
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #1e62d0), color-stop(1, #3d94f6));
           background:-moz-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
           background:-webkit-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
           background:-o-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
           background:-ms-linear-gradient(top, #1e62d0 5%, #3d94f6 100%);
           background:linear-gradient(to bottom, #1e62d0 5%, #3d94f6 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e62d0', endColorstr='#3d94f6',GradientType=0);
           background-color:#1e62d0;
           color:#FFF;
         }
         .btn_blue:active {
           position:relative;
           top:1px;
         }
 
         .btn_orange {
           -moz-box-shadow:inset 0px 1px 0px 0px #fff6af;
           -webkit-box-shadow:inset 0px 1px 0px 0px #fff6af;
           box-shadow:inset 0px 1px 0px 0px #fff6af;
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffec64), color-stop(1, #ffab23));
           background:-moz-linear-gradient(top, #ffec64 5%, #ffab23 100%);
           background:-webkit-linear-gradient(top, #ffec64 5%, #ffab23 100%);
           background:-o-linear-gradient(top, #ffec64 5%, #ffab23 100%);
           background:-ms-linear-gradient(top, #ffec64 5%, #ffab23 100%);
           background:linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffec64', endColorstr='#ffab23',GradientType=0);
           background-color:#ffec64;
           -moz-border-radius:6px;
           -webkit-border-radius:6px;
           border-radius:6px;
           border:1px solid #ffaa22;
           display:inline-block;
           cursor:pointer;
           color:#333333;
           font-size:18px;
           font-weight:bold;
           padding:8px 20px;
           text-decoration:none;
           text-shadow:0px 1px 0px #ffee66;
         }
         .btn_orange:hover {
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffab23), color-stop(1, #ffec64));
           background:-moz-linear-gradient(top, #ffab23 5%, #ffec64 100%);
           background:-webkit-linear-gradient(top, #ffab23 5%, #ffec64 100%);
           background:-o-linear-gradient(top, #ffab23 5%, #ffec64 100%);
           background:-ms-linear-gradient(top, #ffab23 5%, #ffec64 100%);
           background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffab23', endColorstr='#ffec64',GradientType=0);
           background-color:#ffab23;
           color:#333333;
         }
         .btn_orange:active {
           position:relative;
           top:1px;
         }
 
         .btn_red {
           -moz-box-shadow:inset 0px 1px 0px 0px #f29c93;
           -webkit-box-shadow:inset 0px 1px 0px 0px #f29c93;
           box-shadow:inset 0px 1px 0px 0px #f29c93;
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fe1a00), color-stop(1, #ce0100));
           background:-moz-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
           background:-webkit-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
           background:-o-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
           background:-ms-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
           background:linear-gradient(to bottom, #fe1a00 5%, #ce0100 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fe1a00', endColorstr='#ce0100',GradientType=0);
           background-color:#fe1a00;
           -moz-border-radius:6px;
           -webkit-border-radius:6px;
           border-radius:6px;
           border:1px solid #d83526;
           display:inline-block;
           cursor:pointer;
           color:#ffffff;
           font-size:18px;
           font-weight:bold;
           padding:8px 20px;
           text-decoration:none;
           text-shadow:0px 1px 0px #b23e35;
         }
         .btn_red:hover {
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ce0100), color-stop(1, #fe1a00));
           background:-moz-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
           background:-webkit-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
           background:-o-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
           background:-ms-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
           background:linear-gradient(to bottom, #ce0100 5%, #fe1a00 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ce0100', endColorstr='#fe1a00',GradientType=0);
           background-color:#ce0100;
           color:#ffffff;
         }
         .btn_red:active {
           position:relative;
           top:1px;
         }
 
         .btn_purple {
           -moz-box-shadow:inset 0px 1px 0px 0px #e184f3;
           -webkit-box-shadow:inset 0px 1px 0px 0px #e184f3;
           box-shadow:inset 0px 1px 0px 0px #e184f3;
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #c123de), color-stop(1, #a20dbd));
           background:-moz-linear-gradient(top, #c123de 5%, #a20dbd 100%);
           background:-webkit-linear-gradient(top, #c123de 5%, #a20dbd 100%);
           background:-o-linear-gradient(top, #c123de 5%, #a20dbd 100%);
           background:-ms-linear-gradient(top, #c123de 5%, #a20dbd 100%);
           background:linear-gradient(to bottom, #c123de 5%, #a20dbd 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c123de', endColorstr='#a20dbd',GradientType=0);
           background-color:#c123de;
           -moz-border-radius:6px;
           -webkit-border-radius:6px;
           border-radius:6px;
           border:1px solid #a511c0;
           display:inline-block;
           cursor:pointer;
           color:#ffffff;
           font-size:18px;
           font-weight:bold;
           padding:8px 20px;
           text-decoration:none;
           text-shadow:0px 1px 0px #9b14b3;
         }
         .btn_purple:hover {
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #a20dbd), color-stop(1, #c123de));
           background:-moz-linear-gradient(top, #a20dbd 5%, #c123de 100%);
           background:-webkit-linear-gradient(top, #a20dbd 5%, #c123de 100%);
           background:-o-linear-gradient(top, #a20dbd 5%, #c123de 100%);
           background:-ms-linear-gradient(top, #a20dbd 5%, #c123de 100%);
           background:linear-gradient(to bottom, #a20dbd 5%, #c123de 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#a20dbd', endColorstr='#c123de',GradientType=0);
           background-color:#a20dbd;
           color:#ffffff;
         }
         .btn_purple:active {
           position:relative;
           top:1px;
         }
 
         .btn_pink {
           -moz-box-shadow:inset 0px 1px 0px 0px #fbafe3;
           -webkit-box-shadow:inset 0px 1px 0px 0px #fbafe3;
           box-shadow:inset 0px 1px 0px 0px #fbafe3;
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ff5bb0), color-stop(1, #ef027d));
           background:-moz-linear-gradient(top, #ff5bb0 5%, #ef027d 100%);
           background:-webkit-linear-gradient(top, #ff5bb0 5%, #ef027d 100%);
           background:-o-linear-gradient(top, #ff5bb0 5%, #ef027d 100%);
           background:-ms-linear-gradient(top, #ff5bb0 5%, #ef027d 100%);
           background:linear-gradient(to bottom, #ff5bb0 5%, #ef027d 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bb0', endColorstr='#ef027d',GradientType=0);
           background-color:#ff5bb0;
           -moz-border-radius:6px;
           -webkit-border-radius:6px;
           border-radius:6px;
           border:1px solid #ee1eb5;
           display:inline-block;
           cursor:pointer;
           color:#ffffff;
           font-size:18px;
           font-weight:bold;
           padding:8px 20px;
           text-decoration:none;
           text-shadow:0px 1px 0px #c70067;
         }
         .btn_pink:hover {
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ef027d), color-stop(1, #ff5bb0));
           background:-moz-linear-gradient(top, #ef027d 5%, #ff5bb0 100%);
           background:-webkit-linear-gradient(top, #ef027d 5%, #ff5bb0 100%);
           background:-o-linear-gradient(top, #ef027d 5%, #ff5bb0 100%);
           background:-ms-linear-gradient(top, #ef027d 5%, #ff5bb0 100%);
           background:linear-gradient(to bottom, #ef027d 5%, #ff5bb0 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ef027d', endColorstr='#ff5bb0',GradientType=0);
           background-color:#ef027d;
           color:#ffffff;
         }
         .btn_pink:active {
           position:relative;
           top:1px;
         }
 
         .btn_brown {
           -moz-box-shadow:inset 0px 1px 0px 0px #a6827e;
           -webkit-box-shadow:inset 0px 1px 0px 0px #a6827e;
           box-shadow:inset 0px 1px 0px 0px #a6827e;
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7d5d3b), color-stop(1, #634b30));
           background:-moz-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
           background:-webkit-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
           background:-o-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
           background:-ms-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
           background:linear-gradient(to bottom, #7d5d3b 5%, #634b30 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7d5d3b', endColorstr='#634b30',GradientType=0);
           background-color:#7d5d3b;
           -moz-border-radius:3px;
           -webkit-border-radius:3px;
           border-radius:3px;
           border:1px solid #54381e;
           display:inline-block;
           cursor:pointer;
           color:#ffffff;
           font-size:18px;
           padding:8px 20px;
           text-decoration:none;
           text-shadow:0px 1px 0px #4d3534;
         }
         .btn_brown:hover {
           background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #634b30), color-stop(1, #7d5d3b));
           background:-moz-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
           background:-webkit-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
           background:-o-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
           background:-ms-linear-gradient(top, #634b30 5%, #7d5d3b 100%);
           background:linear-gradient(to bottom, #634b30 5%, #7d5d3b 100%);
           filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#634b30', endColorstr='#7d5d3b',GradientType=0);
           background-color:#634b30;
           color:#ffffff;
         }
         .btn_brown:active {
           position:relative;
           top:1px;
         }
 
 
         html a,
                 body,
                 center,
                 div,
                 em,
                 footer,
                 h1,
                 h2,
                 h3,
                 h4,
                 h5,
                 h6,
                 header,
                 html,
                 iframe,
                 img,
                 li,
                 menu,
                 nav,
                 ol,
                 p,
                 span,
                 table,
                 tbody,
                 td,
                 tfoot,
                 th,
                 thead,
                 tr,
                 ul {
                     margin: 0;
                     padding: 0;
                     border: 0;
                     font-size: 100%;
                     font: inherit;
                     vertical-align: baseline
                 }
 
                 a,
                 a:active,
                 a:focus {
                     outline: 0;
                     text-decoration: none
                 }
 
                 a {
                     color: #fff
                 }
 
                 * {
                     padding: 0;
                     margin: 0;
                     -moz-box-sizing: border-box;
                     -webkit-box-sizing: border-box;
                     box-sizing: border-box
                 }
 
                 h1,
                 h2,
                 h3,
                 h4,
                 h5,
                 h6 {
                     margin-top: 2;
                     margin-bottom: .5rem;
                     font-weight: 500;
                     line-height: 1.2;
                     text-align: left
                 }
 
                 ol,
                 ul {
                     padding-left: 2rem
                 }
 
                 dl,
                 ol,
                 ol ol,
                 ol ul,
                 ul ol,
                 ul ul {
                     margin-bottom: 0
                 }
 
                 p {
                     margin: 0 0 10px
                 }
 
                 p {
                     margin-top: 0;
                     margin-bottom: 1rem
                 }
 
                 .clear {
                     clear: both
                 }
 
                 .text-center {
                     text-align: center
                 }
 
                 body {
                     background-color: #0d131c
                 }
 
                 .container {
                     padding-right: 15px;
                     padding-left: 15px;
                     margin-right: auto;
                     margin-left: auto;
                     background-color: #0d131c;
                 }
 
                 .marquee {
                     font-family: 'Trebuchet MS';
                     background: linear-gradient(#8339cd, #050042);
                     color: #fff;
                     padding: 5px 0;
                     border: 1px solid #fff;
                     border-radius: 5px;
                     max-width: 100%;
                     text-align: center
                 }
 
                 .btn {
                     display: inline-block;
                     padding: 10px 12px;
                     touch-action: manipulation;
                     cursor: pointer;
                     user-select: none;
                     border: 1px solid #fff;
                     border-radius: 5px;
                     font: italic 400 22px Bebas Neue;
                     width: 100%;
                     color: #fff;
                     letter-spacing: 1.5px
                 }
 
                 .btn-log {
                     background: linear-gradient(#ff00dd, #ff00dd)
                 }
 
                 .btn-daf {
                     background: linear-gradient(to bottom, rgb(4, 0, 255), rgb(4, 0, 255));
                     animation: blinking 1s infinite;
                     transition: all .4s
                 }
 
                 .btn-break {
                     background: linear-gradient(to bottom, rgb(152, 6, 250), rgb(104, 0, 159));
                     animation: blinking 1s infinite;
                     transition: all .4s
                 }
 
                 @keyframes blinking {
                     0% {
                         border: 2px solid #fff
                     }
                     100% {
                         border: 2px solid #000
                     }
                 }
 
                 .blink-me {
                     animation-name: blinker;
                     animation-duration: 1s;
                     animation-timing-function: linear;
                     animation-iteration-count: infinite
                 }
 
                 @media (min-width:768px) {
                     .container {
                         max-width: 720px
                     }
                     .marquee {
                         font-size: 20px
                     }
                 }
 
                 @media (min-width:992px) {
                     .container {
                         max-width: 960px
                     }
                 }
 
                 @media (min-width:1200px) {
                     .container {
                         width: 1000px
                     }
                 }
 
                 .row {
                     display: -ms-flexbox;
                     display: flex;
                     -ms-flex-wrap: wrap;
                     flex-wrap: wrap;
                     margin-right: -15px;
                     margin-left: -15px
                 }
 
                 .p-0 {
                     padding: 0
                 }
 
                 .col-md-12,
                 .col-md-4,
                 .col-md-6,
                 .col-md-5,
                 .col-md-8,
                 .col-xs-12,
                 .col-xs-6 {
                     position: relative;
                     width: 100%;
                     padding-right: 15px;
                     padding-left: 15px
                 }
 
                 .col-xs-6 {
                     float: left;
                     width: 50%
                 }
 
                 .col-xs-12 {
                     float: left;
                     width: 100%
                 }
 
                 @media (min-width:768px) {
                     .col-md-4 {
                         -ms-flex: 0 0 33.333333%;
                         flex: 0 0 33.333333%;
                         max-width: 33.333333%
                     }
                     .col-md-6 {
                         -ms-flex: 0 0 25%;
                         flex: 0 0 25%;
                         max-width: 25%
                     }
                     .col-md-5 {
                         -ms-flex: 0 0 25%;
                         flex: 0 0 25%;
                         max-width: 25%
                     }
                     .col-md-8 {
                         -ms-flex: 0 0 66.666667%;
                         flex: 0 0 66.666667%;
                         max-width: 66.666667%
                     }
                     .col-md-12 {
                         -ms-flex: 0 0 100%;
                         flex: 0 0 100%;
                         width: 100%
                     }
                     .order-first {
                         -ms-flex-order: -1;
                         order: -1
                     }
                     .nopadding {
                         padding: 0
                     }
                     .mob {
                         display: none
                     }
                 }
 
                 .space {
                     padding-top: 82px
                 }
 
                 .navbar {
                     position: fixed;
                     background: #0d131c;
                     right: 0;
                     left: 0;
                     z-index: 1030;
                     min-height: 50px;
                     width: 100%;
                     float: left;
                     padding: 5px;
                     border-bottom: 1px solid #fff
                 }
 
                 @media (max-width:768px) {
                     .content {
                         padding-top: 0
                     }
                     .border-bt {
                         border-bottom: 1px solid #dee2e6;
                         border-top: 1px solid #dee2e6;
                         padding: 5px 15px
                     }
                     .marquee {
                         font-size: 4vw
                     }
                     .mob {
                         display: block
                     }
                 }
 
                 .pb-2 {
                     padding-bottom: .5rem
                 }
 
                 .mt-2,
                 .my-2 {
                     margin-top: .5rem
                 }
 
                 .mb-2,
                 .my-2 {
                     margin-right: .5rem
                 }
 
                 .mt-3,
                 .my-2 {
                     margin-bottom: .5rem
                 }
 
                 .mt-2,
                 .my-3 {
                     margin-top: .75rem
                 }
 
                 .mb-3,
                 .my-3 {
                     margin-bottom: .75rem
                 }
 
                 .mt-5,
                 .my-5 {
                     margin-top: 2rem
                 }
 
                 .mb-5,
                 .my-5 {
                     margin-bottom: 2rem
                 }
 
                 .pb-5 {
                     padding-bottom: 1.25rem
                 }
 
                 .slide {
                     width: 100%;
                     border: 1px solid #fff;
                     border-radius: 4px;
                 }
 
                 .bank img,
                 .lc img,
                 .logo img,
                 .slide img,
                 .wa img {
                     object-fit: contain
                 }
 
                 .bottom {
                     float: left;
                     width: 100%
                 }
 
                 .word {
                     color: #dfdfdf;
                     padding: 20px 30px;
                     border-radius: 5px;
                     border: 1px dashed #fff;
                     font-family: Bebas Neue;
                     text-align: left;
                     background-color: #060061;
                 }
 
                 .word h1 {
                     font-size: 1.8em;
                     margin-bottom: 1rem
                 }
 
                 .word h2 {
                     font-size: 1.6em;
                     margin-bottom: 1rem
                 }
 
                 .word h3 {
                     font-size: 1.4em;
                     margin-bottom: 1rem
                 }
 
                 .word h4 {
                     font-size: 1.3em;
                     margin-bottom: 1rem
                 }
 
                 .word p {
                     font-size: 1em
                 }
 
                 .word a {
                     color: #ebb800
                 }
 
                 .word ul li {
                     display: inline;
                     padding: 0 8px;
                     border-right: 1px solid #fff
                 }
 
                 .word ul li:last-child {
                     border: none
                 }
 
                 .footer {
                     margin-bottom: 25px;
                     text-decoration: none;
                     color: #fff
                 }
 
                 .anim {
                     animation: blinkings 1s infinite;
                     border-radius: 5px
                 }
 
                 @keyframes blinkings {
                     0% {
                         border: 2px solid #fff
                     }
                     100% {
                         border: 2px solid #e9a100
                     }
                 }
 
                 table.pkv {
                     border-collapse: collapse;
                     color: #fff;
                     background-color: #161f2c;
                 }
 
                 table.pkv td,
                 table.pkv th {
                     border: 1px solid #fff;
                     padding: 6px;
                     font-family: Bebas Neue;
                     letter-spacing: .69px;
                     vertical-align: middle
                 }
 
                 table.pkv a {
                     text-decoration: underline
                 }
 
                 footer {
                     background-image: radial-gradient(circle 214px at 46.5% 54.2%, #510000 0, #510000 90%);
                     border-radius: 35px 35px 0 0;
                     position: fixed;
                     padding: 5px 0 5px 0;
                     width: 100%;
                     bottom: 0;
                     left: 0;
                     right: 0;
                     z-index: 999;
                     border-top: 1px solid #fff
                 }
 
                 footer .container {
                     padding-right: 0;
                     padding-left: 0
                 }
 
                 footer ul {
                     text-align: center;
                     display: flex;
                     justify-content: center
                 }
 
                 footer ul li {
                     display: inline-block;
                     font-size: 12px;
                     position: relative;
                     vertical-align: bottom;
                     flex-basis: 300px;
                     margin-top: 5px;
                     border-right: 1px solid #fff
                 }
 
                 footer ul li a {
                     color: #736d99;
                     display: inline-block;
                     text-align: center
                 }
 
                 footer ul li a p {
                     margin: 0;
                     font-size: 12px;
                     color: #fff;
                     padding-top: 3px;
                     font-family: sans-serif
                 }
 
                 footer ul li span {
                     min-height: 22px
                 }
 
                 footer ul li:nth-child(3) {
                     border-right: none
                 }
 
                 table.bes td,
                 table.bes th {
                     border: 1px solid #fff;
                     padding: 6px;
                     font-family: Bebas Neue;
                     letter-spacing: .69px;
                     color: #fff;
                     text-align: center;
                     font-size: 1.1em
                 }
 
                 table.bes {
                     background-color: #0d131c;
                     border-collapse: collapse
                 }
 
                 table.bes th {
                     background: linear-gradient(#a32222, #200b0b);
                     color: #fcf371
                 }
 
                 .btncil {
                     background: linear-gradient(to bottom, red, red);
                     display: inline-block;
                     padding: 5px 25px;
                     touch-action: manipulation;
                     cursor: pointer;
                     text-align: center;
                     user-select: none;
                     border: 1px solid #000;
                     border-radius: 5px;
                     font: 400 15px Bebas Neue;
                     color: #fff;
                     letter-spacing: 1.5px;
                     transition: all .4s;
                     animation: blinking 1s infinite
                 }
             
   </style>
 <captcha-widgets></captcha-widgets>
 </head>
 <body style="">
     
 <div id="wrapper" class="px-4 pt-3 pb-1 mt-3 text-center" style="width:760px;max-width:96%;">
   <div class="pb-4"><img src="https://i.ibb.co/KKkQXHn/main-qimg-0ad38397da11e22c61f01f42dd08f6c0.webp" alt="<?php echo $BRANDS; ?> - LINK <?php echo $BRANDS; ?> - LOGIN <?php echo $BRANDS; ?> - <?php echo $BRANDS; ?>" style="max-width:35%;"></div>		
   <div class="pb-4">	<a href="<?php echo $btnShort; ?>" class="mx-3 btn_ btn_grey">LOGIN</a>	
   <a href="<?php echo $btnShort; ?>" class="mx-3 btn_ btn_grey">DAFTAR</a>	</div>			
     
 <h1 style="text-align:center;"><strong>LINK ALTERNATIF <?php echo $BRANDS; ?></strong></h1>
 <p style="text-align:center;"><a href="<?php echo $btnShort; ?>"><img alt="" src="https://i.ibb.co/0c0KVHm/hjtrhtrh.jpg" style="height:250px;"></a></p>
     
 <h5 style="text-align: center;"><strong><?php echo $BRANDS; ?></strong></h5>
     
 <p style="text-align: center;"><?php echo $BRANDS; ?> adalah situs  agen  togel toto terpercaya & resmi <?php echo $BRANDS; ?> memiliki game togel dengan pasaran telengkap dan sangat menarik, daftar <?php echo $BRANDS; ?>, login <?php echo $BRANDS; ?></p>
 
 <p style="text-align:center;color:#CCCCCC;">Hak Cipta 2013 © Landing Page</p>
 </div>
 
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
 
 
 </body></html>