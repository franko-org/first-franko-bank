<?
// Donation account
$don_account = "WalletDonations";

// RPC Settings
$btclogin = array(
"username" =>   "user",
"password" =>   "pass",
"host" =>       "localhost",
"port" =>       "7913");

// DB Settings
$sqlogin = array(
"host" =>       "localhost",
"dbname" =>     "wallet",
"username" =>   "user",
"password" =>   "pass");

// sending settings ..
$minleft  = 0.1;                        // minimum left on account
$minsend  = 1;                          // minimum allowed to send at a time

//captha
$publickey = "PubKey";
$privatekey = "PriVKeY";

// maintenance mode
$maintenance = FALSE;  // Change to TRUE to lockdown the site for all other then admins

// admin ips 
$adminips = array(
		"g2x3k" => "87.58.119.133",		
		"other" => "someip"
);

// NOT IMPLEMENTED YET ...
$minfee   = 0;                          // min. hard fee on all transactions
$feeperc  = 2.5;                        // fee for outgoing transactions in percentage
$fee_account = "";  					// set to your own KEY to recieve fee�s there
?>
