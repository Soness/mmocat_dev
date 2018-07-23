var money_to_spend_block,
	coins_to_buy_block,
	coupon_block,
	coupon_bonus_block,
	volume_bonus_block,
	price_per_m,
	current_vallet,
	coupon_bonus = 0,
	volume_bonus = 0;

var volume_bonus_table;

var count_toolTips = 3;

$(document).ready(function() {

	//initialization HTML bloks with data
	money_to_spend_block = $("#money_to_spend");
	coins_to_buy_block = $("#coins_to_buy");
	coupon_block = $("#coupon");
	coupon_bonus_block = $("#coupon_bonus");
	volume_bonus_block = $("#vol_bonus");

	//get table about bonus for coins count
	getVolumeBonusTable();

	//get cost per coin with choosen vallet in options
	updVallet();

	//bindings 
	$(".changing").on('input', function() {
		inputOnChange($(this));
	});

	$(".vallets .comboBoxItems li").on('click', function() {
		updVallet();
	})

});

var inputOnChange = function(sender) {

	switch (sender.attr("id"))
	{
		case 'coins_to_buy' :
		{
			updMoney(sender);
			break;
		}
		case 'money_to_spend' :
		{
			updCoins(sender);
			break;
		}
		case 'coupon' :
		{
			getCouponBonus(sender.val());
			processAndShowToolTip();
			updMoney(coins_to_buy_block);
			coupon_bonus_block.val(coupon_bonus * 100 + " %");
			break;
		}
	}
};

var getCouponBonus = function(coupon_code) {
	$.ajax({
		url : "controllers/calc.php",
		method : "POST",
		data : {
			act : 'get_coupon_bonus',
			coupon_code : coupon_code
		},
		async : false,
		success : function(response) {
			if (response > 0 && response < 1)
			{
				coupon_bonus = response;
			}
			else
			{
				coupon_bonus = 0;
			}
		}
	});
};

var getVolumeBonusTable = function() {
	$.ajax({
		url : "controllers/calc.php",
		method : "POST",
		async : false,
		data : {
			act : 'get_coupons_table'
		},
		success : function(response) {
			volume_bonus_table = jQuery.parseJSON(response);
		}
	});
};


var updVallet = function() {
	current_vallet = $(".vallets").find("li.selectedComboBoxItem").attr("id");

	$.ajax({
		url : "controllers/calc.php",
		method : "POST",
		async : false,
		data : {
			act : 'get_price_per_m',
			vallet : current_vallet
		},
		success : function(response) {
			console.log("price is - " + response);
			if (response > 0)
			{
				price_per_m = response;
				$("#price_per_m").val(price_per_m + " " + current_vallet);
			}
		}
	});

	money_to_spend_block.val(coins_to_buy_block.val() * price_per_m * (1 - (coupon_bonus + volume_bonus)));
};

var updCoins = function (sender) {
	coins_to_buy_block.val(Math.round(sender.val() / (price_per_m * (1 - coupon_bonus - volume_bonus))));
};

var updMoney = function (sender) {
	money_to_spend_block.val((sender.val() * price_per_m * (1 - coupon_bonus - volume_bonus)).toFixed(2));
};

var processAndShowToolTip = function() {
	var table_lenght = Object.keys(volume_bonus_table).length;

	var tool_tip_array = [];


		for (var i = 0; i < table_lenght; i++)
		{
			if (coins_to_buy_block.val() < volume_bonus_table[i][0])
			{
				console.log(table_lenght - i - count_toolTips);
				console.log('i = ' + i);
				console.log('coins - ' + volume_bonus_table[i - 1][0] + " bonus -  " + volume_bonus_table[i - 1][1]);

				if ((table_lenght - i - count_toolTips + 1) > 0)
				{
					console.log("enough for 3");

					for (var j = i; j < i + count_toolTips; j++)
					{
						tool_tip_array.push({
							count_coins : volume_bonus_table[j][0],
							bonus : volume_bonus_table[j][1]
						});
					}
				}
				else
				{
					console.log("not enough for 3");

					for (var j = i; j < table_lenght; j++)
					{
						tool_tip_array.push({
							count_coins : volume_bonus_table[j][0],
							bonus : volume_bonus_table[j][1]
						});
					}
				}
				break;
			}
		volume_bonus = 0;
		}



	console.log('volume bonus ' + volume_bonus);
	volume_bonus_block.val(volume_bonus * 100 + " %");
	console.log(tool_tip_array);
};




