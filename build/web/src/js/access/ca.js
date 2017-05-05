/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//CONTROL DE ACCESO A SEGUIMIENTO CLIENTES
if(document.cookie.indexOf("hash")===0){
            $.ajax({
                    url: "src/includes/authentication.jsp",
                    type: 'POST',
                    dataType: "json",
                    success: function (data) {
                        if(data.tipo){
                            window.location.href="home.jsp";   
                        }else{
                            
                             window.location.href="index.jsp?no_session_or_cookie=1";   
                        }
                        
                    }

                });
            
        }
        