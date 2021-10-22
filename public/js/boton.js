function sumar(i){
    let input=document.getElementById("numerito"+i).value;  
    input++;
    document.getElementById("numerito"+i).value=input;
}
function restar(i){
    let input=document.getElementById("numerito"+i).value;
    input--;
    document.getElementById("numerito"+i).value=input;
}
