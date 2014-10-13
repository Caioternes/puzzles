<?php

class Autor
{
 
	public $nome;
	
	function __construct($lerNome)
	{
		$this->nome = $lerNome;
	}
	
	public function formatar()
	{
		
		$nomeExplode = explode(" ", $this->nome);
		
		$nnomes = count($nomeExplode);
		
		$i = 1; //primeiro nome não entra no while
		$nentrou = 0;
		while($i < $nnomes){
			
			if($nentrou > 0){
				$nomeExplode[$i - $nentrou] = $nomeExplode[$i]; //volta uma posição no array ja que a posição do "da", "de" etc ficou vaga
			}
			if (strtolower($nomeExplode[$i]) == "da" or strtolower($nomeExplode[$i]) == "das" or strtolower($nomeExplode[$i]) == "de"
				or strtolower($nomeExplode[$i]) == "do" or strtolower($nomeExplode[$i]) == "dos" or strtolower($nomeExplode[$i]) == "neto"
				or strtolower($nomeExplode[$i]) == "filho" or strtolower($nomeExplode[$i]) == "sobrinho" or strtolower($nomeExplode[$i]) == "junior"){
				$nentrou += 1; //número de vezes que ele precisa recuar no array
				$nomeExplode[$i - $nentrou] = $nomeExplode[$i - $nentrou]." ".$nomeExplode[$i];
			}
			
			$i++;
		}
		if($nentrou > 0){
			$nnomes = $nnomes - $nentrou;// "da", "de" etc deixou de ser separado, por isso diminui pelo número de vezes que precisou recuar
		}
		
		
		if ($nnomes == 1){
			return strtoupper($nomeExplode[0]);
		}else{
			$i = 0;
			$nomefinal = "";
			while ($i < $nnomes){
				if ($i == ($nnomes - 1)){
					$nomefinal = strtoupper($nomeExplode[$i]).", ".$nomefinal;
				}elseif($i == 0){
					$nomefinal = ucfirst(strtolower($nomeExplode[0]));
				}else{
					$nomefinal = $nomefinal." ".ucfirst(strtolower($nomeExplode[$i]));
				}
				$i++;
			}
			return $nomefinal;
		}
	}
}

?>
