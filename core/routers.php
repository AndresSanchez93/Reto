<?php
	
	function cargarControlador($controlador){
		
		$nombreControlador = ucwords($controlador)."control";
		$archivoControlador = 'control/'.ucwords($controlador).'.php';
		
		if(!is_file($archivoControlador)){
			
			$archivoControlador= 'control/'.CONTROLADOR_PRINCIPAL.'.php';
			
		}
		require_once $archivoControlador;
		$control = new $nombreControlador();
		return $control;
	}
	
	function cargarAccion($controlador, $accion, $codigo = null){
		
		if(isset($accion) && method_exists($controlador, $accion)){
			if($codigo == null){
				$controlador->$accion();
				} else {
				$controlador->$accion($codigo);
			}
			} else {
			$controlador->ACCION_PRINCIPAL();
		}	
	}
?>