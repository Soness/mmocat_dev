<?php
	require "../connection.php";


	if (isset($_POST['act']))
	{
		$action = $_POST['act'];
		switch ($action) {
			case 'get_price_per_m':
			{
				if (isset($_POST['vallet']))
				{
					$vallet_type = $_POST['vallet'];
					$SQL = "SELECT vallet_price FROM vallet_per_coin WHERE vallet_name='$vallet_type'";
					$data = $conn->query($SQL);
					if ($data->num_rows > 0)
					{
						$price = $data->fetch_assoc();
						exit($price["vallet_price"]);
					}
					else {
						exit('no find price');
					}
				}
				break;
			}
			case 'get_coupon_bonus':
			{
				if (isset($_POST['coupon_code']))
				{
					$coupon_code = $_POST['coupon_code'];
					$SQL = "SELECT coupon FROM counpons WHERE coupon_code='$coupon_code'";
					$data = $conn->query($SQL);

					if ($data->num_rows > 0)
					{
						$price = $data->fetch_assoc();
						exit($price["coupon"]);
					}
					else {
						exit(0);
					}
				}
				break;
			}
			case 'get_coupons_table':
			{
					$response = array();

					$SQL = "SELECT * FROM coupon_for_coins";
					$data = $conn->query($SQL);
					if ($data->num_rows > 0)
					{
						while($row = mysqli_fetch_assoc($data)) 
						{
							$a = array($row['countcoins'], $row['coupon']);
							array_push($response, $a);
						}

						exit(json_encode($response));
					}
					else
					{
						exit('error');
					}
					

				break;
			}
				
			
			default:
				# code...
				break;
		}
	}
	else
	{
		exit('err maybe');
	}
?>