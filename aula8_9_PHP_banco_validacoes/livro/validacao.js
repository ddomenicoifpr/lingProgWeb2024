function validarCampos() {
    var titulo = document.getElementById("titulo").value;
    var genero = document.getElementById("genero").value;
    var qtdPaginas = document.getElementById("qtdPaginas").value;

    var msg = document.querySelector("#msg");

    //Validar se o campo título foi preenchido
    if(titulo.trim() == "") {
        //alert("Preencha o título do livro!");
        msg.innerHTML = "Preencha o título do livro!";
        return false;
    }

    if(genero.trim() == "") {
        //alert("Preencha o gênero do livro!");
        msg.innerHTML = "Preencha o gênero do livro!";
        return false;
    }
    
    if(qtdPaginas.trim() == "") {
        //alert("Preencha a quantidade de páginas do livro!");
        msg.innerHTML = "Preencha a quantidade de páginas do livro!";
        return false;
    }

    /*
    console.log(titulo);
    console.log(genero);
    console.log(qtdPaginas);
    */

    return true;
}