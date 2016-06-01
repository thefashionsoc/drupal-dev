<?php

$databases = [];
$config_directories = [];
$settings['hash_salt'] = 'SCN9schr8NXgykpKIicj-gSYLdZfL90xxXF8fCgJsASVrJwu--gtnOSmtmcBju8wLtZK0gghog';
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = __DIR__ . '/services.yml';

if (file_exists(__DIR__ . '/settings.local.php')) {
 include __DIR__ . '/settings.local.php';
}

if (file_exists(__DIR__ . '/settings.private.php')) {
 include __DIR__ . '/settings.private.php';
}

$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'sites/default/config/sync';
