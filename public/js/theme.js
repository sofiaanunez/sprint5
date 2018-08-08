window.addEventListener('load',function(){
  document.getElementById('btnThemeChanged').onclick = function () {
  document.getElementById('estilo2_css').href = '/css/estilo2.css';
  document.cookie = "estilo=1";
};
});
