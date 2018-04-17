<div id="body-content">
	<p id="previous-arrow" class="left"><a href="\Webacademie\PiePHP\film\show">&#8592;</a></p>
	<h2><?php echo $movie['titre']; ?></h2>
	<div class="clear"></div>
	<table class="table table-responsive" id="movieCardTable">
	    <tbody>
			<tr>
		   		<tr><th>Résumé</th><td><?php echo $movie['resum']; ?></td></tr>
      			<tr><th>Genre</th><td><?php echo $movie['genre']; ?></td></tr>
      			<tr><th>Distributeur</th><td><?php echo $movie['distrib']; ?></td></tr>
      			<tr><th>Durée</th><td><?php echo $movie['duree']; ?>min</td></tr>
      			<tr><th>Année de sortie</th><td><?php echo $movie['annee']; ?></td></tr>
	   		</tr>
	    </tbody>
	</table>
	<button type="submit" class="btn btn-info delete-btn" id="modify" onclick="showModifyForm()">Modifier le film</button>
	<form id="delete" method="POST">
		<input type="hidden" name="delete">
		<button type="submit" class="btn btn-info delete-btn">Supprimer le film</button>
	</form>
	<form class="form-horizontal" method="POST" id="modifyForm">
		<fieldset>
		<legend>Modifier le film</legend>
		<div class="form-group">
		  <label class="col-md-4 control-label" for="titre">Titre</label>  
		  <div class="col-md-4">
		  <input id="titre" name="titre" type="text" placeholder="Entrez le titre ..." class="form-control input-md" required="" value=<?php echo "\"" . $movie['titre'] . "\""; ?>> 
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
		    <textarea class="form-control" id="resum" name="resum"><?php echo $movie['resum']; ?></textarea>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="duree">Durée du film (en minutes)</label>  
		  <div class="col-md-4">
		  <input id="duree" name="duree_min" type="text" placeholder="Entrez la durée du film ..." class="form-control input-md" value=<?php echo "\"" . $movie['duree'] . "\""; ?>>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="annee">Année de production</label>  
		  <div class="col-md-4">
		  <input id="annee" name="annee_prod" type="text" placeholder="Entrez l'année ..." class="form-control input-md" value=<?php echo "\"" . $movie['annee'] . "\""; ?>>
		  </div>
		</div>
		<button type="submit" class="btn btn-lg btn-info delete-btn" id="submit-film">Modifier le film !</button>
		</fieldset>
	</form>
</div>