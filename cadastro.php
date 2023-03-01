<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro</title>
<!--BOOTSTRAP CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="css/cadastro.css">

</head>
<body>
<!--TITULO E BOTÃO LOGIN-->
<div class="card-top">
<h2 class="title" style="font-weight: bold; color: #FFFF;">SIEX BAHIANA</h2>
<p class="subtitle" style="font-weight: 500; color: #FFFF;">SISTEMA DE EXTENSÃO</p><br>
</div>
<form action="index.php">
<button class="login" type="submit">Login</button>
</form>

<!--CONTAINER COM FORMULÁRIO-->
<div class="card">
<div class="card-top">
<h5>Crie sua conta</h5>
<p>Sou brasileiro</p>
</div>



<!--inputs-->
<div class="box">
<form action="">
<div class="field_box">
<input type="text" class="form_input" autocomplete="off" required>
<label for="" class="form_label">Nome completo</label>
</div>

<div class="field_box">
<input type="text" class="form_input" autocomplete="off" required>
<label for="" class="form_label">E-mail</label>
</div>

<div class="field_box">
<input type="text" class="form_input" autocomplete="off" required>
<label for="" class="form_label">Nome da mãe</label>
</div>

<div class="field_box">
<input type="date" class="form_input" autocomplete="off" required>
<label for="" class="form_label">Data de nascimento</label>
</div>
<div class="card-group paragrafos">
<p>Esqueceu sua senha? <a href="redefinir.php">Clique aqui</a></p>
</div> 
<button class="entrar" type="submit">Entrar</button>
<div class="card-group paragrafos-conta">
<p>Não tem uma conta?</p>
</div> 
</form>
<form action="cadastro.php">
<button class="cadastre" type="submit">Cadastre-se</button>
</form>
</div>

</form>


<footer>
<img src="img/bahiana.png" alt="bahiana" style="width:30%;">
<p class="p-footer">&copy; 2023 SIEX BAHIANA - Sistema de Extensão. Todos os direitos reservados.</p>
</footer> 
</body>
</html>