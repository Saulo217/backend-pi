function goToPage(pageName) {
  if (pageName === 'index') {
    console.log('teste');
    return (window.location.href = pageName + '.php');
  }

  window.location.href =
    'http://localhost/backend-pi/view/pages/' + pageName + '.php';
}
