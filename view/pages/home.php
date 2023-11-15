<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="manifest" href="http://localhost/backend-pi/manifest.json">
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/home.css" />
    <script src="../js/main.js"></script>
    <script src="../js/homeHandler.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="container">
    <header>
      <img src="../assets/app_icon.png" alt="app_logo" class="app__logo" />
      <strong>SmartEco</strong>
      <img src="../assets/profile_icon.png" alt="app_logo" class="profile__logo" onclick="goToPage('profile')" />
    </header>
    <div class="main">
      <img src="../assets/home_hero.png" alt="" />
      <div class="nav__buttons">
        <button onclick="goToPage('home')">
          <img src="../assets/shop_icon.png" alt="nav_button" />
        </button>
        <button onclick="goToPage('encyclopedia')">
          <img src="../assets/book_icon.png" alt="nav_button" />
        </button>
        <button onclick="goToPage('report')">
          <img src="../assets/report_icon.png" alt="nav_button" />
        </button>
      </div>
      <div class="plants__cards">
      <script>
        (async () => {
          usuario = sessionStorage.getItem("usuario");
          const json = await post(myplants + "listar.php", { usuario });
          if(json.success) {
            console.log(json.result);
            for (let i = 0; i < json.result.length; i++) {
              document.querySelector("div.plants__cards").innerHTML += `
                <div class='plant__card' onclick="handler(${json.result[i].id_planta}, '${json.result[i].apelido}')">
                  <img src='http://localhost/backend-pi/uploads/${json.result[i].foto_planta}' alt='' />
                  <div class='plant__info'>
                    <strong>${json.result[i].apelido}</strong>
                    <div class='plant__info__details'>
                      <div>
                        <img src='../assets/umidade_icon.png' alt='' />
                        <span>${json.result[i].umidade_ideal.substring(0, 4)} %</span>
                      </div>
                      <div>
                        <img src='../assets/temp_icon.png' alt='' />
                        <span>${json.result[i].temperatura_ideal.substring(0, 4)} °C</span>
                      </div>
                      <span class='link'>ver mais</span>
                    </div>
                  </div>
                </div>
              `;
            }
          } else {
            goToPage("login");
          }
        })();
      </script>
      </div>
      <img onclick="goToPage('new_plant')" class="new_plant"  src="../assets/add_icon.png" alt="" />
    </div>
    <footer></footer>
  </body>
</html>
