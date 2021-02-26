     function buscar_ajax(buscame){
             
                            if ($('#busca').val().length == 0) {
                               $('#busca').blur();
                                 location.reload();
                                  return false;
                              }else{
                                $("#pagina").remove();
                                $.ajax({
                                type: 'POST',
                                url: '../Controllers/controller_restaurante.php',
                                data: 'buscame=' + buscame,
                                beforeSend: function(){
                                $("#div_buscar").html("<p class='h-100' style='margin:40px 80px 0 10px;' align='center'><img src='img/loader.gif'  /></p>");
                                },
                                success: function(respuesta) {
                                  $('#div_buscar').html("<main role='main'><div class='album py-5'><div class='container'><div class='row'>"+respuesta+"</div></div></div></main>");
                                },
                                error:function(){   
                                toastr.error("error");
                                }
                              });}
      }


      function load(page){
                    var parametros = {'action':'ajax','page':page};
                    $.ajax({
                      url:'../Models/paginacion.php',
                      data: parametros,
                      beforeSend: function(objeto){
                     $("#pagina").html("<p class='h-100'style='margin:40px 80px 0 10px;' align='center'><img src='img/loader.gif'  width='50' height='50' /></p> ");
                      },
                      success:function(data){
                        $("#pagina").html(data);
                      },
                      error:function(){
                        toastr.error("error");
                          }
                    });
      }
      

      function abrirVentana(){
                        
                      $('#contenedor').show();
                        $('#flotante').animate({
                          marginTop: "-152px"
                        });
      }



      function cerrarventana(value){
                          if (value=-1) {$('#flotante').animate({
                                marginTop: "-756px"
                              });
                            setTimeout(function(){
                            $('#contenedor').hide();
                              
                            },500)}
      }



     function preview_image(id) {
        
                  var reader = new FileReader();

                      if (id=='list1') {$("#thumbnail1").remove();}
                      else if (id=='list2') {$("#thumbnail2").remove();}
                      else if (id=='list3') {$("#thumbnail3").remove();}
                      else if (id=='list4') {$("#thumbnail4").remove();}
                      else if (id=='list5') {$("#thumbnail5").remove();}
                      else if (id=='list6') {$("#thumbnail6").remove();}
                      else if (id=='list7') {$("#thumbnail7").remove();}
                      else if (id=='list8') {$("#thumbnail8").remove();}
                      else if (id=='list9') {$("#thumbnail9").remove();}
                      else if (id=='list10') {$("#thumbnail10").remove();}
                      else if (id=='list11') {$("#thumbnail11").remove();}
                      else if (id=='list12') {$("#thumbnail12").remove();}
                      else if (id='image') {$("#thumbnail").remove();
                      $(id).css("width ", "100");$(id).css("height ", "100");}

                     reader.onload = function(){

                      var output = document.getElementById(id);
                      output.src = reader.result;
              }

                        document.getElementById(id).className = "figure-img img-fluid rounded";
                        reader.readAsDataURL(event.target.files[0]);

    }



      function from_edit(val){

                        if (val=="0") {
                        deshabilitar(0);
                        checked();
                        preview_image('image');
                        }if (val=="1") {
                       deshabilitar(1);
                      for (var i = 1; i <=12; i++) {
                        $("#thumbnail"+i).remove();
                        
                      }
                  }

      }

      function checked(){

                if ((document.getElementById("delivery_si").value)=="SI") {
                        document.getElementById("delivery_si").checked = true;
                }

                  if ((document.getElementById("delivery_no").value)=="NO") {
                        document.getElementById("delivery_no").checked = true;
                  }

      }
       

        function deshabilitar(val){

             if (val=="0") {
                  document.getElementById("foto").disabled = true;
                  document.getElementById("nombre").disabled = true;
                  document.getElementById("direccion").disabled = true;
                  document.getElementById("telefono").disabled = true;
                  document.getElementById("email").disabled = true;
                  document.getElementById("horario").disabled = true;
                  document.getElementById("delivery_si").disabled = true;
                  document.getElementById("delivery_no").disabled = true;

            }else if (val=="1") {
    

                  document.getElementById("cabe1").disabled = true;
                  document.getElementById("cabe2").disabled = true;
                  document.getElementById("cabe3").disabled = true;

                  document.getElementById("p_img1").disabled = true;
                  document.getElementById("p_nombre1").disabled = true;
                  document.getElementById("p_des1").disabled = true;

                  document.getElementById("p_img2").disabled = true;
                  document.getElementById("p_nombre2").disabled = true;
                  document.getElementById("p_des2").disabled = true;

                  document.getElementById("p_img3").disabled = true;
                  document.getElementById("p_nombre3").disabled = true;
                  document.getElementById("p_des3").disabled = true;


                  document.getElementById("p_img4").disabled = true;
                  document.getElementById("p_nombre4").disabled = true;
                  document.getElementById("p_des4").disabled = true;

                  document.getElementById("p_img5").disabled = true;
                  document.getElementById("p_nombre5").disabled = true;
                  document.getElementById("p_des5").disabled = true;


                  document.getElementById("p_img6").disabled = true;
                  document.getElementById("p_nombre6").disabled = true;
                  document.getElementById("p_des6").disabled = true;
           


          }
                  

      }

          function habilitar(val){

                      if (val=="0") {
                      document.getElementById("foto").disabled = false;
                      document.getElementById("nombre").disabled = false;
                      document.getElementById("direccion").disabled = false;
                      document.getElementById("telefono").disabled = false;
                      document.getElementById("email").disabled = false;
                      document.getElementById("horario").disabled = false;
                      document.getElementById("delivery_si").disabled = false;
                      document.getElementById("delivery_no").disabled = false;
                        
                    }

                      if (val=="1") {

                        document.getElementById("cabe1").disabled = false;
                        document.getElementById("cabe2").disabled = false;
                        document.getElementById("cabe3").disabled = false;

                        document.getElementById("p_img1").disabled = false;
                        document.getElementById("p_nombre1").disabled = false;
                        document.getElementById("p_des1").disabled = false;
                    
                        document.getElementById("p_img2").disabled = false;
                        document.getElementById("p_nombre2").disabled = false;
                        document.getElementById("p_des2").disabled = false;
              
                        document.getElementById("p_img3").disabled = false;
                        document.getElementById("p_nombre3").disabled = false;
                        document.getElementById("p_des3").disabled = false;
                  
                        document.getElementById("p_img4").disabled = false;
                        document.getElementById("p_nombre4").disabled = false;
                        document.getElementById("p_des4").disabled = false;
                        document.getElementById("p_img5").disabled = false;
                        document.getElementById("p_nombre5").disabled = false;
                        document.getElementById("p_des5").disabled = false;
                        document.getElementById("p_img6").disabled = false;
                        document.getElementById("p_nombre6").disabled = false;
                        document.getElementById("p_des6").disabled = false;
                       }

        }



        $(window).scroll(function() {
                        var height = $(window).scrollTop();
                        if (height > 100) {
                            $('#back2Top').fadeIn();
                        } else {
                            $('#back2Top').fadeOut();
                        }
        });
        

        $(document).ready(function() {
                        $("#back2Top").click(function(event) {
                            event.preventDefault();
                            $("html, body").animate({ scrollTop: 0 }, "slow");
                            return false;
                        });

        });
