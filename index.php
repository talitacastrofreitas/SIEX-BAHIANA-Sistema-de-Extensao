<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIEX - Sistema de Extensão</title>

  <!--BOOTSTRAP CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!--LADO DIREITO DO BODY-->
  <div class="row m-0 p-0">
    <div class="col-lg-7 d-none d-lg-block text-center">

      <div class="d-flex align-items-center justify-content-center flex-column img-container">
        <img class="img-fluid my-3" src="img/logo.png" alt="logo" width="70%">
<!--FOOTER-->
        <footer class="mt-auto">
          <img src="img/bahiana.png" alt="bahiana" style="width:30%;">
          <p class="p-footer mt-2">&copy; 2023 SIEX BAHIANA - Sistema de Extensão. Todos os direitos reservados.</p>
        </footer>
      </div>
    </div>

    <!--FORMULÁRIO-->
    <div class="col-lg-5 col-md-12 p-0 bg_login">

      <div class="box-login">

        <div class="box-container-login">

          <div class="card-top">
            <h3 class="title text-start m-0" style="font-weight: bold; color: #001A35;">SIEX BAHIANA</h3>
            <p class="subtitle text-start" style="font-weight: 500; color: #001A35;">SISTEMA DE EXTENSÃO</p><br>
          </div>


          <p class="paragrafo text-start m-0">Informe seus dados de acesso.</p>

          <div class="box">
            <form action="">
              <div class="field_box">
                <input type="text" class="form_input" autocomplete="off" required>
                <label for="" class="form_label">E-mail</label>
              </div>
              <div class="field_box">
                <input type="password" class="form_input" autocomplete="off" required>
                <label for="" class="form_label">Senha</label>
              </div>
              <div class="card-group paragrafos mb-3">

                <p>Esqueceu sua senha? <a href="redefinir.php">Clique aqui</a></p>
              </div>
              <button class="entrar" type="submit">Entrar</button>
              <div class="paragrafos-conta">
                <p>Não tem uma conta?</p>
              </div>
            </form>
            <form action="cadastro.php">
              <button class="cadastre" type="submit">Cadastre-se</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>

</html>