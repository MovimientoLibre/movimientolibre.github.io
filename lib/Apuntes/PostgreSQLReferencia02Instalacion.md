
Los pasos descritos a contiuación son para instalar y configurar PostgreSQL en [Gentoo Linux](http://www.gentoo.org), si usa otra distribución consulte el procedimiento requerido para la misma.

En el archivo *make.conf* la variable *USE* debe tener el parámetro *postgres*.  Como el usuario root puede editar el contenido de *make.conf* con:

    # nano -w /etc/make.conf

Primero como usuario root revise las dependencias que le solicite:

    # emerge -pv postgresql

Para instalar:

    # emerge postgresql

Revise el archivo de configuración del arranque del demonio con:

    # nano -w /etc/conf.d/postgresql

La configuración por defecto de este archivo es suficiente para el usuario común, aunque puede cambiar el directorio del _database cluster_, el usuario con el que correrá el demonio o los parámetros del mismo.

Le recomiendo el siguiente preparativo en el usuario *postgres*.  Vamos a hacer que cada vez que ingrese el usuario postgres se carge la variable de entorno PGDATA con la ubicación del _database cluster_:

    # su postgres
    $ cd ~
    $ nano -w .bashrc

Escriba esta línea en el archivo *.bashrc*:

    $ export PGDATA=/var/lib/postgresql/data

Guarde los cambios y salga como usuario postgres, la próxima vez que ingrese, se cargará la variable *PGDATA*.

A continuación vamos manualmente a crear el "database cluster".  El comando *initdb* tomará de *PGDATA* la ubicación:

    # su - postgres
    $ initdb
    $ exit

Arranquemos por primera vez el demonio, como root:

    # /etc/init.d/postgresql start

Opcionalmente, si necesita configurar las opciones de escucha (direcciones ip además de localhost) detenga el demonio, ingrese como postgres y modifique el archivo de configuración *pg_hba.conf*:

    # /etc/init.d/postgresql stop
    # su - postgres
    $ cd ~/data
    $ nano -w pg_hba.conf
    $ exit
    # /etc/init.d/postgresql start

Si quiere que el demonio del postgresql se inicie cada vez que enciende el equipo, ejecute el comando *rc-update*:

    # rc-update add postgresql default
