<?php require_once "../../utils/urls.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dicas</title>
    <link rel="manifest" href=<?php echo "$urls->root" . "manifest.json" ?> >
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
  <div class="wrapper_dicas">
    <h1>Dicas</h1>
    <div class="container" style="justify-content: space-evenly;">
        <a href="http://localhost/backend-pi/view/pages/admin_cadastro_dicas.php" style="padding-left: 55px; padding-right: 55px;" class="link_button">
          App
        </a>
        <p>ou</p>
        <a href="http://localhost/backend-pi/view/pages/admin_dicas.php" class="link_button">
          Dicas
        </a>
    </div>
    <footer>
      <img src="../assets/footer_background.png" alt="footer_background" />
    </footer>
  </div>
</body>
</html>
