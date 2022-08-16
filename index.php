<!doctype html>
<html>
    <head>
        <title>Projeto 01</title>
        <script src="https://kit.fontawesome.com/33e6ff47dc.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Oleao+Script+Swash+Caps&display=swap" rel="stylesheet">
        <meta name="viewport" contents="width=device=width, initial=scale=1">
        <meta name="description" contents="Descrição do meu web-site">
        <meta name="keywords" contents="palavras,chave,do,site">
    </head>

    <body>


      <!-- iniciar a marcação do menu do site-->
      <header>
          <div class="center">
          <div class="logo-left">Logomarca</div> <!-- Logo -->
          <nav class="desktop-right"> <!-- site responsivo -->
              <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="">Sobre</a></li>
                  <li><a href="">Serviços</a></li>
                  <li><a href="">Contatos</a></li>
              </ul>
          </nav>
          
          <nav class="mobile right">
               <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="">Sobre</a></li>
                  <li><a href="">Serviços</a></li>
                  <li><a href="">Contatos</a></li>
              </ul>
          </nav>
          <div class="clear"></div>
          </div> <!-- div "center" -->
      </header>

      <section class="banner-principal">
          <div class="overlay"></div>
          <div class="center">

            <form>
                <h2>Qual o seu e-mail?</h2>
                <input type="email" name="e-mail" required/>
                <input type="submit" name="acao" value="cadastrar"/>
            </form>
          </div> 
      </section>

      <section class="descrição-autor">
          <div cass="center">
              <div class="w50 left"> <!-- 50% da largura da página -->
                  <h2>Jean</h2>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit temporibus 
                    nihil sint. Numquam pariatur quaerat blanditiis laborum quam ipsam fugit magni deserunt corrupti. 
                    Repellat numquam reiciendis fugit odio, aperiam illum.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit temporibus 
                    nihil sint. Numquam pariatur quaerat blanditiis laborum quam ipsam fugit magni deserunt corrupti. 
                    Repellat numquam reiciendis fugit odio, aperiam illum.</p>
              </div>
              <div class="w50 left">
              <!-- imagem -->
              <img src="imagens/img.png"/>
          </div>
          </div>
          <div class="clear"></div> <!-- limapr flutuações da página -->

      </section>

      <section class="especialidades">
          <div class="center"></div>
          <h2 class="title">Especialidades</h2>
      </section>


    </body>


</html>