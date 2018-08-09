window.addEventListener('load',function(){
	var form = document.querySelector('#login');

  var elementos = form.elements;
  elementosArray = Array.from(elementos);

  for (var elemento of elementosArray) {
      elemento.addEventListener('blur', function () {
  			if (this.value.trim() === '') {
  				this.classList.add('is-invalid');
  				this.parentNode.querySelector('span strong').innerHTML = 'Este campo es obligatorio';
  			} else {
  				this.classList.remove('is-invalid');
  				this.parentNode.querySelector('span strong').innerHTML = '';
  			}
  		});
}

  var regexEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

  var emailInput = form.querySelector('input[name=email]');

  emailInput.addEventListener('blur', function(){
    if (!regexEmail.test(this.value)) {
      this.classList.add('is-invalid');
      this.parentNode.querySelector('span strong').innerHTML = 'Ingrese un correo electrónico con formato válido';
    }else {
      this.classList.remove('is-invalid');
      this.parentNode.querySelector('span strong').innerHTML = '';
    }
  });
});
