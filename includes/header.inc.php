<?php

$version = '1-1-1';

header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: private');

?><!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8>

<?php if (is_ie()) {
  // Always force latest IE rendering engine and chrome frame (also hides compatibility mode button)
  ?><meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1"><?php
} ?>

<?php /* Disable phone number detection on apple devices. */?>
<meta name=format-detection content="telephone=no">

<?php /* I don't think we ever want this to be indexed*/ ?>
<meta name=robots content="noindex,nofollow,noarchive">

<meta name=author content="https://github.com/ErikDubbelboer/">

<title><?php echo format_html($server['host'])?> - phpRedisAdmin</title>

<?php foreach ($page['css'] as $css) { ?>
<link rel=stylesheet href="css/<?php echo $css; ?>.css?v<?=$version?>" media=all>
<?php } ?>

<link rel="shortcut icon" href="images/favicon.png">

<?php foreach ($page['js'] as $js) { ?>
<script src="js/<?php echo $js; ?>.js?v<?=$version?>"></script>
<?php } ?>
 <!--   <link rel="stylesheet" href="../FlexiJsonEditor/jsoneditor.css"/>-->
    <!--  <script src="../FlexiJsonEditor/jquery.min.js"></script>-->
    <!--<script src="../FlexiJsonEditor/jquery.jsoneditor.js"></script>-->
    <!--<script src="../FlexiJsonEditor/json2.js"></script>
    <script src="../FlexiJsonEditor/jsoneditor.js"></script>-->
    <link rel="stylesheet" href="../FlexiJsonEditor/jsoneditor.css"/>
    <link rel="icon" href="../FlexiJsonEditor/logo-small.png"/>


    <style>
        body {
            padding: 0 70px;
        }
        #json {
            margin: 10px 10px 10px 32px;
            width: 50%;
            min-height: 70px;
        }
        h1 {
            font-family: Arial;
            color: #EBBC6E;
            text-align: center;
            text-shadow: 1px 1px 1px black;
            border-bottom: 1px solid gray;
            padding-bottom: 50px;
           /* width: 500px;*/
            margin: 20px auto;
        }
        h1 img {
            float: left;
        }
        h1 b {
            color: black;
            font-weight: normal;
            display: block;
            font-size: 12px;
            text-shadow: none;
        }

        #legend {
            display: inline;
            margin-left: 30px;
        }
        #legend h2 {
            display: inline;
            font-size: 18px;
            margin-right: 20px;
        }
        #legend a {
            color: white;
            margin-right: 20px;
        }
        #legend span {
            padding: 2px 4px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            text-shadow: 1px 1px 1px black;
            background-color: black;
        }
        #legend .string  { background-color: #009408; }
        #legend .array   { background-color: #2D5B89; }
        #legend .object  { background-color: #E17000; }
        #legend .number  { background-color: #497B8D; }
        #legend .boolean { background-color: #B1C639; }
        #legend .null    { background-color: #B1C639; }

        #expander {
            cursor: pointer;
            margin-right: 20px;
        }

        #footer {
            font-size: 13px;
        }

        #rest {
            margin: 20px 0 20px 30px;
        }
        #rest label {
            font-weight: bold;
        }
        #rest-callback {
            width: 70px;
        }
        #rest-url {
            width: 700px;
        }
        label[for="json"] {
            margin-left: 30px;
            display: block;
        }
        #json-note {
            margin-left: 30px;
            font-size: 12px;
        }

        .addthis_toolbox {
            position: relative;
            top: -10px;
            margin-left: 30px;
        }

        #disqus_thread {
            margin-top: 50px;
            padding-top: 20px;
            padding-bottom: 20px;
            border-top: 1px solid gray;
            border-bottom: 1px solid gray;
        }

    </style>

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-5029684-7']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body>
