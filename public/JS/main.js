$(".fileinput-button").hide();
$(document).ready(function () {
    console.log("ready");
    $(".alertas").fadeToggle(4000);
    //$(".config").click(function () {
     //   $(".opcion").toggle();

   // });
    
    $("#btn-foto-perfil").click(function () {
        $(".fileinput-button").click();

    });

    $("#materias").mouseover(function(){
      $(".botones-secundarios").show();
    });
    //  $("#materias").mouseleave(function(){
    //   $(".botones-secundarios").hide();
    // });

    $(function(){
  $(".slide").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 3000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
  $('#Administrador a').on({
    'click': function(){
        $('#foto-login').attr('src','public/CSS/Images/Admin.png');
         $("#Docente,#Estudiante").removeClass("active");
        $("#Administrador").addClass("active");
        document.getElementById("id_role").value = 1;
    }
  });
 $('#Docente a').on({
    'click': function(){
        $('#foto-login').attr('src','public/CSS/Images/Teacher.png');
        $("#Docente").addClass("active");
        $("#Estudiante,#Administrador").removeClass("active");
         document.getElementById("id_role").value = 2;
    }
  });
  $('#Estudiante a').on({
    'click': function(){
        $('#foto-login').attr('src','public/CSS/Images/Estudent.png');
         $("#Docente,#Administrador").removeClass("active");
        $("#Estudiante").addClass("active");
         document.getElementById("id_role").value = 3;
    }
  });
    $('#materias').on({
    'click': function(){
         $("#carreras").removeClass("active");
        $("#materias").addClass("active");
    }
  });
      $('.btn-editar').on({
    'click': function(){
         $("#carreras").removeClass("active");
        $("#materias").addClass("active");
    }
  });
    

  $("#esconder").click(function () {
    $("#crud_student").toggle(1000);
  });
  $("#dropdown-materias").click(function(){
    $("#menu-materias").addClass('open');
    $("#menu-materias>.span-menu").addClass('glyphicon-menu-up');
    $("#menu-materias>.span-menu").removeClass('glyphicon-menu-down');
    $("#menu-materias").removeClass('sub-menu');

  });
  $("#dropdown-carreras").click(function(){
    $("#menu-carreras").addClass('open');
    $("#menu-carreras>.span-menu").addClass('glyphicon-menu-up');
    $("#menu-carreras>.span-menu").removeClass('glyphicon-menu-down');
    $("#menu-carreras").removeClass('sub-menu');

  });

  
});


        