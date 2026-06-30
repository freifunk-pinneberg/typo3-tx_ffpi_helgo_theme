<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

ExtensionManagementUtility::addStaticFile(
    'ffpi_helgo_theme',
    'Configuration/TypoScript',
    'Freifunk Helgoland - Base Theme'
);
