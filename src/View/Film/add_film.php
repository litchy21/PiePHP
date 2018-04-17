<div id="body-content">
	<p id="previous-arrow" class="left"><a href="\Webacademie\PiePHP\film\show">&#8592;</a></p>
	<h2>Ajouter un film</h2>
	<form class="form-horizontal" method="POST">
		<fieldset>
		<legend>Formulaire du film</legend>
		<div class="form-group">
		  <label class="col-md-4 control-label" for="titre">Titre</label>  
		  <div class="col-md-4">
		  <input id="titre" name="titre" type="text" placeholder="Entrez le titre ..." class="form-control input-md" required=""> 
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="genre">Genre</label>
		  <div class="col-md-4">
		    <select id="id_genre" name="id_genre" class="form-control">
		    	<option selected="" value="">Selectionnez un genre ...</option>
		    	<?php
		    		foreach ($genres as $genre) {
		    			echo "<option value='" . $genre['id'] . "'>" .  $genre['nom'] . "</option>";
		    		}
		    	?>
		    </select>
		  </div>
		</div>

		<div class="form-group">
		<label class="col-md-4 control-label" for="distrib">Distributeur</label>
		  <div class="col-md-4">
		    <select id="id_distrib" name="id_distrib" class="form-control">
		    	<option selected="" value="">Selectionnez un distributeur ...</option>
		    	<?php
		    		foreach ($distribs as $distrib) {
		    			echo "<option value='" . $distrib['id_distrib'] . "'>" .  $distrib['nom'] . "</option>";
		    		}
		    	?>
		    </select>
		 </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="resum">Résumé</label>
		  <div class="col-md-4">                     
		    <textarea class="form-control" id="resum" name="resum"></textarea>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="duree">Durée du film (en minutes)</label>  
		  <div class="col-md-4">
		  <input id="duree" name="duree_min" type="text" placeholder="Entrez la durée du film ..." class="form-control input-md">
		    
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="annee">Année de production</label>  
		  <div class="col-md-4">
		  <input id="annee" name="annee_prod" type="text" placeholder="Entrez l'année ..." class="form-control input-md">
		    
		  </div>
		</div>
		<button type="submit" class="btn btn-lg btn-info delete-btn" id="submit-film">Créer le film !</button>
		</fieldset>
	</form>
</div>