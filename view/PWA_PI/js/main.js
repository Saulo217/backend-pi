function goToPage(pageName) {
  if (pageName === "index") {
    console.log("teste")
    return (window.location.href = pageName + ".html");
  }

  window.location.href = "http://localhost/backend-pi/pages/" + pageName + ".html";
}

function goToControllerUsuario(pageName) {

  window.location.href = "http://localhost/backend-pi/controller/usuario/" + pageName + ".php";
}
