window.addEventListener('load',function(){
    var form = document.querySelector('#servicios');
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
      var regexAlpha = /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/;
      var rubroInput = form.querySelector('input[name=rubro]');
      rubroInput.addEventListener('blur', function(){
      if (!regexAlpha.test(this.value)) {
       this.classList.add('is-invalid');
       this.parentNode.querySelector('span strong').innerHTML = "Ingrese un rubro válido.";
     }
   });

      var regexInt = /[0-9]/;
      var duracionInput = form.querySelector('input[name=duracion]');
      duracionInput.addEventListener('blur', function(){
      if (!regexInt.test(this.value)) {
       this.classList.add('is-invalid');
       this.parentNode.querySelector('span strong').innerHTML = "Ingrese una duración válida.";
      }
    });

      var montoInput = form.querySelector('input[name=monto]');
      montoInput.addEventListener('blur', function(){
      if (!regexInt.test(this.value)) {
       this.classList.add('is-invalid');
       this.parentNode.querySelector('span strong').innerHTML = "Ingrese un precio válido.";
      }
    });

});
