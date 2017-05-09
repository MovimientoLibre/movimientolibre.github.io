
Esta guía parte de un equipo previamente particionado y con una instalación de Gentoo Linux. Aprovechamos que desde una terminal y con el usuario root se puede hacer una nueva instalación, mientras seguimos trabajando en la anterior.

### Preparar la partición

Formatee la partición, cambie /dev/sdXX por la partición

    # mkfs.btrfs -f -L Gentoo201701 /dev/sdXX
    # mount /mnt/gentoo

### Descarge el stage

Y descomprima

    # cd /mnt/gentoo
    # tar xvjpf /mnt/blackbox/Compartidos/Software/Gentoo/stage3-amd64-20170105.tar.bz2

Monte

    # mount -t proc none /mnt/gentoo/proc
    # mount --rbind /dev /mnt/gentoo/dev
    # mount --rbind /sys /mnt/gentoo/sys
    # mkdir /mnt/gentoo/usr/portage
    # mount --rbind /usr/portage /mnt/gentoo/usr/portage

De una vez copie make.conf

    # cp /etc/locale.gen /mnt/gentoo/etc/locale.gen
    # cp /etc/portage/make.conf /mnt/gentoo/etc/portage/make.conf
    # cp /etc/env.d/02locales /mnt/gentoo/etc/env.d/02locales
    # nano /mnt/gentoo/etc/portage/make.conf

Copie los datos de los DNS

    # cp /etc/resolv.conf /mnt/gentoo/etc/

### Ingrese al nuevo Gentoo Linux

Haga el _chroot_

    # chroot /mnt/gentoo /bin/bash
    # env-update
    # source /etc/profile
    # export PS1="(new) $PS1"

Configure locale-gen

    # locale-gen

Verifique y actualice portage

    # emerge -pu portage gcc

Instale el kernel

    # emerge gentoo-sources
    # cd /usr/src/linux
    # make -j4
    # make modules_install
    # make install

Establezca la zona horaria.

    # cd /etc
    # cp /usr/share/zoneinfo/Mexico/General localtime

Otras configuraciones

    # nano /etc/conf.d/keymaps
    # nano /etc/conf.d/hostname
    # nano /etc/hosts
    # nano /etc/fstab

### Con KDE Plasma como interfaz gráfica

Cambie el profile a Plasma

    # eselect profile show
    # eselect profile list
    # eselect profile set default/linux/amd64/13.0/desktop/plasma
    # eselect profile show

Instale...

    # emerge gentoolkit reiserfsprogs dhcpcd dosfstools app-misc/screen pwgen

Instale daemons

    # emerge ntp syslog-ng vixie-cron
    # rc-update add syslog-ng default
    # rc-update add vixie-cron default
    # rc-update add ntpd default

Instale utilerías del sistema y de sonido

    # emerge pciutils alsa-utils
    # rc-update add alsasound boot

### A instalar software

Instale PostgreSQL

    # emerge postgresql

Instale Apache

    # emerge apache

Instale Ruby

    # emerge ruby nokogiri redcloth dev-ruby/mechanize

Instale utilerías de red y sistemas de archivos

    # emerge app-admin/sudo bind-tools traceroute bridge-utils sys-fs/fuse sys-fs/ntfs3g

Instale KDE plasma-desktop, éste pone el entorno básico (es decir, NO instala "todo el combo") para luego ir instalando las aplicaciones a nuestro criterio. Revise dependencias y USE flags..

    # emerge --ask plasma-desktop samba cups xorg-x11

Instale LibreOffice

    # emerge virtual/jdk
    # emerge libreoffice

    # emerge firefox
    # emerge gimp
    # emerge texlive
    # emerge audacity

Instale PHP

    # emerge php

    # emerge networkmanager

Luego KDE Core

    # emerge kdecore-meta

Actualice todo lo demás

    # emerge -uND world

Instale Geany

    # emerge geany geany-themes geany-plugins
    # emerge droid freefonts libertine terminus-font ttf-bitstream-vera corefonts

Y de consola...

    # emerge xterm media-sound/moc nmap whois macchanger aircrack-ng

En lugar de kdegraphics-meta

    # emerge spectacle kde-apps/kate okular gwenview

En lugar de kdemultimedia-meta

    # emerge kdenlive kmix mplayer

Instale el GDM ssdm

    # emerge sddm grub gparted
    # sddm --example-config > /etc/sddm.conf
    # nano -w /etc/sddm.conf
    # rc-update add xdm default

