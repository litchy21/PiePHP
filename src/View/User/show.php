<div id="body-content">
	<h2><?php echo ucfirst($_SESSION['name']) . ' ' . ucfirst($_SESSION['surname']); ?></h2>
	<div class="clear"></div>
	<p>Date de naissance : <?php echo $_SESSION['birth']; ?></p>
	<p>Ville : <?php echo $_SESSION['city']; ?></p>
	<p>Adresse email : <?php echo $_SESSION['email']; ?></p>
	<a onclick="showEmailForm()" class="pointer">Changer d'adresse email</a>
	<a onclick="showPassForm()" class="pointer">Modifier le mot de passe</a>
	<form class="form-horizontal" method="POST" id="passForm">
		<div class="form-group">
			<label class="col-md-4 control-label" for="old_pass">Ancien mot de passe</label>
			<div class="col-md-5">
				<input name="old_pass" type="password" placeholder="entrez votre ancien mot de passe ..." class="form-control input-md" required="">
			</div>
		</div>
		<div class="form-group">
		<label class="col-md-4 control-label" for="password">Nouveau mot de passe</label>
		<div class="col-md-5">
			<input name="password" type="password" placeholder="entrez votre nouveau mot de passe ..." class="form-control input-md" required="">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-4">
				<button class="btn btn-primary" type="submit">Changer mot de passe</button>
			</div>
		</div>
	</form>
	<form class="form-horizontal" method="POST" id="emailForm">
		<div class="form-group">
			<label class="col-md-4 control-label" for="email">Nouvel email</label>
			<div class="col-md-5">
				<input name="email" type="email" placeholder="entrez votre nouvel email ..." class="form-control input-md" required="">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-4">
				<button class="btn btn-primary" type="submit">Changer adresse email</button>
			</div>
		</div>
	</form>
	<form id="delete" method="POST">
		<input type="hidden" name="delete">
		<button type="submit" class="btn delete-btn">Supprimer le compte</button>
	</form>
	<section>
   		<?php 
            if (isset($error)) {
                echo $error;
            }
            if (isset($success)) {
                echo $success;
            }
        ?>
	</section>
</div>