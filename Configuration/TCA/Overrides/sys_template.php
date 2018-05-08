<?php
defined('TYPO3_MODE') || die();

/**
 * Include TypoScript
 */
// @extensionScannerIgnoreLine seems to be a false positive
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'doctrine_sample',
    'Configuration/TypoScript',
    'Main Template'
);