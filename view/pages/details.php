<?php
require_once "../../connection.php";
require_once "../../model/minhas_plantas.php";
require_once "../../model/historico.php";
require_once "../../model/umidade.php";
require_once "../../model/iluminacao.php";
require_once "../../model/nivel_agua.php";
require_once "../../model/temperatura.php";

$pdo = NewConnection("smart_eco");
$pdo->query("USE smart_eco");
$id = $_COOKIE["id_planta"];

$planta = new MinhasPlantas();
$planta->setId_planta($id);
$plantas = $planta->readSingle($pdo);

$hist = new Historico();
$hist->setIdPlanta($id);
$hists = $hist->readWithPlantaID($pdo);

$umi = new Umidade();
$temp = new Temperatura();
$nivel_agua = new NivelAgua();

for ($i = 0; $i < sizeof($array); $i++) {
    # code...
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detalhes</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/details.css" />
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
      <img src="../assets/profile_icon.png" alt="app_logo" class="profile__logo" onclick="goToPage('profile')" />
    </header>
    <div class="main">
      <strong class="plant__name"><?php echo $array[0]["apelido"] ?></strong>
    </div>
    <div class="plant__status__cards__container">
      <div class="plant__status__card" style="background-color: #e3d6b3">
        <div class="plant__status__card__header">
          <div class="plant__status__card__header__icon" style="background-color: #dab659">
            <img src="../assets/icon_temp.png" alt="" />
          </div>
          <span>Temperatura</span>
        </div>
        <strong><?php echo $array[0]["temperatura_ideal"] ?>°c</strong>
        <div class="plant__status__card__footer">
          <p>Recomendado</p>
          <p>20°c á 30ºc</p>
        </div>
      </div>
      <div class="plant__status__card" style="background-color: #7bc779">
        <div class="plant__status__card__header">
          <div class="plant__status__card__header__icon" style="background-color: #56aa53">
            <img src="../assets/drop_icon.png" style="width: 25px" alt="" />
          </div>
          <span>Umidade</span>
        </div>
        <strong><?php echo $array[0]["umidade_ideal"] ?>°c</strong>
        <div class="plant__status__card__footer">
          <p>Recomendado</p>
          <p>20°c á 30ºc</p>
        </div>
      </div>
      <div class="plant__status__card" style="background-color: #f88e8e">
        <div class="plant__status__card__header">
          <div class="plant__status__card__header__icon" style="background-color: #db4242">
            <img src="../assets/water_level_icon.png" style="width: 28px" alt="" />
          </div>
          <span>Nível de água</span>
        </div>
        <strong><?php echo $array[0]["temperatura_ideal"] ?>%</strong>
        <div class="plant__status__card__footer">
          <p>Recomendado</p>
          <p>20°c á 30ºc</p>
        </div>
      </div>
      <div class="plant__status__card" style="background-color: #7bc779">
        <div class="plant__status__card__header">
          <div class="plant__status__card__header__icon" style="background-color: #56aa53">
            <img src="../assets/light_icon.png" style="width: 35px" alt="" />
          </div>
          <span>Iluminação</span>
        </div>
        <strong>Ideal</strong>
        <div class="plant__status__card__footer">
          <p>Recomendado</p>
          <p>20°c á 30ºc</p>
        </div>
      </div>
    </div>
    <section class="flowering__section">
      <h3>Florecimento</h3>
    </section>
    <section class="help__section">
      <h3>Cuidados e Dicas</h3>
      <div class="help__balloon">
        <span>Não deixar em contato direto ao sol, esta planta prefere contato indireto coma luz do sol</span>
      </div>
      <div class="help__balloon">
        <span>Esta planta gosta que o solo esteja sempre amudido para que la possa se desenovolver melhor</span>
      </div>
      <div class="help__balloon">
        <span>Cascas de frutas são um bom adubo para esta planta, com certeza ela irá adorar!</span>
      </div>
    </section>
  </body>
</html>
