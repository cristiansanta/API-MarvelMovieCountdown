<?php

declare(strict_types=1); // <-- a nivel de archivo y arriba del todo, no de manera general

function render_template (string $template, array $data = [])
{
    //var_dump($data);
    extract($data);
    require "templates/$template.php";
}
function get_data(string $url): array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message (int $days): string
{
    return match (true) {
        $days === 0    => "Hoy se estrena!!! 👶",
        $days === 1   => "Mañana se estrena 👦",
        $days < 7   => "Esta semana se estrena 🧑",
        $days < 30   => "Este mes se estrena 👨",
        default     => "$days días hasta el estreno😉",
    };
}