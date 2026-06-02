<?php

namespace App\Models;

class PortfolioModel
{
    public function getProfile(): array
    {
        return [
            'full_name' => 'Sebastian Abe Santoso',
            'nim' => '2410817210002',
            'prodi' => 'Teknologi Informasi',
            'hobbies' => [
                'Creating & Playing Games',
                'Reading Comics',
                'Baking',
                "Learning"
            ],
            'skills' => [
                'Beginner Artist (3D, 2D, Pixel)',
                'Programmer (Kotlin, HTML, PHP, CSS, etc.)',
                'Miscellaneous (I can make tiramisu)'
            ],
            'projects' => [
                [
                    'title' => 'A Match Made in Dungeon',
                    'image' => 'images/AMMID.png',
                    'link' => 'https://wasakagames.itch.io/a-match-made-in-dungeon'
                ],
                [
                    'title' => 'R*bert',
                    'image' => 'images/Rbert.png',
                    'link' => 'https://wasakagames.itch.io/rhythm-qubert'
                ],
                [
                    'title' => 'Personal Space',
                    'image' => 'images/personal-space.png',
                    'link' => 'https://itch.io/jam/gimjam-2026/rate/4238982'
                ],
            ],
            'credentials' => [
                [
                    'title' => 'AI Engineer',
                    'image' => 'images/ai-engineer.png',
                    'link' => 'https://learn.microsoft.com/api/credentials/share/en-us/SebastianAbe-4918/D030BFC60DF7D9AA?sharingId=2B964C5478947C59',
                ],
            ],

            'tagline' => 'Artist by curiosity. Programmer by practice. Learner by nature',
            'email' => 'sebastian.abe.santoso@gmail.com',
            'location' => 'Banjarmasin, Indonesia',
            'pasfoto' => 'images/pasfoto.png',
            'social_media' => [
                [
                    'title' => 'Instagram',
                    'image' => 'images/instagram.png',
                    'link' => 'https://www.instagram.com/sebastian.483_/'
                ],
                [
                    'title' => 'GitHub',
                    'image' => 'images/github.png',
                    'link' => 'https://github.com/SebastianAbeSantoso'
                ],
                [
                    'title' => 'LinkedIn',
                    'image' => 'images/linkedin.png',
                    'link' => 'https://www.linkedin.com/in/sebastian-abe-santoso-b34663330/'
                ]
            ],
        ];
    }
}