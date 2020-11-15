window.onload = function() {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '../modelo/vidraria.php',
        async: true,
        success: function(dados) {
            if (dados.logado == 'não') {
                $(location).attr('href', '../../../index.html')
            } else {
                if (dados.tipo_user == 'professor(a)') {
                    $('.icone-user').attr('src', '../../../recursos/img/icons/professores.svg')
                    $('.usuario:first').append("Professor(a): ", dados.nome)
                    $('.usuario:last').append("RA: ", dados.ra)
                } else {
                    $('.icone-user').attr('src', '../../../recursos/img/icons/alunos.svg')
                    $('.usuario:first').append("Aluno(a): ", dados.nome)
                    $('.usuario:last').append("RM: ", dados.rm)
                    $('.editor').remove()
                }
            }
        }
    })
}
$(document).ready(function() {
    $('.btn-menu').click(function() {
        $(location).attr('href', '../../../menu.html')
    })
    $('.btn-editar-perfil').click(function() {
        $(location).attr('href', '../../usuario/visao/editar-perfil.html')
    })
    $('.btn-contato').click(function() {
        $(location).attr('href', '../../usuario/visao/contato.html')
    })
    $('.btn-sair').click(function() {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '../../usuario/modelo/logout.php',
            async: true,
        })
        $(location).attr('href', '../../../index.html')
    })
})