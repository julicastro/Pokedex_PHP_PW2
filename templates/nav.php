<?php function showNav($titulo)
{ ?>
<div class="container my-5">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>
      <div class="container-fluid" >
      <p class="text-end">Usuario ADMIN</p>
        <h1 class="text-center">Pokedex</h1>
        
      </div>
    </header>

    <h3 class="text-center"> <?php echo($titulo)?></h3>

  </div>

<?php } ?>



