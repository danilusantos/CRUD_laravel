var maskTelefone   = function (val) {
    var tamanho = val.replace(/\D/g, '').length;
    var mascara;
    if (tamanho > 10) {
        mascara = '(00) 00000-0000';
    } else {
        mascara = '(00) 0000-00009';
    }
    return mascara;
},
opcoesTelefone = {
    onKeyPress: function (val, e, field, opcoesTelefone) {
        field.mask(maskTelefone.apply({}, arguments), opcoesTelefone);
    }
};

var maskCpfCnpj   = function (val) {
    var tamanho = val.replace('.', '').replace('.', '').replace('-', '').replace('/', '').length;

    var mascara;
    if (tamanho <= 11) {
        mascara = '000.000.000-00999';
    } else {
        mascara = '00.000.000/0000-00';
    }
    return mascara;
},
opcoesCpfCnpj = {
    onKeyPress: function (val, e, field, opcoesCpfCnpj) {
        field.mask(maskCpfCnpj.apply({}, arguments), opcoesCpfCnpj);
    }
};
$('.cnpj').mask('00.000.000/0000-00');
$('.cpf').mask('000.000.000-00');
$('.cep').mask('00000-000');
$('.telefone').mask(maskTelefone, opcoesTelefone);
$('.data').mask('00/00/0000');
$('.cpfCnpj').mask(maskCpfCnpj, opcoesCpfCnpj);
$('.number').mask("0000000000000000000");
$('.reais').mask('#.##0,00', {reverse: true});
$('.captcha').mask('AAAA');
$('.rg').mask('00.000.000-00');
$('.numTituloEleitor').mask('0000 0000 0000');
$('.zonaTituloEleitor').mask('000');
$('.secaoTituloEleitor').mask('0000');
