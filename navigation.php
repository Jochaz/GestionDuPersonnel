<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a>Gestion du personnel : <?php echo $page;?></a></li>
      <?php 
        if ($page == 'Liste du personnel') 
          echo '<li class="active"> <a href="index.php">Liste du personnel</a> </li>';
        else 
          echo '<li> <a href="index.php">Liste du personnel</a> </li>';
        if ($page == 'Ajout d\'un utilisateur')
          echo '<li class="active"> <a href="Ajout.php">Ajout d\'un employé</a> </li>';
        else
          echo '<li> <a href="controllers/ajoutCollaborateur.php">Ajout d\'un employé</a> </li>';
      ?>
    </ul>
    <form class="navbar-form navbar-right inline-form" action="search.php" method="post">
      <div class="form-group">
        <input type="search" class="input-sm form-control" name="personne" id="personne" placeholder="Nom de la personne">
        <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher une personne</button>
      </div>
    </form>
  </div>
</nav>
