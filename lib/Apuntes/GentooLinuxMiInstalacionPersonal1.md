
<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/dell-inspiron-9300-gentoo.jpg">

Hace algunos días actualicé el [Portage](http://es.wikipedia.org/wiki/Portage) de la instalación de [Gentoo Linux](http://www.gentoo.org/) que tengo en mi portátil, una Dell Inspiron 9300. Observé que la versión estable del KDE había cambiado a la 3.5.8 y sentí un _enfermizo cosquilleo_... NO me daban ganas de actualizar... sino de iniciar una NUEVA instalación en este equipo.

De forma habitual, después de actualizar el _portage_ podemos solicitar un listado de los paquetes que se pueden actualizar (valga la redundancia). Gentoo Linux se distingue por bajar el código fuente, desempacarlo, compilarlo e instalarlo; lo cual consume más tiempo que las otras formas de actualización de las demás distribuciones.

Los paquetes pequeños suelen tomar algunos minutos en actualizarse. Pero la actualización de un paquete grande (como Mozilla Firefox o KOffice) o de un entorno gráfico sofisticado (como Gnome o KDE) puede tomar varias horas.

Uno de los atractivos de hacer una nueva instalación es que podemos probar nuevos parámetros de compilación. En esta ocasión me atrae la idea de **desactivar arts** (es el controlador de audio por defecto de KDE 3.x, no funciona tan bien como quisiera y [será depreciado con el KDE 4](http://multimedia.kde.org/)) y **activar ipv6** (aunque no me he conectado aún a una red de éstas, tal vez no falte mucho para que lo tenga que hacer).

Le advierto que la instalación de un Gentoo Linux con un entorno gráfico (Gnome o KDE) y decenas de aplicaciones son **muchas horas** de descarga, compilación, instalación y configuración. Vea el lado positivo, será _divertido_, aprenderá mucho y estará optimizando las aplicaciones a la medida de su equipo. **Pues ¡SI!... me confieso adicto... a tener mi GNU/Linux optimizado y al día.**

A continuación explico _una forma alternativa_ de instalar Gentoo Linux. No es por medio de un asistente ni del LiveCD, sino por gran cantidad de comandos que nos brindarán gran flexibilidad.

También aprovecho que ya tengo particionado el disco duro e instalado Gentoo Linux en este equipo. Gracias a esto, es posible estar instalando Gentoo Linux en una partición mientras se sigue trabajando en la instalación anterior, por que todo esto lo puede hacer en una terminal.

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/kcmsystem.png">

**ADVERTENCIA:** Esta guía va dirigida a usuarios con experiencia en GNU/Linux. *Los comandos mostrados aquí podrían borrar irrevesiblemente sus archivos.* Por lo que le sugiero que, *antes que nada, haga un respaldo de todo lo que considere importante*. No ofrezco ningua garantía ni atenderé ningún reclamo de los resultados que pudieran ocurrir.

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/kate.png">

### Sobre este manual

* Este manual describe los pasos para instalar Gentoo Linux hasta llegar a tener un entorno de escritorio KDE con los paquetes preferidos del autor. Me inclino por el desarrollo de aplicaciones web, por lo que instalaré Apache, PostgreSQL y PHP.
* No describo ampliamente las cualidades de los paquetes. Me he enfocado en hacer una guía _paso a paso_, comando a comando que les mostrará cómo es Gentoo Linux. Si tiene dudas sobre algún paquete, no dude en consultar al [Gentoo Wiki](http://www.gentoo-wiki.org/) y a _Don_ [Google](http://www.google.com/).
* En Gentoo Linux es posible tener varias instalaciones de esta distribución en el mismo equipo. Lo cual aprovecho usando la instalación anterior y haciendo todo desde una consola. No es necesario insertar el CD de instalación.
* El _portage_ /usr/portage/ así como las fuentes descargadas (almacenadas en /usr/portage/distfiles/) las tengo en una partición dedicada. Lo cual me permite compartirlo con las varias instalaciones en el mismo equipo.
* Los comandos que deben ser ingresados como _root_ tienen un "#" al principio, en cambio, los ingresados en una cuenta de usuario tienen "$" al inicio. Tenga la precaución de no confundir el contenido de los archivos de configuración, porque suelen usar "#" para los comentarios.
* En la primera parte (esta página) llegaré a tener un sistema básico que llegue a consola.
* En la [segunda parte](gentoo-linux-mi-instalacion-personal-2.html) tendré instalado la base del entorno de escritorio **KDE**.
* En la [tercera parte](gentoo-linux-mi-instalacion-personal-3.html) instalaré mis paquetes preferidos.

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/kcmpartitions.png">

### Mis particiones

En mi computadora portátil tengo un modesto disco duro de 60 GB. El archivo */etc/fstab* (de mi nueva instalación) tiene este contenido:

    #
    # /etc/fstab
    #
    # <fs>       <mountpoint>     <type>      <opts>      <dump/pass>
    /dev/sda1    /boot            ext2        noauto      1 2
    /dev/sda2    /home            ext3        defaults    0 0
    /dev/sda3    /usr/portage     reiserfs    defaults    0 0
    # La particion /dev/sda4 es EXTENDED
    /dev/sda5    none             swap        sw          0 0
    /dev/sda6    /                ext3        noatime     0 1
    /dev/sda7    /mnt/anterior    ext3        noauto      0 0
    /dev/sda8    /mnt/backup      ext3        defaults    0 0
    /dev/sda9    /mnt/archivos    ext3        defaults    0 0

* */boot* - 35 MB - Es la partición de arranque que contiene los kernels.
* */home* - 8 GB - Mis archivos (y directorios ocultos con configuraciones personales).
* */usr/portage* - 8 GB - Todo el árbol del _portage_ así como los paquetes fuentes. El hecho de tenerlo en una partición me permite compartirlo con las demás instalaciones de Gentoo Linux que tenga en el equipo.
* *swap* - 4 GB - Los datos que no quepan en la RAM pasan a esta _memoria virtual_. También se usa al suspender a disco. Lea este [artículo](http://www.cyberciti.biz/tips/linux-swap-space.html) para saber más sobre el espacio que le convenga para su _swap_.
* */ (raíz)* - 9 GB - En esta partición instalaré el *nuevo* Gentoo Linux.
* */mnt/anterior* - 9 GB - El *anterior* Gentoo Linux. Mientras no pueda arrancar en el _nuevo_ usaré éste.
* */mnt/backup* - 9 GB - Es el respaldo local de mis trabajos más importantes.
* */mnt/archivos* - Lo que resta del disco - Es la partición más grande, dedicada a los videos, la música, libros, etc. En general archivos grandes.

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/hdd_unmount.png">

### Formatear y montar la partición raiz de la nueva instalación

Comienzo por formatear la partición. Cambie *sdaX* por la partición que corresponda en su equipo (en mi caso es */dev/sda6*).

    # mkfs.ext3 /dev/sdaX

Creo el directorio para montar la partición (si ya lo tiene, omita el paso). Y la montamos.

    # mkdir /mnt/gentoo
    # mount /dev/sdaX /mnt/gentoo
    # ls /mnt/gentoo
    lost+found

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/tar.png">

### Desempacamos el stage

Siempre tengo a la mano el último _stage_. Para el *Pentium-M* uso el preparado para *i686*. Puede obtenerlo en [gentoo.osuosl.org](http://gentoo.osuosl.org/releases/x86/current/stages/). Compruebo la integridad del archivo con *md5sum*.

    $ cd /home/guivaloz/software/gentoo/
    $ md5sum -c stage3-i686-2008.0.tar.bz2.DIGESTS
    ./stage3-i686-2008.0.tar.bz2: La suma coincide

Luego lo desempaco en */mnt/gentoo/*

    # cd /mnt/gentoo/
    # tar xvjpf /home/guivaloz/software/gentoo/stage3-i686-2008.0.tar.bz2

Antes de comenzar a instalar es muy recomendable actualizar el _portage_ para que todo lo que instalemos sean versiones _nuevas_.

    # emerge --sync

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/txt.png">

### Configuraciones

Edito los principales archivos de la configuración de Gentoo Linux.

*make.conf* contiene las opciones de compilación de acuerdo a las características del equipo. Yo prefiero conservar las compilaciones de los paquetes que instalo. Esto me perite _compartirlas_ con otras instalaciones de Gentoo Linux en el mismo equipo y en otros equipos *idénticos*, siempre y cuando la configuración en *make.conf* sea igual. Para saber más de esto vea [TIP Providing binary packages](http://gentoo-wiki.com/TIP_Providing_binary_packages).

    # nano -w /mnt/gentoo/etc/make.conf

    #
    # /etc/make.conf
    #
    # Dell Inspiron 9300
    #

    # This should not be changed unless you know exactly what you are doing.  You
    # should probably be using a different stage, instead.
    CHOST="i686-pc-linux-gnu"

    # Intel(R) Pentium(R) M processor 1.73GHz
    #   CPU Family : 6
    #   Model      : 13
    CFLAGS="-O2 -march=pentium-m -pipe -fomit-frame-pointer"
    CXXFLAGS="${CFLAGS}"

    # Dos compilaciones paralelas
    MAKEOPTS="-j2"

    # Conservar compilaciones
    FEATURES="buildpkg fixpackages"
    PKGDIR=/usr/portage/packages

    # Idioma
    LINGUAS="es"

    #
    # Variable USE
    #
    USE="-kerberos mmx sse sse2"

    #
    # Servidor de paquetes
    #
    #PORTDIR=/usr/portage
    #DISTDIR=${PORTDIR}/distfiles
    #SYNC=rsync://SERVIDOR/gentoo-portage
    #FETCHCOMMAND="rsync rsync://SERVIDOR/gentoo-packages/\${FILE} ${DISTDIR}"

*locale.gen* establece los conjuntos de caracteres para la compilación de los paquetes.

    # nano -w /mnt/gentoo/etc/locale.gen

    #
    # /etc/locale.gen
    #
    # EEUU
    en_US ISO-8859-1
    en_US.UTF-8 UTF-8
    # España
    es_ES ISO-8859-1
    es_ES.UTF-8 UTF-8
    es_ES@euro ISO-8859-15
    # Mexico
    es_MX ISO-8859-1
    es_MX.UTF-8 UTF-8

*02locales* define variables de entorno con datos de nuestro lenguaje.

    # nano -w /mnt/gentoo/etc/env.d/02locales

    #
    # /etc/env.d/02locales
    #
    LANG="es_MX.utf8"
    LANGUAGE="es_MX.utf8"
    LC_ALL="es_MX.utf8"

*clock* define la zona horaria.

    # nano -w /mnt/gentoo/etc/conf.d/clock

    #
    # /etc/conf.d/clock
    #

    # Set CLOCK to "UTC" if your system clock is set to UTC (also known as
    # Greenwich Mean Time).  If your clock is set to the local time, then
    # set CLOCK to "local".  Note that if you dual boot with Windows, then
    # you should set it to "local".

    CLOCK="UTC"

    # Select the proper timezone.  For valid values, peek inside of the
    # /usr/share/zoneinfo/ directory.  For example, some common values are
    # "America/New_York" or "EST5EDT" or "Europe/Berlin".  If you want to
    # manage /etc/localtime yourself, set this to "".

    TIMEZONE="Mexico/General"

*consolefont* define la fuente y conjunto de caracteres de nuestro idioma.

    # nano -w /mnt/gentoo/etc/conf.d/consolefont

    #
    # /etc/conf.d/consolefont
    #

    # CONSOLEFONT specifies the default font that you'd like Linux to use on the
    # console.  You can find a good selection of fonts in /usr/share/consolefonts;
    # you shouldn't specify the trailing ".psf.gz", just the font name below.
    # To use the default console font, comment out the CONSOLEFONT setting below.
    # This setting is used by the /etc/init.d/consolefont script (NOTE: if you do
    # not want to use it, run "rc-update del consolefont" as root).

    CONSOLEFONT="lat9v-16"

    # CONSOLETRANSLATION is the charset map file to use.  Leave commented to use
    # the default one.  Have a look in /usr/share/consoletrans for a selection of
    # map files you can use.

    CONSOLETRANSLATION="8859-1_to_uni"

*hostname* establece el nombre del equipo. En mi caso, le llamo "inspiron".

    # nano -w /mnt/gentoo/etc/conf.d/hostname

    #
    # /etc/conf.d/hostname
    #
    HOSTNAME="inspiron"

*keymaps* tiene que ver con el teclado. El mío es latinoamericano, por lo que uso "la-latin1". Si el suyo es español, defina KEYMAP como "es".

    # nano -w /mnt/gentoo/etc/conf.d/keymaps

    #
    # /etc/conf.d/keymaps
    #

    # Use KEYMAP to specify the default console keymap.  There is a complete tree
    # of keymaps in /usr/share/keymaps to choose from.

    KEYMAP="la-latin1"

    # Should we first load the 'windowkeys' console keymap?  Most x86 users will
    # say "yes" here.  Note that non-x86 users should leave it as "no".

    SET_WINDOWKEYS="yes"

*fstab* define el montaje de las particiones del disco duro. Observe que mi root /dev/sda6 es la que estoy instalando.

    # nano -w /mnt/gentoo/etc/fstab

    #
    # /etc/fstab
    #
    # <fs>       <mountpoint>     <type>      <opts>      <dump/pass>
    /dev/sda1    /boot            ext2        noauto      1 2
    /dev/sda2    /home            ext3        defaults    0 0
    /dev/sda3    /usr/portage     reiserfs    defaults    0 0
    # La particion /dev/sda4 es EXTENDED
    /dev/sda5    none             swap        sw          0 0
    /dev/sda6    /                ext3        noatime     0 1
    /dev/sda7    /mnt/anterior    ext3        noauto      0 0
    /dev/sda8    /mnt/backup      ext3        defaults    0 0
    /dev/sda9    /mnt/archivos    ext3        defaults    0 0

*resolv.conf* es la información de la resolución de nombres. Hago una copia del sistema en uso al nuevo sistema.

    # cp /etc/resolv.conf /mnt/gentoo/etc/

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/kcmperformance.png">

### Chroot

Monto las particiones que me apoyarán a la hora de hacer el *chroot*. Cambie cada /dev/sdaX por la partición correspondiente en su equipo.

    # mkdir /mnt/gentoo/usr/portage
    # mount /dev/sdaX    /mnt/gentoo/boot
    # mount /dev/sdaX    /mnt/gentoo/usr/portage
    # mount /dev/sdaX    /mnt/gentoo/home
    # mount -t proc none /mnt/gentoo/proc
    # mount -o bind /dev /mnt/gentoo/dev

Me _mudo_ a la nueva instalación por medio del comando *chroot*.

    # chroot /mnt/gentoo /bin/bash

Ya estoy dentro del nuevo GNU/Linux. Actualizo las variables del entorno.

    # env-update
    # source /etc/profile
    # export PS1="(chroot) $PS1"

Copio el archivo del huso horario.

    # cp /usr/share/zoneinfo/Mexico/General /etc/localtime

Actualizo el _caché_ del _portage_.

    # emerge --metadata

A raíz de los cambios hechos en /etc/locale.gen hay que ejecutar el comando *locale-gen*.

    # locale-gen

Si existe una actualización del paquete *portage* conviene instalarla antes que nada.

    # emerge -u portage

De forma extraordinaria, usando el stage *stage3-i686-2008.0.tar.bz2*, hay un conflicto al actualizar el paquete *e2fsprogs*. Es necesario remover los paquetes anteriores y luego instalar los nuevos. Seguramente estó será arreglado en las futuras versiones del *stage*.

    # emerge -pu sys-fs/e2fsprogs
    # emerge -pC sys-libs/ss sys-libs/com_err sys-fs/e2fsprogs
    # emerge -C sys-libs/ss sys-libs/com_err sys-fs/e2fsprogs
    # emerge sys-fs/e2fsprogs

Si hay una nueva versión de los compiladores *gcc* y del *glibc* conviene actualizarlos de una vez.

    # emerge -u gcc glibc

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/time.png">

### ¿Convendrá _recompilar_ todo?

El *stage* nos proporciona lo necesario para que el sistema funcione. Entre más antigüo sea, más paquetes deberían actualizarse. Recuerde que he tomado el _stage_ *compatible con i686*, el cual es para toda la familia de procesadores Pentium 4 y más nuevos.

**En este punto tiene que decidir entre sólo actualizar o recompilar todo.**

Si sólo quiere que el sistema se *actualize*, revise (la opción "p") y luego actualize:

    # emerge -pvu system
    # emerge -u system

Este paso requiere *menos tiempo* que _recompilar_ todo. Pero los paquetes que *no* sean actualizados continuarán como compatibles con el *i686*.

Si quiere que *todo* lo instalado por el _stage_ *se _recompile_* con las opciones de *make.conf*, revise (la opción "p") y luego _recompile_ todo el _system_:

    # emerge -pve system
    # emerge -e system

Así tendrá todos los paquetes optimizados a su equipo. Obviamente esto requiere *más tiempo* que sólo actualizar.

Mi recomendación es que si no tiene prisa por terminar la instalación entonces *_recompile_ todo*.

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/services.png">

### Gestor de arranque grub

Instalo el gestor de arranque *grub*. Consulte [Installing GRUB](http://www.gentoo.org/doc/en/handbook/handbook-x86.xml?part=1&chap=10#doc_chap2) para más información sobre estos pasos.

    # emerge grub
    # grub
    grub> root (hd0,0)
    grub> setup (hd0)
    grub> quit

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/kdmconfig.png">

### Kernel

Para instalar la más nueva versión estable de *gentoo-sources*, ejecuto:

    # emerge -p gentoo-sources
    # emerge gentoo-sources

En cambio, si se necesita una versión específica y estable de *gentoo-sources* por ejemplo la *2.6.24-r8*, ejecuto:

    # emerge -p =gentoo-sources-2.6.24-r8
    # emerge =gentoo-sources-2.6.24-r8

Copio el [archivo de configuracion](gentoo-linux-mi-instalacion-personal-1/config-2.6.24-gentoo-r8.txt) del *kernel* de la instalación anterior, así me ahorro la ardua tarea de configurarlo. Haga esto sólo si se trata de la misma versión.

    # cp /mnt/anterior/usr/src/linux/.config /usr/src/linux/

Compilo e instalo el *kernel* y sus módulos.

    # cd /usr/src/linux
    # make
    # make modules_install
    # make install

Configuro el gestor de arranque editando el archivo *grub.conf*

    # nano -w /boot/grub/grub.conf

Revise dos veces la configuración en *grub.conf* antes de reiniciar. En el mío tengo dos instalaciones de Gentoo Linux, una en */dev/sda6* (nuevo) y la otra en */dev/sda7* (anterior). Además le paso el parámetro _resume_ con la participación _swap_ */dev/sda5*, esto es para la hibernación a disco duro.

    default 0
    timeout 5

    title Gentoo Linux - Anterior - 2.6.24-r8
    root (hd0,0)
    kernel /vmlinuz-2.6.24-gentoo-r8 root=/dev/sda7 resume=/dev/sda5

    title Gentoo Linux - NUEVO    - 2.6.24-r8
    root (hd0,0)
    kernel /vmlinuz-2.6.24-gentoo-r8 root=/dev/sda6 resume=/dev/sda5

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/kcmcgi.png">

### Paquetes necesarios antes del primer arranque

Instalo el demonio para administrar las bitácoras del sistema o _logger_. Mi elección es el *syslog-ng*.

    # emerge syslog-ng
    # rc-update syslog-ng add default

El calendarizador sirve para ejecutar programas a ciertas horas o días. Mi preferido es el *vixie-cron*.

    # emerge vixie-cron
    # rc-update vixie-cron add default

El demonio *ACPI* tiene que ver con el control del equipo y la administración de la energía.

    # emerge acpid
    # rc-update add acpid default

Las siguientes utilerías me son prácticamente indispensables.

    # emerge gentoolkit
    # emerge reiserfsprogs
    # emerge dhcpcd
    # emerge dosfstools
    # emerge pciutils
    # emerge usbutils
    # emerge sudo
    # emerge screen

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/personal.png">

### Contraseñas y primer uso

Defino la contraseña del superusuario _root_.

    # passwd

Es momento de dar de alta al usuario que uso normalmente por medio del comando *useradd*. El parámetro *-m* es para crear el directorio */home/nombre_del_usuario*. Si ese directorio ya existe, debe omitir ese parámetro. Cambie *guivaloz* por su propio _nickname_.

    # useradd -g users -G tty,wheel,audio,cdrom,video,portage,cron,usb -m guivaloz
    # passwd guivaloz

Abandono el *chroot*.

    # exit

Reinicio el equipo. Arranco con la nueva instalación y pruebo que funcione bien.

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/kcmpci.png">

### Audio, red alámbrica y red inalámbrica

Instalo las utilerías de *ALSA* para usar mi tarjeta de audio.

    # emerge alsa-utils

Debo configurar *ALSA* para mi equipo editando el archivo */etc/modules.d/alsa*

    # nano -w /etc/modules.d/alsa

El contenido de ese archivo es:

    # ALSA portion
    alias char-major-116 snd
    alias snd-card-0 snd-intel8x0

    # OSS/Free portion
    alias char-major-14 soundcore
    alias sound-slot-0 snd-card-0

    # Tarjeta de audio interna Intel
    alias sound-service-0-0 snd-mixer-oss
    alias sound-service-0-1 snd-seq-oss
    alias sound-service-0-3 snd-pcm-oss
    alias sound-service-0-8 snd-seq-oss
    alias sound-service-0-12 snd-pcm-oss

    # Alias
    alias /dev/mixer snd-mixer-oss
    alias /dev/dsp snd-pcm-oss
    alias /dev/midi snd-seq-oss

    # Set this to the correct number of cards.
    options snd cards_limit=1

Para terminar a lo que a *ALSA* se refiere; configuro que se cargue en el arranque con:

    # rc-update add alsasound boot

Para una computadora portátil conviene que la red alámbrica se levante al conectar el cable ethernet, para ello instalo *netplug*.

    # emerge netplug

También tengo una tarjeta de red inalámbrica *Intel IPW2200*.

    # emerge wireless-tools
    # emerge ipw2200-firmware

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/editcopy.png">

### Respaldo o clono lo que llevo al momento

Antes de respaldar o clonar hay que a revisar si se necesitan más actualizaciones. El siguiente comando incluye *-N* que busca paquetes por recompilar si han cambiado los parámetros de la variable *USE* que le correspondan. Como es recomendable, primero revisamos y luego actualizamos.

    # emerge -puvND world
    # emerge -uND world

Después, ejecuto el comando *python-updater* por si algunas aplicaciones necesiten ser recompiladas por una posible actualización del *phyton*.

    # python-updater

Por último, para asegurarnos que las relaciones entre los paquetes instalados no estén rotas, ejecuto *revdep-rebuild*.

    # revdep-rebuild

En este punto, mi *instalación básica* está lista. El siguiente paso que sugiero es _respaldarla_ o _clonarla_. *¿Para qué?* se preguntará... bueno, para ahorrarse el tener que repetir todo el proceso de instalación si se arrepiente de algún paso. O bien, a partir de aquí puede, por ejemplo, instalar Gnome o KDE; si tiempo más adelante ya no le gustó su instalación, puede _formatear_ esa partición y restablecer a partir del respaldo de la *instalación básica*, lo actualiza e instala un nuevo Gnome o KDE; esto le llevará menos tiempo que hacer todo este procedimiento de nuevo.

**MUY IMPORTANTE: Para respaldar o clonar un sistema operativo Gentoo Linux debe de arrancar con un Live CD o con otra instalación GNU/Linux que tenga en su equipo.** Si copia o clona una instalación que esté usando, podría fallar o quedar corrupta.

En mi caso ya tengo una instalación anterior en mi portátil, así que reinicio el equipo y arranco con ésta.

**ADVERTENCIA:** Tenga mucho cuidado con las siguientes instrucciones, en un descuido podría hechar a perder su trabajo.

**Para hacer un respaldo** (ya en la instalación anterior) monto la partición con la nueva instalación y ejecuto los comandos siguientes para crear un archivo comprimido. Observe que omito el directorio *lost+found* propio del sistema bajo el que fue _formateado_, el *ext3*. Sustituya */dev/sdaX* por la partición que corresponda.

    # mkdir /mnt/gentoo
    # mount /dev/sdaX /mnt/gentoo
    # cd /mnt/gentoo
    # tar cvzf /home/guivaloz/software/inspiron_basico_2008-11-10.tar.gz --exclude=lost+found *
    # chown guivaloz:users /home/guivaloz/software/inspiron_basico_2008-11-10.tar.gz

Opcionalmente puede conservar una copia del _portage_ correspondiente a la misma instalación que haya respaldado.

    # cd /usr/portage/
    # tar cvzf /home/guivaloz/software/inspiron_basico_portage_2008-11-10.tar.gz --exclude=distfiles --exclude=packages *
    # chown guivaloz:users /home/guivaloz/software/inspiron_basico_portage_2008-11-10.tar.gz

**Para reestablecer** a partir de un respaldo, debe ejecutar:

    # mkfs.ext3 /dev/sdaX
    # mkdir /mnt/gentoo
    # mount /dev/sdaX /mnt/gentoo
    # cd /mnt/gentoo
    # tar xvzf /home/guivaloz/software/inspiron_basico_2008-11-10.tar.gz

**Para hacer un clon (una copia idéntica en otra partición)** _formateo_ la partición a donde irá el _clon_ y monto esa y la original (la que tiene la nueva instalación). Sustituya */dev/sdaX* (nueva instalación) y */dev/sdaY* (clon) por lo que corresponda.

    # mkdir /mnt/original
    # mount /dev/sdaX /mnt/original
    # mkfs.ext3 /dev/sdaY
    # mkdir /mnt/clon
    # mount /dev/sdaY /mnt/clon

Uso el comando *tar* con una tubería, omitiendo el directorio *lost+found*. Esta técnica es bastante más rápida que el comando *cp*.

    # cd /mnt/original
    # tar cv --exclude=lost+found * | tar x -C /mnt/clon/

<img class="img-responsive" src="gentoo-linux-mi-instalacion-personal-1/configure.png">

### Cambios en el clon

Si desea arrancar con el _clon_, hay que modificar el archivo de configuración *fstab* del _clon_. Debemos cambiar la línea que defina la raiz del sistema (*/dev/sdaY*) y también la que apunta a la otra instalación (*/dev/sdaX*).

    # nano -w /mnt/clon/etc/fstab

También debe modificar la configuración del gestor de arranque *grub* para que pueda usar ambas instalaciones. Un buen truco es usar el mismo kernel para ambas (ya que son _clones_).

    # mount /boot
    # nano -w /boot/grub/grub.conf

Desmonte las particiones, reinicie y pruebe cada una de ellas.

Vea la [segunda parte de este manual](gentoo-linux-mi-instalacion-personal-2.html) para continuar con la instalación.
