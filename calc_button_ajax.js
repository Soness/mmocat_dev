$(document).ready(function() {
	$("#calcButton").click(function() {
		sendAjaxForm("action_buy_coins.php");
		return false;
	});
	
});

function sendAjaxForm(_url) {
	
	var coinsToBuy = $("#coins_calculator input[id='coins_to_buy']").val().trim();
	var moneyToSpend = $("#coins_calculator input[id='money_to_spend']").val().trim();
	var email = $("#coins_calculator input[id='email']").val().trim();
	
	if (coinsToBuy == "" && moneyToSpend == "")
		{
			showError();
		}
	else if (coinsToBuy != "" && moneyToSpend != "")
			 {
			 	showError();
			 }
	else if (email == "")
		{
			showError();
		}
	else {
	$.ajax({
          type: 'POST',
          url: _url,
          data: $("#coins_calculator").serialize(),
          success: function() {
           	console.log("succ");
          },
          error:  function(){
	    	console.log("err");
          }
        });
	}
	console.log($("#coins_calculator").serialize());
}

function showError() {
	alert("error");
}
