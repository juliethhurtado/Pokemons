<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device, initial-scale=1"/>
    <title>Compra Tus Pokemons</title>
    <link rel="stylesheet" type="text/css" href="theme.css">
    <link rel="stylesheet" type="text/css" href="estilosCarrito.css">
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script src="PokemonsAJAX.js"></script>


</head>
<body>

    <div class="centrado pokemon">

        <div id="pokNombre"     class="centrado caja"></div>

        <img id="pokImg" class="centrado caja" src="welcome.png"/>

        <div id="pokTipo"       class="centrado caja"></div>
        <div id="pokFuerza"     class="centrado caja"></div>
        <div id="pokVelocidad"  class="centrado caja"></div>
        <div id="pokEvolucion"  class="centrado caja"></div>

        <form class = "centrado caja" method="get">
            <select id = "selOpciones" name="pokemons" onchange="loadDoc(this.value)">
                <option value="0">Seleccione Un Pokemon</option>
                <option value="1">Charizar</option>
                <option value="2">Charmander</option>
                <option value="3">Clefairy</option>
                <option value="4">Golduck</option>
                <option value="5">Mankey</option>
                <option value="6">Pidgey</option>
                <option value="7">Pikachu</option>
                <option value="8">Raticate</option>
                <option value="9">Venonat</option>
                <option value="10">Wartortle</option>
            </select>
        </form>
        <div id = "divAgregar" class = "centrado caja">
            <button name="botonAgregar" onclick="agregarPokCarro();">Agregar Al Carrito</button>
        </div>


    </div>
    <div id = "divCarrito" class = "carrito">Aqui van los Pokemons Comprados hasta el momento



    </div>

</body>
</html>
