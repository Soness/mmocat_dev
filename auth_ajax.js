$(document).ready(function() {
		$("#auth_container .btn").click(function() {
				var email = $("#email").val().trim();
				var password = $("#password").val().trim();
			
				if (email == "" || password == "")
					{
						alert("Заполните все поля. ");
					}
			else
				{
					$.ajax({
						url: "auth_action.php",
						method : "POST",
						data : {
							login : '1',
							email : email,
							password : password
						},
						success : function(response) {
							console.log(response);
						}
					});
				}
		});
});