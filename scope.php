<?php 

	$var = 25;

	function fun() {

		$num = 25;

		#echo $var;

		echo $num;

		//variables globales no existen dentro de las funciones, diferente a Java

	}

	fun(); //las variables locales solo se pueden acceder desde dentro de la funcion

	//fun();

	//variables locales son accesibles desde dentro de las funciones, globales solo desde fuera de las funciones

 ?>