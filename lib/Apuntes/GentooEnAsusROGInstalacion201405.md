
[Gentoo Linux](http://www.gentoo.org) es una distribución de GNU/Linux que permite una configuración _al extremo_; demanda y nos enseña muchas de las cosas que suceden en el fondo, _en las entrañas_ de un Sistema Operativo; pero también **es muy cambiante**: los apuntes que haya hecho hace meses habrán tenido cambios al día de hoy.

Por esta razón, durante mi última instalación no dejé de tomar notas de esta instalación de un **sistema completo**. Logro con ésto tener dos entornos gráficos: XFCE4 y KDE, servidor MySQL/PostgreSQL/Apache/PHP y mucho más.

**ADVERTENCIA**: El contenido de esta publicación es sólo un respaldo que puede servirle como base. **Algunos comandos pueden destruir la información de su disco duro**; por lo que el autor NO tiene ninguna responsabilidad en lo que usted ejecute. Lea el manual oficial [Gentoo Handbook AMD64](http://www.gentoo.org/doc/en/handbook/handbook-amd64.xml).

Además, en este apunte no pongo los parámetros **pv** en cada **emerge**. Aunque no lo haya escrito, siempre revise las dependencias y los **USE flags** de cada instalación.

Formatee...

    # mkfs.ext4 -LHDGentoo201405 /dev/sda4
    # mount /dev/sda4 /mnt/gentoo

Sincronize el _portage_:

    # emerge --sync

Descarge el _stage_ de **64 bits** más reciente. Compruebe la integridad del archivo...

    $ sha512sum stage3-amd64-20140515.tar.bz2
    $ cat stage3-amd64-20140515.tar.bz2.DIGETS

Desempaque el _stage_...

    # cd /mnt/servidor
    # tar xvjpf /mnt/blackbox/Compartidos/Software/Gentoo/amd64/stage3-amd64-20140515.tar.bz2

Monte las particiones...

    # mount -t proc none /mnt/gentoo/proc
    # mount --rbind /sys /mnt/gentoo/sys
    # mount --rbind /dev /mnt/gentoo/dev
    # mkdir /mnt/gentoo/usr/portage
    # mount /dev/sda6 /mnt/gentoo/usr/portage

Verifique lo montado...

    # mount | grep /mnt/gentoo
    /dev/sda4 on /mnt/gentoo type ext4 (rw)
    none on /mnt/gentoo/proc type proc (rw)
    /sys on /mnt/gentoo/sys type none (rw,bind,rbind)
    /dev on /mnt/gentoo/dev type none (rw,bind,rbind)
    /dev/sda6 on /mnt/gentoo/usr/portage type ext4 (rw)

Copie resolv.conf

    # cp /etc/resolv.conf /mnt/gentoo/etc/

Haga el chroot

    # chroot /mnt/gentoo /bin/bash
    # env-update
    # source /etc/profile
    # export PS1="(nuevo) $PS1"

Configure 02locales

    # nano /etc/env.d/02locales

Con este contenido...

    #
    # 02locales
    #
    LANG="es_MX.UTF-8"
    LANGUAGE="es_MX.UTF-8"
    LC_ALL="es_MX.UTF-8"

Configure locale.gen

    # nano /etc/locale.gen

Con este contenido...

    en_US ISO-8859-1
    en_US.UTF-8 UTF-8
    es_ES ISO-8859-1
    es_ES.UTF-8 UTF-8
    es_ES@euro ISO-8859-15
    es_MX ISO-8859-1
    es_MX.UTF-8 UTF-8

Ejecute...

    # locale-gen

Edite make.conf

    # nano -w /etc/portage/make.conf

Si su procesador es genérico de 64 bits

    #
    # /etc/portage/make.conf
    #
    # MINOS Gentoo Linux 64 bits GENERICO
    #

    #
    # 64 bits GENERICO
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
    USE="acpi mmx sse sse2 sse3 ssse3"

    #
    # GRUB 2
    #
    GRUB_PLATFORMS="efi-64"

    #
    # Portage
    #
    PORTDIR="/usr/portage"
    DISTDIR="${PORTDIR}/distfiles"
    PKGDIR="${PORTDIR}/packages"

En cambio, para un **Intel i7 Ivy Bridge** de 4 núcleos ajuste estas líneas...

    #
    # 64 bits Intel Core i3/i5/i7 Ivy Bridge - GCC 4.7 o mayor
    #
    CHOST="x86_64-pc-linux-gnu"
    CFLAGS="-march=core-avx-i -O2 -pipe"
    CXXFLAGS="${CFLAGS}"

    # Cantidad de compilaciones simultaneas
    MAKEOPTS="-j8"

Revise si necesita actualizaciones...

    # emerge -pu portage
    # emerge -u portage
    # emerge -pu world
    # emerge -u world

Desempaque el kernel...

    # emerge -pv gentoo-sources
    # emerge gentoo-sources

Configure y compile el kernel...

    # cd /usr/src/linux
    # make defconfig
    # make menuconfig
    # make
    # make modules_install

Otras configuraciones

    # nano /etc/conf.d/keymaps
    # nano /etc/conf.d/hostname
    # nano /etc/hosts
    # cp /usr/share/zoneinfo/Mexico/General /etc/localtime

Instale herramientas básicas

    # emerge gentoolkit reiserfsprogs dhcpcd dosfstools app-misc/screen iptables pwgen btrfs-progs

Instale estos servicios básicos

    # emerge acpid ntp syslog-ng vixie-cron
    # rc-update add acpid default
    # rc-update add syslog-ng default
    # rc-update add vixie-cron default

Instale PCI utils y ALSA

    # emerge pciutils alsa-utils
    # rc-update add alsasound boot

Cambie la contraseña de root

    # passwd

Cambie el profile

    # eselect profile list
    # eselect profile set default/linux/amd64/13.0/desktop/kde
    # eselect profile show

En este punto hay que mejorar make.conf

    # nano -w /etc/portage/make.conf

Y agregue más USE flags y lo referente a X.org

    #
    # USE flags
    #
    USE="acpi laptop mmx sse sse2 sse3 ssse3 wifi"

    # Redes
    USE="${USE} apache2 bittorrent bluetooth cups fuse samba tftp vhosts"

    # Particiones
    USE="${USE} fat ntfs reiserfs"

    # Base de datos
    USE="${USE} mysql postgres sqlite"

    # Desarrollo (más adelante agregaré java)
    USE="${USE} git php python ruby"

    # Graficos
    USE="${USE} corefonts gd graphviz fontconfig freetype imagemagick"

    # KDE
    USE="${USE} -gnome kde kdepim qalculate qt4 thumbnail xscreensaver"

    # Sonido
    USE="${USE} a52 aac aften amr cdda cddb cdio cdparanoia dts faac flac"
    USE="${USE} lame live lua gstreamer ogg oggvorbis speex theora"

    # Video
    USE="${USE} bidi bluray dv dvb dvd ffmpeg httpd matroska mad mjpeg mpeg mplayer"
    USE="${USE} rtmp stream subtitles svga v4l vaapi vcd vdpau vlm vpx wxwindows xine xv xvmc"

    # Varios (más adelante agregaré latex)
    USE="${USE} chm joystick nsplugin R rar wiimote"

    #
    # X.org
    #
    INPUT_DEVICES="keyboard mouse joystick evdev synaptics wacom"
    VIDEO_CARDS="nouveau vesa"

Cambie a Python 2.7, porque muchos programas piden que por defecto esté esta versión.

    # eselect python show
    python3.3
    # eselect python list
    Available Python interpreters:
    [1]   python2.7
    [2]   python3.3 *
    # eselect python set python2.7

Instale la base de datos: PostgreSQL

    # emerge postgresql-server

Instale Ruby y mis gemas preferidas

    # emerge ruby kramdown redcloth

Instale X.org, Samba, CUPS, GTK+ y MySQL

    # emerge xorg-x11 samba cups gtk+ mysql

Configure X.org

    # mkdir /etc/X11/xorg.conf.d
    # nano /etc/X11/xorg.conf.d/12-keymap.conf
    # nano /etc/X11/xorg.conf.d/50-synaptics.conf
    # rc-update add dbus default

Instale utilerías de redes...

    # emerge app-admin/sudo bind-tools traceroute bridge-utils

Instale FFMpeg

    # emerge ffmpeg

Instale Apache2

    # emerge apache

Instale PHP

    # emerge php

Instale

    # emerge graphviz imagemagick app-crypt/gnupg

Instale KDE-Base

    # emerge kdebase-meta
    # rc-update add consolekit default
    # rc-update add xdm default

Instale tipografías

    # emerge corefonts droid freefonts libertine-ttf terminus-font ttf-bitstream-vera

Instale herremientas para redes

    # emerge wpa_supplicant ppp rfkill

Instale complementos de KDE

    # emerge kdeplasma-addons kdemultimedia-meta kdegraphics-meta kdeadmin-meta kdeutils-meta kdeartwork-meta kdenetwork-meta kdewebdev-meta
    # emerge kdepim-meta
    # emerge kate

Instale geany y GIT

    # emerge geany geany-plugins geany-themes
    # emerge dev-vcs/git

Actualización general

    # emerge -puND world
    # emerge -uND world

Instale multimedia

    # emerge mplayer
    # emerge moc
    # emerge clementine

Instale extras de GTK+ para KDE

    # emerge gtk-engines-qtpixmap gtk-engines-qtcurve gtk-chtheme
    # emerge gnome-themes
    # emerge gnome-icon-theme tango-icon-theme faenza-icon-theme oxygen-gtk

Instale firmware

    # emerge linux-firmware

Instale LaTeX y R

    # emerge R
    # emerge texlive

Instale herramientas para analizar redes

    # emerge nmap kismet wireshark

Instale software de virtualización

    # emerge libvirt virt-manager

Me gusta tener mi Proxy personal con Squid

    # emerge squid

Instale la suite educativa y juegos

    # emerge kdeedu-meta
    # emerge kdegames-meta
    # emerge krusader

Instale programas de internet

    # emerge firefox
    # emerge thunderbird
    # emerge ktorrent
    # emerge konversation
    # emerge rssquite
    # emerge vidalia

Instale el reproductor multimedia vlc

    # emerge vlc
    # emerge audacity
    # emerge avidemux

Instale software gráfico

    # emerge gimp inkscape
    # emerge digikam k3b

Instale software que usa LaTeX

    # emerge lyx kile

Habilite java (en los USE flags) e instale LibreOffice

    # emerge libreoffice
    # emerge -puND world
    # emerge -uND world

Instale Google Chrome

    # emerge google-chrome

Instale XFCE4

    # emerge xfce4-meta
    # emerge xfce4-battery-plugin xfce4-cpugraph-plugin xfce4-mixer xfce4-power-manager xfce4-screenshooter xfce4-systemload-plugin xfce4-taskmanager
    # emerge xfce4-terminal tumbler thunar-archive-plugin thunar-media-tags-plugin

Instale VirtualBox

    # emerge virtualbox

Instale el agente OpenSSH

    # emerge ksshaskpass

Y configure editando los archivos...

    # nano /etc/kde/startup/agent-startup.sh
    # nano /etc/kde/shutdown/agent-shutdown.sh

Agregue su usuario

    # useradd -g users -G tty,wheel,lp,video,audio,cdrom,cdrw,usb,uucp,cron -m usuario
    # passwd usuario

¿Quiere copiar TODO el S.O. a otra partición? Por ejemplo, a una ya montada en /mnt/ssdgentoo

    # cd /mnt/gentoo
    # tar cf - --exclude=lost+found * | ( cd /mnt/ssdgentoo/; tar xfp -)

Reinicie y pruebe.
