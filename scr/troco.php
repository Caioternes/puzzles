<?php

class Troco
{
	public $valorTotal;
	public $valorPago;
	
	function __construct($lerTot, $lerPag)
	{
		$this->valorTotal = $lerTot;
		$this->valorPago = $lerPag;
	}
	
	
	public function valorTroco(){
		$valtot = $this->valorTotal;
		$valpag = $this->valorPago;
		$troco = $valpag - $valtot; 
		$troco = number_format($troco , 2); // truncamento, pois caso ele resultace algo em torno de 10 centavos para baixo ficava o troco como 0.100000000001 fazendo com que ficasse em loop no while
		$R100 = 0;
		$R50 = 0;
		$R20 = 0;
		$R10 = 0;
		$R5 = 0;
		$R2 = 0;
		$R1 = 0;
		$C50 = 0;
		$C25 = 0;
		$C10 = 0;
		$C5 = 0;
		$C1 = 0;
		
		while($troco > 0){
			if($troco >= 100.00){
				$R100 += 1;
				$troco -= 100;
			}elseif($troco >= 50){
				$R50 += 1;
				$troco -= 50;
			}elseif($troco >= 20){
				$R20 += 1;
				$troco -= 20;
			}elseif($troco >= 10){
				$R10 += 1;
				$troco -= 10;
			}elseif($troco >= 5){
				$R5 += 1;
				$troco -= 5;
			}elseif($troco >= 2){
				$R2 += 1;
				$troco -= 2;
			}elseif($troco >= 1){
				$R1 += 1;
				$troco -= 1;
			}elseif($troco >= 0.50){
				$C50 += 1;
				$troco -= 0.50;
			}elseif($troco >= 0.25){
				$C25 += 1;
				$troco -= 0.25;
			}elseif($troco >= 0.10){
				$C10 += 1;
				$troco -= 0.10;
			}elseif($troco >= 0.05){
				$C5 += 1;
				$troco -= 0.05;
			}elseif($troco >= 0.01){
				$C1 += 1;
				$troco -= 0.01;
			}else{
				$troco = 0; //caso as subtrações do while resultem troco abaixo de 0.01 por causa do float ele zera o troco para não ficar em loop
			}
		}
		$retornoTroco = "R$100,00: ".$R100." R$50,00: ".$R50." R$20,00: ".$R20." R$10,00: ".$R10." R$5,00: ".$R5." R$2,00: ".$R2." R$1,00: ".$R1
		." R$0,50: ".$C50." R$0,25: ".$C25." R$0,10: ".$C10." R$0,05: ".$C5." R$0,01: ".$C1;
		return $retornoTroco;
	}
	
}

?>
