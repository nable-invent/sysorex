<?php
defined("BASEPATH") or exit("No Direct Access Allowed");
class VtransactSecurity extends CI_Model
{

	
	function encryptValue($inputVal,$secureKey)
	{

		
		$key='';
		for ($i=0; $i < strlen($secureKey)-1; $i+=2)
		{
			$key .= chr(hexdec($secureKey[$i].$secureKey[$i+1]));
		}
		
		$block = 16;
		$pad = $block - (strlen($inputVal) % $block);
		$inputVal .= str_repeat(chr($pad), $pad);
		
		$encrypted_text = bin2hex(openssl_encrypt($inputVal, "aes-128-ecb", $key, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING));
		

		return $encrypted_text;
	}



	function decryptValue($inputVal,$secureKey)
	{	   
		$key='';
		for ($i=0; $i < strlen($secureKey)-1; $i+=2)
		{
			$key .= chr(hexdec($secureKey[$i].$secureKey[$i+1]));
		}
			
		$encblock='';
		for ($i=0; $i < strlen($inputVal)-1; $i+=2)
		{
			$encblock .= chr(hexdec($inputVal[$i].$inputVal[$i+1]));
		}
		$decrypted_text = openssl_decrypt(hex2bin($inputVal), "aes-128-ecb", $key, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING);

		return $decrypted_text;

	}
}
?>