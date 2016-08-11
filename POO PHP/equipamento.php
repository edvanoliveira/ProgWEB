<?php

namespace Equipamento;

Class Equipamento{

	private $ligado;

	function liga($ligado) {
		$this->ligado = true;
		echo "ligado";
	}

	function desliga($ligado) {
		$this->ligado = false;
		echo "desligado";
	}
}
?>