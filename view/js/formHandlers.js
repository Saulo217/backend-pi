async function loginHandler() {
  const data = {
    usuario: document.getElementById("usuario").value,
    senha: document.getElementById("senha").value,
  };
  const json = await post(user + "login.php", data);

  if (json.success === true) {
    sessionStorage.setItem("usuario", data.usuario);
    goToPage("home");
  } else {
    alert(
      "Usuário ou Senha Incorretos \n Verifique as suas informações e tente novamente!"
    );
  }
}

async function cadastroHandler() {
  const data = {
    nome: document.getElementById("nomeCientifico").value,
    email: document.getElementById("value").value,
    datanasc: document.getElementById("dtinicio").value,
    usuario: document.getElementById("cor").value,
  };
  const json = await post(+"cadastro.php", data);

  if (json.success === true) {
    sessionStorage.setItem("usuario", data.usuario);
    goToPage("home");
  } else {
    alert("Erro ao Cadastrar!");
  }
}

async function cadastroHandler() {
  const data = {
    nome: document.getElementById("nome").value,
    email: document.getElementById("email").value,
    datanasc: document.getElementById("datanasc").value,
    usuario: document.getElementById("usuario").value,
    senha: document.getElementById("senha").value,
  };
  const json = await post(user + "cadastro.php", data);

  if (json.success === true) {
    sessionStorage.setItem("usuario", data.usuario);
    goToPage("home");
  } else {
    alert("Erro ao Cadastrar!");
  }
}


