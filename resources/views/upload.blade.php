<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TelaUpload</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
 integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 <link rel="stylesheet" href="./css/style.css">
 </head>

<body class="bg-white">
  <main>
    <section class="login">
      <a href="/feed" class="position-fixed top-0 start-0 "><i class="fa-solid fa-arrow-left text-white"></i>
      </a>
       <div class="wrapper">
           <img src="imgs/logo-car-way.png" class="login__logo__enviar">

           <h1 class="login__title">O'que deseja enviar?</h1>

           <div class="mb-3">
            <label for="foto" class="form-label text-white fs-5">Selecione uma arquivo para enviar</label>
            <input type="file" class="form-control" name="foto" id="" placeholder="" aria-describedby="fileHelpId">
            <div id="fileHelpId" class="form-text text-white fs-6 fw-bold">Somente JPG, PNG ou GIF</div>
          </div>

           <label class="login__label"></label>

           
       </div>

       <div class="wrapper mt-5">
         <p class="text-white">Revise tudo antes de clica na seta</p>
         <a href="#"> <button type="button" class="login__button__enviar">
          <i class="fa-solid fa-arrow-right"></i>         
      </button></a>
       </div>

    </section>

    <section class="bg-white">
      <img class="fotoenviada shadowimg__enviar" src="./imgs/ponto-de-interrogacao.jpg" alt="imagem-a-enviar" 
      >
      <h1 class="text-black texto__de__enviar ">
        Digite algo sobre a foto.
        <label for="mensagem" class="form-label"></label>
          <textarea class="form-control mt-4" name="mensagem" id="" rows="5" maxlength="256">
          </textarea>
          <a href="#">
            <button type="button" class="login__button__enviar__lado_direito mt-5">
              <i class="fa-solid fa-arrow-right"></i>       
            </button>
          </a>
      </h1>  
      
    </section>
      
  </main>


 


 </body>
 
 
 
 
 
 
 </html>
 
 <script src="js/costumer.js"></script>

 <!-- 
   <a href="#" class="blocoenviarfoto">
     <span class="iconenviarfoto"><i class="fa-solid fa-square-plus"></i></span>
</a> -->