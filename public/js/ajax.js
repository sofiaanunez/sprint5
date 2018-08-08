window.addEventListener('load',function(){

  var contador = document.querySelector('#contador');

  fetch('http://localhost:8000/contarUsuarios')
  .then(function (response){
    return response.json();
  })
  .then(function (data){
    console.log(data);
    contador.innerHTML += data;
  })
});
