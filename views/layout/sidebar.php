<div id="container mt-4">

    <!-- <div class="position-relative">
      <div class="position-absolute top-0 start-100 translate-middle">
      </div>
      <ul class="">
        <a href="?controller=carrito&action=index"><img src="assets/img/anadir-al-carrito.png" class="img-fluid" alt="carrito" style=" height:30px"></a>
      </ul>
    </div> -->

    <div class="container">
      <?php if (!isset($_SESSION['identity'])) : ?>
        <h3 class="text-center">Entrar a la web</h3>
        <form action="?controller=usuario&action=login" method="post">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" />
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Contraseña" />
          </div>
          <div class="input-group mb-3">
            <input type="submit" value="Enviar" class="btn btn-primary" />
          </div>
        </form>
        <div class="input-group mb-3">
          <a href="?controller=usuario&action=registro" class="btn btn-secondary">Registrate aqui</a>
        </div>
      <?php else : ?>
        <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
      <?php endif; ?>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Funciones
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php if (isset($_SESSION['admin'])) : ?>
                  <li class="nav-item"><a class="nav-link" href="?controller=categoria&action=index">Gestionar categorias</a></li>
                  <li><a class="nav-link" href="?controller=producto&action=gestion">Gestionar productos</a></li>
                  <li><a class="nav-link" href="?controller=pedido&action=gestion">Gestionar pedidos</a></li>
                <?php endif; ?>

                <?php if (isset($_SESSION['identity'])) : ?>
                  <li class="nav-item"><a class="nav-link" href="?controller=pedido&action=mis_pedidos">Mis pedidos</a></li>
                  <li class="nav-item"><a class="nav-link" href="?controller=usuario&action=logout">Cerrar sesión</a></li>
                <?php else : ?>

                <?php endif; ?>
              </ul>
          </ul>
        </div>
      </nav>

      <!-- <ul>
        <?php if (isset($_SESSION['admin'])) : ?>
          <li><a href="?controller=categoria&action=index">Gestionar categorias</a></li>
          <li><a href="?controller=producto&action=gestion">Gestionar productos</a></li>
          <li><a href="?controller=pedido&action=gestion">Gestionar pedidos</a></li>
        <?php endif; ?>

        <?php if (isset($_SESSION['identity'])) : ?>
          <li class="nav-item"><a href="?controller=pedido&action=mis_pedidos">Mis pedidos</a></li>
          <li class="nav-item"><a href="?controller=usuario&action=logout">Cerrar sesión</a></li>
        <?php else : ?>

        <?php endif; ?>
      </ul> -->
    </div>
  <!-- CONTENIDO CENTRAL -->
  <div id="central">