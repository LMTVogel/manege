<div class="container">

<h1>Voeg een klant toe</h1>
<form name="create" method="post" action="<?= URL ?>customer/storeCustomer">
	<div class="form-group">
		<label>Naam</label>
		<input type="text" class="form-control" name="naam" required>
	</div>

	<div class="form-group">
		<label>Adres</label>
		<input type="text" class="form-control" name="adres" required>
	</div>

    <div class="form-group">
		<label>Postcode</label>
		<input type="text" class="form-control" name="postcode" required>
	</div>

    <div class="form-group">
		<label>Stad</label>
		<input type="text" class="form-control" name="stad" required>
	</div>

    <div class="form-group">
		<label>Telefoon</label>
		<input type="text" class="form-control" name="telefoon" required>
	</div>

    <div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email" required>
	</div>

	<button type="submit" class="btn btn-primary">Toevoegen</button>
</form>

</div>