<?php
/**
 mail : p - mir [at] lavitrinemedicale . fr
 date : 28/11/2011
 Projet : CAmanager
 
**/

	class crypt
	{

		private $psAlgo;
		private $psMode;
		private $psCle;	
		private $psCleiv;
		private $TexteCrypte;
		private $iv;
	
	
		public function __defineCrypt()
		{
			$crypt = array();
			if(file_exists('Param.php'))
			{

				$file = 'Param.php';
				$crypt = parse_ini_file($file);
				$this->psCle       		= $crypt['cle'];		//$psCle;
				$this->psCleiv     		= $crypt['cleiv'];		//$psCleiv;
			}
		}


		public function CreateCryptage($Data)
		{
				// calcul des longueurs max de la cl� et de l'IV
			$key_size = mcrypt_module_get_algo_key_size(MCRYPT_BLOWFISH);
			$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH,MCRYPT_MODE_NOFB);

				// cr�ation d'un IV de la bonne longueur d�butant par exemple de iv suivi de 0
			$iv= mcrypt_create_iv($iv_size, substr($this->psCleiv,0,$iv_size));

				// Mise � longueur de la cl� secr�te de chiffrement suivant l'algorithme et le mode associ�
			$cle= substr($this->psCle, 0, $key_size);	

				// cryptage des donn�es
			$TexteCrypte= mcrypt_encrypt(MCRYPT_BLOWFISH, $cle, $Data, MCRYPT_MODE_CBC, $iv);
			
				// Renvoie de la donn�e crypt�e
			return array ($TexteCrypte,$cle,$iv);
		}
		
		
		public function cryptage($Data,$cle,$iv)
		{
				// decryptage des donn�es
			$TexteCrypte= mcrypt_encrypt(MCRYPT_BLOWFISH, $cle, $Data, MCRYPT_MODE_CBC, $iv);
			
				// Renvoie de la donn�e crypt�e
			return $TexteCrypte;
		}
		
		
		public function decryptage($Data,$cle,$iv)
		{
				// decryptage des donn�es
			$TexteDeCrypte= mcrypt_decrypt(MCRYPT_BLOWFISH, $cle, $Data, MCRYPT_MODE_CBC, $iv);
			
				// Renvoie de la donn�e crypt�e
			return $TexteDeCrypte;
		}
	}
?>