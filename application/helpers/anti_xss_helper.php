<?php 
defined('BASEPATH') OR exit('No direct script access allowed.');

	function printline($value)
	{
		echo htmlentities($value, ENT_QUOTES, 'UTF-8');
	}