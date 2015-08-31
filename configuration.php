<?php

/** @var $this \Icinga\Application\Modules\Module */

$section = $this->menuSection('IT Operations', array(
	'icon'      => 'sitemap',
	'url' => 'itoperations',

));

/* $section->add($this->translate('Host Problems'), array(
		'url'       => 'itoperations/list/hosts?host_problem=1&sort=host_severity',
		'priority'  => 50
)); */

$section->add($this->translate('IT Operations Hosts'), array(
		'url'      => 'itoperations/list/hosts',
		'priority' => 10
));

$section->add($this->translate('IT Operations States'), array(
		'url'      => 'itoperations/list/servicesoperationalstate',
		'priority' => 11
));

$section->add($this->translate('IT Operations Host Groups'), array(
		'url'      => 'itoperations/list/itoperationshostgroups',
		'priority' => 20
));

$section->add($this->translate('IT Operations Service Groups'), array(
		'url'      => 'itoperations/list/itoperationsservicegroups',
		'priority' => 21
));