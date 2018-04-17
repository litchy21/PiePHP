<div id="body-content">
	<h2>~ Tous les films ~</h2>
	<a href='\Webacademie\PiePHP\film\add' class='btn btn-info btn-lg login'>
		<span class='glyphicon glyphicon-plus-sign'></span> Ajouter un film
	</a>
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>TITRE</th>
				<th>GENRE</th>
				<th>DISTRIBUTEUR</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($movies as $movie) { ?>
				<tr>
		    		<td><a href=<?php echo "\"show/" . $movie['id_film'] . "\">" . $movie['titre']; ?></a></td>
			    	<td><?php echo $movie['genre']; ?></td>
			   		<td><?php echo $movie['distrib']; ?></td>
		   		</tr>
				<?php } ?>
		</tbody>
	</table>
</div>