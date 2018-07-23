<?php
	if (isset($_SESSION['email']))
	{
		header('Location: /');
	}
?>

<script src="auth_ajax.js"></script>
<div class="content_caption auth_capt">
	authorization<span class="orange_capt">on the site</span>
</div>
	<div id="auth_container" class="cat_image">
	<div class="content_caption">Sign in with accounts</div>
		<div id="connect_acc">
			<div class="social_network"><img src="icon/socialNetwork/iconFacebook.svg" alt="">
				<p>
					Twitter
				</p>
			</div>
			<div class="social_network"><img src="icon/socialNetwork/iconFacebook.svg" alt="">
				<p>
					Twitter
				</p>
			</div>
			<div class="social_network"><img src="icon/socialNetwork/iconFacebook.svg" alt="">
			<p>
					Twitter
			</p>
			</div>
		</div>
		
		<div class="vertical_divider">
			<div class="divider"></div>
			<p>or</p>
			<div class="divider"></div>
		</div>
		
		<div class="content_caption">Login to your account</div>
		
		<form action="">
			<div class="input">
			<label for="email" >Email</label>
			<input type="text" id="email"></div>
			<div class="input">
				<label for="password">Password</label>
				<input type="password" id="password">
			</div>
		</form>
		
		<div id="pass_restore">
			<img src="icon/socialNetwork/iconSkype.svg" alt=""><a href="#">Forgot password?Restore password</a>
		</div>
		
		<p>Registration is automatic after the first purchase.</p>
		
		<div class="btn">login</div>
	</div>
</div>
