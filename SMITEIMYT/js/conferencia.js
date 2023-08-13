//Obtener los elementos del HTML
let $inputAutor = $('#author').val(),
    $addAutor = document.getElementById('new_author'),
    $resumen = document.getElementById('abstract'),
    $enviar = document.getElementById('submit');

//Variables locales
let autores = [];

//Creación del método que agrega si hay más de un autor
$addAutor.addEventListener('click', ()=>{
    autores.push($inputAutor.value);
    $inputAutor.value = '';
    console.log(autores);
});


//Creación del método para evaluar los 150 caracteres del resumen
$resumen.addEventListener('input', ()=>{
    if($resumen.value.length >= 250){
        alert('Has excedido del número de caracteres permitidos');
        $resumen.value = '';
    }
});






