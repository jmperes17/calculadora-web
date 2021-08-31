<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Calculadora</title>
  </head>
  <style>
    .container{
      text-align: center; 
    }

    .menu{
      position:absolute;
	    left:50%;
	    top:50%;
	    transform: translate(-50%,-50%);
      background-color: silver;
	    border-radius:70px;
	    padding:50px 100px;
    }

    .body{
      
    background-size: 100% 100%;
    background-position: center center;
    margin-right: 200px;
    background-attachment: fixed;

    min-height:100%;
    position:center center;
   
    }

    .inputs{
	    width: 100%;
	    margin: 0 auto;
	    padding: 20px;
	    border: black;
      background: white;
	    margin-bottom: 10px;
	    border-radius: 10px;
      outline:solid rgb(97, 19, 19) 0.5px;
      
    }

    .btn{
	    padding: 10px;
      
	    width: 100%;
	    margin: 0 auto;
	    border-radius: 30px;
	    border: none;
	    text-transform: uppercase;
	    font-weight: 500;
	    color: #aeafb1;
	    background: linear-gradient(to right, rgb(88, 88, 107), rgb(88, 88, 107));
	    cursor: pointer;
    }
  </style>
  <body>
    <?php

    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    $opcoes = $_POST['opcoes'];

    switch($opcoes)
    {
    case '+': $resultado = $n1 + $n2; break;
    case '-': $resultado = $n1 - $n2; break;
    case '*': $resultado = $n1 * $n2; break;
    case '/': $resultado = $n1 / $n2; break;
    }

    #if($_POST['opcoes']=='+'){
     #"A soma de $n1 e $n2 é: $resultado";
    #}elseif ($_POST['opcoes']=='-') {
    #echo "A subtração de $n1 e $n2 é: $resultado";
    #}elseif($_POST['opcoes']=='*') {
    #echo "A multiplicação de $n1 por $n2 é: $resultado";
    #}elseif($_POST['opcoes']=='/') {
    #echo "A divisão de $n1 por $n2 é: $resultado";
    #}

    ?>

    <div class="container">
    
    <div class="menu">

  

    <form action="index.html" method="post">
        <h3>Calculadora</h3><br>
        <input type="number" name="numero1" id="numero1" class="inputs" placeholder="Digite um numero" value="<?php echo $n1 ?>" readonly><br>
        <input type="text" class="inputs" readonly value="<?php echo $opcoes ?>"><br>
      </select>
      <input type="number" name="numero2" id="numero2" class="inputs" readonly placeholder="Digite um numero" value="<?php echo $n2?>"><br>
      <b>Resultado</b><br>
      <input type="number" name="resultado" class="inputs" id="resultado"  value="<?php echo $resultado ?>" readonly><br><br><br>
      
      <button type="submit" name="submit" class="btn btn-primary">Voltar</button><br>
    </form>

  </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  
 
  </body>
</html>
