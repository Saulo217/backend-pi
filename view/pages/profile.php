<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfil</title>
    <link rel="manifest" href="http://localhost/backend-pi/manifest.json">
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/profile.css" />
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
      <button onclick="goToPage('home')"><</button>
      <strong>Perfil</strong>
      <div></div>
    </header>
    <div class="main">
      <div class="profile__info">
        <img src="../assets/img_profile.png" alt="app_logo" class="app__logo" />
        <script>
          (async () => {
            usuario = sessionStorage.getItem("usuario");
            const json = await post(user + "profiles.php", { usuario });
            console.log(json);
            if(json.success) {
              document.querySelector("div.profile__info").innerHTML = `
                <strong>${json.result.usuario}</strong>
                <p>${json.result.email}</p>
              `;
            } else {
              alert("Error ao consultar usuario");
            }
          })();
        </script>
      </div>
      <button class="button__edit">Editar Perfil</button>
      <div class="accordions">
        <details>
          <summary>Dados do Usuário</summary>
          <span id="user_data">
            <br>
            <br>
            <script>
              (async () => {
                usuario = sessionStorage.getItem("usuario");
                const json = await post(user + "profiles.php", { usuario });
                if(json.success) {
                  document.querySelector("span#user_data").innerHTML = `
                    ${json.result.nome}<br>
                    ${json.result.email}<br>
                    ${json.result.data_nascimento}<br>
                    ${json.result.usuario}<br>
                  `;
                } else {
                  alert("Error ao consultar usuario");
                }
              })();
            </script>
          </span>
        </details>
        <details>
          <summary>Vaso</summary>
          <span>..</span>
        </details>
        <details>
          <summary>Configurações</summary>
          <span>...</span>
        </details>
      </div>
      <button class="button__logout" onclick="goToPage('login')">Sair</button>
    </div>
  </body>
</html>
