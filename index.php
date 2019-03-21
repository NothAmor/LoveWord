<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <title>情言</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="4">
    <link rel="stylesheet" href="css/style.css?t=1527949440372">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/material.indigo-pink.min.css">
    <style>
       .aplayer-lrc-contents > p {
          color: #fff !important;
          text-shadow: none !important;
        }
    </style>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106578243-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments)
        };
        gtag('js', new Date());

        gtag('config', 'UA-106578243-1');
    </script>
    <!-- BrowserHappy -->
    <script>
      var browsehappy_config = {
        ie: 12,
        type: 'box',
        debug: false,
        tip: "站点目前不支持 IE。请 ",
        show: ['firefox', 'chrome']
      };
    </script>
    <script src="https://cdn.jsdelivr.net/gh/a632079/browserhappy@0.0.1/browserhappy.min.js"></script>
</head>

<body style="position:absolute;">
    <div class="background">
    </div>
    <div class="mdl-layout mdl-js-layout animated fadeIn">
        <!--banner-->
        <header class="mdl-layout__header mdl-layout__header--scroll mdl-layout__header--transparent" id="nav">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">情言</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
		    <a class="mdl-navigation__link" href="/api.html">API</a>
            </div>
        </header>
        <main class="mdl-layout__content">
            <div class="page-content">
		    	<div id="hitokoto" class="hitokoto-fullpage animated fadeIn">
                    <div class="bracket left">『</div>
                    <script type="text/javascript" src="word/index.php?format=js&charset=utf-8"></script>
		    		<div class="word" id="hitokoto_text"><script>hitokoto()</script></div>
		    		<div class="bracket right">』</div>
		    	</div>
		    </div>
        </main>
    </div>
    <!--[if IE]>
    <script src="https://cdn.jsdelivr.net/npm/es-promise@1.0.3/dist/promise.umd.min.js"></script>
    <![endif]-->
    <script src="https://cdn.jsdelivr.net/npm/whatwg-fetch@2.0.3/fetch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.slim.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/material-design-lite@1.3.0/material.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/MoePlayer/APlayer@latest/dist/APlayer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert@latest/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
</body>

</html>
