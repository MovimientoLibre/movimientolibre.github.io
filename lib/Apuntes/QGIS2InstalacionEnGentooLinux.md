
[QGIS](http://www.qgis.org/es/site/index.html) es un programa para visulizar y manipular información georreferenciada. Al momento de escribir este apunte, la instalación en [Gentoo Linux](http://gentoo.org/) de QGIS lo realizaba para la versión 1.8. Como las mejoras de la última versión son significativas, procedo a redactar cómo instalar esta última.

#### Layman Sabayon

Debe instalar **Layman** para agregar más adelante otro repositorio.

    # emerge layman

Para listar los _laymans_ que se pueden descargar.

    # layman -L

Agregue el **Layman Sabayon**, que es el que contiene el **QGIS 2.0**. Esta instrucción baja el repositorio de Sabayón vía **git** que contiene 56 MB aproximadamente.

    # layman -a sabayon

Si es el primer _layman_ que agrega, entonces agregue esta línea a `/etc/portage/make.conf`

    source /var/lib/layman/make.conf

Si tiene instalado **eix**, actualize la base de datos de este consultor de software. Observe que toma información del _layman sabayon_.

    # eix-update

#### Use Python 2.7

Debe tener Python 2.7 como versión por defecto.

    # eselect python show
    python2.7

Si tiene habilitada la versión 3, cámbiela con este comando

    # eselect python set python2.7

#### Configuraciones previas a la instalación

Edite `/etc/portage/package.use`.

    # nano -w /etc/portage/package.use

Configure los _USE flags_ para las dependencias. En mi caso ha tenido que deshabilitar el soporte de algunos lenguajes para tener éxito en la compilación.

    # Desactivo estos flags para instalar PostGIS
    sci-libs/geos -php -ruby
    sci-libs/gdal -pdf -ruby -java geos

Luego edite `/etc/portage/package.keywords`

    # nano -w /etc/portage/package.keywords

Y agregue estas líneas que le permitirán instalar la última versión de QGIS.

    # QGIS
    sci-geosciences/qgis
    sci-libs/gdal

#### Instale

Verifique la versión y que los _USE flags_ sean los correctos.

    # emerge -pv qgis

Instale.

    # emerge qgis
