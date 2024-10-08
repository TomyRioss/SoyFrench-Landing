<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SoyFrench</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header class="header">
      <div class="menu container">
        <a href="#" class="logo">logo</a>
        <input type="checkbox" id="menu" />
        <label for="menu">
          <img src="images/menu.png" class="menu-icono" alt="menu" />
        </label>
        <nav class="navbar">
          <ul>
            <li><a href="#about">Nosotros</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#appointments">Reserva</a></li>
          </ul>
        </nav>
      </div>

      <div class="header-content container">
        <div class="header-txt">
          <h1>SoyFrench</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo nisi
            voluptatum maxime veniam iusto cum in sit temporibus delectus
            sapiente officia nulla, sint enim dicta ipsum cupiditate alias
            nostrum dolore.
          </p>
          <a href="#" class="btn-1">información</a>
        </div>
        <div class="header-img">
          <img src="images/estofado.png" alt="imágen de menu" />
        </div>
      </div>
    </header>

    <section class="about container">
      <div class="about-img">
        <img src="images/lasgna.jpg" alt="imagen de about" />
      </div>
      <div class="about-txt">
        <h2  id="about">Nosotros</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores quis
          molestias aperiam omnis aliquid, nihil corrupti nam incidunt
          repellendus numquam nobis explicabo quos animi quaerat odit illo
          asperiores maxime earum!
        </p>
        <br />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, neque,
          fugit deserunt unde eligendi magnam repudiandae cupiditate excepturi
          vero quas aliquid possimus, ullam maiores molestiae repellendus. Quo
          similique temporibus eveniet?
        </p>
      </div>
    </section>
    <main class="servicios">
      <h2 id="services">Servicios</h2>
      <div class="servicios-content container">
        <div class="servicio-1">
          <i class="fa-regular fa-calendar-days"></i>
          <h3>Reservaciones</h3>
        </div>
        <div class="servicio-1">
          <i class="fa-solid fa-message"></i>
          <h3>Comentarios</h3>
        </div>
        <div class="servicio-1">
          <i class="fa-solid fa-utensils"></i>
          <h3>Nuestro Menú</h3>
        </div>
      </div>
    </main>

    <section class="formulario container">
      <form method="post" autocomplete="off">
        <h2 id="appointments">Agendar una reservación</h2>
        <div class="input-group">
          <div class="input-container">
            <input type="text" name="name" placeholder="Nombre y apellido" />
            <i class="fa-solid fa-user"></i>
          </div>
          <div class="input-container">
            <input
              type="tel"
              name="phone"
              placeholder="Número de telefono" />
            <i class="fa-solid fa-phone"></i>
          </div>
          <div class="input-container">
            <input type="email" name="email" placeholder="Correo electronico" />
            <i class="fa-solid fa-envelope"></i>
          </div>
          <div>
            <textarea name="message" placeholder="Detalles"></textarea>
          </div>

          <input type="submit" name="send" class="btn" onclick="miFuncion()" />
        </div>
      </form>
    </section>

    <footer class="footer">
      <div class="footer-content container">
        <div class="link">
          <a href="#" class="logo">Logo</a>
        </div>
        <div class="link">
          <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>

<?php
include("send.php");
?>

<script>
  function miFuncion() {
    window.location.href = "http://localhost//SoyFrench-landing";
  }
</script>
