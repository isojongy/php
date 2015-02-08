<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="../s/logo.png" height="50" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<?php 
		if(isset($_POST['getPass'])){
			if (isset($_POST['Email']) && $_POST['Email'] != "")
			{
				$email = addslashes($_POST['Email']);
				$query = $dbc->query("SELECT * FROM `tb_users` WHERE `Email` = '$email'");
				$count = $query->rowCount();
				if ($count==0)
				{
					echo "<p>Email không có thật!</p>";
				}
				else
				{
					$r = $query->fetchAll(PDO::FETCH_ASSOC);
					foreach($r as $row)
					{
						echo "Bạn đã điền đúng email. Đây là thông tin tài khoản của bạn:<br/>";                                            
						$newpass = rand(0123456789,9876543210);
						// Gửi newpass đi //
						$hashpass = sha1($newpass);
						$dbc->query("UPDATE `tb_users` SET `MatKhau` = '$hashpass' WHERE `Email` ='$email' ");
						echo "<p>Tên truy cập: $row[Email] </p>";
						echo "<p>Mật khẩu: $newpass</p>";
						echo '<div class="form-actions">
								<a href="login.php"><button type="button" id="back-btn" class="btn btn-default">Quay lại</button></a>	
							</div> ';
					}
				}
			}
			die;
		}
	?>
	<!-- BEGIN LOGIN FORM -->
	<form id="DN" class="login-form" action="" method="post">
		<h3 class="form-title">Đăng Nhập Quản Trị</h3>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="Email"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Mật khẩu</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Mật khẩu" name="MatKhau"/>
		</div>
		<div class="form-actions">
			<button onclick="document.getElementById('DN').submit()" type="submit" name="dangnhap" class="btn btn-success uppercase">Đăng nhập</button>
			<label class="rememberme check">
			<input type="checkbox" name="remember" value="1"/>Ghi nhớ </label>
			<a href="javascript:;" id="forget-password" class="forget-password">Quên mật khẩu?</a>
		</div>
		<div class="create-account">
			<p>
				<a href="../index.html" id="register-btn" class="uppercase">Thoát</a>
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form class="forget-form" action="" method="post">
		<h3>Bạn quên mật khẩu ?</h3>
		<p>
			 Vui lòng nhập địa chỉ email của bạn để lấy lại mật khẩu
		</p>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="Email"/>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn btn-default">Quay lại</button>
			<button type="submit" name="getPass" class="btn btn-success uppercase pull-right">Gửi</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	
</div>
<div class="copyright">
	 2015 © Allright Reserved. Design by [Fnatic 4 VTH].
</div>
<!-- END LOGIN -->

<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Login.init();
	Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37564768-1', 'keenthemes.com');
  ga('send', 'pageview');
</script>
