<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/home.css" />
    <script src="../js/main.js"></script>
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
            for (let element of json.result) {
              for(let el of element) {
                document.write(`
                  <div class='plant__card' onclick="goToPage('details')">
                    <img src='http://locahost/backend-pi/uploads/$foto' alt='' />
                    <div class='plant__info'>
                      <strong>${el.apelido}</strong>
                      <div class='plant__info__details'>
                        <div>
                          <img src='../assets/umidade_icon.png' alt='' />
                          <span>${el.umidade} %</span>
                        </div>
                        <div>
                          <img src='../assets/temp_icon.png' alt='' />
                          <span>${el.temperatura} °C</span>
                        </div>
                        <span class='link'>ver mais</span>
                      </div>
                      <span class="link">ver mais</span>
                    </div>
                  </div>
                `);
              }
            }
          } else {
            goToPage("login");
          }
        })();
      </script>
      <img onclick="goToPage('new_plant')"  src="../assets/add_icon.png" alt="" />
      </div>
    </div>
    <footer></footer>
  </body>
</html>
