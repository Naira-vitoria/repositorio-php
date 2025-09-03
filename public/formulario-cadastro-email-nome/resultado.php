
   
  
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado do cadastro</title>
 </head>
 <body>
  <h2> Cadastro realizado</h2>
  <p>Nome:<?php echo htmlspecialchars($_POST['nome']);?></p>
  <p>E-mail:<?php echo htmlspecialchars($_POST['email']);?></p>
 </body>
 </html>