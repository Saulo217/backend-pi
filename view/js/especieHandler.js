async function cadastro() {
  file = null;
  window.onload = () => {
    document
      .getElementById("foto_planta")
      .addEventListener("change", (event) => {
        file = event.target.files[0].name;
        console.log(file);
      });
  };
  const data = {
    nomeCientifico: document.getElementById("nomeCientifico").value,
    nomePopular: document.getElementById("nome_popular").value,
    dataInicioFlorescimento: document.getElementById(
      "data_inicio_florescimento"
    ).value,
    dataFimFlorescimento: document.getElementById("data_fim_florescimento")
      .value,
    idadeMinimaFlorescimento: document.getElementById(
      "idade_minima_florescimento"
    ).value,
    qtdAguaRegacao: document.getElementById("quantidade_agua_irrigacao").value,
    temperaturaIdeal: document.getElementById("temperatura_ideal").value,
    umidadeIdeal: document.getElementById("umidade_ideal").value,
    iluminacaoIdeal: document.getElementById("iluminacao_ideal").value,
    fotoPlanta: file,
  };
  const json = await post(plants + "cadastrar.php", data);

  if (json.success === true) {
    goToPage("admin/especie_menu");
  } else {
    alert("Erro ao Cadastrar!");
  }
}

async function atualizar() {
  const data = {
    nome_cientifico: document.getElementById("nome_cientifico").value,
    nome_popular: document.getElementById("nome_popular").value,
    data_inicio_florescimento: document.getElementById(
      "data_inicio_florescimento"
    ).value,
    data_fim_florescimento: document.getElementById("data_fim_florescimento")
      .value,
    idade_minima_florescimento: document.getElementById(
      "idade_minima_florescimento"
    ).value,
    quantidade_agua_regacao: document.getElementById(
      "quantidade_agua_irrigacao"
    ).value,
    temperatura_ideal: document.getElementById("temperatura_ideal").value,
    umidade_ideal: document.getElementById("umidade_ideal").value,
    iluminacao_ideal: document.getElementById("iluminacao_ideal").value,
    foto_planta: file,
  };
  console.log(data);
  const json = await post(plants + "atualizar.php", data);

  if (json.success === true) {
    goToPage("admin/especie_menu");
  } else {
    alert("Erro ao Cadastrar!");
  }
}

async function listar() {
  const json = await post(plants + "listar.php", null);

  if (json.success) {
    json.plantas.forEach((element) => {
      document.querySelector("div.plant__cards__container").innerHTML += `
        <div class='plant__card' style='background-color: #e3d6b3'>
          <span>${element.nome_popular}</span>
          <img width='165' height='165' src='http://localhost/backend-pi/uploads/cards/${element.foto_planta}' alt='' />
        </div>
      `;
    });
  } else {
    alert("No Plants!!");
  }
}

window.onload = () => {
  listar();
};
