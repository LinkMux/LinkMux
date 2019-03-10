@servers(['web' => ['puck@lmux.puckwang.com']])

@task('deploy', ['on' => 'web'])
    cd /home/lmux/dev
    php artisan down
    sudo git pull
    sudo composer install --no-plugins --no-scripts
    php artisan migrate
    sudo composer install --optimize-autoloader
    php artisan config:cache
    php artisan route:cache
    php artisan up
@endtask