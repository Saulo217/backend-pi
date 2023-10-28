function goToPage(pageName) {
  if (pageName === 'index') {
    console.log('teste');
    return (window.location.href = pageName + '.html');
  }

  window.location.href =
    'http://localhost/backend-pi/view/PWA_PI/pages/' + pageName + '.html';
}

function goToControllerUsuario(pageName) {
  window.location.href =
    'http://localhost/backend-pi/controller/usuario/' + pageName + '.php';
}
