<?php


?>
<?php include './jb.php';?>
<?php include './header.php';?>
<script src="https://api.rmcweb.cn/api/oa/oa.php?oa=js"></script>
<div class="account-pages mt-5 mb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card">
          <!-- Logo -->
          <div class="btn btn-block btn-primary">
            <h1 class="mdi mdi-border-color" style="font-size:20px">匿名表白卡填写</h1>
          </div>

          <div class="card-body p-4">
            <div class="text-center w-75 m-auto">
              <h4 class="text-dark-50 text-center mt-3 font-weight-bold">说出你的心声吧<p class="text-muted"><small>匿名表白将不显示表白者信息</small></p></h4>
              <p class="text-muted mb-4"><script>oa()</script></p>
            </div>
<!--表单-->
				<form action="submit.php" method="post" class="needs-validation">
				<div class="form-group mb-3">
					<input class="form-control" name="form" style="display: none;" value="tijiao"/>
					<input class="form-control" name="token" style="display: none;" value="<?php echo $_SESSION['token']?>" />
					<input class="form-control" name="lx" style="display: none;" value="匿名" />
					<input class="form-control" name="lx1" style="display: none;" value="warning" />
					<input class="form-control" name="bbr1" style="display: none;" value="匿名" />
				</div>
				<div class="form-group mb-3">
                  	<label for="validationTooltipUsername">你的QQ</label>
					<input type="text" class="form-control" required oninvalid="setCustomValidity('内容不可为空...')" name="qq" value="" />
                  	<label for="validationTooltipUsername">你的名字</label>
					<input type="text" class="form-control" required oninvalid="setCustomValidity('内容不可为空...')" disabled name="bbr1" value="匿名" />
				</div>
				<div class="form-group mb-3">
                  	<label for="validationTooltipUsername">TA的QQ</label>
						<input type="text" required oninvalid="setCustomValidity('内容不可为空...')" class="form-control" name="bqq" value="" />
                  	<label for="validationTooltipUsername">TA的名字</label>
						<input type="text" required oninvalid="setCustomValidity('内容不可为空...')" class="form-control" name="bbr2" value="" />
				</div>
				<div class="form-group mb-3">
                  	<label for="validationTooltipUsername">是否隐藏QQ<small class="text-muted">被隐藏的QQ相关信息将不再在表白卡中显示</small></label>
					<div>
						<label><input class="btn btn-primary"name="nm" checked="checked" type="radio" value="1">不隐藏对方QQ</label>
						<label><input class="btn btn-primary"name="nm" type="radio" value="3">隐藏对方QQ</label>
					</div>
				</div>
				<div class="form-group mb-3">
                  	<label for="validationTooltipUsername">展示照片</label>
						<input type="text" required oninvalid="setCustomValidity('内容不可为空...')" class="form-control" name="syimg" value="" />
                  	<label for="validationTooltipUsername">卡片封面照片</label>
						<input type="text" required oninvalid="setCustomValidity('内容不可为空...')" class="form-control" name="imginput" value="" />
                 	<?php include './tc1.php';?>
				</div>
                <div class="form-group mb-3">
					<textarea name="content" rows="6" required oninvalid="setCustomValidity('内容不可为空...')" oninput="setCustomValidity('')" class="form-control" maxlength="60" placeholder="请输入您要发布的内容..."></textarea>
                </div>
                  
                  <div>
                    <!-- 极验 --> 
                    <div id="embed-captcha" class="form-group mb-3"></div>
                    <p id="wait" class="show">正在加载验证码......</p>
                    <p id="notice" class="hide">请先完成验证</p>
                    <br>
                  </div>
                  
				<div class="form-group mb-0 text-center"><input type="submit" id="tijiao" oneSubmit() value="表白" class="btn btn-primary"/></div>
				
				</form>
<!--表单-->

          </div> <!-- end card-body-->
        </div>
        <!-- end card-->
      </div> <!-- end col -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</div>
<!-- end page -->
<!-- 底部引入页面 -->
					</div> <!-- container -->

                </div> <!-- content -->

                <!-- 页脚 -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                版权所有 © <?php echo $result['footer'];?>
                            </div>
                          
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
									友情链接:<?php echo $result['yqlj'];?>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- 页脚 -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- App js -->
		<?php include './plug/geetest/geetest_index.php' ?> <!-- 极验引入 -->
        <script src="./assets/javascript/app.min.js"></script>
    </body>
</html>