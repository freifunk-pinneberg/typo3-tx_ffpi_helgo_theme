<?php

declare(strict_types=1);

$EM_CONF[$_EXTKEY] = [
    'title' => 'Freifunk Helgoland Theme',
    'description' => 'Theme for Freifunk Helgoland',
    'category' => 'distribution',
    'author' => 'Kevin Quiatkowski',
    'author_email' => 'kevin@pinneberg.freifunk.net',
    'author_company' => 'Freifunk Pinneberg',
    'state' => 'stable',
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'ffpi_theme' => '',
        ],
        'conflicts' => [],
        'suggests' => [
            'ffpi_nodecounter' => '',
            'ffpi_node_updates' => '',
        ],
    ],
];
