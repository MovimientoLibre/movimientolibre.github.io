
Involucrarse en el **cifrado de la información** que viaja a través de internet es como adentrarse a un mundo _bizarro_ que es más complicado que el nuestro. Pero cada día se vuelve más importante e indispensable para cada servicio _web_ que fabriquemos.

Podemos listar muchas razones para justificar que **todos** los sistemas y sitios web deberían **cifrar sus datos al viajar del servidor al cliente y viceversa**. Pero sólo basta una: el fin de dificultar las acciones de _espionaje masivo_ al que todos estamos expuestos.

En este **apunte** escribo los pasos para **crear certificados autofirmados** para que el servidor web **Apache** opere cifrando las comunicaciones con **SSL**. Dicho de otra forma, es usar el **HTTPS** en lugar del **HTTP**.

#### Advertencia

Cabe aclarar que las grandes entidades, sean empresas o gobiernos, quienes tienen grandes cantidades de usuarios vía internet **deberían adquirir certificados firmados por entidades más altas**. Éstos certificados ya están instalados en los navegadores de internet más populares. Para verlos en **Mozilla Firefox** vaya a _Preferencias_, en _Avanzado_, en _Ver Certificados_ y a _Autoridades_.

Adquirir un certificado de un proveedor de prestigio es costoso. Una alternativa es optar por generar un certificado gratuito de [CAcert](http://www.cacert.org/).

En cambio, los certificados autofirmados convienen cuando no podemos desembolsar el costo de un certificado comercial, los usuarios son pocos y confían en nosotros. La desventaja es que la primera vez que ingresen al sitio, su navegador de internet pondrá una **advertencia de seguridad**; a la cual debemos de indicar que el sitio **sí es de confianza** y guardarla para que no nos pregunte en el futuro.

#### Procedimiento para crear certificados autofirmados

Primero, como un usuario común vamos a abrir una terminal en **GNU/Linux** y crear un directorio donde vamos a trabajar con los certificados.

    $ mkdir apache-self-signed-cert
    $ cd apache-self-signed-cert

Ejecute el siguiente comando **openssl** reemplazando el texto _SERVIDORSISTEMA_ por algo que identifique el servidor y/o nombre del sistema o sitio:

    $ openssl req -x509 -nodes -days 1460 -newkey rsa:2048 \
      -keyout SERVIDORSISTEMA.key \
      -out SERVIDORSISTEMA.crt

Este programa le preguntará datos importantes que ayudarán a identificar el certificado. En particular en _common name_ use el nombre de domino completo del servidor.

    Country Name (2 letter code) [AU]: **
    State or Province Name (full name) [Some-State]: ******
    Locality Name (eg, city) []: ******
    Organization Name (eg, company) [Internet Widgits Pty Ltd]: ******
    Organizational Unit Name (eg, section) []: ******
    Common Name (e.g. server FQDN or YOUR name) []: sistema.servidor.com
    Email Address []: webmaster@servidor.com

Copie los archivos creados al directorio donde **Apache** espere encontrarlos. Lea la documentación de su distribución de **GNU/Linux** porque puede ser distinta a la que muestro a continuación que es para [Gentoo Linux](http://gentoo.org/):

    $ sudo cp * /etc/ssl/apache2/

Cambie los permisos de estos archivos como lo indican estos comandos:

    $ sudo chmod 444 /etc/ssl/apache2/SERVIDORSISTEMA.crt
    $ sudo chmod 400 /etc/ssl/apache2/SERVIDORSISTEMA.key

Configure el sitio o sistema web en **Apache** para que haga uso del cifrado **SSL** creando un archivo **conf**. En [Gentoo Linux](http://gentoo.org/) se usa el directorio `/etc/apache2/vhosts.d`. Consulte la documentación de su _distro_ para hacerlo de la forma correcta.

    $ sudo nano /etc/apache2/vhosts.d/0443_https.conf

A continuación sigue una muestra del contenido de `0443_https.conf` que deberá de ajustar a sus necesidades:

    # Escuchar el puerto 443
    Listen 443

    # Desde cualquier IP por el puerto 80
    NameVirtualHost *:443

    # Raiz
    <VirtualHost *:443>

        # Nombre de este servidor web
        ServerName sistema.servidor.com

        # Habilitar SSL
        SSLEngine on
        SSLCipherSuite ALL:!ADH:!EXPORT56:RC4+RSA:+HIGH:+MEDIUM:+LOW:+SSLv2:+EXP:+eNULL
        SSLCertificateFile /etc/ssl/apache2/SERVIDORSISTEMA.crt
        SSLCertificateKeyFile /etc/ssl/apache2/SERVIDORSISTEMA.key

        # Raíz del sitio o sistema web
        DocumentRoot /var/www/htdocs
        <Directory /var/www/htdocs>
            Options -Indexes -FollowSymLinks
            AllowOverride all
            Order allow,deny
            Allow from all
        </Directory>

        # Bitácoras
        ErrorLog /var/log/apache2/ssl_error_log
        <IfModule log_config_module>
            TransferLog /var/log/apache2/ssl_access_log
        </IfModule>

        # OptRenegotiate
        <FilesMatch "\.(cgi|shtml|phtml|php)$">
            SSLOptions +StdEnvVars
        </FilesMatch>
        <Directory "/var/www/localhost/cgi-bin">
            SSLOptions +StdEnvVars
        </Directory>

        # ssl-accurate-shutdown
        <IfModule setenvif_module>
            BrowserMatch ".*MSIE.*" \
            nokeepalive ssl-unclean-shutdown \
            downgrade-1.0 force-response-1.0
        </IfModule>

    </VirtualHost>

La instalación de **Apache** en [Gentoo Linux](http://gentoo.org/) deja por defecto el **SSL** deshabilitado. Así que hay que cambiar el archivo de configuración de arranque:

    $ sudo nano /etc/conf.d/apache2

Ubique la línea que define el valor `APACHE2_OPTS` y agregue `-D SSL`. Por ejemplo, para declarar el uso de **PHP 5** y de **SSL** la línea debe ser:

    APACHE2_OPTS="-D SSL -D PHP5"

Guarde los cambios realizados en el archivo. Luego, arranque o reinicie el _daemon_ de **Apache** para aplicarlos.

    $ sudo /etc/init.d/apache2 restart

Verifique que el puerto 443 esté abierto y ejecute su navegador de internet consultando la URL `https://localhost` para comprobar que funcione. No deje de revisar su **muro de fuego** para tener abierto el puerto 443 si necesita acceder desde otros equipos por red.

#### Referencias

* [Arch Linux LAMP](https://wiki.archlinux.org/index.php/LAMP)
* [Apache Documentation 2.2 SSL/TLS Encryption](http://httpd.apache.org/docs/2.2/ssl/)
* [CAcert](https://www.cacert.org/)
