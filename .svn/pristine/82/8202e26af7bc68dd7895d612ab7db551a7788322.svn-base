/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function cargarEditarCliente(id){
                $("#wrap").load("Clientes/Formularios/editarCliente.jsp?idcliente="+id);

            }
  function cargarListadotareas(){
      //$("#container").load("listadotareas.jsp");
      location.reload(true);
  }          
            function cargarTablaContactos(){
                $('#example').dataTable( {
                    "order": [[ 2, "desc" ]],
                    "processing": true,
                    "scrollX": true,
                    "serverSide": true,
                    "bServerSide":false,
                    "language": {
                        "url": "http://cdn.datatables.net/plug-ins/1.10.10/i18n/Spanish.json"
                    },
                    "columnDefs": [ {
                            "targets": "no-sort",
                            "orderable": false
                      } ],
                    "ajax": "/InSeguimientoClientes/JSON/respuestaClientesTabla.jsp"
                } );
            }
            
            
            $(document).ready(function() {
                
                
                cargarTablaContactos();
                
               //Evento que exportar los contactos selccionados a excel al hacer click en el boton EXCEL 
               $('#dexcel').click(function(){
                  var arr = [];
                  
                  $(".check_cliente").each(function(x,y){
                      
                      if($(y).prop("checked")){
                          if($(y).val()!=="on"){
                             arr.push($(y).val()); 
                          }
                            
                        }
                        
                  });
                  
                  var jsonString = JSON.stringify(arr);
                  if(arr.length>0){
                    window.location.href="/InSeguimientoClientes/Clientes/Controladores/CONTROLADORExportarExcel.jsp?contactos="+jsonString;
                  }else{
                      
                      alert("No esta permitido exportar a excel una selección vacia, seleccione primero uno de los contactos de la lista para poder exportar.");
                  }
                  
               }); 
                //BORRAR CLIENTES, FUNCION QUE BORRAR CLIENTES AL PRESIONAR EL BOTON PAPELERA
                 $('#dtrash').click(function(){
                  var arr = [];
                  
                  $(".check_cliente").each(function(x,y){
                      
                      if($(y).prop("checked")){
                          if($(y).val()!=="on"){
                             arr.push($(y).val()); 
                          }
                            
                        }
                        
                  });
                  
                  var jsonString = JSON.stringify(arr);
                  
                  if(arr.length>0){
                      
                    if(confirm("¿Seguro quieres borrar los usuarios selecionados?")){
                    
                        $.ajax({
                            url: "/InSeguimientoClientes/Clientes/Controladores/CONTROLADORBorrarCliente.jsp",  
                            type: 'POST',
                            data:{contactos:jsonString},
                            success: function(data){
                               mensaje(data);
                               $('#example').dataTable().fnDestroy();
                               cargarTablaContactos();
                            }

                        }); 

                      }
                  }else{
                      
                      alert("No esta permitido borrar una seleccion vacia, seleccione primero uno de los contactos de la lista para poder borrar.");
                  }
                  
               }); 
               
               //MANEJADOR DE EVENTO AL HACER CLICK EN EL CHECKBOX PARA MARCAR DESMARCAR TODOS
                $("#manage_check_client").click(function(){
                  // alert($(".check_cliente").size());
                      var e = this.checked;
                    if(e){
                       $(".check_cliente").each(function(x,y){
                        $(y).prop("checked",e);
                       });
                    }else{
                       $(".check_cliente").removeAttr("checked"); 

                    }
                   
                });
            });