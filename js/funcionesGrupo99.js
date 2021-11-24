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

/* FUNCION DATE */
function calcularFecha() {
  let hoy=new Date()

  const fechaNacimiento=document.getElementById
  ("fecha_nacimiento")

  let nacimiento=new Date(fechaNacimiento.value)

 
  /*alert(hoy.getFullYear())
  alert(nacimiento.getFullYear()) */
  alert("Tenes "+ (hoy.getFullYear()-nacimiento.getFullYear())+" de edad") 
}