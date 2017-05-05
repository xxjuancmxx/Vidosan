/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function mensaje(data){
    var res = JSON.parse(data.trim());
    if(res.tipo==1){
        $.msgBox({
            title:"Accion Exitosa",
            content:res.msg,
            type:"info"
        });
    }else{
        $.msgBox({
            title:"Error",
            content:res.msg,
            type:"error"
        });
    }
}
