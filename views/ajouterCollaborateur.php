<!DOCTYPE html>
<html>
<?php
    //Renseignement de la variable page pour savoir ou on se situe
    $page = 'Connexion';
    //Importation de l'entete
    include('../entete.php');
    ?>
    <div class="container">
        <!-- Formulaire de connexion -->
        <form method="post" action="ajoutCollaborateur.php">
            <div class="form-group">
                <label for="nom">Nom</label> 
                <input type="text" class="form-control" placeholder="Entrer le nom du collaborateur" name="nom" id="nom" />      
            </div>    
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" placeholder="Entrer le prénom du collaborateur" name="prenom" id="prenom" />      
            </div>  
            <div class="form-group">
                <label for="naissance">Date de naissance</label>
                <input type="text" class="form-control" placeholder="Entrer la date de naissance du collaborateur" name="naissance" id="naissance" />      
            </div>  
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" class="form-control" placeholder="Entrer l'email du collaborateur" name="email" id="email" />   
                </div>
            </div>
            <div class="form-group">
                <label for="photo">Ajouter photo</label>
                <input type="file" id="photo">
                <p class="help-block">La photo ne doit pas dépasser 1Mo ! (pas en fonction)</p>
            </div>  
            <div class="form-group">
                <label for="poste">Poste</label>
                <input type="text" class="form-control" placeholder="Entrer le poste du collaborateur" name="poste" id="poste" />      
            </div>
            <div class="form-group">
                <label for="date_entree">Date entrée</label>
                <?php echo '<input type="text" class="form-control" value="'.date("d/m/Y").'" name="date_entree" id="date_entree" />'; ?>      
            </div> 
            <div class="form-group">
                <label class="sr-only" for="salaire">Salaire (en euros)</label>
                <div class="input-group">
                  <div class="input-group-addon">€</div>
                  <input type="text" class="form-control" id="salaire" placeholder="Salaire">
                </div>
            </div>

           
           <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Ajouter ce collaborateur</button>
            </div>
          </div>
        </form>
    </body>
    </div>
</html>

