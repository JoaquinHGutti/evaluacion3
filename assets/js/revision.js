var malasPalabras = ['nalgas', 'basura', 'trasero'];

const checkMalasPalabras = (palabra) => {
  var rgx = new RegExp(malasPalabras.join("|")+"|" + "/gi");
  return (rgx.test(palabra));
}

$('#enviar').click(() => {        
      
  var nombre = $("#nombretxt").val().toLowerCase();
  
  
  if(checkMalasPalabras(nombre) == true){
    window.alert("Mala palabra encontrada: " + nombre);
  }
  
});