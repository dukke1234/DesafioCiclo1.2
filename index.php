<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Desafio 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../DesafioCiclo1.2/css/style.css">
  <title>Desafio 2</title>
</head>

<body>
  <!-- TOP SITE  -->
  <header id="header-top">
     <h1 class="container">ME ACHA!</h1>
     <p class="container">encontre um endereço pelo número do CEP</p>
     <img src="/DesafioCiclo1.2/img/incone" id="centralizarimg">
    
  </header>
  <!-- MEIO SITE  -->
  <main>
 <form>
 <label for="cep">CEP</label>
 <input type="text" required placeholder="Digite o CEP" class="txt" id="cep" name="cep" value="" >

 <label for="rua">Rua</label>
 <input type="text" class="txt" value="" >
 <label for="bairro">Bairro</label>
 <input type="text" class="txt" value="" >
 <label for="cidade">Cidade</label>
 <input type="text" class="txt" value="" >
 <label for="estado">Estado</label>
 <input type="text" class="txt" value="" >

 <input type="submit" class="eviarbotao" name="buscar" value="BUSCAR" >

 </form>
 </main>


</body>

</html>