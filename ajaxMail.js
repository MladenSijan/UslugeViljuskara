$(document).ready(function() {
  $('#mojaForma').on('submit', function(e) {
    e.preventDefault();

    var mejlAdresa = $('#mejl').val();
    var naslov = $('#naslovMejl').val();
    var tekst = $('#tekst').val();

    var postData = [{
        "mejl": $('#mejl').val()
      },
      {
        "naslov": $('#naslovMejl').val()
      },
      {
        "tekst": $('#tekst').val()
      }
    ];

    var url = "posalji.php";

    if (mejlAdresa !== "" &&
      naslov !== "" &&
      tekst !== "") {
      $.ajax({
        type: 'POST',
        url: url,
        dataType: 'json',
        data: {
          'json': postData
        },
        success: function(data) {
          var messageText = data;

          $('#poruka').empty().fadeIn('slow', function() {
            $(this).html(messageText);
          }).delay(900).fadeOut('slow');
          $('#mojaForma')[0].reset();
        },
        error: function(data) {
          var messageText = data;

          $('#poruka').empty().fadeIn('slow', function() {
            $(this).html(messageText);
          }).delay(900).fadeOut('slow');
        }
      });
    }
  });
});