async function cadastro() {
  const data = {
    nomeCientifico: document.getElementById("nomeCientifico").value,
    titulo: document.getElementById("titulo").value,
    subtitulo: document.getElementById("subtitulo").value,
    corpo: document.getElementById("corpo").value,
  };
  const json = await post(hint + "cadastrar_dicas.php", data);

  if (json.success === true) {
    goToPage("admin/dicas_menu");
  } else {
    alert("Erro ao Cadastrar!");
  }
}

async function atualizar() {
  const data = {
    nomeCientifico: document.getElementById("nomeCientifico").value,
    titulo: document.getElementById("titulo").value,
    subtitulo: document.getElementById("subtitulo").value,
    corpo: document.getElementById("corpo").value,
  };
  const json = await post(hint + "atualizar.php", data);

  if (json.success === true) {
    goToPage("admin/dicas_menu");
  } else {
    alert("Erro ao Cadastrar!");
  }
}
