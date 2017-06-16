<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'ZECHENDORF.' . $_EXTKEY,
    'Ad',
    array('Ad' => 'show'),
    array()
);
