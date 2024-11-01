server {
    listen 80;
    #listen [::]:80 default_server;

    root /home/kurason/invitation/web;
    index index.php index.html index.htm index.nginx-debian.html;

    server_name go.to.vanitokurason.ru;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.(js|css|png|jpg|gif|swf|ico|pdf|mov|fla|zip|rar)$ {
        try_files $uri =404;
    }
    error_page 404 /404.html;

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.1-fpm.sock;
	#fastcgi_split_path_info ^(.+\.php)(/.*)$;
	#astcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

    location ~ /\.ht {
        deny all;
    }
}

