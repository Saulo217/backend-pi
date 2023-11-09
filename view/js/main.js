function goToPage(pageName, ...params) {
  url = new URL('http://localhost/backend-pi/view/pages/' + pageName + '.php');
  if (params) {
    for (let param of params) {
      let name = param.match(/(?<=\w)=\w/, '').toString();
      console.log(name);
      let value = param.match(/\w=(?=\w)/, '').toString();
      console.log(value);
      url.searchParams.append(name, value);
    }
  }
  setTimeout(() => {
    return;
  }, 1000 * 5);
  location.href = url;
}

function goToControllerUsuario(pageName) {
  window.location.href =
    'http://localhost/backend-pi/controller/usuario/' + pageName + '.php';
}
