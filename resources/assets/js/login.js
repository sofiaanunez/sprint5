window.onload = function () {
  window.alert("hola");
	var form = document.querySelector('#login');

  var elementos = form.elements;
  elementosArray = Array.from(elementos);

  for (var elemento of elementosArray) {
    elemento.AddEventListener('blur', function(){
      if(this.value.trim() === ''){
        this.classList.add('is-invalid');
      }else{
        this.classList.remove('is-invalid');
      }
    });
  }
}
