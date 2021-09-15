<?php

require_once '../apis/tax_rate.php';

class Tax
{

	public static function get_rate(Address $address)
	{
		return TaxRate::get($address);
	}

}
