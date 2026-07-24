<?php
declare(strict_types=1);

header('Content-Type: application/json');
echo json_encode([
    'app' => 'team-collab-php-blade-v16',
    'category' => 'Real-Time Team Collaboration Suite',
    'stack' => 'PHP / Modular Blade',
    'status' => 'operational'
]);
