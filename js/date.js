

function calcularEdad() {
    let hoy=new Date()

    const fechaNacimiento=document.getElementById
    ("fecha_nacimiento")

    let nacimiento=new Date(fechaNacimiento.value)

   
    /*alert(hoy.getFullYear())
    alert(nacimiento.getFullYear()) */
    alert("Tenes "+ (hoy.getFullYear()-nacimiento.getFullYear())+" años de edad") 

   


}