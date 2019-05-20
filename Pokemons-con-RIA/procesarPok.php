<?php  
	
	//lo ideal seria cargarlos de una BD, pero por tiempo se hace asi(por ahora)
	$pokemons = array();

	$pokemons[0] = array(
		'numero'=>0,
		'imagen'=>'welcome.png',
		'nombre'=>'¡Bienvenidos!',
		'tipo'=>'Aqui podras ver el tipo del pokemon',
		'fuerza'=>'Aqui podras ver la fuerza del pokemon',
		'velocidad'=>'Aqui podras ver la velocidad del pokemon',
		'evolucion'=>'Aqui podras ver la evolucion del pokemon(1,2 o 3)'
	);

	$pokemons[1] = array(
		'numero'=>1,
		'imagen'=>'img_pokemons/charizard.png',
		'nombre'=>'Charizard',
		'tipo'=>'FUEGO-VOLADOR',
		'fuerza'=>84,
		'velocidad'=>100,
		'evolucion'=>3
	);

	$pokemons[2] = array(
		'numero'=>2,
		'imagen'=>'img_pokemons/charmander.png',
		'nombre'=>'Charmander',
		'tipo'=>'FUEGO',
		'fuerza'=>52,
		'velocidad'=>65,
		'evolucion'=>1
	);

	$pokemons[3] = array(
		'numero'=>3,
		'imagen'=>'img_pokemons/clefairy.png',
		'nombre'=>'Clefairy',
		'tipo'=>'HADA',
		'fuerza'=>45,
		'velocidad'=>35,
		'evolucion'=>2
	);

	$pokemons[4] = array(
		'numero'=>4,
		'imagen'=>'img_pokemons/golduck.png',
		'nombre'=>'Golduck',
		'tipo'=>'AGUA',
		'fuerza'=>82,
		'velocidad'=>85,
		'evolucion'=>2
	);

	$pokemons[5] = array(
		'numero'=>5,
		'imagen'=>'img_pokemons/mankey.png',
		'nombre'=>'Mankey',
		'tipo'=>'LUCHA',
		'fuerza'=>80,
		'velocidad'=>70,
		'evolucion'=>1
	);

	$pokemons[6] = array(
		'numero'=>6,
		'imagen'=>'img_pokemons/pidgey.png',
		'nombre'=>'Pidgey',
		'tipo'=>'NORMAL-VOLADOR',
		'fuerza'=>45,
		'velocidad'=>56,
		'evolucion'=>1
	);

	$pokemons[7] = array(
		'numero'=>7,
		'imagen'=>'img_pokemons/pikachu.png',
		'nombre'=>'Pikachu',
		'tipo'=>'ELECTRICO',
		'fuerza'=>55,
		'velocidad'=>90,
		'evolucion'=>2
	);

	$pokemons[8] = array(
		'numero'=>8,
		'imagen'=>'img_pokemons/raticate.png',
		'nombre'=>'Raticate',
		'tipo'=>'NORMAL',
		'fuerza'=>81,
		'velocidad'=>97,
		'evolucion'=>2
	);

	$pokemons[9] = array(
		'numero'=>9,
		'imagen'=>'img_pokemons/venonat.png',
		'nombre'=>'Venonat',
		'tipo'=>'BICHO-VENENO',
		'fuerza'=>55,
		'velocidad'=>45,
		'evolucion'=>1
	);

	$pokemons[10] = array(
		'numero'=>10,
		'imagen'=>'img_pokemons/wartortle.png',
		'nombre'=>'Wartortle',
		'tipo'=>'AGUA',
		'fuerza'=>63,
		'velocidad'=>58,
		'evolucion'=>2
	);

    
	$dato = $_POST['id'];

	if(($dato >= 0) && ($dato <= 10)){//TODO: cambiar el 10 por el tamaño del vector
		$nuevo_array = array();
		$nuevo_array[0] = $pokemons[$dato];

		$jsonstr = json_encode($nuevo_array);
		echo $jsonstr;	
	}else{
		echo 'error, pokemon no existente';		
	}
?>