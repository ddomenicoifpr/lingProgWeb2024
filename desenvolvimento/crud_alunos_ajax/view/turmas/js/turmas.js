
//Função para carregar as disciplinas do curso (AJAX)
function carregarDisciplinas() {
    //Pegar o SELECT com as disciplinas
    var selDisciplina = document.getElementById("selDisciplina");
    selDisciplina.innerHTML = "";
    criarOption(selDisciplina, 0, "---Selecione---", 0);
    
    //Pegar o ID do curso que o usuário selecionou
    var idCurso = document.getElementById('selCurso').value;
    var url = "/crud_alunos_ajax/api/disciplinas/listar_por_curso.php?id=" + 
                    idCurso;

    //Requisição AJAX
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", 
                url, 
                false);
    xhttp.send();
    var resposta = xhttp.responseText;
    //alert(resposta);

    //Converter o JSON (texto) para objeto JavaScript 
    var disciplinas = JSON.parse(resposta);
    for(var i=0; i<disciplinas.length; i++) {
        var disc = disciplinas[i];
        /*console.log(disc.id + " - " + 
                    disc.nome + " - " +
                    disc.codigo); */
        criarOption(selDisciplina, disc.id, 
                        disc.codigo + "-" + disc.nome, 0);
    }

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

