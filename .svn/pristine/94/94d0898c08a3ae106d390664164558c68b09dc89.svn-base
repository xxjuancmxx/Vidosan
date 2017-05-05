/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$("#btf").click(function(e){
        e.preventDefault();
        $("#telefono_fijo").val("");
    });
    $("#btm").click(function(e){
        e.preventDefault();
        $("#telefono_movil").val("");
    });
    $("#bto").click(function(e){
        e.preventDefault();
        $("#telefono_otro").val("");
    });
     $("#mail").blur(checkIfMailIsValid);
    function checkMail(m){
        var re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        return re.test(m);
    }
    function checkIfMailIsValid(){
        
        if(checkMail($("#mail").val())){
            
            $("#mail").attr("style","background-color:#ABEBC6;");
        }else{
            
            $("#mail").attr("style","background-color:#F5B7B1;");
        }
    }
    