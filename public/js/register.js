window.addEventListener('load',function(){
    var form = document.querySelector('#register');
    var elementos = form.elements;
    elementosArray = Array.from(elementos);

    for (var elemento of elementosArray) {
     elemento.addEventListener('blur', function () {
             if (this.value.trim() === '') {
                 this.classList.add('is-invalid');
                 this.parentNode.querySelector('span strong').innerHTML = 'Este campo es obligatorio';
             } else {
                 this.classList.remove('is-invalid');
                 this.parentNode.querySelector('div').innerHTML = '';
             }
         });
}

      var regexNombre = /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/;
      var nombreInput = form.querySelector('input[name=nombre]');
      nombreInput.addEventListener('blur', function(){
      if (!regexNombre.test(this.value)) {
       this.classList.add('is-invalid');
       this.parentNode.querySelector('span strong').innerHTML = "Ingrese un nombre válido.";
     }
   });


      var apellidoInput = form.querySelector('input[name=apellido]');
      apellidoInput.addEventListener('blur', function(){
      if (!regexNombre.test(this.value)) {
       this.classList.add('is-invalid');
       this.parentNode.querySelector('span strong').innerHTML = "Ingrese un apellido válido.";
     }
   });

      var profesionInput = form.querySelector('input[name=profesion]');
      profesionInput.addEventListener('blur', function(){
      if (!regexNombre.test(this.value)) {
       this.classList.add('is-invalid');
       this.parentNode.querySelector('span strong').innerHTML = "Ingrese una profesión válida.";
     }
   });

      var regexPassword = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
      var passwordInput = form.querySelector('input[name=password]');
      passwordInput.addEventListener('blur', function(){
      if (!regexPassword.test(this.value)) {
       this.classList.add('is-invalid');
       this.parentNode.querySelector('span strong').innerHTML = "La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.";
     }
   });

     var confirmationInput = form.querySelector('input[name=password_confirmation]');
     confirmationInput.addEventListener('blur', function(){
     if (confirmationInput.value !== passwordInput.value) {
      this.classList.add('is-invalid');
      this.parentNode.querySelector('span strong').innerHTML = "La contraseña debe coincidir.";
      }
    });



     var regexEmail = /^\w+([.-]\w+)*@\w+([.-]\w+)*(\.\w{2,8})+$/;
     var emailInput = form.querySelector('input[name=email]');
     emailInput.addEventListener('blur', function(){
     if (!regexEmail.test(this.value)) {
      this.classList.add('is-invalid');
      this.parentNode.querySelector('span strong').innerHTML = "Ingrese un email con formato válido.";
    }
  });

      var regexEmail = /^\w+([.-]\w+)*@\w+([.-]\w+)*(\.\w{2,8})+$/;
      var emailInput = form.querySelector('input[name=email]');
      emailInput.addEventListener('blur', function(){
      if (!regexEmail.test(this.value)) {
       this.classList.add('is-invalid');
       this.parentNode.querySelector('span strong').innerHTML = "Ingrese un email con formato válido.";
     }
    });
});
