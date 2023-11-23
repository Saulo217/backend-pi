function createCard(key, value, style) {
  document.querySelector("div.plant__status__cards__container").innerHTML += `
    <div class="plant__status__card" style="background-color: ${style.colorCard}">
      <div class="plant__status__card__header">
        <div class="plant__status__card__header__icon" style="background-color: ${style.colorHeader}">
          <img src="http://localhost/backend-pi/view/assets/${style.icon}" style="width: 25px" alt="" />
        </div>
        <span>${key}</span>
      </div>
      <strong>${value}°c</strong>
      <div class="plant__status__card__footer">
        <p>Recomendado</p>
        <p>Por volta de 70%</p>
      </div>
    </div>
  `;
}

async function cardsHandler() {
  const style = {
    temperatura: () => {
      return {
        icon: "icon_temp.png",
        colorCard: "#e3d6b3",
        colorHeader: "#dab659",
      };
    },
    umidade: () => {
      return {
        icon: "umidade_icon.png",
        colorCard: "#7bc779",
        colorHeader: "#56aa53",
      };
    },
    iluminacao: () => {
      return {
        icon: "light_icon.png",
        colorCard: "#f88e8e",
        colorHeader: "#db4242",
      };
    },
    nivel_agua: () => {
      return {
        icon: "water_level_icon.png",
        colorCard: "#7bc779",
        colorHeader: "#56aa53",
      };
    },
  };
  id_planta = sessionStorage.getItem("id_planta");
  json = await post(myplants + "detalhes.php", {
    id_planta,
  });

  if (json.success === true) {
    if (json.dados) {
      for (let i = 0; i < Object.keys(json.dados).length; i++) {
        createCard(
          Object.keys(json.dados)[i],
          Object.values(json.dados)[i],
          style[Object.keys(json.dados)[i]]()
        );
      }
    } else {
      document.querySelector(
        "div.plant__status__cards__container"
      ).innerHTML += `
      <h3 style='margin-left: 15%; '> Nenhum Dado Coletado </h3>
    `;
    }
  } else {
    document.querySelector("div.plant__status__cards__container").innerHTML += `
      <h3 style='margin-left: 15%;'> Nenhum Dado Coletado </h3>
    `;
  }
}

async function createHints() {
  id_planta = sessionStorage.getItem("id_planta");
  const json = await post(myplants + "detalhes.php", { id_planta });
  if (json.success) {
    for (let i of json.dicas) {
      document.querySelector("section.help__section").innerHTML += `
        <div class='help__balloon'>
          <section>${i.corpo}</section>
        </div>
      `;
    }
  } else {
    document.querySelector("div.help__section").innerHTML += `
      <div class='help__balloon'>
        <section>Nenhuma Dica Encontrada</section>
      </div>
    `;
  }
}

window.onload = () => {
  cardsHandler();
  createHints();
};
