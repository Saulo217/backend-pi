window.onload = async () => {
  data = await fetch(
    "http://localhost/backend-pi/controller/plantas_ornamentais/listar.php"
  );
  json = await data.json();

  for (let i = 0; i < json.plantas.length; i++) {
    const option = document.createElement("option");
    option.setAttribute("value", json.plantas[i].nome_cientifico);
    option.innerText = json.plantas[i].nome_popular;

    document.getElementById("nomeCientifico").appendChild(option);
  }
};
