$().ready(function() {
    $('#formCadastrar').validate({
        rules : {
            nome : {
                required: true
            },
            cpf : {
                required: true,
                cpf : true
            },
            telefone : {
                required: true,
                minlength: 14
            },
            data_nascimento : {
                required: true
            },
            cep : {
                required: true,
                minlength: 9
            },
            endereco : {
                required: true
            },
            numero: {
                required: true
            },
            complemento: {
                required: false
            },
            bairro : {
                required: true
            },
            cidade: {
                required: true
            },
            estado : {
                required: true
            }
        },
        messages : {
            cpf : {
                cpf: "Informe um CPF válido"
            },
            telefone : {
                minlength : "Informe um telefone válido"
            },
            cep : {
                minlength : "Informe um CEP válido"
            }
        },
        errorElement: "div", errorPlacement: function (e, r) {
            var a = $(r).data("error");
            a ? $(a).append(e) : e.insertAfter(r)
        }
    });

    jQuery.validator.addMethod("cpf", function(value, element) {
    value = jQuery.trim(value);

     value = value.replace('.','');
     value = value.replace('.','');
     cpf = value.replace('-','');
     while(cpf.length < 11) cpf = "0"+ cpf;
     var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
     var a = [];
     var b = new Number;
     var c = 11;
     for (i=0; i<11; i++){
         a[i] = cpf.charAt(i);
         if (i < 9) b += (a[i] * --c);
     }
     if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
     b = 0;
     c = 11;
     for (y=0; y<10; y++) b += (a[y] * c--);
     if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }

     var retorno = true;
     if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) retorno = false;

     return this.optional(element) || retorno;

 }, "Informe um CPF válido");
});

function buscaCep() {
    var cep = $("#cep").val();
    if (cep.length == 9) {
        $.ajax({
            url: "https://viacep.com.br/ws/" + cep + "/json/",
            type: "GET",
            dataType: "json",
            success: function(data) {
                data.logradouro === "" ? $("#endereco").prop('disabled', false) : $("#endereco").val(data.logradouro).prop('disabled', true);
                data.bairro     === "" ? $("#bairro").prop('disabled', false) : $("#bairro").val(data.bairro).prop('disabled', true);
                data.cidade     === "" ? $("#cidade").prop('disabled', false) : $("#cidade").val(data.localidade).prop('disabled', true);
                data.uf         === "" ? $("#estado").prop('disabled', false) : $("#estado").val(data.uf).prop('disabled', true);
            }
        });
    } else {
        $("#endereco").val("").prop('disabled', true);
        $("#bairro").val("").prop('disabled', true);
        $("#cidade").val("").prop('disabled', true);
        $("#estado").val("").prop('disabled', true);
    }
}

$("#formCadastrar").submit( function(e) {
    e.preventDefault();
    $('#botaoSalvar').prop('disabled', true);
    $("#endereco").prop('disabled', false);
    $("#bairro").prop('disabled', false);
    $("#cidade").prop('disabled', false);
    $("#estado").prop('disabled', false);
    if($(this).valid()){
        this.submit();
    } else {
        $('#botaoSalvar').prop('disabled', false);
        var cep = $("#cep").val();
        if (cep.length == 9) {
            buscaCep();
        } else {
            $("#endereco").prop('disabled', true);
            $("#bairro").prop('disabled', true);
            $("#cidade").prop('disabled', true);
            $("#estado").prop('disabled', true);
        }

    }
})


