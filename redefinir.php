
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinição de senha</title>
    
    <!--BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/redefinir.css">
  </head>
<body>

    <div class="container">
   
    <div class="img-container">
        <img src="img/logo.png" alt="logo">

        <footer>
            <img src="img/bahiana.png" alt="bahiana" style="width:30%;">
            <p class="p-footer">&copy; 2023 SIEX BAHIANA - Sistema de Extensão. Todos os direitos reservados.</p>
        </footer> 

    </div>
        <div class="card">
            <div class="card-container">

           <div class="card-top">
            <h2 class="title" style="font-weight: bold; color: #001A35;">SIEX BAHIANA</h2>
            <p class="subtitle" style="font-weight: 500; color: #001A35;">SISTEMA DE EXTENSÃO</p><br>

            </div>


        <p class="paragrafo">Para recuperar seu acesso, informe seu e-mail cadastrado no sistema.</p>

        <div class="box">
            <form action="">
              <div class="field_box">
                <input type="text" class="form_input" autocomplete="off" required>
                <label for="" class="form_label">E-mail</label>
              </div>
              <div class="field_box">
                <input type="cpf" class="form_input" autocomplete="off" required>
                <label for="" class="form_label">CPF/Passaporte</label>
              </div>
    
              <button class="enviar" href="#" type="submit">Enviar</button>
              <br>
            </form>
            <form action="index.php" method="POST">
            <button class="cancelar" href="index.php" type="submit">Cancelar</button>
</form>
          </div>



    </div>

    </div>




    

</div>
</body>
</html>