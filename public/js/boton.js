function sumar(i){
    let input=document.getElementById("numerito"+i).value;  
    input++;
    document.getElementById("numerito"+i).value=input;
    document.getElementById("precio").innerHTML = "Hola Marte!!!!";
}
function restar(i){
    let input=document.getElementById("numerito"+i).value;
    input--;
    document.getElementById("numerito"+i).value=input;
}
