<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfólio</title>
  <link rel="stylesheet" href="src/style.css">
  <script src="src/script.js"></script>
</head>

<body>

  <nav>
    <ul>
      <img src="src/img/programa.png" id="logo">
      <li>
        <a href="#skills">Habilidades</a>
      </li>
      <li>
        <a href="#contact">Contato</a>
      </li>
    </ul>
  </nav>

  <div class="center">
    <h1>Desenvolvedor Full Stack</h1>
    <img src="src/img/avatar.png" alt="image" id="avatar">
    <div id="sobre-mim">
      <h1>Sobre Mim</h1>
      <h2>Olá, meu nome é Ryan e sou um desenvolvedor full stack apaixonado por programação. Minha jornada rumo à
        tecnologia começou quando entrei no curso técnico de informática. Foi lá que tive meu primeiro contato com a
        programação e descobri minha paixão por criar soluções através do código.</h2>
    </div>
  </div>

  <div id="skills" class="skills-container">
    <h2 class="center">Habilidades</h2>
    <div class="blc_horizontal">
      <div class="bloco" id="designer">
        <img src="src/img/cerebro.png" class="img_bloco" alt="image">        
        <ul class="li-habilidades">
          <h2>Soft Skills</h2>
          <li>Comunicação Assertiva </li>
          <li>Trabalho em Equipe</li>
          <li>Adaptabilidade</li>
          <li>Criatividade</li>
        </ul>
      </div>
      <div class="bloco" id="frontend">
        <img src="src/img/habilidades.png" class="img_bloco" alt="image">
        <ul class="li-habilidades">

          <h2>Hard Skills</h2>
          <li>HTML</li>
          <li>CSS</li>
          <li>PHP</li>
          <li>Banco de Dados</li>

        </ul>
      </div>
    </div>
  </div>

<h2 class="center">Fale Comigo</h2>
  <div id="contact" class="contact container">

    <form action="https://formspree.io/f/xwkgywla" method="POST">
      <input type="text" name="name" placeholder="Seu nome">
      <input type="email" name="email" placeholder="Seu email">
      <textarea cols="30" rows="10" name="message" placeholder="Sua mensagem"></textarea>
      <button type="submit">Enviar</button>
    </form>
  </div><br>
  <div class="footer">
    <div class="rodape">
      <a href="https://www.linkedin.com/in/ryan-vencatto-891956248/">
        <img src="src/img/linkedin.png" class="icon-contato" alt="image">
      </a>
      
      <a href="https://github.com/ry4nVett">
        <img src="src/img/github.png" class="icon-contato" alt="image">
      </a>
        <p>&copy; <span id="year"></span> Ryan Kauê Vencatto. Todos os direitos reservados.</p>
        <p>Desenvolvido com paixão por Ryan Kauê Vencatto.</p>
                
    </div>
</div>

</body>

</html>