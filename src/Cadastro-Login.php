<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="../css/Log_Cad.css">
    <title>Cadastro-Login</title>
</head>
<body>
<label class="naomuda">LOGO</label>
<div class="contem">
    <div class="nL">
<form class="L" >
     <label class="HEAD_forms1">Login</label>
    <br>
        <div>
            <label>Email: </label>

            <input type="email" name="email_l" class="inputuser" placeholder="Informe seu email" required>
            <br>
            <label>Senha: </label>

            <input type="password" name="senha_L" class="inputuser" placeholder="Coloque sua senha" required>
        </div>
        <div class="btn">
            <button type="submit" name=" " >Confirmar</button>
        </div>
</form>
</div>
<!--Termino do Form de Login-->
    <div class="retangulo"></div>
<!--Inicio do Form de Cadastro-->
    <div class="Nc">
<form class="C">
  <label class="HEAD_forms">Registrar-se</label>
    <br>
        <div>
            <label>Nome: </label>

            <input type="text" name="nome_R" class="inputuser" placeholder="Nome Completo" required>
            <br>
            <label>Email: </label>

            <input type="email" name="email_R" class="inputuser" placeholder="Insira seu email" required>
            <br>

            <label>Senha: </label>
            <input type="password" name="senha_r" class="inputuser" placeholder="Insira uma senha" required />
            <br>

            <label>Confirmar Senha: </label>
            <input type="password" name="csenha_r" class="inputuser" placeholder="Confirme a senha" required />

        </div>
        <div>
            <button type="submit" name=" " >Confirmar</button>
        </div>
</form>
    </div>
</div>
</body>
</html>
