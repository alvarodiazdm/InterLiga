var url;

function redirect(){
    var i;
    for(i=0; i<document.eleccion.customRadio.length; i++){
        if(document.eleccion.customRadio[i].checked){
            break;
        }
    }
    if(i===0){
        url = "../php/procesaRegistro.php";
    }else {
        url= "../php/searchTeam.php";
    }
}

