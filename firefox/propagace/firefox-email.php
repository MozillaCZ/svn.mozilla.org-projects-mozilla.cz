<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<meta http-equiv="Content-language" content="cs" />
<title>Informuj kamaráda proč přejít na Firefox</title>
<link rel="shortcut icon" href="/img/ff-ico.png" type="image/png" />
<link rel="Home" href="http://firefox.czilla.cz/" />
<meta name="description" content="Pošli e-mail kamarádovi a informuj ho proč přejít na Firefox" />
<meta name="keywords" content="mozilla firefox bannery ikony tlačítka e-mail email promo promotion propagace podpora" />
<meta name="copyright" content="Copyright (c) 2004-2006 Projekt CZilla" />
<meta name="author" content="Pavel Ondřej 2005; e-mail: pavel@pavelondrej.info" />
<meta name="robots" content="index,follow" />
<style type="text/css">
	body {margin: 0; font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 12px}
	#pane {width: 120px; text-align: center;background: #02145F;color: #ffffff;}
	#info {font-weight: bold;margin-bottom:10px}
	#email {margin:0 3px;height:7.2em}
	#email input {font-size: 8px; font-weight:bold; font-family: Tahoma, Arial, Helvetica, sans-serif; text-align: center; border: 1px solid #ffffff; background: #EAE5D9}
	form[id=email] input {margin: 1px 0}
</style>
<script type="text/javascript" charset="iso-8859-2">
	function kontrolaDat(vstup){
		zadanaHodnota = vstup.email_od.value; 
		zadanaHodnota2 = vstup.email_pro.value;
		zadanaHodnota3 = vstup.jmeno_od.value; 
		zadanaHodnota4 = vstup.jmeno_pro.value;
		var chyby = new Array();
		var regex = new RegExp("^[\\w-+_\.]*[\\w]\@[\\w]\.+[\\w]+[\\w]$");

		if(!regex.test(zadanaHodnota)) {
			chyby[chyby.length] = "Nebyl zadán Váš e-mail, prosím vyplňte jej.";
		}

		if(zadanaHodnota=='billgates@microsoft.com') {
			chyby[chyby.length] = "Nebyl zadán Váš skutečný e-mail, prosím vyplňte jej.";
		}

		if(!regex.test(zadanaHodnota2)){
			chyby[chyby.length] = "Nebyl zadán kamarádův e-mail, prosím vyplňte jej.";
		}

		if(zadanaHodnota3 == "" || zadanaHodnota3 == "Váše jméno") {
			chyby[chyby.length] = "Nebylo zadáno Váše jméno, prosím vyplňte jej.";
		}

		if( zadanaHodnota4 == "" || zadanaHodnota4 == "Jméno kamaráda")	{
			chyby[chyby.length] = "Nebylo zadáno kamarádovo jméno, prosím vyplňte jej."
		}
		chybyStr = chyby.join("\n\n");
		if(chybyStr) {
			alert(chybyStr);
			return false;
		}
		return true;
	}
</script>
</head>
	<body>
		<div id="pane">
		<img src="/img/p/cz-ff-120x240-i-objevte-1.png" alt="Objevte znovu web!" />
		<div id="info">Informujte svět <br /> o Firefoxu !</div>

		<?
		if($_POST['sent'] != "Informuj"){
		?>
		<form id="email" action="firefox-email.php" method="post" onsubmit="return kontrolaDat(this)">
			<div>
			<input type="text" name="email_od" onfocus="if(this.value=='Váš e-mail'){this.value=''}" value="Váš e-mail" />
			<input type="text" name="jmeno_od" onfocus="if(this.value=='Váše jméno'){this.value=''}" value="Váše jméno" />
			<input type="text" name="email_pro" onfocus="if(this.value=='E-mail kamaráda'){this.value=''}" value="E-mail kamaráda" />
			<input type="text" name="jmeno_pro" onfocus="if(this.value=='Jméno kamaráda'){this.value=''}" value="Jméno kamaráda" />
			<input type="submit" name="sent" value="Informuj" />
			</div>
		</form>
		<?
		}else{
			$recipient = "{$_POST['jmeno_pro']} <{$_POST['email_pro']}>";
			$subject = "{$_POST['jmeno_od']} Vás informuje o Firefoxu!";
			$message .= "{$_POST['jmeno_od']} <{$_POST['email_od']}> si Vám dovolil poslat následující informace o internetovém prohlížeči Firefox!\n \n";
			$message .= "Webový prohlížeč Firefox je lepší než kdykoliv předtím. Brouzdejte po webu s důvěrou - Firefox vás chrání před viry, spywarem a vyskakovacími okny. Užívejte si vylepšený výkon, snadnou použitelnost a soukromí. Je snadné si naimportovat své Oblíbené a nastavení a začít ho používat. Stáhněte si Firefox a získejte větší zážitek z brouzdání po webu... \n \n";
			$message .= "Více informací získáte na webové stránce www.firefox.cz\n \n";
			$message .= "S poděkovaním za Váš čas \n \n";
			$message .= "Váš Firefox \n \n";
			$message .= "--\r\n"; //oddělovač signatury
			$message .= "Tento email není SPAM! Tento email Vám byl doručen na žádost uživatele {$_POST['jmeno_pro']} <{$_POST['email_pro']}>.";

			$headers .= "From: E-mail o Firefoxu <info@czilla.cz>\n";
			$headers .= "Bcc: E-mail o Firefoxu <franc@czilla.cz>\n";
			$headers .= "X-Sender: <{$_POST['email_od']}>\n";
			$headers .= "X-Mailer: Firefox PHP mailer\n";
			$headers .= "Reply-To: <{$_POST['email_od']}>\n";
			$headers .= "Return-Path: <{$_POST['email_od']}>\n";
			$headers .= "Content-Type: text/plain; charset=iso-8859-2\n";

			if($_POST['email_od']=='billgates@microsoft.com') {
				$posilam = false;
			} else {
				$posilam = @mail($recipient, $subject, $message, $headers);
			}
			if($posilam){
				echo "<div id=\"email\"><br/><b>Děkujeme za informování vašeho kamaráda!</b></div>";
			}else{
				echo "<div id=\"email\"><br/><b>Bohužel, nastala chyba při odeslání :-(!</b></div>";
			}
		}
		?> 
			<img src="/img/p/cz-ff-120x240-i-objevte-2.png" alt="Objevte znovu web!" />
		</div>
	</body>
</html>