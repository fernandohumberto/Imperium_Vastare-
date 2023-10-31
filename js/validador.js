$(document).ready(function () {
    $("#valor").blur(function () {
        validarCampoNumerico("#valor", "#mensagemErro");
    });
});

function validarCampoNumerico(inputSelector, mensagemErroSelector) {
    var inputValue = $(inputSelector).val();
    var regex = /^[0-9]+$/;
    var mensagemErroElement = $(mensagemErroSelector);

    if (regex.test(inputValue)) {
        mensagemErroElement.text(""); // Limpa a mensagem de erro
    } else {
        mensagemErroElement.text("Por favor, digite apenas números"); // Define a mensagem de erro na tag <span>
        $(inputSelector).val(''); // Limpa o valor do campo de entrada
    }
}


$(document).ready(function () {
    $("#valorAlfa").blur(function () {
        validarCampoAlfa("#valorAlfa", "#mensagemErroAlfa");
    });
});

function validarCampoAlfa(inputSelector, mensagemErroSelector) {
    var inputValue = $(inputSelector).val();
    var regex = /^[A-Za-z]+$/;
    var mensagemErroElement = $(mensagemErroSelector);

    if (regex.test(inputValue)) {
        mensagemErroElement.text(""); // Limpa a mensagem de erro
    } else {
        mensagemErroElement.text("Por favor, digite apenas letras"); // Define a mensagem de erro na tag <span>
        $(inputSelector).val(''); // Limpa o valor do campo de entrada
    }
}
