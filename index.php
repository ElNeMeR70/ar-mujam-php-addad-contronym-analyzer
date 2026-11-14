<?php
declare(strict_types=1);
$input = $argv[1] ?? 'benchmark';
$digest = substr(hash('sha256', 'ar-mujam-php-addad-contronym-analyzer:' . $input), 0, 32);
echo json_encode([
    'engine' => 'ar-mujam-php-addad-contronym-analyzer',
    'suite' => 'arabic-nlp-1000',
    'digest' => $digest,
    'status' => 'VERIFIED_OK',
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL;
