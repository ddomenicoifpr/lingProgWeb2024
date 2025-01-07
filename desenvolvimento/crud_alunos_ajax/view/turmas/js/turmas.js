

//FunçãocriarOption -> será chamada durante a implementação
function criarOption(elem, value, label, valueSelected) {
    var option = document.createElement('option');
    option.setAttribute("value", value);
    option.innerHTML = label;

    if(value == valueSelected)
        option.selected = true;

    elem.appendChild(option);
}

