<?php

$config = <<< END

rm -f /etc/nginx/sites-enabled/%PROJECT%.nginx.conf
rm -f /etc/php-fpm.d/%PROJECT%.php-fpm.conf
rm -f /etc/php-fpm.d/%PROJECT%.php.fpm.ini

ln -sfn ${'%PROJECT%.root.directory'}/autogen/nginx.conf /etc/nginx/sites-enabled/%PROJECT%.nginx.conf
ln -sfn ${'%PROJECT%.root.directory'}/autogen/php-fpm.conf /etc/php-fpm.d/%PROJECT%.php-fpm.conf
ln -sfn ${'%PROJECT%.root.directory'}/autogen/php.fpm.ini /etc/php-fpm.d/%PROJECT%.php.fpm.ini

END;

return $config;
