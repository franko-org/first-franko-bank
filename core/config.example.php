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
		"defaced" => "74.196.48.62"
);

// NOT IMPLEMENTED YET ...
$minfee   = 0.00001;                          // min. hard fee on all transactions
$feeperc  = 2.5;                        // fee for outgoing transactions in percentage
$fee_account = "FE35Ez4oq8jVfEaKJAHTugkkwzVVhuLxVZ";  					// set to your own KEY to recieve fee�s there
?>
