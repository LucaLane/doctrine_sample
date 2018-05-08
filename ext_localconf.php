<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'LucaLane.DoctrineSample',
    'Sample',
    [
        'Sample' => 'show',
    ],
    // non-cacheable actions
    [
        'Sample' => '',
    ]
);