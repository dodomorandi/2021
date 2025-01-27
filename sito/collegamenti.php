<?php

require_once('utils.php');

$communities = [
    'LibreItalia' => [
        'id' => 'libreitalia',
        'links' => [
            'Sito' => 'https://www.libreitalia.org/',
            'Twitter' => 'https://twitter.com/libreitalia',
            'Facebook' => 'https://www.facebook.com/libreitalia',
            'Telegram' => 'https://t.me/libreitalia'
        ]
    ],
    'Developers Italia' => [
        'id' => 'devitalia',
        'links' => [
            'Sito' => 'https://developers.italia.it/',
            'Slack' => 'https://slack.developers.italia.it/'
        ]
    ],
    'Wikimedia Italia' => [
        'id' => 'wikitalia',
        'links' => [
            'Sito' => 'https://www.wikimedia.it/'
        ]
    ],
    'Free Software Foundation Europe' => [
        'id' => 'fsfe',
        'links' => [
            'Sito' => 'https://fsfe.org/',
            'Forum' => 'https://community.fsfe.org/'
        ]
    ],
    'Informatici senza Frontiere' => [
        'id' => 'isf',
        'links' => [
            'Sito' => 'https://www.informaticisenzafrontiere.org/',
            'Twitter' => 'https://twitter.com/informatici',
            'Facebook' => 'https://www.facebook.com/InformaticiSenzaFrontiere'
        ]
    ],
    'Python Italia' => [
        'id' => 'pythonitalia',
        'links' => [
            'Sito' => 'https://associazione.python.it/'
        ]
    ],
    'onData' => [
        'id' => 'ondata',
        'links' => [
            'Sito' => 'https://ondata.it/',
            'Twitter' => 'https://twitter.com/ondatait'
        ]
    ],
    'Mozilla Italia' => [
        'id' => 'mozita',
        'links' => [
            'Sito' => 'https://www.mozillaitalia.org/',
            'Twitter' => 'https://twitter.com/Mte90Net',
            'Telegram' => 'https://t.me/mozitabot'
        ]
    ],
    'GFOSS' => [
        'id' => 'gfoss',
        'links' => [
            'Sito' => 'https://gfoss.it/',
            'Twitter' => 'https://twitter.com/gfossit'
        ]
    ],
    'Italian Linux Society' => [
        'id' => 'ils',
        'links' => [
            'Sito' => 'https://www.ils.org/',
            'Twitter' => 'https://twitter.com/ItaLinuxSociety',
            'Facebook' => 'https://www.facebook.com/ItaLinuxSociety/',
            'Forum' => 'https://forum.linux.it/'
        ]
    ],
    'Scala Italy' => [
        'id' => 'scala',
        'links' => [
            'Sito' => 'https://scala-italy.it/'
        ]
    ],
    'OpenStreetMap Italia' => [
        'id' => 'osm',
        'links' => [
            'Sito' => 'https://wiki.openstreetmap.org/wiki/Italy'
        ]
    ],
    'Rust' => [
        'id' => 'rust',
        'links' => [
            'Telegram di Rust Italia' => 'https://t.me/rustlang_it',
            'Slack di Rust Italia' => 'https://rust-italia.slack.com/',
            'Telegram di Rust Torino' => 'https://t.me/torinorust',
            'Meetup di Rust Milano' => 'https://www.meetup.com/rust-language-milano/',
            'Meetup di Rust Roma' => 'https://www.meetup.com/it-IT/Rust-Roma/'
        ]
    ],
    'Lavagna Libera' => [
        'id' => 'wiidos',
        'links' => [
            'Sito' => 'http://www.wiildos.it/'
        ]
    ]
];

function getCommunitiesContent($communities)
{
    $content = [];
    foreach ($communities as $community => $communityData) {
        $id = $communityData['id'];
        $communityContent = "<h3 id='$id'>$community</h3><ul>";
        foreach ($communityData['links'] as $linkTitle => $link) {
            $communityContent .= "<li><a href='$link'>$linkTitle</a></li>";
        }
        $communityContent .= '</ul>';
        array_push($content, $communityContent);
    }
    return $content;
}

$contents = getCommunitiesContent($communities);
array_unshift($contents, 'Qui potrete trovare tutte le informazioni relative alle comunità partecipanti al MERGE-it 2021.');

page([
    'title' => 'Collegamenti alle comunità',
    'details' => '',
    'contents' => $contents
]);
