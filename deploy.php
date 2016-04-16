<?php
require 'recipe/laravel.php';

task('deploy:run_migrations', function () {
    run('php {{release_path}}/artisan migrate');
})->desc('Run migrations');

task('deploy:build_assets', function () {
   runLocally('gulp');
   upload(__DIR__ . '/public/css', '{{release_path}}/public/css');
   upload(__DIR__ . '/public/js', '{{release_path}}/js/js');
})->desc('Build assets');

/**
 * Main task
 */
task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    'deploy:symlink',
    'deploy:run_migrations',
    'deploy:build_assets',
    'cleanup',
])->desc('Deploy your project');

// Laravel shared dirs
set('shared_dirs', [
    'storage/app',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
]);

// Laravel 5 shared file
set('shared_files', ['.env']);

// Laravel writable dirs
set('writable_dirs', ['storage', 'vendor']);
set('http_user', 'nginx');
set('writable_use_sudo', false);

server('prod', 'mattbucci.com', 22)
    ->user('root')
    ->identityFile()
    ->stage('production')
    ->env('deploy_path', '/var/www/motivate.mattbucci.com'); 



set('repository', 'https://github.com/mattbucci/motivate.git');
?>
