
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detalhes</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/details.css" />
    <script src="../js/main.js"></script>
    <script src="../js/detailsHandler.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="container">
    <header>
        <button onclick="goToPage('home')"><</button>
        <strong>SmartEco</strong>
        <img src="../assets/profile_icon.png" alt="app_logo" class="profile__logo" onclick="goToPage('profile')" />
    </header>
    <div class="main">
      <strong class="plant__name"><script> document.querySelector("strong.plant__name").innerHTML += sessionStorage.getItem("apelido"); </script></strong>
    </div>
    <div class="plant__status__cards__container">
        <script>
          (async function handler() {
            id_planta = sessionStorage.getItem("id_planta");
            json = await post(myplants + "detalhes.php", {
              id_planta,
            });

            if (json.success === true) {
              for(let i = 0; i < Object.keys(json.dados).length; i++) {
                document.querySelector("div.plant__status__cards__container").innerHTML += `
                  <div class="plant__status__card" style="background-color: #7bc779">
                    <div class="plant__status__card__header">
                      <div class="plant__status__card__header__icon" style="background-color: #56aa53">
                        <img src="../assets/drop_icon.png" style="width: 25px" alt="" />
                      </div>
                      <span>${Object.keys(json.dados)[i]}</span>
                    </div>
                    <strong>${Object.values(json.dados)[i]}°c</strong>
                    <div class="plant__status__card__footer">
                      <p>Recomendado</p>
                      <p>Por volta de 70%</p>
                    </div>
                  </div>
                `;
              }
            } else {
              document.querySelector("div.plant__status__cards__container").innerHTML += `
                <h1> Nenhum Dado Coletado </h1>
              `;
            }
          })();
        </script>
    </div>
    <section class="flowering__section">
      <h3>Florecimento</h3>
    </section>
    <section class="help__section">
      <h3>Cuidados e Dicas</h3>
      <script>
        (async () => {
          id_planta = sessionStorage.getItem("id_planta");
          const json = await post(myplants + "detalhes.php", { id_planta });
          if(json.success) {
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
        })();
      </script>
    </section>
  </body>
</html>
