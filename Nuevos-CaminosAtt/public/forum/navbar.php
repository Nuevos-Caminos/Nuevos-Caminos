<style>
  .sidebar-list {
    padding-left: 0;
  }
  @media (max-width: 991.98px) {
    #sidebar {
      position: fixed;
      z-index: 9999;
      left: -250px;
      transition: all 0.3s;
    }
    #sidebar.active {
      left: 0;
    }
  }
</style>

<!-- Botão de abrir/fechar navbar no mobile -->
<button class="btn btn-primary d-lg-none" id="sidebarToggle"><i class="fa fa-bars"></i></button>

<nav id="sidebar" class="bg-white">
  <div class="sidebar-list">
    <a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
    <?php if($_SESSION['login_type'] == 3 || $_SESSION['login_type'] == 1): ?>
      <a href="index.php?page=categories" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-tags"></i></span> Categoría/Etiquetas</a>
    <?php endif; ?>
    <a href="index.php?page=topics" class="nav-item nav-topics"><span class='icon-field'><i class="fa fa-comment"></i></span> Discusión</a>
    <?php if($_SESSION['login_type'] == 3 || $_SESSION['login_type'] == 1): ?>
      <a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Usuarios</a>
    <?php endif; ?>
    <a href="../../public/" class="nav-item nav-reset"><span class='icon-field'><i class="fa fa-angle-double-left"></i></span> Volver al sitio</a>
  </div>
</nav>

<script>
  $('#sidebarToggle').click(function() {
    $('#sidebar').toggleClass('active');
  });

  $('.nav_collapse').click(function(){
    $($(this).attr('href')).collapse();
  });
  
  $('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active');
</script>
