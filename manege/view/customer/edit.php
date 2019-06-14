<div class="container">
<h1><?php $customer['naam'];?> aanpassen</h1>
<form name="update" method="post" action="<?=URL?>customer/update/<?php echo $customer['id']; ?>">
	<input type="hidden" name="id" value="<?=$customer['id'] ?>"/>
	<div class="form-group">
		<label for='naam'>Naam</label>
		<input type="text" class='form-control' name="naam" value="<?=$customer['naam']?>"required>
	</div>

	<div class="form-group">
		<label for='adres'>Adres</label>
		<input type="text" class='form-control' name="adres" value="<?=$customer['adres']?>"required>
	</div>

	<div class="form-group">
		<label for='postcode'>Postcode</label>
		<input type="text" class='form-control' name="postcode" value="<?=$customer['postcode']?>"required>
	</div>

	<div class="form-group">
		<label for='stad'>Stad</label>
		<input type="text" class='form-control' name="stad" value="<?=$customer['stad']?>"required>
	</div>

	<div class="form-group">
		<label for='telefoon'>Telefoonnummer</label>
		<input type="number" class='form-control' name="telefoon" value="<?=$customer['telefoon']?>"required>
	</div>

	<div class="form-group">
		<label for='email'>E-mail</label>
		<input type="email" class='form-control' name="email" value="<?=$customer['email']?>"required>
	</div>

	<button type="submit" class="btn btn-primary">Aanpassen</button>
</div>
</form>