<?php
return [
    'webhook_url' => env('LOG_SLACK_WEBHOOK_URL', ''),
    'sender_name' => env('LOG_SLACK_USERNAME',    ''),
    'icon'        => env('LOG_SLACK_EMOJI',       ''),
    'level'       => env('LOG_LEVEL',     'critical'),
];
