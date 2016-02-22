
<a href="gentoo-en-servidor-instalacion-2014-05/gentoo-virtualizado-en-kvm.png"><img class="img-responsive" src="gentoo-en-servidor-instalacion-2014-05/gentoo-virtualizado-en-kvm-small.jpg"></a>

Cuando hacemos una instalación de [Gentoo Linux](http://www.gentoo.org) en una PC o laptop buscamos tener entorno gráfico y muchos programas; como reproductores multimedia, navegadores de internet, herramientas de desarrollo y hasta una suite de oficina. En cambio, **para un servidor, nos enfocamos en instalar el sistema operativo base y los servicios que vaya otorgar a la red local o al internet.**

En cantidad de programas y tiempo requerido, instalar un servidor requiere menos de los dos. Pero siempre, gracias a las ventajas de Gentoo Linux, cuidaremos que su **desempeño** y **seguridad** sean de lo mejor.

En el siguiente apunte listo los pasos que tomé para instalar un **servidor web con Apache/PHP/MySQL/PostgreSQL**. No hago una explicación detallada de cada paso; simplemente enlisto los comandos para instalar.

**ADVERTENCIA**: El contenido de esta publicación es sólo un respaldo que puede servirle como base. **Algunos comandos pueden destruir la información de su disco duro**; por lo que el autor NO tiene ninguna responsabilidad en lo que resulte. Lea el manual oficial [Gentoo Handbook AMD64](http://www.gentoo.org/doc/en/handbook/handbook-amd64.xml).

## Construir el Sistema

La gran flexibilidad de Gentoo Linux nos permite hacer esta "construcción" en un subdirectorio o una partición del disco duro. En contraste, otros sistemas operativos requieren un disco duro dedicado y reiniciar la computadora para ejecutar su asistente de instalación. Dicho de otra manera; puede estar construyendo un nuevo Gentoo Linux en una terminal mientras sigue trabajando/entreteniéndose en otra ventana.

Ya teniendo particionado el disco duro y destinando **/dev/sda5** a la raíz del S.O. Formatee...

    # mkfs.ext4 -L Servidor201405 /dev/sda5
    # mkdir /mnt/gentoo
    # mount /dev/sda5 /mnt/gentoo

Previamente he bajado el _stage_ y puesto en **/mnt/tmp**. Desempaque...

    # cd /mnt/gentoo
    # tar xvjpf /mnt/tmp/stage3-amd64-20140515.tar.bz2

Monte las particiones lógicas...

    # mount -t proc none /mnt/gentoo/proc
    # mount --rbind /sys /mnt/gentoo/sys
    # mount --rbind /dev /mnt/gentoo/dev

Tengo una partición dedicada para **/usr/portage** en **/dev/sda6**, así que sólo la monto en **/mnt/gentoo/usr/portage**

    # mkdir /mnt/gentoo/usr/portage
    # mount /dev/sda6 /mnt/gentoo/usr/portage

Verifique lo montado...

    # mount | grep /mnt/gentoo

Copie **resolv.conf**

    # cp /etc/resolv.conf /mnt/gentoo/etc/

Edite **make.conf**

    # nano -w /mnt/gentoo/etc/portage/make.conf

Con este contenido...

    #
    # /etc/portage/make.conf
    #
    # Servidor Apache/PHP/PostgreSQL Gentoo Linux
    #

    #
    # Servidor 64 bits GENERICO
    #
    CFLAGS="-O2 -pipe"
    CXXFLAGS="${CFLAGS}"
    CHOST="x86_64-pc-linux-gnu"

    # Cantidad de compilaciones simultaneas
    MAKEOPTS="-j2"

    # Español como lengua
    LINGUAS="es es_MX es_AR es_ES"

    # Aceptar todas las licencias
    ACCEPT_LICENSE="*"

    #
    # USE flags
    #
    USE="mmx sse sse2"

    # Redes
    USE="${USE} apache2 fuse vhosts"

    # Base de datos
    USE="${USE} mysql postgres sqlite"

    # Desarrollo
    USE="${USE} git php python ruby"

    # Graficos
    USE="${USE} corefonts fontconfig freetype gd gnuplot graphviz imagemagick jpeg png tiff truetype"

    # Varios
    USE="${USE} latex"

    #
    # Portage, esto es para usar otra computadora en la red como proveedor del portage y los paquetes.
    # Cambie servidor.dominio.lan por el nombre o dirección IP
    #
    SERVIDOR_PORTAGE=servidor.dominio.lan
    PORTDIR="/usr/portage"
    DISTDIR="${PORTDIR}/distfiles"
    PKGDIR="${PORTDIR}/packages"
    SYNC=rsync://${SERVIDOR_PORTAGE}/gentoo-portage
    FETCHCOMMAND="rsync rsync://${SERVIDOR_PORTAGE}/gentoo-distfiles/\${FILE} ${DISTDIR}"

Configure **locale.gen**

    # nano /mnt/gentoo/etc/locale.gen

Con este contenido...

    en_US ISO-8859-1
    en_US.UTF-8 UTF-8
    es_ES ISO-8859-1
    es_ES.UTF-8 UTF-8
    es_ES@euro ISO-8859-15
    es_MX ISO-8859-1
    es_MX.UTF-8 UTF-8

Configure **02locales**

    # nano /mnt/gentoo/etc/env.d/02locales

Con este contenido...

    #
    # 02locales
    #
    LANG="es_MX.UTF-8"
    LANGUAGE="es_MX.UTF-8"
    LC_ALL="es_MX.UTF-8"

Haga el _chroot_:

    # chroot /mnt/gentoo /bin/bash
    # env-update
    # source /etc/profile
    # export PS1="(nuevo) $PS1"

Ejecute...

    # locale-gen

Salga del _chroot_ y vuelva a entrar con los comandos anteriores; así nos aseguramos que se carguen las configuraciones.

Para poder instalar paquetes que están marcados como inestables, hago uso de la reciente característica de Gentoo para desenmascarar paquetes con archivos individuales:

    # mkdir /etc/portage/package.keywords
    # echo "dev-ruby/kramdown" > /etc/portage/package.keywords/dev-ruby_kramdown
    # echo "sys-fs/ecryptfs-utils" > /etc/portage/package.keywords/sys-fs_ecryptfs-utils

También para los _USE flags_ se puede hacer lo mismo:

    # mkdir /etc/portage/package.use
    # echo "app-text/texlive extra pstricks" > /etc/portage/package.use/app-text_texlive
    # echo "net-dns/bind -berkdb -mysql -postgres" > /etc/portage/package.use/net-dns_bind

Como esta instalación es para un servidor NO cambio el profile, dejo el básico de **AMD64**:

    # eselect profile show
    Current /etc/portage/make.profile symlink:
    default/linux/amd64/13.0

Edite...

    # nano -w /etc/conf.d/keymaps
    # nano -w /etc/hosts
    # nano -w /etc/conf.d/hostname

Luego defina la zona horaria de su región...

    # cp /usr/share/zoneinfo/Mexico/General /etc/localtime

Instale el _kernel_. Es largo de explicar, así que sólo diré que debe habilitar los controladores **Virtio** que son los necesarios para **KVM**:

    # emerge gentoo-sources
    # cd /usr/src/linux
    # make menuconfig
    # make
    # make modules_install

Instale unas herramientas básicas...

    # emerge gentoolkit reiserfsprogs dhcpcd dosfstools app-misc/screen iptables pwgen pciutils

Instale estos servicios básicos...

    # emerge acpid ntp syslog-ng vixie-cron logrotate
    # rc-update add acpid default
    # rc-update add syslog-ng default
    # rc-update add vixie-cron default
    # rc-update add ntpd default

Cambie la contraseña de _root_:

    # passwd

Instale la base de datos **PostgreSQL**:

    # emerge postgresql-server

Instale **Ruby** y la gema **RedCloth** que uso para el [CMS de Movimiento Libre](http://cms.movimientolibre.com):

    # emerge ruby redcloth

Instale **MySQL**:

    # emerge mysql

Instale **Apache2**:

    # emerge apache

Instale **PHP**:

    # emerge php

Instale **LaTeX** y la gema de **Ruby** **Kramdown** que también uso en el CMS:

    # emerge texlive kramdown

Instale herramientas gráficas:

    # emerge graphviz imagemagick sci-visualization/gnuplot

Instale **Git**:

    # emerge git

Instale software para cifrado de discos:

    # emerge ecryptfs-utils cryptsetup

Al término de esta construcción, nos salimos del _chroot_ y desmontamos las particiones auxiliares, más NO la raíz.

    # exit
    # umount -l /mnt/gentoo/sys
    # umount -l /mnt/gentoo/dev
    # umount /mnt/gentoo/proc
    # umount /mnt/gentoo/usr/portage

## Preparar la virtualización KVM

Haciendo una analogía a [Frankestein](https://es.wikipedia.org/wiki/Frankenstein_o_el_moderno_Prometeo), ya tenemos listo el _cerebro_ ahora vamos a preparar un _cuerpo_: Usando [KVM](http://www.linux-kvm.org/page/Main_Page) cree una nueva virtualización con un disco duro virtual de 24,576 MB (o sea, 24 GB) y arranque con el ISO de Gentoo.

Particione a su gusto con:

    # fdisk /dev/vda

Formatee la partición que va ser la raíz, en mi ejemplo es la **/dev/vda6**

    # mkfs.ext4 -L Gentoo /dev/vda6

Monte la raíz:

    # mount /dev/vda6 /mnt/gentoo

Cambie la contraseña root e inicie el _daemon_ OpenSSH...

    # passwd
    # /etc/init.d/sshd start

## Copiar todo a la virtualización

Estos comandos los ejecuto en mi Gentoo Linux que tengo de base.

En mi caso tengo KVM con un bridge con red **172.16.71.0/24** y he configurado una dirección IP en la virtualización con **172.16.71.11**. Copie TODO a una sola partición de destino con un comando como éste:

    # cd /mnt/gentoo
    # tar -cvf - . | ssh root@172.16.71.11 tar -C /mnt/gentoo/ -xf -

## O tener directorios en otras particiones de la virtualización

Se vale omitir uno o más directorios para después montar otra partición en la virtualización. Por ejemplo, para mantener **/var** en otra partición, primero copiaría TODO menos **/var** con:

    # tar -cvf - --exclude=/var . | ssh root@172.16.71.11 tar -C /mnt/gentoo/ -xf -

Luego, en la virtualización ejecuto estos comandos, en mi ejemplo **/var** será **/dev/vda7**

    # mkfs.ext4 -L Var /dev/vda7
    # mkdir /var
    # mount /dev/vda7 /var

Regreso al sistema Gentoo Linux base y mando copia del directorio **/var** y su contenido

    # cd /mnt/gentoo/var
    # tar -cvf - . | ssh root@172.16.71.11 tar -C /mnt/gentoo/var/ -xf -

## De regreso a la virtualización

Monte...

    # mount -t proc none /mnt/gentoo/proc
    # mount -o bind /dev /mnt/gentoo/dev
    # mount -o bind /sys /mnt/gentoo/sys

_Formatee_ las otras particiones...

    # mkfs.ext2 -L Boot /dev/vda1
    # mkfs.ext4 -L Home /dev/vda2
    # mkfs.ext4 -L Portage /dev/vda3

Monte...

    # mount /dev/vda1 /mnt/gentoo/boot
    # mount /dev/vda3 /mnt/gentoo/usr/portage
    # mkswap /dev/vda5
    # swapon /dev/vda5

Sincronize el _portage_, en mi caso tengo un equipo con _rsyncd_ andando...

    # cd /mnt/gentoo/usr/portage
    # rsync -av rsync://servidorlocal/gentoo-portage/* .

Haga el _chroot_...

    # cp /etc/resolv.conf /mnt/gentoo/etc/
    # chroot /mnt/gentoo /bin/bash
    # source /etc/profile
    # export PS1="(nuevo) $PS1"

Edite **fstab**

    # nano -w /etc/fstab

Esta es una sugerencia de su contenido, va de acuerdo a como haya particionado...

    # <fs>       <mountpoint>    <type>    <opts>            <dump/pass>
    /dev/vda1    /boot           ext2      noauto,noatime    1 2
    /dev/vda2    /home           ext4      defaults          0 1
    /dev/vda3    /usr/portage    ext4      defaults          0 0
    #####  EXTENDED  #####
    /dev/vda5    none            swap      sw                0 0
    /dev/vda6    /               ext4      defaults          0 1
    /dev/vda7    /var            ext4      noatime           0 0

Instale el _kernel_...

    # cd /usr/src/linux
    # make install

Instale **GRUB**:

    # emerge -pv grub
    # emerge grub
    # grub2-install /dev/vda

Configure **GRUB**:

    # cd /etc/default
    # nano grub
    # cd /etc/grub.d
    # nano 40_custom

En **40_custom** escriba la ruta correcta al kernel que haya instalado...

    #!/bin/sh
    exec tail -n +3 $0
    # This file provides an easy way to add custom menu entries.  Simply type the
    # menu entries you want to add after this comment.  Be careful not to change
    # the 'exec tail' line above.

    #
    # Gentoo Linux
    #
    menuentry 'Gentoo Linux 2014-05-26 vda6 kernel 3.12.13' {
        linux /vmlinuz-3.12.13-gentoo root=/dev/vda6 resume=/dev/vda5
    }

Luego, pida a **GRUB** que haga la configuración...

    # grub2-mkconfig -o /boot/grub/grub.cfg

Programe que el _daemon_ **OpenSSH** se inicie al encender...

    # /etc/init.d/sshd start
    # rc-update add sshd default

Ponga la contraseña de _root_...

    # passwd

Desmonte las particiones...

    # umount /mnt/gentoo/boot
    # umount /mnt/gentoo/usr/portage
    # umount /mnt/gentoo/var
    # umount -l /mnt/gentoo/sys
    # umount -l /mnt/gentoo/dev
    # umount /mnt/gentoo/proc
    # umount /mnt/gentoo

Apague y pruebe...

    # halt

## Consola Serial

Usar una consola serial libera al virtualizador de tener simpre andando una interfaz gráfica para el huésped.

Respalde y edite **inittab**...

    # cd /etc
    # cp inittab inittab.backup
    # nano inittab

Cambie estas líneas...

    # SERIAL CONSOLES
    s0:12345:respawn:/sbin/agetty -L -f /etc/issue.logo 9600 ttyS0 vt100
    s1:12345:respawn:/sbin/agetty -L -f /etc/issue.logo 38400 ttyS1 vt100

Modifique **GRUB**...

    # cd /etc/default/
    # nano grub

Haga que estas líneas tengan esto...

    # Append parameters to the linux kernel command line
    GRUB_CMDLINE_LINUX="console=ttyS1,38400"

    # Append parameters to the linux kernel command line for non-recovery entries
    #GRUB_CMDLINE_LINUX_DEFAULT=""

    # Uncomment to disable graphical terminal (grub-pc only)
    GRUB_TERMINAL=console

También cambie configuración del **GRUB** para la carga del kernel...

    # cd ../grub.d
    # nano 40_custom

Agregue **console=ttyS1,38400** al final de la instrucción...

    #
    # Gentoo Linux
    #
    menuentry 'Gentoo Linux 2014-05-26 vda6 kernel 3.12.13' {
            linux /vmlinuz-3.12.13-gentoo root=/dev/vda6 resume=/dev/vda5 console=ttyS1,38400
    }

Apague la máquina virtual. En la configuración de la virtualización retire el monitor, el ratón, el dispositivo _spice_ si lo hubiera y arranque de nuevo.
