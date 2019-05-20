//primera forma de traer los datos(usando xml)
async function loadDoc(v)
{
  //crear objeto que va a realizar la peticion
  var xhttp = new XMLHttpRequest();

  //funcion que define el procedimiento al obtener la respuesta
  xhttp.onreadystatechange = function()
  {
    //pregunta si la respuesta se obtuvo correctamente
    if (this.readyState == 4 && this.status == 200) {
      CargarPokemon(this,v);
    }
  };

  //configura la peticion
  xhttp.open("GET", "pokemons.xml", true);

  //envia la peticion
  xhttp.send();

 }


 function CargarPokemon(xml, v)
 {

  var i;

    var xmlDoc = xml.responseXML;
    var pokImgElem = document.getElementById("pokImg");
    var pokNombreElem = document.getElementById("pokNombre");
    var pokTipoElem = document.getElementById("pokTipo");
    var pokFuerzaElem = document.getElementById("pokFuerza");
    var pokVelocidadElem = document.getElementById("pokVelocidad");
    var pokEvolucionElem = document.getElementById("pokEvolucion");

    //almacena en una variable la info del xml
    var x = xmlDoc.getElementsByTagName("Pok");
    for (i = 0; i <x.length; i++)
    {
      var id = x[i].getElementsByTagName("Numero")[0].childNodes[0].nodeValue;

      //este if desactiva el boton agregar al carrito si la opcion actial es la cero(invalida)
      if(v == 0){
        document.getElementById("divAgregar").style.display = "none";
      } else{
        document.getElementById("divAgregar").style.display = "block";
      }

      //pregunta si el el pokemon solicitado
      if(id == v)
      {
        //actualizar los campos de la pagina principal
        pokImgElem.setAttribute("src",x[i].getElementsByTagName("Imagen")[0].childNodes[0].nodeValue);
        pokNombreElem.innerHTML = x[i].getElementsByTagName("Nombre")[0].childNodes[0].nodeValue;
        pokTipoElem.innerHTML = "Tipo: " + x[i].getElementsByTagName("tipo")[0].childNodes[0].nodeValue;
        pokFuerzaElem.innerHTML = "Fuerza: " + x[i].getElementsByTagName("fuerza")[0].childNodes[0].nodeValue;
        pokVelocidadElem.innerHTML = "Velocidad: " + x[i].getElementsByTagName("velocidad")[0].childNodes[0].nodeValue;
        pokEvolucionElem.innerHTML = "Evolucion: " + x[i].getElementsByTagName("evolucion")[0].childNodes[0].nodeValue;
      }
    }

  }

  //Segunda forma de traer los datos(usando json)
  //Agregar el pokemon actual al carrito de compras
  function agregarPokCarro(){

    var id = document.getElementById("selOpciones").value;
    console.log('boton clickeado con valor ' + id);

    //funcionalidad proveniente de jquery para simplificar el trabajo de enviar la peticion
    $.ajax({
      url: 'procesarPok.php',
      type: 'POST',//tipo de peticion(post para enviar dato tambien)
      data: {id: id},//dato que vamos a enviar al servidor

      //que hacer con la respuesta
      success: function(respuesta){

        let datos = JSON.parse(respuesta);//pasar el jason que llega a un array

        let contenedor = '';//variable que va a almacenar el nuevo html del carrito de compras
        contenedor += $('#divCarrito').html();//obtengo los datos actuales del carrito
        datos.forEach(pok => {

          //agrego al html del carrito el nuevo dato
          contenedor +=
          `<div class = "itemCarrro">
            <center>
              <h1 class = "titulo1"> Nombre: ${pok.nombre}</h1>
              <img src = ${pok.imagen} class = "imagen1"></p>
              <p>Tipo: ${pok.tipo}</p>
              <p>Fuerza: ${pok.fuerza}</p>
              <p>Velocidad: ${pok.velocidad}</p>
              <p>Evolucion: ${pok.evolucion}</p>
            </center>
          </div>`
        });
        $('#divCarrito').html(contenedor);//asigno el nuevo html
      }
    })


  }

//cargar el documento 0 al iniciar la pagina
window.onload = function(){ loadDoc(0);};
