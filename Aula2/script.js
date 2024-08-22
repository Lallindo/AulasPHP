function formatarCPF(cpf) {
    const elementoAlvo = cpf;
    const cpfAtual = cpf.value;

    let cpfAtualizado;

    cpfAtualizado = cpfAtual.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/,
        function (regex, argumento1, argumento2, argumento3, argumento4) {
            return argumento1 + '.' + argumento2 + '.' + argumento3 + '-' + argumento4;
        });

    elementoAlvo.value = cpfAtualizado;

    if (cpfAtualizado.length == 14) {
        validarCPF(cpfAtual);
    }
}

function validarCPF(cpfAtual) {
    var retorno = true;
    console.log(cpfAtual.length);
    if (cpfAtual.length != 11 ||
        cpfAtual == "00000000000" ||
        cpfAtual == "11111111111" ||
        cpfAtual == "22222222222" ||
        cpfAtual == "33333333333" ||
        cpfAtual == "44444444444" ||
        cpfAtual == "55555555555" ||
        cpfAtual == "66666666666" ||
        cpfAtual == "77777777777" ||
        cpfAtual == "88888888888" ||
        cpfAtual == "99999999999") {
        retorno = false;
    }

    var somaDig1 = 0;
    var somaDig2 = 0;

    for (i = 0; i <= 8; i++) {
        somaDig1 += parseInt(cpfAtual[i]) * (10 - i);
    }

    valor1 = 11 - (somaDig1 - (11 * Math.floor(somaDig1/11)));
    console.log(valor1);
    
    if ((valor1 == 0 || valor1 == 1) && cpfAtual[9] != 0) {
        retorno = false;
        console.log('ERRO')
    } else if (valor1 != cpfAtual[9]){
        retorno = false;
        console.log('ERRO')
    }


    for (i = 0; i <= 9; i++) {
        somaDig2 += parseInt(cpfAtual[i] * (11 - i));
    } 

    valor2 = 11 - (somaDig2 - (11 * Math.floor(somaDig2/11)));
    console.log(valor2);

    if ((valor2 == 0 || valor2 == 1) && cpfAtual[10] != 0) {
        retorno = false;
        console.log('ERRO')
    } else if (valor2 != cpfAtual[10]){
        retorno = false;
        console.log('ERRO')
    }

    if (retorno == false) {
        console.log('CPF inválido');
    } else {
        console.log('CPF válido');
    }
}