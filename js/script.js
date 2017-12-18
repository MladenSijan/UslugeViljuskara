
$(document).ready(function() {
      $(".sadrzaj").slideToggle(2000);
      $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
          $("header").css({
            "background-color": "#000",
            "border-bottom": "solid 3px #f9c118",
            "transition": "all .2s ease-in-out",
            "-webkit-transition": " all .2s ease-in-out",
            "padding":"5px",
            "height":"65px"

          });
         
          $(".nav-items a").css({
            "color": "#FFF",
            "transition": "all .2s ease-in-out",
            "-webkit-transition": " all .2s ease-in-out"
          });
           
          //$(".brand a").css("color", "#222");
        } else {
          $("header").css({
            "background-color": "#222",
            "border": "none",
            "padding":"19px",
            "height":"80px"
          });
          
          $(".nav-items a").css("color", "#c0c0c0");
          $(".nav-items").css({
           
          });
          $(".brand a").css("color", "#f9c118");
          $(".nav-items a").css({
            "color": "#c0c0c0",
            "transition": "all .2s ease-in-out",
            "transition": "all .2s ease-in-out"
          });
        }
      });

      $("#slika1").mouseenter(function() {
        $("#caption1").css({
          "visibility": "hidden"
        });
        $("#lancerOpis").css({
          "color": "f9c118",
          "transition": "all .2s ease-in-out",
          "transition": "all .2s ease-in-out"
        });
      });

      $("#slika1").mouseleave(function() {
        $("#caption1").css({
          "visibility": "visible"
        });
        $("#lancerOpis").css({
          "color": "#fff",
          "transition": "all .2s ease-in-out",
          "transition": "all .2s ease-in-out"
        });
      });

      $("#slika2").mouseenter(function() {
        $("#caption2").css({
          "visibility": "hidden"
        });
        $("#pobedaOpis").css({
          "color": "f00",
          "transition": "all .2s ease-in-out",
          "transition": "all .2s ease-in-out"
        });
      });

      $("#slika2").mouseleave(function() {
        $("#caption2").css({
          "visibility": "visible"
        });
        $("#pobedaOpis").css({
          "color": "#fff",
          "transition": "all .2s ease-in-out",
          "transition": "all .2s ease-in-out"
        });
      });

      $("#slika3").mouseenter(function() {
        $("#caption3").css({
          "visibility": "hidden"
        });
        $("#litostrojOpis").css({
          "color": "#f9c118",
          "transition": "all .2s ease-in-out",
          "transition": "all .2s ease-in-out"
        });
      });

      $("#slika3").mouseleave(function() {
        $("#caption3").css({
          "visibility": "visible"
        });
        $("#litostrojOpis").css({
          "color": "#fff",
          "transition": "all .2s ease-in-out",
          "transition": "all .2s ease-in-out"
        });
      });



        $('.desktop a[href*=\\#]').on('click', function(event) {
          event.preventDefault();
          $('html,body').animate({
            scrollTop: $(this.hash).offset().top
          }, 700);
        });

//  visinaSlike=document.getElementsByClassName("redOpisa")[0].offsetHeight+"px";
//         for (var i=0; i<document.getElementsByClassName("slika").length; i++)
//         {
          
//           visinaSlike=document.getElementsByClassName("redOpisa")[i].offsetHeight+"px";
//           document.getElementsByClassName("slika")[i].getElementsByTagName("img")[0].style.height=visinaSlike;
          
//           console.log(visinaSlike)
//         }


$('.menu-toggle').click(function() {

  $('ul').toggleClass('opening');
  $(this).toggleClass('open');
  $("header").toggleClass("dvesta");

})

        
      });
