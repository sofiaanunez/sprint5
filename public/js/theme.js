window.addEventListener('load',function(){
  document.getElementById('btnThemeChanged').onclick = function () {

  document.getElementById('estilo2_css').href = '/css/estilo2.css';
  console.log(document.getElementById(('estilo2_css').href = '/css/estilo2.css'));

  document.cookie = "key=value";
};
});
