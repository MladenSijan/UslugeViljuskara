$(document).ready(function(){
  $("#mojaForma").validate({
    rules: {
      mejlAdresa: {
        required: true,
        email: true
      },
      naslov: {
        required: true,
        minlength: 1,
        maxlength: 30
      },
      tekst: {
        required: true,
        minlength: 1,
        maxlength: 255 
      }
    },
    messages: {
      mejlAdresa: {
        required: "Polje mejl je obavezno.",
        email: "Unesite ispravan format mejla."
      },
      naslov: {
        required: "Polje naslov je obavezno.",
        minlength: "Polje naslov mora sadržati namanje 1 karakter.",
        maxlength: "Polje naslov mora sadržati najviše 30 karaktera."
      },
      tekst: {
        required: "Polje tekst je obavezno.",
        minlength: "Polje tekst mora sadržati namanje 1 karakte.",
        maxlength: "Polje naslov mora sadržati najviše 255 karaktera." 
      }
    }
  });

  // $('#dialog-message').dialog({
  //       modal: true,
  //       autoOpen: false,
  //       buttons: {
  //           Ok: function() {
  //               $(this).dialog("Zatvori");
  //           }
  //       }
  //   });

  //   $('#btn').on('click', function() {
  //       var mejl = $('#mejl').val();
  //       var naslov = $('#naslovMejl').val();
  //       var tekst = $('#tekst').val();
  //       var dataString = 'mejl=' + mejl + '&naslov=' + naslov + '&tekst=' + tekst;
  //       $.ajax({
  //           type: "POST",
  //           url: "/mail/posalji.php",
  //           data: dataString,
  //           success: function() {
  //               $('#dialog-message').dialog('open');
  //           }
  //       });
  //   });
});
