// Permite a inserção apenas de caracteres numéricos
AllowNumbersOnly = function (e) {
  var unicode = e.keyCode ? e.keyCode : e.charCode
  if (unicode >= 48 && unicode <= 57) {
    return true;
  } else {
    return false;
  }
}

// Quando o usuário dá scroll down de 80px do topo da página, exibe o botão
window.onscroll = function() { 
  scrollFunction() 
};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// Quando o usuário clicar no botão, dá scroll para o topo da página
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}