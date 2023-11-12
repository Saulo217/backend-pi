const base = "http://localhost/backend-pi/";
const controller = base + "controller/";
const myplants = controller + "minhas_plantas/";
const plants = controller + "plantas_ornamentais";
const user = controller + "usuario/";
const bugs = controller + "bugs/";
const hint = controller + "dicas/";
const admin = controller + "admin/";

async function post(url, data) {
  const response = await fetch(url, {method: "POST", body: JSON.stringify(data)});
  const result = await response.json();
  console.log(result);
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
