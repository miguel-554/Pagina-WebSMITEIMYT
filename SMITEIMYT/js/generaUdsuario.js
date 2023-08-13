//Obtenemos los elementos del HTML

let $nombreUsuario  = document.getElementById("nombreUsuario"),
    $select = document.getElementById("usuario"),
    $btn = document.getElementById("btn-generar"),
    $user = document.getElementById("user"),
    $pass = document.getElementById("pass"),
    $typeU = document.getElementById("typeU");

//En este método se genera el nombre de usuario y contraseña
const crearUsuario = ()=>{
    //Creación del nombre de usuario
    let nombreArray = $select.value.split(' ');
    let nombre = nombreArray[0];
    let ap = nombreArray[1];
    let am = nombreArray[2];
    let usuario = nombre + ap[0] + am[0] + Math.round(Math.random(0,1) * 1000);
    $user.value = usuario;

    //Creación de la contraseña
    let pass = nombre + "@" + Math.round(Math.random(0,1) * 1000);
    $pass.value = pass;
};

// Se asigna el evento al botón
    $btn.addEventListener('click', (e)=>{
        e.preventDefault();
        crearUsuario();
    });
