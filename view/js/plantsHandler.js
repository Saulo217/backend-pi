
async function cadastro() {
  const data = {
    nomeCientifico: document.getElementById("nome_cientifico").value,
    titulo: document.getElementById("titulo").value,
    subtitulo: document.getElementById("subtitulo").value,
    corpo: document.getElementById("corpo").value,
  };
  const json = await post(hint + "cadastrar_dicas.php", data);

  if(json.success === true) {
    goToPage("admin_dicas");
  } else {
    alert("Erro ao Cadastrar!");
  }
}

async function list() {
  const data = await fetch(urls.controllers.plants + "listar.php");
  const plantas = await data.json().plantas;

  for(let i = 0; i < plantas; i++) {
    document.getElementById("nomeCientifico").innerHTML = `
      <option value='${plantas[i].nome_cientifico}'>${plantas[i].nome_cientifico}</option>
    `;
  }
}
