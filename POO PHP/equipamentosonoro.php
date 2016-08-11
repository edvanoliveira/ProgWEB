<?php

namespace Equipamento\Sonoro;
use Equipamento\Equipamento;

Class EquipamentoSonoro extends Equipamento{

	public $volume;
	public $stereo = false;

	function stereo(){

		$this->stereo = true;
	}

	function mono(){

		$this->stereo = false;

	}

	function setVolume($volume){

		$this->volume = $volume;
	}


	function liga($ligado) {
		parent::liga($ligado);
		$this->setVolume(5);
	}

}

?>