
//Função para carregar as disciplinas do curso (AJAX)
function carregarDisciplinas() {
    //alert("Chamou!");
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", 
               "/crud_alunos_ajax/api/disciplinas/listar_por_curso.php?id=2", 
                false);
    xhttp.send();
    var resposta = xhttp.responseText;
    alert(resposta);
}


//FunçãocriarOption -> será chamada durante a implementação
function criarOption(elem, value, label, valueSelected) {
    var option = document.createElement('option');
    option.setAttribute("value", value);
    option.innerHTML = label;

    if(value == valueSelected)
        option.selected = true;

    elem.appendChild(option);
}

