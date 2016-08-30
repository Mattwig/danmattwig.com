<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'F:/wamp/www/danmattwig.com/user/config/themes/developer.yaml',
    'modified' => 1471130273,
    'data' => [
        'enabled' => true,
        'profile' => [
            'name' => 'Dan Mattwig',
            'desc' => 'Web Developer',
            'avatar_url' => 'user/themes/developer/assets/images/profile.jpg',
            'informations' => [
                0 => [
                    'icon' => 'map-marker',
                    'label' => 'Location',
                    'url' => '',
                    'text' => 'Seattle, WA'
                ],
                1 => [
                    'icon' => 'envelope-o',
                    'label' => 'Email',
                    'url' => 'mailto:dmattwig@gmail.com',
                    'text' => 'dmattwig@gmail.com'
                ],
                2 => [
                    'icon' => 'link',
                    'label' => 'Website',
                    'url' => 'http://danmattwig.com',
                    'text' => 'http://danmattwig.com'
                ],
                3 => [
                    'icon' => 'phone',
                    'label' => 'Phone',
                    'text' => '(440)453-4787'
                ]
            ]
        ],
        'github' => 'Mattwig',
        'coderwall' => '',
        'rss_feed' => [
            'url' => 'http://feeds.feedburner.com/TechCrunch/startups',
            'limit' => 3,
            'effect' => 'slideFastSynced'
        ],
        'linkedin' => '#',
        'social' => [
            'networks' => [
                0 => [
                    'url' => 'https://twitter.com/dmattwig',
                    'icon' => 'twitter',
                    'title' => NULL
                ],
                1 => [
                    'url' => 'https://plus.google.com/u/0/107103379372083773456',
                    'icon' => 'google-plus',
                    'title' => NULL
                ],
                2 => [
                    'url' => 'https://www.linkedin.com/pub/daniel-mattwig/57/602/594',
                    'icon' => 'linkedin',
                    'title' => NULL
                ],
                3 => [
                    'url' => 'https://github.com/Mattwig',
                    'icon' => 'github-alt',
                    'title' => NULL
                ],
                4 => [
                    'url' => 'https://www.facebook.com/dan.mattwig',
                    'icon' => 'facebook',
                    'title' => NULL
                ]
            ]
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user/themes/developer'
                    ]
                ]
            ]
        ]
    ]
];
