async function atualizar() {
  const data = {
    nome: document.getElementById("nome").value,
    email: document.getElementById("email").value,
    datanasc: document.getElementById("datanasc").value,
    usuario: document.getElementById("usuario").value,
    senha: document.getElementById("senha").value,
  };
  const json = await post(admin + "cadastro.php", data);

  if (json.success === true) {
    sessionStorage.setItem("usuario", data.usuario);
    goToPage("admin_home");
  } else {
    alert("Erro ao Cadastrar!");
  }
}

async function cadastro() {
  const data = {
    nome: document.getElementById("nome").value,
    email: document.getElementById("email").value,
    datanasc: document.getElementById("datanasc").value,
    usuario: document.getElementById("usuario").value,
    senha: document.getElementById("senha").value,
  };
  const json = await post(admin + "cadastro.php", data);

  if (json.success === true) {
    sessionStorage.setItem("usuario", data.usuario);
    goToPage("admin_home");
  } else {
    alert("Erro ao Cadastrar!");
  }
}

async function login() {
  const data = {
    usuario: document.getElementById("admin").value,
    senha: document.getElementById("admPass").value,
  };
  const json = await post(admin + "login.php", data);

  if (json.success === true) {
    sessionStorage.setItem("usuario", data.usuario);
    goToPage("home");
  } else {
    alert(
      "Usuário ou Senha Incorretos \n Verifique as suas informações e tente novamente!"
    );
  }
}

async function cadastroDicas() {
  const data = {
    nomeCientifico: document.getElementById("nomeCientifico").value,
    titulo: document.getElementById("titulo").value,
    subtitulo: document.getElementById("subtitulo").value,
    corpo: document.getElementById("corpo").value,
  };
  const json = await post(hint + "cadastrar_dicas.php", data);

  if (json.success === true) {
    goToPage("admin_dicas");
  } else {
    alert("Erro ao Cadastrar!");
  }
}
