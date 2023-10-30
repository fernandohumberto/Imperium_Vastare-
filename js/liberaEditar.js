$(document).ready(function() {
    $("#btnEditar").on('click', function() {
        $('input[name="nome"]').prop('readonly', false);
        $('input[name="user"]').prop('readonly', false);
        $('input[name="email"]').prop('readonly', false);
        $('input[name="btn"]').css('display', 'block');

    });
});
