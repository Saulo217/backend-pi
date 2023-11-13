async function login() {
  const data = {
    admin: document.getElementById("admin").value,
    admPass: document.getElementById("admPass").value
  };
  const json = await post(admin + "login.php", data);

  if(json.success === true) {
    sessionStorage.setItem("usuario", data.usuario);
    goToPage("admin_home");
  } else {
    alert("Usuário ou Senha Incorretos \n Verifique as suas informações e tente novamente!");
  }
}

async function cadastro() {
  const data = {
    nome: document.getElementById("nome").value,
    email: document.getElementById("email").value,
    datanasc: document.getElementById("datanasc").value,
    usuario: document.getElementById("usuario").value,
    senha: document.getElementById("senha").value
  };
  const json = await post(admin + "cadastro.php", data);

  if(json.success === true) {
    sessionStorage.setItem("usuario", data.usuario);
    goToPage("admin_home");
  } else {
    alert("Erro ao Cadastrar!");
  }
}
