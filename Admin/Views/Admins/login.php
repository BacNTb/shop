
<div class="center-container">
	<div class="header-w3l">
		<h1>Trang Đăng Nhập</h1>
		<?php if(isset($message)) { ?>
			<h4><?php echo $message;?></h4> 
		<?php } ?>
	</div>
	<div class="main-content-agile">
		<div class="sub-main-w3">	
			<div class="wthree-pro">
			<?php if(isset($login)) { ?>
				<h2 class="login-false"><?php echo $login;?></h2> 
			<?php } else { ?>
				<h2>Đăng Nhập</h2>
			<?php } ?>
			</div>
			<form action="#" method="post">
				<div class="pom-agile">
					<input class="user" placeholder="Tài khoản" name="username" type="text" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
				</div>
				<div class="pom-agile">
					<input class="pass" placeholder="Mật khẩu" name="password" type="password" required="">
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
				</div>
				<div class="sub-w3l">
					<h6 style="margin-right: 32px;"><a href="#">Quên mật khẩu?</a></h6>
					<div class="right-w3l">
						<input type="submit" name="submit" value="Đăng nhâp">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
