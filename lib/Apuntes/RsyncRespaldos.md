
Algo que todo usuario de la informática debe mantener como parte de su quehacer es la labor de hacer *respaldos periódicos*. Ya sea en un medio de almacenamiento grande (por ejemplo, un disco duro externo) o bien en otro equipo en la red local.

Existen muchas formas en las cuales podríamos perder nuestros archivos, que van desde el robo de nuestra _laptop_ hasta el borrado accidental. *La verdad es que la gran mayoría de nosotros no piensa en respaldar sus documentos hasta que la fatal desgracia nos enseña que debimos haberlo hecho.* Y que cuando es por descompostura, pérdida o robo; nos dolerá más la pérdida de los archivos que el valor del equipo mismo.

Como solución simple sugiero instalar un segundo disco duro en un equipo de escritorio, donde los los usuarios depositen el respaldo de sus _laptops_ vía _wireless_ desde sus equipos portátiles. *No confío que sea seguro compartir un disco duro externo entre varias personas, ya que se les puede caer o perder.*

Así pues instalé un segundo disco duro en el equipo de escritorio, el cual dedicaré enteramente a respaldos. Y como _tú y yo_ usamos GNU/Linux, éste aparece como /dev/sdb.

    # fdisk -l /dev/sdb

    Disk /dev/sdb: 250.1 GB, 250059350016 bytes
    81 heads, 63 sectors/track, 95707 cylinders, 488397168 sectores en total
    Units = sectores of 1 * 512 = 512 bytes
    Sector size (logical/physical): 512 bytes / 512 bytes
    I/O size (minimum/optimal): 512 bytes / 512 bytes
    Identificador del disco: 0x7da5580f

    Disposit. Inicio    Comienzo      Fin      Bloques  Id  Sistema
    /dev/sdb1            2048   488397167   244197560   83  Linux

Su única partición la _formateé_ bajo el confiable sistema de archivos Ext4.

    # mkfs.ext4 -L respaldos /dev/sdb1

Para luego montarlo manualmente en /mnt/respaldos

    # mount /dev/sdb1 /mnt/respaldos

Claro que me conviene que esta partición se monte cada vez que enciendo el equipo, así que agrego la siguiente línea a la configuración de /etc/fstab para ello.

    /dev/sdb1   /mnt/respaldos    ext4    defaults    0 1

Ya _particionado_ y _formateado_ el disco, procedo a crear directorios para cada usuario que deba respaldar. Con anterioridad ya había creado los usuarios. Sustituya *usuario1*, *usuario2* y *usuario3* con los nombres de los usuarios que vayan a hacer respaldos.

    # mkdir /mnt/respaldos/usuario1
    # mkdir /mnt/respaldos/usuario2
    # mkdir /mnt/respaldos/usuario3
    # chown usuario1:users /mnt/respaldos/usuario1
    # chown usuario2:users /mnt/respaldos/usuario2
    # chown usuario3:users /mnt/respaldos/usuario3

El equipo mantiene en ejecución el _daemon_ *SSH*. Por medio de éste se pueden transferir los archivos de forma cifrada protegiéndonos de que algún intruso pueda atraparlos fácilmente.

En este punto, la computadora de escritorio está lista para recibir los respaldos. Punto aparte, tengo habilitado un servidor DNS que me resuelve el nombre *escritorio.casa.lan* por su respectiva dirección IP. Si no lo tiene, puede usar la dirección IP en los comandos que siguen.

Para realizar un *respaldo manual* del directorio *Documentos* ejecuto este comando en la _laptop_ bajo la sesión del usuario (si es necesario, sustituya *escritorio.casa.lan* por la dirección IP del equipo y *usuario1* por su nombre de usuario):

    $ rsync -av -e ssh ~/Documentos escritorio.casa.lan:/mnt/respaldos/usuario1/

Como iniciativa propia, no deseo respaldar videos o música, prefiero darle prioridad a lo que tengo en *Documentos*, Usted seguramente me entenderá.

En las siguientes ejecuciones, el comando *rsync* copiará sólo los archivos nuevos o los que hayan cambiado.

Sólo un detalle más: como el anterior comando es largo, prefiero ejecutarlo fácilmente con un _atajo_. Para ello edito el archivo *.bashrc* que tengo en la raíz de mi _home_:

    $ nano -w ~/.bashrc

Y agrego esta línea que habilita el _atajo_:

    alias respaldar="rsync -av -e ssh ~/Documentos escritorio.casa.lan:/mnt/respaldos/usuario1/"

Cierre la terminal, abra una nueva, y ejecute el _atajo_ (que equivale al comando largo).

    $ respaldar

Así pues, procuro ejecutar *respaldar* frecuentemente para mantener una copia de mis documentos en el otro equipo. Puede automatizar esta labor si agrega el comando al *cron* y establece una hora del día a la cual se ejecute sin intervención del usuario. Esto se lo dejo de tarea.
