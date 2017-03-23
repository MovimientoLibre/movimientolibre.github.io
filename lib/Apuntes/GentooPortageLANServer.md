
### En el servidor local

Edite /etc/rsync.conf:

    # nano /etc/rsync.conf

Modifique el contenido de acuerdo a sus necesidades:

    # This line is required by the /etc/init.d/rsyncd script
    pid file = /var/run/rsyncd.pid
    max connections = 5
    use chroot = yes
    read only = yes
    uid = nobody
    gid = nobody

    # Si hay pocos equipos con Gentoo Linux
    # puede configurar el daemon para
    # limitar las comunicaciones con direcciones IP
    #hosts allow = 192.168.0.11 192.168.0.12 192.168.0.13
    #hosts deny  = *

    [gentoo-portage]
    path = /usr/portage
    comment = Gentoo Portage tree
    exclude = /distfiles /packages

    [gentoo-distfiles]
    path = /usr/portage/distfiles
    comment = Gentoo Portage distfiles

Arranque el _daemon_:

    # /etc/init.d/rsyncd start

Y configure que se inicie **rsyncd** al encender el equipo:

    # rc-update add rsyncd default

### En los clientes

En /etc/portage/make.conf

    # nano /etc/portage/make.conf

Defina el servidor local como fuente de los paquetes. Cambie _portage.redlocal.lan_ por el nombre o dirección IP del servidor con el portage:

    PORTDIR="/usr/portage"
    DISTDIR="${PORTDIR}/distfiles"
    PKGDIR="${PORTDIR}/packages"
    FETCHCOMMAND="rsync rsync://portage.redlocal.lan/gentoo-distfiles/\${FILE} \${DISTDIR}"

Cree el directorio **repos.conf**:

    # mkdir /etc/portage/repos.conf
    # cd /etc/portage/repos.conf/

Y cree el archivo **gentoo.conf**:

    # nano gentoo.conf

Con este contenido, definiendo al servidor local de portage (no olvide cambiar _portage.redlocal.lan_):

    [DEFAULT]
    main-repo = gentoo

    [gentoo]
    location = /usr/portage
    sync-type = rsync
    sync-uri = rsync://portage.redlocal.lan/gentoo-portage
    auto-sync = yes

Verifique que su muro de fuego para que el **puerto 873** esté abierto, tanto en el servidor como en los clientes.

Pruebe que funcione en un cliente con el comando:

    # emerge --sync
