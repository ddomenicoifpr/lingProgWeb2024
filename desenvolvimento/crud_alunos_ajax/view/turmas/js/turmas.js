//Chamada incial para carregar as disciplinas caso o 
// curso jé tenha sido selecionado
carregarDisciplinas();

//Função para carregar as disciplinas do curso (AJAX) - Assíncrona
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
    xhttp.open("GET", url, true);

    //Função que será execudada quando chegar a resposta da requisição
    xhttp.onload = function() {
        var json = xhttp.responseText;
        //console.log(json);

        //Converter o JSON (texto) para objeto JavaScript 
        var disciplinas = JSON.parse(json);
        for(var i=0; i<disciplinas.length; i++) {
            var disc = disciplinas[i];
            /*console.log(disc.id + " - " + 
                        disc.nome + " - " +
                        disc.codigo); */
            criarOption(selDisciplina, disc.id, 
                            disc.codigo + "-" + disc.nome, 0);
        }
    }

    xhttp.send();

}

//Função para carregar as disciplinas do curso (AJAX) - Síncrono
function carregarDisciplinasSincrono() {
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


function salvarTurma() {
    //Capturar os dados preenchidos no formulário
    var ano = document.getElementById("txtAno").value;
    var curso = document.getElementById("selCurso").value;
    var disciplina = document.getElementById("selDisciplina").value;

    //Criar o objeto FormData
    var dados = new FormData();
    dados.append("ano", ano);
    dados.append("idCurso", curso);
    dados.append("idDisciplina", disciplina);

    //Criar a requisição AJAX
    var url = "/crud_alunos_ajax/api/turmas/inserir_turma.php";
    
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", url); //Assíncrono

    //Função que vai ser executada quando chegar as resposta
    xhttp.onload = function() {
        var resposta = xhttp.responseText;
        if(resposta) {
            //Capturar os erros
            var divErro = document.getElementById("divMsgErro");
            divErro.innerHTML = resposta;
            divErro.style.display = "block";
        } else 
            //Volta para a listagem pois inseriu a turma
            window.location = "listar.php"; 
    }

    //Enviar a requisição
    xhttp.send(dados);
}

