<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Inventory Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a class="nav-link active" href="#"><i class="fa fa-home">&nbsp;</i>Home <span class="sr-only">(current)</span></a>
      </li>
        <?php 
        if (isset($_SESSION["userid"])) {
         ?> 
          <li class="nav-item active">
            <a class="nav-link active" href="logout.php"><i class="fa fa-user">&nbsp;</i>Logout</a>
          </li>
        <?php 
        }

        ?>
    </ul>
  </div>
</nav>