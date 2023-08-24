<?php

/**
 * Extension Manager/Repository config file for ext "ucph_content_html".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'UCPH TYPO3 content element "HTML"',
    'description' => 'UCPH TYPO3 content element "HTML"',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'UniversityOfCopenhagen\\UcphContentHtml\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Nanna Ellegaard',
    'author_email' => 'nel@adm.ku.dk',
    'author_company' => 'University of Copenhagen',
    'version' => '1.0.0',
];
