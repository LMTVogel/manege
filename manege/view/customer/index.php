<h1 class="text-center">Klanten</h1>

<table class="table">
    <thead>
        <tr>
            <th>Naam</th>
            <th>Adres</th>
            <th>Postcode</th>
            <th>Stad</th>
            <th>Telefoon</th>
            <th>Email</th>
            <th>Wijzigen</th>
            <th>Verwijderen</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customers as $customer) { ?>
        <tr>
            <td><?= $customer['naam'] ?></td>
            <td><?= $customer['adres'] ?></td>
            <td><?= $customer['postcode'] ?></td>
            <td><?= $customer['stad'] ?></td>
            <td><?= $customer['telefoon'] ?></td>
            <td><?= $customer['email'] ?></td>
            <td><a href="<?= URL ?>customer/edit/<?php echo $customer['id']?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
            <td><a href="<?= URL ?>customer/delete/<?php echo $customer['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<p class="lead text-center"><a href="<?= URL ?>customer/createNewCustomer">+ Klant toevoegen</a></p>