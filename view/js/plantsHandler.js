async function cadastro() {
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
