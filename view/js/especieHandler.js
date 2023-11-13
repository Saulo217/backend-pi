
file = null;
window.onload = () => {
  document.getElementById("foto_planta").addEventListener("change", (event) => {
    file = event.target.files[0].name;
    console.log(file);
  });
}

async function cadastro() {
  const data = {
    nomeCientifico: document.getElementById("nome_cientifico").value,
    nomePopular: document.getElementById("nome_popular").value,
    dataInicioFlorescimento: document.getElementById("data_inicio_florescimento").value,
    dataFimFlorescimento: document.getElementById("data_fim_florescimento").value,
    idadeMinimaFlorescimento: document.getElementById("idade_minima_florescimento").value,
    qtdAguaRegacao: document.getElementById("quantidade_agua_irrigacao").value, 
    temperaturaIdeal: document.getElementById("temperatura_ideal").value, 
    umidadeIdeal: document.getElementById("umidade_ideal").value, 
    iluminacaoIdeal: document.getElementById("iluminacao_ideal").value, 
    fotoPlanta: file, 
  };
  const json = await post(plants + "cadastrar.php", data);
  console.log(json);
  if(json.success === true) {
    goToPage("admin_dicas");
  } else {
    alert("Erro ao Cadastrar!");
  }
}
