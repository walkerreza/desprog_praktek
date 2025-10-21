<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu, $sub = false) {
    $prefix = ($sub) ? "  " : "";
    echo $prefix . "<ul>";
    foreach ($menu as $key => $item) {
        echo $prefix . "<li>{$item['nama']}";
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu'], true);
        }
        echo $prefix . "</li>";
    }
    echo $prefix . "</ul>";
}

tampilkanMenuBertingkat($menu);
?>