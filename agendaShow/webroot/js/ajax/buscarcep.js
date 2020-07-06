// https://viacep.com.br/ws/29102907/json/
// alert('haha')

var ids = {
    cep: '#cep',
    logradouro: '#logradouro',
    uf: '#uf',
    cidade: '#cidade',
    bairro: '#bairro',
    telefone: '#telefone',
    celular: '#celular',
    form: "#formSend",
}

var {cep, logradouro, uf, cidade, telefone, celular, form} = ids

 $(cep).on("change", ()=>{
    cepAtual =  $(cep).val().replace("-","")
    $.getJSON(
        `//viacep.com.br/ws/${cepAtual}/json/`,
        function (data) {
            console.log(data);
            console.log(data.uf);
            console.log(data.localidade);
            console.log(data.bairro);
            $(logradouro).val(data.logradouro);
            $(uf).val(data.uf);
            $(cidade).val(data.localidade);
            $(bairro).val(data.bairro);
            $(uf).trigger('change');

        }
    ).done(()=>{

    }).fail((data)=>{
        console.log(data);
    })
})

$(uf).on("change", ()=>{
    ufAtual = $(uf).val();
    console.log(ufAtual);
    if($(cep).val() != ""){
        $.getJSON(
            `//servicodados.ibge.gov.br/api/v1/localidades/estados/${ufAtual}/municipios`,
            function (data) {
                console.log(data);
            }
        )
    }else{
        console.log('Há cep;');
    }

})

$(cep).mask('00000-000', {reverse: true});
$(telefone).mask('00000-0000', {reverse: true});
$(celular).mask('00000-0000', {reverse: true});

$("#subButton").on("click", ()=>{
    $(cep).val($(cep).val().replace("-",""));
    $(telefone).val($(telefone).val().replace("-",""));
    $(celular).val($(celular).val().replace("-",""));
    $(form).submit();
})