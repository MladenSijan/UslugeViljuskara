$(document).ready(function() {
      $(".sadrzaj").slideToggle(2000);
      $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
          $(".navbar-fixed").css({
            "background-color": "#fff",
            "border-bottom": "solid 3px #f9c118",
            "transition": "all .2s ease-in-out",
            "-webkit-transition": " all .2s ease-in-out"
          });
          $(".nav-items a").css({
            "color": "#222",
            "transition": "all .2s ease-in-out",
            "-webkit-transition": " all .2s ease-in-out"
          });
          $(".brand a").css("color", "#222");
        } else {
          $(".navbar-fixed").css({
            "background-color": "#222",
            "border": "none"
          });
          $(".nav-items a").css("color", "#c0c0c0");
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



        $('.navbar-items a[href*=\\#]').on('click', function(event) {
          event.preventDefault();
          $('html,body').animate({
            scrollTop: $(this.hash).offset().top
          }, 700);
        });
      });
