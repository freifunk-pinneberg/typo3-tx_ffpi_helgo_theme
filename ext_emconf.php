<?php
$EM_CONF[$_EXTKEY] = array(
    'title'            => 'Freifunk Helgoland Theme',
    'description'      => 'Theme for Freifunk Helgoland',
    'category'         => 'distribution',
    'author'           => 'Kevin Quiatkowski',
    'author_email'     => 'kevin@pinneberg.freifunk.net',
    'author_company'   => 'Freifunk Pinneberg',
    'shy'              => '',
    'priority'         => '',
    'module'           => '',
    'state'            => 'beta',
    'internal'         => '',
    'uploadfolder'     => '0',
    'createDirs'       => '',
    'modify_tables'    => '',
    'clearCacheOnLoad' => 0,
    'lockType'         => '',
    'version'          => '1.0.0',
    'constraints'      => array(
        'depends'   => array(
            'typo3' => '8.7.0-9.5.99',
            'ffpi_theme' => '',
        ),
        'conflicts' => array(),
        'suggests'  => array(
            'ffpi_nodecounter' => '',
            'ffpi_node_updates' => '',
        ),
    ),
);
