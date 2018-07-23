

<script src="js/calc_func.js"></script>
<div id="calculate_coins">
	<div class="content_caption">calculate <span class="orange_capt">the cost of coins</span></div>
	<div id="calc">
		<div class="instructions">
			<div class="instruction">
				<div class="calc_number">1</div>
				<div class="calc_desc">We buy your cards for higer price and it looks natural deal</div>
			</div>
			<div class="instruction">
				<div class="calc_number">2</div>
				<div class="calc_desc">Our catbot will telll you easy instructions</div>
			</div>
			<div class="instruction">
				<div class="calc_number">3</div>
				<div class="calc_desc">You can do it yourself or catbat do it for you </div>
			</div>
		</div>
		<div id="calc_inputs" class="cat_image">


			<div class="options">
				<div>
					<div>
						<div>
							<p>Currency</p>
							<ul class="comboBox vallets">
								<img src="icon/dropDownArrow.svg" alt="">
								<li class="comboBoxItem selectedComboBoxItem"> </li>
								<div class="rectangle">

								</div>
								<ul class="comboBoxItems">
									<li class="comboBoxItem" id="USD">USD </li>
									<li class="comboBoxItem" id="RUB">RUB </li>
									<li class="comboBoxItem" id="UAH">UAH </li>
								</ul>
							</ul>

						</div>
					</div>
				<div>
					<div>
						<p>Server</p>
						<ul class="comboBox">
								<img src="icon/dropDownArrow.svg" alt="">
								<li class="comboBoxItem selectedComboBoxItem"> asd</li>
								<div class="rectangle">

								</div>
								<ul class="comboBoxItems">
									<li class="comboBoxItem">Twitch </li>
									<li class="comboBoxItem">Youtube</li>
									<li class="comboBoxItem">Facebook </li>
								</ul>
							</ul>
					</div>
				</div>
				</div>
			</div>

			<form method="POST" autocomplete="off" id="coins_calculator">
				<table>
				<tr>
					<td>
						<div class="input">
							<span class="label_icon">K</span>
							<label for="coins_to_buy">Coins to buy</label>
							<input type="number" name="coins_to_buy" id="coins_to_buy" class="changing">
						</div>
					</td>
					<td>
						<div class="input">
						<span class="label_icon">$</span>
						<label for="money_to_spend">Money to spend</label>
						<input type="number" id="money_to_spend" name="money_to_spend" class="changing">
						</div>
					</td>
					<td>
						<div class="input">
						<label for="price_per_m">Price per M</label>
						<input type="text" class="no_active_input" disabled value="" id="price_per_m" name="price_per_m">
						
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="input" id="volume_bonus_block">
						<span class="label_icon"><img src="icon/help.svg" alt=""></span>
						<label for="vol_bonus">Volume bonus</label>
						<input type="text" class="no_active_input" disabled id="vol_bonus">
						</div>
					</td>
					<td>
						<div class="input">
						<label for="">Idk what that</label>
						<input class="no_active_input" disabled type="text"
						></div>
					</td>
					<td>
						<div class="input">
							<label for="">Volume bonus</label>
							<input class="no_active_input" disabled type="text"></input>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="input">
						<label for="your_email">Your email</label>
						<input type="text" id="email" name="email">
						</div>
					</td>
					<td>
						<div class="input">
						<label for="">Idk what that</label>
						<input class="no_active_input" disabled type="text">
						</div>
					</td>
					<td>
						<div class="input">
						<label for="acc_bon">Account bonus</label>
						<input class="no_active_input" disabled type="text" id="acc_bon">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="input">
						<label for="coupon">Coupon</label>
						<input type="text" id="coupon" class="changing">
						</div>
					</td>
					<td>
						<div class="input">
						<label for="source">Source</label>
						<input class="no_active_input" disabled type="text" id="source">
						</div>
					</td>
					<td>
						<div class="input">
						<label for="coupon_bonus">Coupon bonus</label>
						<input class="no_active_input" disabled type="text" id="coupon_bonus">
						</div>
					</td>
				</tr>
			</table>
			<button class="btn" id="calcButton">
				Buy
			</button>
			</form>
			
		</div>
	</div>
</div>