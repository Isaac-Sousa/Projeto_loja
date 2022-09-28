<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="css/Log_Cad.css">
    <title>Cadastro-Login</title>
</head>
<body>
<div class="lado-a-lado">
<form class="L">
    <fieldset>       <legend>Login</legend>
        <div>
            <label>Nome: </label>
            <input type="text" name="nome_L" placeholder="Nome Completo" required>
            <br>
            <label>Email: </label>
            <input type="email" name="email_L" placeholder="Insira seu email" required>
        </div>
        <div class="btn">
            <button type="submit" name=" " >Confirmar</button>
            <button type="reset" name=" ">Limpar</button>
        </div>
    </fieldset>
</form>
<!--Termino do Form de Login-->
<!--Inicio do Form de Cadastro-->
<form class="C">
    <fieldset>        <legend>Registrar-se</legend>
        <div>
            <label>Nome: </label>
            <input type="text" name="nome_L" placeholder="Nome Completo" required>
            <br>
            <label>Email: </label>
            <input type="email" name="email_L" placeholder="Insira seu email" required>
        </div>
        <div>
            <button type="submit" name=" " >Confirmar</button>
            <button type="reset" name=" ">Limpar</button>
        </div>
    </fieldset>
</form>
 </div>
</body>
</html>
