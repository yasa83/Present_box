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


      //モーダル
  $('.js-modal').on('click', function() {
    $('.modal-content').fadeIn('slow');
    $('#modal-bg').fadeIn('slow');
  });

  $('.js-modal-close').on('click', function() {
    $('.modal-content').fadeOut(1000);
    $('#modal-bg').fadeOut(1000);
  });
})