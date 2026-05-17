<?php

$sRoot = dirname(__DIR__);
$sInstallDir = $sRoot . '/_install';

if (!is_dir($sInstallDir)) {
    exit(0);
}

$sAction = $argv[1] ?? 'install';
$sAction = $sAction === 'update' ? 'update' : 'install';
$sCommand = 'composer ' . $sAction . ' --no-interaction --prefer-dist';
chdir($sInstallDir);
passthru($sCommand, $iExitCode);
exit((int)$iExitCode);
