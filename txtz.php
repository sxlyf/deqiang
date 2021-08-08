<?php
$conf['qqjump']=1;
if(strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/')!==false && $conf['qqjump']==1){$a='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"]; 
echo '<!DOCTYPE html>
<html>
	<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<meta charset="utf-8" />
	<title>表白墙 - 安全跳转</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Coderthemes" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="./favicon.ico">

	<!-- App css -->
	<!-- build:css -->
	<link href="./assets/css/app.min.css" rel="stylesheet" type="text/css" />
	<!-- endbuild -->
	<script src="https://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script> 
	<script type="text/javascript"> mqq.ui.openUrl({ target: 2,url: "'.$a.'"}); </script>
	</head>
	
    <body>

        <div class="mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="text-center">
                            <img src="./assets/htmlimg/maintenance.svg" height="140" alt=""">
                            <h3 class="mt-4">为什么打不开网站？</h3>
                            <p class="text-muted">因腾讯限制个别网页可能无法使用，所以请务必使用浏览器打开，非常感谢！</p>

                            <div class="row mt-5">
                                <div class="col-md-4">
                                    <div class="text-center mt-3 pl-1 pr-1">
                                        <i class="dripicons-jewel bg-primary maintenance-icon text-white mb-2"></i>
                                        <h5 class="text-uppercase">这是什么原因造成的呢？</h5>
                                        <p class="text-muted">由于<s>智障</s>不友好的小伙伴或同行对本网站进行了恶意举报所造成腾讯限制访问.</p>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-4">
                                    <div class="text-center mt-3 pl-1 pr-1">
                                        <i class="dripicons-clock bg-primary maintenance-icon text-white mb-2"></i>
                                        <h5 class="text-uppercase">我该如何使用浏览器打开呢？</h5>
                                        <p class="text-muted">点击右上角，选择使用浏览及打开即可.</p>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-4">
                                    <div class="text-center mt-3 pl-1 pr-1">
                                        <i class="dripicons-question bg-primary maintenance-icon text-white mb-2"></i>
                                        <h5 class="text-uppercase">还什么问题吗？</h5>
                                        <p class="text-muted">如果你有什么问题请联系网站管理员QQ2086545950 或 QQ1835003953 或 发邮件到2635435377@qq.com</p>
                                    </div>
                                </div> <!-- end col-->
                            </div> <!-- end row-->
                        </div> <!-- end /.text-center-->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2016-2019 © FatDa - fatda.cn
        </footer>

        <!-- App js -->
        <script src="./assets/javascript/app.min.js"></script>
    </body>
</html>';exit;} ?>