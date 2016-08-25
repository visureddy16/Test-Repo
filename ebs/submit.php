<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);

$hashData = "36609e0973cbfdb4b3dbe1bc6c0da10e"; //Pass your Registered Secret Key

unset($_POST['submitted']);
ksort($_POST);
foreach ($_POST as $key => $value){
	
	if (strlen($value) > 0) {
		
		$hashData .= '|'.$value;
	}
}
if (strlen($hashData) > 0) {
	$secure_hash = strtoupper(hash("sha512",$hashData));
	// $secure_hash = strtoupper(md5($hashData));
}
echo $hashData;

echo "<pre>";print_r($_POST);
/*$hash = "ebskey"."|".urlencode($_POST['account_id'])."|".urlencode($_POST['amount'])."|".urlencode($_POST['reference_no'])."|".$_POST['return_url']."|".urlencode($_POST['mode']);
$secure_hash = md5($hash);
echo $hash;
*/

//print_r($secure_hash_md5); exit;
?>
<form action="https://secure.ebs.in/pg/ma/payment/request" name="payment" method="POST">
<table>
<input type="hidden" value="<?php echo $_POST['account_id'];?>" name="account_id"/><tbody><tr><td>account_id</td><td><?php echo $_POST['account_id'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['address'];?>" name="address"/><tr><td>address</td><td><?php echo $_POST['address'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['amount'];?>" name="amount"/><tr><td>amount</td><td><?php echo $_POST['amount'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['bank_code'];?>" name="bank_code"/><tr><td>bank_code</td><?php echo $_POST['bank_code'];?><td/></tr>
<input type="hidden" value="<?php echo $_POST['card_brand'];?>" name="card_brand"/><tr><td>card_brand</td><td><?php echo $_POST['card_brand'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['channel'];?>" name="channel"/><tr><td>channel</td><td><?php echo $_POST['channel'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['city'];?>" name="city"/><tr><td>city</td><td><?php echo $_POST['city'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['country'];?>" name="country"/><tr><td>country</td><td><?php echo $_POST['country'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['currency'];?>" name="currency"/><tr><td>currency</td><td><?php echo $_POST['currency'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['description'];?>" name="description"/><tr><td>description</td><td><?php echo $_POST['description'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['display_currency'];?>" name="display_currency"/><tr><td>display_currency</td><td><?php echo $_POST['display_currency'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['display_currency_rates'];?>" name="display_currency_rates"/><tr><td>display_currency_rates</td><td><?php echo $_POST['display_currency_rates'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['email'];?>" name="email"/><tr><td>email</td><td><?php echo $_POST['email'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['emi'];?>" name="emi"/><tr><td>emi</td><td><?php echo $_POST['emi'];?><td/></tr>
<input type="hidden" value="<?php echo $_POST['mode'];?>" name="mode"/><tr><td>mode</td><td><?php echo $_POST['mode'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['name'];?>" name="name"/><tr><td>name</td><td><?php echo $_POST['name'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['page_id'];?>" name="page_id"/><tr><td>page_id</td><td><?php echo $_POST['page_id'];?><td/></tr>
<input type="hidden" value="<?php echo $_POST['payment_mode'];?>" name="payment_mode"/><tr><td>payment_mode</td><td><?php echo $_POST['payment_mode'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['payment_option'];?>" name="payment_option"/><tr><td>payment_option</td><?php echo $_POST['payment_option'];?><td/></tr>
<input type="hidden" value="<?php echo $_POST['phone'];?>" name="phone"/><tr><td>phone</td><td><?php echo $_POST['phone'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['postal_code'];?>" name="postal_code"/><tr><td>postal_code</td><td><?php echo $_POST['postal_code'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['reference_no'];?>" name="reference_no"/><tr><td>reference_no</td><td><?php echo $_POST['reference_no'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['return_url']; ?>" name="return_url"/><tr><td>return_url</td><td><?php echo $_POST['return_url']; ?></td></tr>
<input type="hidden" value="<?php echo $_POST['ship_address'];?>" name="ship_address"/><tr><td>ship_address</td><td><?php echo $_POST['ship_address'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['ship_city'];?>" name="ship_city"/><tr><td>ship_city</td><td><?php echo $_POST['ship_city'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['ship_country'];?>" name="ship_country"/><tr><td>ship_country</td><td><?php echo $_POST['ship_country'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['ship_name'];?>" name="ship_name"/><tr><td>ship_name</td><td><?php echo $_POST['ship_name'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['ship_phone'];?>" name="ship_phone"/><tr><td>ship_phone</td><td><?php echo $_POST['ship_phone'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['ship_postal_code'];?>" name="ship_postal_code"/><tr><td>ship_postal_code</td><td><?php echo $_POST['ship_postal_code'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['ship_state'];?>" name="ship_state"/><tr><td>ship_state</td><td><?php echo $_POST['ship_state'];?></td></tr>
<input type="hidden" value="<?php echo $_POST['state'];?>" name="state"/><tr><td>state</td><td><?php echo $_POST['state'];?></td></tr>
<input type="hidden" value="<?php echo $secure_hash; ?>" name="secure_hash"/><tr><td>secure_hash</td><td><?php echo $secure_hash;?></td></tr></tbody></table>
<button onclick="document.payment.submit();"> SUBMIT </button>
</form>