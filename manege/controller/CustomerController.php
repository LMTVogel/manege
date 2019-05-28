<?php

require(ROOT . "model/CustomerModel.php");

function index()
{
	render("customer/index", array('customers' => getAllCustomers()));
}
