<div class="container">   
    <form method="post" action="<?= URL ?>customer/deleteCustomer">
        <h1>Weet u zeker dat u <?php echo $customer[naam];?> wilt verwijderen?</h1>
        <button type="submit" class="btn btn-primary">Verwijderen</button>
    </form>
</div>