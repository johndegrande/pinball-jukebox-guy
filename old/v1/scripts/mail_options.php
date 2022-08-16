<?php

	$evil=0; //Flag variable that denotes evilness abound. If rules are violated, variable set to 1, no e-mail sent.
	
	 	$exploits = "/(content-type|bcc:|cc:|document.cookie|onclick|onload|javascript|alert|href|http)/i";
    	$profanity = "/(beastial|bestial|blowjob|clit|cunilingus|cunillingus|cunnilingus|cunt|ejaculate|fag|felatio|fellatio|fuck|fuk|fuks|gangbang|gangbanged|gangbangs|hotsex|jism|jiz|kock|kondum|kum|kunilingus|orgasim|orgasims|orgasm|orgasms|phonesex|phuk|phuq|porn|pussies|pussy|spunk|xxx)/i";
    	$spamwords = "/(viagra|phentermine|tramadol|adipex|advai|alprazolam|ambien|ambian|amoxicillin|antivert|blackjack|backgammon|texas|holdem|poker|carisoprodol|ciara|ciprofloxacin|debt|dating|porn|lipothin|cialis|propecia|finasteride)/i";
    	$bots = "/(Indy|Blaiz|Java|libwww-perl|Python|OutfoxBot|User-Agent|PycURL|AlphaServer)/i";

    	if (preg_match($bots, $_SERVER['HTTP_USER_AGENT'])) 
		{
    		echo("<p class='style1'>Known spam bots are not allowed.</p>\n");
			showMailForm();
			$evil=1;
			return;
    	}
    	foreach ($_POST as $key => $value) 
		{
    		$value = trim($value);

       		if (empty($value)) {
           		echo("<p class='style1'>Empty fields are not allowed. Please fill in each field completely.</p>\n");
				showMailForm();
				$evil=1;
				return;
        	} elseif (preg_match($exploits, $value)) {
            	echo("<p class='style1'>Exploits/malicious scripting attributes aren't allowed.</p>\n");
				showMailForm();
				$evil=1;
				return;
        	} elseif (preg_match($profanity, $value) || preg_match($spamwords, $value)) {
            	echo("<p class='style1'>That kind of language is not allowed through our form.<br>Please try again.</p>\n");
				showMailForm();
				$evil=1;
				return;
        	}	

        	$_POST[$key] = stripslashes($value);
    	}	

    	if (!ereg("^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,6})$",strtolower($_POST['email']))) {
        	echo("<p class='style1'>That e-mail address is not valid, please use another.</p>\n");
			showMailForm();
			$evil=1;
			return;
    	}
        ?>