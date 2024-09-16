<?php return [
    "barryvdh/laravel-dompdf" => [
        "providers" => [
            0 => "Barryvdh\\DomPDF\\ServiceProvider",
        ],
        "aliases" => [
            "Pdf" => "Barryvdh\\DomPDF\\Facade\\Pdf",
            "PDF" => "Barryvdh\\DomPDF\\Facade\\Pdf",
        ],
    ],
    "laravel/dusk" => [
        "providers" => [
            0 => "Laravel\\Dusk\\DuskServiceProvider",
        ],
    ],
    "laravel/sail" => [
        "providers" => [
            0 => "Laravel\\Sail\\SailServiceProvider",
        ],
    ],
    "laravel/sanctum" => [
        "providers" => [
            0 => "Laravel\\Sanctum\\SanctumServiceProvider",
        ],
    ],
    "laravel/tinker" => [
        "providers" => [
            0 => "Laravel\\Tinker\\TinkerServiceProvider",
        ],
    ],
    "livewire/livewire" => [
        "providers" => [
            0 => "Livewire\\LivewireServiceProvider",
        ],
        "aliases" => [
            "Livewire" => "Livewire\\Livewire",
        ],
    ],
    "maatwebsite/excel" => [
        "providers" => [
            0 => "Maatwebsite\\Excel\\ExcelServiceProvider",
        ],
        "aliases" => [
            "Excel" => "Maatwebsite\\Excel\\Facades\\Excel",
        ],
    ],
    "nesbot/carbon" => [
        "providers" => [
            0 => "Carbon\\Laravel\\ServiceProvider",
        ],
    ],
    "nunomaduro/collision" => [
        "providers" => [
            0 => "NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider",
        ],
    ],
    "nunomaduro/termwind" => [
        "providers" => [
            0 => "Termwind\\Laravel\\TermwindServiceProvider",
        ],
    ],
    "spatie/laravel-ignition" => [
        "providers" => [
            0 => "Spatie\\LaravelIgnition\\IgnitionServiceProvider",
        ],
        "aliases" => [
            "Flare" => "Spatie\\LaravelIgnition\\Facades\\Flare",
        ],
    ],
];
