window.onload=iniciar;

function iniciar(){
  var btnCalcular=  document.getElementById("btnCalcular");
  btnCalcular.addEventListener("click",clickBtnCalcular);
}


function clickBtnCalcular(){
    var txtPeso = document.getElementById("txtPeso");
    var peso = txtPeso.value;
    

    var txtAltura = document.getElementById("txtAltura");
    var altura = txtAltura.value;
    
    var Imc = peso / (altura * altura);
    alert (" Su Imc es: " + Math.round(Imc));
    
}