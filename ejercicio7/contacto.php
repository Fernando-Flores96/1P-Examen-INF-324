<?php require_once('header.php'); ?>

<!-- Estilos CSS adicionales -->
<style>
  /* Sección Acerca de Nosotros */
  .about-section {
    background-color: #f8f9fa;
    padding: 50px 0;
  }
  .about-section h2 {
    color: #333;
    font-weight: bold;
  }
  .about-section h4 {
    color: #007bff;
    font-weight: 600;
    margin-bottom: 15px;
  }
  .about-section p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
  }
  .about-section img {
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  }

  /* Sección de Contacto */
  .contact-section {
    background-color: #ffffff;
    padding: 50px 0;
  }
  .contact-section h2 {
    color: #333;
    font-weight: bold;
  }
  .contact-section h4 {
    color: #007bff;
    font-weight: 600;
    margin-bottom: 15px;
  }
  .contact-section p {
    color: #666;
    line-height: 1.6;
  }
  .contact-section ul {
    padding-left: 0;
    list-style: none;
  }
  .contact-section li {
    margin-bottom: 10px;
  }
  .contact-section a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  .contact-section a:hover {
    color: #0056b3;
  }

  /* Formulario de contacto */
  .contact-section form .form-control {
    border-radius: 8px;
    border: 1px solid #ccc;
    padding: 10px;
  }
  .contact-section form .btn {
    background-color: #DC143C;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    transition: background-color 0.3s ease;
  }
  .contact-section form .btn:hover {
    background-color: #DC143C;
  }

  /* Redes sociales */
  .social-icons a {
    font-size: 1.2em;
    color: #333;
    margin-right: 15px;
    transition: color 0.3s ease;
  }
  .social-icons a:hover {
    color: #007bff;
  }
</style>
<header style="background: url('Assets/images/imagen04.jpg') no-repeat center center; background-size: cover;" class="text-white text-center py-4"> 
    <h1>CONTACTANOS</h1>
</header>


<!-- Sección de Contacto -->
<section class="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4 style="color: #DC143C;"> Información de Contacto</h4>
        <p>
          Si tienes alguna pregunta o necesitas más información, no dudes en contactarnos. Estamos aquí para ayudarte.
        </p>
        <ul class="list-unstyled">
          <li><strong>Dirección:</strong> Plaza Murillo, La Paz, Bolivia</li>
          <li><strong>Teléfono:</strong> +591 2 1234567</li>
          <li><strong>Email:</strong> info@alcaldialapaz.bo</li>
        </ul>
        <br>
        <h4 style="color: #DC143C;">Síguenos en redes sociales</h4>
        <div class="social-icons">
          <a href="#" class="text-decoration-none me-2">
            <i class="fab fa-facebook-f"></i> Facebook
          </a>
          <a href="#" class="text-decoration-none me-2">
            <i class="fab fa-twitter"></i> Twitter
          </a>
          <a href="#" class="text-decoration-none">
            <i class="fab fa-instagram"></i> Instagram
          </a>
        </div>
      </div>

      <!-- Formulario de Contacto -->
      <div class="col-md-6">
        <h4 style="color: #DC143C;">Envíanos un Mensaje</h4>
        <form action="enviar_mensaje.php" method="POST">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
        </form>
      </div>
    </div>
  </div>
</section>
<div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.5278151136554!2d-68.12601361488552!3d-16.499430100069233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f20684402dedb%3A0x871ad0f01f7b11ea!2sAv.%20Busch%2C%20La%20Paz!5e0!3m2!1ses!2sbo!4v1726709319990!5m2!1ses!2sbo" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php require_once('footer.php'); ?>
