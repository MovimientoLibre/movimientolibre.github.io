
La lista de usuarios para las bases de datos PostgreSQL es independiente de la de los usuarios de su GNU/Linux, por lo que puede dar de alta libremente los usuarios que vayan a usar PostgreSQL.

Cada usuario de la base de datos puede tener o no dos privilegios adicionales: crear nuevas bases de datos y crear más usuarios.

En una nueva instalación sólo hay un usuario, el usuario *postgres*.  Vamos a usar la cuenta de root, para luego hacernos pasar por el usuario *postgres* y dar de alta una cuenta con nuestro nombre de usuario, con capacidad de dar de alta más usuarios (-a) y crear bases de datos (-d):

    $ su -
    # su - postgres
    $ createuser -a -d sunombre
    # exit
    $ exit

Con ello, con su cuenta personal, podrá listar las bases de datos con:

    $ psql -l

Y probar el ingreso a una base de datos, por ejemplo, *template1*, con:

    $ psql template1

Para salir de la base de datos escriba `\q` y `ENTER`.

Después de las pruebas anteriores, puede crear su primer base de datos, con:

    $ createdb prueba

Revise que esté creada por medio de un listado de las bases de datos, con:

    $ psql -l

Para eliminar esa base de datos:

    $ dropdb prueba

**Opcional:** retirar al usuario postgres los privilegios para crear más usuarios y más bases de datos.

Si quiere asegurarse de que nadie más que usted dé de alta más usuarios, ingrese a la base de datos *template1* y desde ahí modifique el usuario:

    $ psql template1
    ALTER USER postgres NOCREATEDB NOCREATEUSER;
    \q

**Opcional:** crear bases de datos con juegos de caracteres distintos al por defecto.

Para ello use la opción `-E`, por ejemplo:

    $ createdb -E SQL_ASCII prueba