Configure /etc/conf.d/xdm con DISPLAYMANAGER="sddm"

    # nano /etc/conf.d/modules
    # nano /etc/conf.d/xdm
    # nano /etc/ntp.conf

Configure...

    # nano /etc/plasma/startup/10-agent-startup.sh
    # nano /etc/plasma/shutdown/10-agent-shutdown.sh

Utilerías de KDE

    # emerge kcalc umbrello
    # emerge kile
    # emerge konqueror
    # emerge kde-plasma/kdeplasma-addons
    # emerge unarj arj lha lzop rar unrar kde-apps/ark

KDE para una laptop con bluetooth, powerdevil más systemsettings y otras del sistema

    # emerge -pv plasma-meta

Siga instalando...

    # emerge gparted
    # emerge gimp inkscape
    # emerge libvirt virt-manager
    # emerge gvim vim
    # emerge audacity
    # emerge k3b vorbis-tools

XFCE4

    # emerge xfce4-meta xfce4-notifyd gtk-engines

Instale componentes de XFCE

    # emerge xfce4-volumed xfce4-mixer xfce4-terminal xfce4-taskmanager xfce4-screenshooter
    # emerge xfce4-cpugraph-plugin xfce4-verve-plugin xfce4-mount-plugin xfce4-sensors-plugin xfce4-systemload-plugin

Soporte multimedia y de archivos empacados para Thunar

    # emerge tumbler
    # emerge thunar-volman thunar-archive-plugin thunar-media-tags-plugin

Instale iconos

    # emerge gtk-chtheme tango-icon-theme faenza-icon-theme tangerine-icon-theme

Configure arranque de servicios...

    # rc-update add dbus default
    # rc-update add udev default
    # rc-update add ntpd default
    # rc-update add cupsd default

Zona horaria

    # cp /usr/share/zoneinfo/Mexico/General /etc/localtime

Contraseña

    # passwd

Más utilerías

    # emerge tilda mousepad xfwm4-themes xfce4-whiskermenu-plugin alacarte xfce4-clipman-plugin
    # emerge pcmanfm gftp

Instale más software

    # emerge tor privoxy arm
    # emerge htop net-fs/sshfs
    # emerge dia

Kramdawn es inestable, libere dependencias

    # emerge kramdown

Librerías que uso en Python

    # emerge tabulate psycopg

Software necesario para compilar QGIS desde fuentes

    # emerge sci-geosciences/gpsbabel x11-libs/qwtpolar x11-libs/qscintilla dev-db/spatialite dev-python/PyQt4 sci-libs/libspatialindex dev-python/sip dev-python/jinja dev-python/httplib2 dev-python/pytz dev-python/qscintilla-python dev-libs/qjson sci-geosciences/gpsbabel dev-python/python-dateutil
    # emerge -uN sci-libs/gdal

Instale R 3.2.2 y R studio

    # emerge rstudio R

Y...

    # emerge ccache
    # emerge sys-process/at
    # emerge xarchiver
    # emerge app-admin/testdisk

### Configurar el gestor de arranque GRUB 2

Edite...

    # nano -w /etc/default/grub

Edite estas líneas, cambie la identificación de la partición swap...

    GRUB_TIMEOUT=30
    GRUB_CMDLINE_LINUX="resume=UUID=xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx kvm-intel.nested=1"
    GRUB_GFXMODE=1920x1080
    GRUB_GFXPAYLOAD_LINUX=keep

No deje de tener opciones manuales en...

    # nano -w /etc/grub.d/40_custom

Formatee la partición de 64 MB code EF00 /dev/sdb1

    # mkfs.vfat -n EFIBOOT /dev/sdb1

Copie la clave UUID de /dev/sdb1

    # blkid

Y cambie la clave UUID en...

    # nano -w /etc/fstab
    # nano -w /etc/grub.d/40_custom

Con ésto, puede montarla...

    # mount /boot/efi

Así montada, instale GRUB2...

    # grub-install --efi-directory=/boot/efi
    Instalando para plataforma x86_64-efi.
    Instalación terminada. No se notificó ningún error.

Y habilite la configuración...

    # grub-mkconfig -o /boot/grub/grub.cfg
    Generando un fichero de configuración de grub...
    Encontrada imagen de linux: /boot/vmlinuz-4.4.39-gentoo
    hecho

Fin.
