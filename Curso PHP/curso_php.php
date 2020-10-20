<?php
	echo "<h1>Declaración de variables y comentarios</h1>";
	//Declaración de variables y comentarios
	//El comentario sirve para documentar
	
	//Comentarios
	//Comentario de doble diagonal
	#Comentario con signo numeral
	/*
	El comentario de linea multiple
	se usa con una diagonal y un asterisco
	al inicio y al final con asterisco
	y diagonal 
	*/

	/*
	Para declarar una variable se requiere el signo de dinero o pesos
	PHP es un lenguaje de programacion debilmente tipado,
	eso quiere decir que no se necesita declarar el tipo de dato a las variables
	*/

	//PHP es lenguaje interpretado, no compilado

	$variable1 = 1;	//Variable de tipo entero
	$variable2 = "nombre";	//Variable de tipo string entre comillas
	$variable3 = 1.5;	//Variable de tipo float o double

	/*
	Las variables no pueden empezar con numero
	Debe empezar con letra
	*/
	//Mostrar informacion en pantalla

	echo $variable1;	//echo imprime en pantalla
	echo "<br>";		//br etiqueta html para salto de linea
	print $variable3;	//print imprime en pantalla	

	
	echo "<h1>Signos de operacion</h1>";
	//Signos de operacion
	//Para realizar la concatenacion se usa el "."
		
	//Declaracion de variables

	$valor1 = 2;
	$valor2 = 4;
	$valor3 = 5;

		$resultado = $valor1 + $valor2 + $valor3;
		$suma = $valor1 + $valor2;
		$resta = $valor1 - $valor2;
		$mult = $valor1 * $valor2;
		$div = $valor1 / $valor2;

	/*
	Para sumar valores en php utilizamos el signo de +
	Para restar valores en php utilizamos el signo de -
	Para multiplicar valores en php utilizamos el signo de *
	Para dividir valores en php utilizamos /
	*/

	/*
	Ejemplo de concatenacion
	La concatenación es la union de valores string o numeros
	*/

	$nombre1 = "Adrian";
	$apellido = 'Grande';

		echo $nombre1." ".$apellido." ".$resultado;
		echo "<br>";

		echo "Valor1:"." ".$valor1." "."Valor2:"." ".$valor2;
		echo "<br>";
		echo "Suma:"." ".$suma;
		echo "<br>";
		echo "Resta:"." ".$resta;
		echo "<br>";
		echo "Multiplicacion:"." ".$mult;
		echo "<br>";
		echo "Division:"." ".$div;


	echo "<h1>Estructura de control: if</h1>";
	/*
	La estructura de control if, sirve para
	la validacion de sentencias
	*/

	//Declaracion de variables
	$numero1 = 5;
	$numero2 = 10;

	//Declaracion de variable de tipo bolean 
	$bandera = true;

	/*
	Se utiliza el signo de mayor > o menor < 
	para la comparacion de numeros
	asi tambien podemos utilizar 
	mayor o igual >= o mener o igual <=
	*/
	
	if($bandera){
		echo "verdadero";
	}
	echo "<br>";
	if ($numero1 <= $numero2) {
		echo "si es verdad";
	}

	

	echo "<h1>Estructura de control: if else</h1>";
	/*
	Sirve para validar una expresion 
	de una forma o de otra
	*/

	$mivalor = true;

	$valorife1 = 5;
	$valorife2 = 10;

	if($valorife1 > $valorife2)
	{
		echo "Es verdadero";
	}
	else
	{
		echo "Es falso";
	}



	echo "<h1>Etructura de control: if anidado</h1>";
	/*
	Un if anidado es una estructura de control que te permite
	validar multiples casos a la vez 
	*/

	$edad = 20;

		if($edad==5){
			echo "es un niño";
		}else if($edad==15){
			echo "es un puberto";
		}else if($edad==20){
			echo "es un adulto joven";
		}
		else{
			echo "no se que es";
		}



	echo "<h1>Operadores logicos</h1>";
	/*
	Los operadores logicos sirven para validar expresiones
	tal es el caso del operador or que sirve para validar
	un sentencia u otra 
	En el caso del operador and que sirve para validar ambas
	sentencias
	*/

	$resultado = 50;
	$dato = 10;

		//Operador AND
		if($resultado< 51 and $resultado > 49){
			echo "es un numero 50 valido";
		}
	
	$edadvalida = 25;

		if($edadvalida > 18 and $edadvalida < 26){
			echo "la edad es valida";
		}

	$sexo="M";

		//Operador OR
		if($sexo=='M' or $sexo=='F'){
			echo "sexo valido";
		}

	$dato = 10;

		//Operador diferente de
		if ($dato != 1) {
			echo "Es buen dato";
		}

		//Operador negacion
		if (!$dato) {
			echo "No es verdadero";
		}




	echo "<h1>Etructura de control: Switch</h1>";
	/*
	Funciona a partir de evaluacion de casos
	*/

	$valorMaestro = 1;

	switch ($valorMaestro) {
		case 1:
			echo "Este es el caso 1";
			break;
		case 2:
			echo "este es el caso 2";
			break;

		default:
			echo "no existe ese caso :)";
			break;
	}



	echo "<h1>Estructura de control: For</h1>";
	/*
	Es una estructura de control iterativa
	donde necesitas tener un inicio, 
	un  final y un contador.
	*/

	for($i=1;$i<11;$i++){
		//aqui se lleva a cabo la repeticion de 
		//algun proceso dado
		echo $i;
		echo "<br>";
	}
	
	//creacion de la tabla de multiplicar con for
	for ($i=1; $i < 11; $i++) { 
			
		echo "10 x".$i."=".$i*10;
		echo "<br>";
	}



	echo "Estructura de control: While";
	/*
	Es una estructura de control iterativa o repetitiva
	que funciona siempre y cuando una condicion sea valida.
	*/
		$condicion=0;

		while($condicion < 10){
			echo "se cumple la condicion :)";
			echo "<br>";
			echo $condicion++;
			echo "<br>";
			//es lo mismo que $condicion=$condicion + 1;
		}

		//como hacer un while infinito
		while (true) {
		
	}



	echo "<h1>Arreglos</h1>";
	/*
	Un arreglo es un tipo de dato que puede contener n datos
	a partir de un almacenamiento por indice
	*/
	
	$arreglo = array();
	$arreglo[0] = "juan";
	$arreglo[1] = 10;
	$arreglo[2] = 'autodidacta';
	$arreglo[3] = 'facultad :)';
	
	//podemos llenar el arreglo desde el inicio o por posicion

	$arreglo2 = array('jose',5,6,7,8,9,10);

	for ($i=0; $i < count($arreglo2); $i++) { 
		echo $arreglo2[$i];
		echo "<br>";

		if($arreglo2[$i]=='autodidacta'){
			echo "felicidades encontraste el dato";
			echo "<br>";
		}



	echo "<h1>Arreglos asociativos</h1>";
	/*
	Es un tipo de dato que puede almacenar n datos pero
	en vez de guardar por indice , se le proporciona una llave o nombre
	a dicho dato
	*/

	$arregloColores = array(
			"coche" => "verde",
			"moto" => "roja",
			"avion" => "gris"
		);
	
	echo $arregloColores['coche'];	



	echo "<h1>Estructura ed control: For each</h1>";
	/*
	Es una estructura de control iterativa
	que usa llaves o asociaciones de datos con indice.
	*/

	$arregloColores = array(
			"coche" => "verde",
			"moto" => "roja",
			"avion" => "gris"
		);
	$array=array(1,2,3,4,5);

	foreach ($arregloColores as $key) {
		echo $key;
		echo "<br>";
	}



	echo "<h1>String con explode</h1>";
	/*
	Explode es una funcion que convierte un string a un arreglo
	dependiendo de la construccion pedida.
	*/

	$var="pedro jimenez lopez";
	$fecha="01-05-2017";
	
	$datos=explode(" ", $var);
	$f=explode("-", $fecha);

	echo "El mes de la fecha es:".$f[1];



	echo "<h1>Fechas</h1>";

	date_default_timezone_set('America/Mexico_City');

	echo $fecha = date('d-m-Y');



	echo "<h1>Funciones</h1>";
	//funcion normal de php
	
	function mifuncion(){
		//mostrar un nombre
		$r = array(1);
		return $r;
	}

	//funciones escalares

	function mifuncion2($valorA,$valorB,$opcion){
		switch ($opcion) {
			case 'suma':
				return $valorA + $valorB;
				break;
			case 'resta':
				return $valorA - $valorB;
				break;
			case 'multiplicacion':
				return $valorA * $valorB;
				break;
			case 'division':
				return $valorA / $valorB;
				break;
			default:
				# code...
				break;
		}
	}

	echo mifuncion2(5,10,'multiplicacion');
?>
