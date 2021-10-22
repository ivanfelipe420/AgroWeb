var num=0;

    function mostrar(i){
        num=1;
        document.getElementById('cajaEditar'+i).style.display = 'block';
        document.getElementById('btnEditar'+i).innerHTML = "Ocultar";
    }
    function ocultar(i){
        num=0;
        document.getElementById('cajaEditar'+i).style.display = 'none';
        document.getElementById('btnEditar'+i).innerHTML = "Editar";
    }
    function cambio(i){
        if(num==0){
            mostrar(i);
        }else{
            ocultar(i);
        }
    }
