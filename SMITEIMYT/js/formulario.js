// Obtenemos los elementos del documento HTML y los asignamos a sus respectivas variables
let $select = document.getElementById("type"),
    $main_container = document.getElementById("main__container"),
    $main_form = document.getElementById("main__form"),
    $formulario = document.getElementById("new-form"),
    $type = document.getElementById("main__form__type");

// Creamos las variables que utilizaremos para los formularios y las asignamos
const $label = document.createElement("label"),
    $main_input = document.createElement("div"),
    $input = document.createElement("input"),
    $br = document.createElement("br");

//Asignamos las clases para obtener el mismo estilo de los demás inputs

$main_input.setAttribute("class", "main__input");
$input.setAttribute("class", "main__input__answer");

const agregarInput = (nombreLabel = "") => {
    $type.appendChild($main_input);
    $main_input.appendChild($label);
    $label.textContent = nombreLabel;
    $label.appendChild($br);
    $main_input.appendChild($input);
}

//Creamos el evento CHANGE para capturar el valor seleccionado

$select.addEventListener("change", ()=>{
    if($select.value == "estudiante" || $select.value == "profesor" || $select.value == "evaluador" || $select.value == "revisor" || $select.value == "ponente" || $select.value == "conferencista" || $select.value == "socioI"){
        $main_container.style.height = "1000px";
        $main_form.style.height = "inherit";

        if($select.value == "estudiante" || $select.value == "profesor"){
            $type.style.height = "250px";
            agregarInput("Nombre de la Escuela:");
            agregarInput("Matrícula:");
            agregarInput("Dirección:");
            
        } else if($select.value == "evaluador" || $select.value == "revisor" || $select.value == "ponente" || $select.value == "conferencista" || $select.value == "socioI"){
            $type.style.height = "250px";
            agregarInput("Nombre de la Institución:");
            agregarInput("Cargo:");
            agregarInput("Dirección:");
        }
    }
   
});