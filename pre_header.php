<?php 
	session_start();
?>
<div id="pre_header">
	<div id="inner_pre_header">
		<div id="preHeaderItems">
			<div id="socialNetworkIcons">
			<a href="" class="icon_link"><span class="icon"><img src="icon/socialNetwork/iconInstagram.svg" alt=""></span></a>
			<a href="" class="icon_link"><span class="icon"><img src="icon/socialNetwork/iconFacebook.svg" alt=""></span></a>
			<a href="" class="icon_link"><span class="icon"><img src="icon/socialNetwork/iconTwich.svg" alt=""></span></a>
			<a href="" class="icon_link"><span class="icon"><img src="icon/socialNetwork/iconYoutube.svg" alt=""></span></a>
		</div>
		<div id="selectLang">
			<ul class="comboBox">
				<img src="icon/dropDownArrow.svg" alt="">
				<li class="comboBoxItem selectedComboBoxItem"></li>
				<div class="rectangle">
				
				</div>
				<ul class="comboBoxItems">
					<li class="comboBoxItem"><img src="icon/flags/iconEng.svg" class="flag" alt="" >English </li>
					<li class="comboBoxItem"><img src="icon/flags/iconEng.svg" class="flag" alt="" >Francias </li>
					<li class="comboBoxItem"><img src="icon/flags/iconEng.svg" class="flag" alt="" >Russian </li>
				</ul>
			</ul>
			
		</div>
		
		<div id="support">
			<a href="" class="supportLink"><img src="icon/support_circle.svg" alt="" class="icon">Support</a>
			<a href="" class="supportLink"><img src="icon/socialNetwork/iconSkype.svg" alt="" class="icon">tech-mmo.cat</a>
			<a href="" class="supportLink"><img src="icon/socialNetwork/iconTelegram.svg" alt="" class="icon">mmo.cat</a>
		</div>
		<div id="dotaBoost"><a href="" class="hot"><img src="icon/iconStoke.svg" alt="" class="icon">Dota BOOST</a></div>
		</div>
		<div id="user" class="dropDown">
			<ul class="dropDown">

				<?php
					if (isset($_SESSION['email']))
					{
						echo '<li class="dropDownLi"><a href="#">' . $_SESSION['email'] . '</a></li>';
					}
					else
					{
						echo '<li class="dropDownLi"><a href="auth_page.php">Login</a></li>';
					}
				?>
				
				<li class="dropDownLi"><a href="#">asdasda</a></li>
				<li class="dropDownLi"><a href="#">asdasdasd</a></li>
			</ul>
		</div>
	</div>
</div>