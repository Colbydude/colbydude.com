<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Music Page Settings
    |--------------------------------------------------------------------------
    */

    // Additional albums I've played on.
    'albums' => [
        // TODO?: We'd Be - The Rum Gun Diaries (no longer on Spotify)
        '0ZfKXucO0tzzAHz6JqoZn6',           // We'd Be - Beyond the Line of Sanity
        '23Ki1XY4k37rM5wO9VXzLd',           // Armature - Armature
        '0Po5W6vx0wmXdPs4NkoEnM',           // Prog XP - Save Your Progress
    ],

    // Override album details (make an EP show up under albums).
    'album_overrides' => [
        '4F6FSGuF4HTXcb9UsWfCOc' => [       // VGM, Vol. 1
            'album_group' => 'albums',
            'album_type' => 'album',
        ],
        '1F2AFdVtoiTDo8HpYUMQh6' => [       // Toss A Coin To Your Witcher
            'album_group' => 'appears_on',
        ],
    ],

    'guitars' => [

        'current' => [
            [
                'model' => 'Ibanez S5EX1 Transparent Gray',
                'image' => 'ibanez-s5ex1-tg.png'
            ],
            [
                'model' => 'ESP LTD EC-1000 See Thru Blue',
                'image' => 'esp-ltd-ec-1000-stb.png',
            ],
            [
                'model' => 'Chapman ML1-8 RS (Rob Scallon Signature)',
                'image' => 'chapman-ml1-8rs.png',
            ],
            [
                'model' => 'PRS SE MHHB2 Holcomb Burst (Mark Holcomb Signature)',
                'image' => 'prs-se-mhhb2.png',
            ],
            [
                'model' => 'ESP SN-25TH (Sonic the Hedgehog)',
                'image' => 'esp-sn-25th.png',
            ],
            [
                'model' => 'ESP SD-15TH (Shadow the Hedgehog)',
                'image' => 'esp-sd-15th.png',
            ],
            [
                'model' => 'Ibanez S61AL Black Mirage',
                'image' => 'ibanez-s61al-bm.png',
            ],
            [
                'model' => 'Ormsby Goliath 7 (Run 9) Maya Blue',
                'image' => 'ormsby-goliath-7-mb.png',
            ],
            [
                'model' => 'Ormsby Goliath Shark 7 (Run 14) Deep Sea Fade',
                'image' => 'ormsby-goliath-shark-7-dsf.png',
            ],
            [
                'model' => 'Fender FINAL FANTASY XIV Stratocaster',
                'image' => 'final-fantasy-xiv-stratocaster.png',
            ],
            [
                'model' => 'Schecter AM-7 Cobalt Slate (Aaron Marshall Signature)',
                'image' => 'schecter-am7-cs.png'
            ],
            // Basses.
            [
                'model' => 'ESP LTD B-155DX See Thru Blue',
                'image' => 'esp-ltd-b-155dx-stb.png',
            ],
            [
                'model' => 'Ibanez EHB1505MS Tropical Seafloor Flat',
                'image' => 'ibanez-ehb1505ms-tsf.png',
            ],
        ],

        'previous' => [],

    ],

    'services' => [
        'amazon' => 'https://www.amazon.com/s/ref=ntt_srch_drd_B06XCTZLD7?ie=UTF8&field-keywords=Colbydude&index=digital-music&search-type=ss',
        'apple-music' => 'https://itunes.apple.com/us/artist/colbydude/id1188137300',
        'deezer' => 'https://www.deezer.com/us/artist/11584923',
        // 'google-play' => 'https://play.google.com/store/music/artist/Colbydude?id=Ayp44zbtetsqdf7c5pcd5spelou',
        'spotify' => 'https://open.spotify.com/artist/1PNy9QvmBSRK8sTdHj8eLL',
        'tidal' => 'https://tidal.com/browse/artist/30876880',
        'youtube-music' => 'https://music.youtube.com/channel/UCzO5fgQuEWCoWyvVS7y0_Xg',
    ],

];
