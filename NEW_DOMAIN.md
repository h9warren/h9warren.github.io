** The Hard Way to Update Site w/ New Domain Name **

-copy /etc/nginx/sites-available to .old in the same directory
-do the same with /etc/nginx/sites-enabled
-change names of files in /etc/nginx/sites-available:
swap instances of old domain to new domain inside each file
-copy directory /etc/nginx/sites-available and overwrite/etc/nginx/sites-enabled

-create /var/log/nginx/*sitename*/access.log
-create /var/log/nginx/*sitename*/error.log
-create /var/log/nginx/*sitename*/static.log

-change static directory names in
/srv/www

-update PHP fpm config files here:
/etc/php/7.1/fpm/pool.d
-change names of files to new domain and change domain instances in files

-reload php7.1-fpm:
"sudo service php7.1-fpm restart"

-reload nginx:
"sudo service nginx reload"
"sudo service nginx restart"

log for debugging will be here:
/var/log/nginx/(sitename)