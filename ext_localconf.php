<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



# PLUGINS

# File
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'File',
	array('File' => 'index'),
	array()
);

# Google Visualization
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'GoogleVisualization',
	array('GoogleVisualization' => 'index'),
	array()
);

# Facebook Connect
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'FacebookConnect',
	array('FacebookConnect' => 'index'),
	array()
);

# Math
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Math',
	array('Math' => 'index'),
	array()
);

?>