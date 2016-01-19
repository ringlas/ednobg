#ednobg

#Setting up vhost file:

<VirtuallHost *:80>
      ServerName onefoundation.dev
      ServerAlias www.onefoundation.dev

        DocumentRoot /home/magi/public_html/ednobg/onefoundation.bg/

        <Directory /home/magi/public_html/ednobg/onefoundation.bg/>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Order allow,deny
                Allow from all
                Require all granted
        </Directory>

        ErrorLog ${APACHE_LOG_DIR}/edno-error.log
        CustomLog ${APACHE_LOG_DIR}/edno-access.log combined
</VirtualHost>
