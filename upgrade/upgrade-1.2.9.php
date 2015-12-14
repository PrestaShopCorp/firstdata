<?php

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_2_9()
{
	return Configuration::updateValue('FIRSTDATA_SENDCVV', null);
}
