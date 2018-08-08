
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.onload = function () {
  console.log("holaaa");
	var form = document.querySelector('#login');

	var theInputs = form.elements;
	theInputs = Array.from(theInputs);
	theInputs.pop();

	for (var input of theInputs) {
		input.addEventListener('blur', function () {
			if (this.value.trim() === '') {
				this.classList.add('is-invalid');
				this.parentNode.querySelector('#email').classList.add('error');
				this.parentNode.querySelector('#email').innerHTML = 'Este campo es <b>obligatorio</b>';
			} else {
				this.classList.remove('is-invalid');
				this.parentNode.querySelector('#password').classList.remove('error');
				this.parentNode.querySelector('#password').innerHTML = '';
			}
		});
	}

	var regexEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

	var inputEmail = form.querySelector('input[name=email]');

	inputEmail.addEventListener('blur', function () {
		if (!regexEmail.test(this.value)) {
			this.classList.add('is-invalid');
			this.parentNode.querySelector('div').classList.add('error');
			this.parentNode.querySelector('div').innerHTML = 'Ingresá un formato de <b>email valido</b>';
		} else {
			this.classList.remove('is-invalid');
			this.parentNode.querySelector('div').classList.remove('error');
			this.parentNode.querySelector('div').innerHTML = '';
		}
	});

	// var firstName = form.querySelector('input[name=firstName]');
	// var lastName = form.querySelector('input[name=lastName]');
	// firstName.addEventListener('focus', function () {
	// 	console.log('Hiciste foco sobre el campo firstName');
	// });
	// firstName.addEventListener('blur', function () {
	// 	console.log('Saliste del campo firstName');
	// });

	form.onsubmit = function (ev) {
		if (
			theInputs[0].value.trim() === '' ||
			theInputs[1].value.trim() === '' ||
			!regexEmail.test(theInputs[2].value)
		) {
			ev.preventDefault();
			window.alert('Completa todos los campos');
		}
	};
};

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
