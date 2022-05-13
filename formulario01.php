<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- POST - 
         GET - 
         -->
    <form action="processa.php" method="post" enctype="multipart/form-data">
        <div>
         <label> nome: </label>
         <input type="text" name="nome" id="nome">
         <?php  if( isset($_REQUEST["erro"])){

               echo "*";
         } ?>
        </div> 
        <div>
        <div>
         <label> e-mail: </label>
         <input type="email" name="email" id="email">
        </div> 
        <div>
         <label> sexo: </label>
         <input type="radio" name="sexo" id="sexo" value="M"> Masculino
         <input type="radio" name="sexo" id="sexo" value="F"> Feminino
        </div> 
         



        <div>

             <input type="submit" value="enviar"/>
        </div>
     </form>

  <a href="processa.php?id=001&valor=10.00&produto=coca-cola">
   comprar 
 </a>     


</body>
</html>