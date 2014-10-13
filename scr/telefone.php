<?php

class Telefone
{
	public $desc;
	
	function __construct($lerDesc)
	{
		$this->desc = $lerDesc;
	}
	
	public function numeroTelefone(){
		$descExplode = strtolower($this->desc);
		$cont = strlen($descExplode);//conta quantos caracteres tem a String
		
		$i = 0;
		$numeroTel = "";
		while($i < $cont){
		
			if ($descExplode[$i] == "1"){
				$numeroTel = $numeroTel."1";
			}elseif($descExplode[$i] == "0"){
				$numeroTel = $numeroTel."0";
			}elseif($descExplode[$i] == "-"){
				$numeroTel = $numeroTel."-";
			}elseif($descExplode[$i] == "a" or $descExplode[$i] == "b" or $descExplode[$i] == "c"){
				$numeroTel = $numeroTel."2";
			}elseif($descExplode[$i] == "d" or $descExplode[$i] == "e" or $descExplode[$i] == "f"){
				$numeroTel = $numeroTel."3";
			}elseif($descExplode[$i] == "g" or $descExplode[$i] == "h" or $descExplode[$i] == "i"){
				$numeroTel = $numeroTel."4";
			}elseif($descExplode[$i] == "j" or $descExplode[$i] == "k" or $descExplode[$i] == "l"){
				$numeroTel = $numeroTel."5";
			}elseif($descExplode[$i] == "m" or $descExplode[$i] == "n" or $descExplode[$i] == "o"){
				$numeroTel = $numeroTel."6";
			}elseif($descExplode[$i] == "p" or $descExplode[$i] == "q" or $descExplode[$i] == "r"  or $descExplode[$i] == "s"){
				$numeroTel = $numeroTel."7";
			}elseif($descExplode[$i] == "t" or $descExplode[$i] == "u" or $descExplode[$i] == "v"){
				$numeroTel = $numeroTel."8";
			}elseif($descExplode[$i] == "w" or $descExplode[$i] == "x" or $descExplode[$i] == "y"  or $descExplode[$i] == "z"){
				$numeroTel = $numeroTel."9";
			}
		
			$i++;
		}
		return $numeroTel;
	}
}

?>
