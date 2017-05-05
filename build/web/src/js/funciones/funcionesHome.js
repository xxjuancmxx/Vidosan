/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
                $("#numero").on("blur",searchContact);
                $("#numero").keypress(function(event){
                    if(event.which==13){
                        searchContact();
                    };
                    
                });
                cargarContadores();
                cargarUltimosContactos();
            });
            function cargarContadores(){
                
                 $("#count_window").load("/InSeguimientoClientes/Clientes/Formularios/recuentosClientesCurso.jsp");
            }
            function cargarUltimosContactos(){
                
                 $("#last_window").load("/InSeguimientoClientes/Clientes/Formularios/ultimosClientes.jsp");
            }
            function searchContact(){ 
                 var formURL="/InSeguimientoClientes/Clientes/Controladores/CONTROLADORRespuesta.jsp";
                 var numero = $("#numero").val();
                 var selec = $("#respuesta"); 
                 
                 if(numero.length!==9&&numero!==""){
                     
                     // Si la longitud del numero es distinta de 9 y
                     // el numero no es un string en blanco
                     // mostramos error
                     $(".ContactError").html("El número está mal escrito.");
                     // al ser un campo con un evento, si deciden cambiar el numero,
                     // limpiamos el div#respuesta donde cargamos la respuesta
                     selec.html("");
                 }else{
                     // si el numero es distinto de blanco y cumple la condicion anterior,
                     // enviamos la peticion al servidor 
                     if(numero!==""){
                     // establecemos el span .ContactError a blanco    
                      $(".ContactError").html("");
                      
                      $.ajax({
                            url: formURL,  
                            type: 'POST',
                            data: {contacto:numero},
                            success: function(data){
                                selec.load(data);
                            }

                         });
                         
                     }else{
                         //En el caso de dejarlo en blanco , limpiamos el div#respuesta de respuesta del servidor 
                         selec.html("");
                         
                     }
                 }
            }