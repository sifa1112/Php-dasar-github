<?php

$menu = [
  [
    "nama" => "Beranda"
  ],
  [
    "nama" => "Berita",
    "subMenu" => [
      [
        "nama" => "Olahraga",
        "subMenu" => [
          [
            "nama" => "Bola"
          ],
          [
            "nama" => "Bulu Tangkis"
          ]
        ]
      ],
      [
        "nama" => "Politik"
      ],
      [
        "nama" => "Manca Negara"
      ]
    ]
  ],
  [
    "nama" => "Tentang"
  ],
  [
    "nama" => "Kontak"
  ],
];


echo "<pre>";
print_r($menu);
echo "<br>";

$array = [
    ['id' => 1, 'title' => 'tree'],
    ['id' => 2, 'title' => 'sun'],
    ['id' => 3, 'title' => 'cloud'],
];

$ids = array_column($array, 'id');

print_r($ids); // [1, 2, 3]
