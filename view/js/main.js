const base = "http://localhost/backend-pi/";
const controller = base + "controller/";
const myplants = controller + "minhas_plantas/";
const plants = controller + "plantas_ornamentais/";
const user = controller + "usuario/";
const bugs = controller + "bugs/";
const hint = controller + "dicas/";
const admin = controller + "admin/";

async function post(url, data) {
  const response = await fetch(url, {
    method: "POST",
    body: JSON.stringify(data),
  });
  const result = await response.json();
  return result;
}

function goToPage(pageName) {
  if (pageName === "index") {
    console.log("teste");
    return (window.location.href = pageName + ".php");
  }

  window.location.href =
    "http://localhost/backend-pi/view/pages/" + pageName + ".php";
}

async function newPlant() {
  const data = {
    nomeCientifico: document.getElementById("nomeCientifico").value,
    apelido: document.getElementById("apelido").value,
    dtInicio: document.getElementById("dtinicio").value,
    cor: document.getElementById("cor").value,
    usuario: sessionStorage.getItem("usuario"),
  };
  const json = await post(myplants + "cadastro.php", data);

  if (json.success === true) {
    goToPage("home");
  } else {
    alert("Erro ao Cadastrar!");
  }
}
