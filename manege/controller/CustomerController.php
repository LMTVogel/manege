<?php

require(ROOT . "model/CustomerModel.php");

function index()
{
	render("customer/index", array('customers' => getAllCustomers()));
}

function createNewCustomer() {
	render("customer/create");
}

function storeCustomer() {

	store($_POST['naam'], $_POST['adres'], $_POST['postcode'], $_POST['stad'], $_POST['telefoon'], $_POST['email']);

	header("location: ".URL."customer/index");
}

function delete($id){
    //1. Haal een klant op met een specifiek id en sla deze op in een variable
    $customerID = $id;
    $customer = getCustomer($customerID);
    //2. Geef een view weer voor het verwijderen en geef de variable met klant hieraan mee
    render('customer/delete', array('customer' => $customer));

}

function destroy($id){
    //1. Delete een klant uit de database
    deleteCustomer($customer);
	//2. Bouw een url en redirect hierheen
    header("location:../index");
    
}

function edit($id){
    //1. Haal een klant op met een specifiek id en sla deze op in een variable
    $customerID = $id;
    $customer = getCustomer($customerID);
    //2. Geef een view weer voor het updaten en geef de variable met klant hieraan mee
    render('customer/edit', array('customer' => $customer));
}

function update($id){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    updateCustomer($_POST['naam'], $_POST['adres'], $_POST['postcode'], $_POST['stad'], $_POST['telefoon'], $_POST['email'], $id);
    //2. Bouw een url en redirect hierheen
    header("location:../index");
}