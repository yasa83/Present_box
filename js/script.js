$(function(){

    $('#get-picture').hide();
    $('#want-picture').hide();


    $('.give_1').click(function(){

        $('#get-picture').hide();
        $('#want-picture').hide();

        $('#give-picture').show();
    })

    $('.get_1').click(function(){

        $('#give-picture').hide();
        $('#want-picture').hide();

        $('#get-picture').show();
    })

    $('.want_1').click(function(){

        $('#get-picture').hide();
        $('#give-picture').hide();

        $('#want-picture').show();
    })

})