<?php
function enigma_bbs_control($cmd) {
    $commands = [
        'start' => 'pm2 start enigma-bbs',
        'stop' => 'pm2 stop enigma-bbs',
        'restart' => 'pm2 restart enigma-bbs'
    ];
    if (!array_key_exists($cmd, $commands)) return 'Invalid command';
    exec($commands[$cmd], $output, $status);
    return $status === 0 ? implode("\n", $output) : 'Error: ' . implode("\n", $output);
}
