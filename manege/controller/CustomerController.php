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

function deleteCustomer($id) {
	$getCustomer=getCustomer($id);
	render('customer/delete', array('customer' => $getCustomer));
}