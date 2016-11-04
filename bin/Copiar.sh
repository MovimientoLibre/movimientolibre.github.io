#!/bin/bash

#
# Plataforma de Conocimiento - Copiar
#
# Copyright (C) 2016 Guillermo Valdés Lozano
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.
#

# Constantes que definen los tipos de errores
EXITO=0
E_FATAL=99

# Constantes
PLATAFORMA_DIR="$HOME/Documentos/GitHub/MovimientoLibre/movimientolibre.github.io"
#SITIO_WEB_DIR="$HOME/Documentos/GitHub/Cuenta/Desarrollo"

echo "[Copiar] Inicia"

#
# Verificar
#
if [ -z $SITIO_WEB_DIR ]; then
    echo "Error: No se ha definido SITIO_WEB_DIR, debe editar este script."
    exit $E_FATAL
fi
if [ ! -d $SITIO_WEB_DIR ]; then
    echo "Error: No se encuentra el directorio $SITIO_WEB_DIR"
    exit $E_FATAL
fi
if [ ! -d $PLATAFORMA_DIR ]; then
    echo "Error: No se encuentra el directorio $PLATAFORMA_DIR"
    exit $E_FATAL
fi

#
# Copiar
#

cd $SITIO_WEB_DIR

if [ ! -d autores ]; then
    echo "  No existe /autores, creando..."
    mkdir autores
fi

echo "  Copiando /bin..."
cp $PLATAFORMA_DIR/bin/Crear.php bin/

if [ ! -d categorias ]; then
    echo "  No existe /categorias, creando..."
    mkdir categorias
fi

if [ ! -d css ]; then
    echo "  No existe /css, creando..."
    cp -r $PLATAFORMA_DIR/css .
else
    echo "  Copiando /css..."
    cp -r $PLATAFORMA_DIR/css/* css/
fi

if [ ! -d fonts ]; then
    echo "  No existe /fonts, creando..."
    cp -r $PLATAFORMA_DIR/fonts .
else
    echo "  Copiando /fonts..."
    cp -r $PLATAFORMA_DIR/fonts/* fonts/
fi

if [ ! -d imagenes ]; then
    echo "  No existe /imagenes, creando..."
    cp -r $PLATAFORMA_DIR/imagenes .
else
    echo "  Copiando /imagenes..."
    cp -r $PLATAFORMA_DIR/imagenes/* imagenes/
fi

if [ ! -d img ]; then
    echo "  No existe /img, creando..."
    cp -r $PLATAFORMA_DIR/img .
else
    echo "  Copiando /img..."
    cp -r $PLATAFORMA_DIR/img/* img/
fi

if [ ! -d js ]; then
    echo "  No existe /js, creando..."
    cp -r $PLATAFORMA_DIR/js .
else
    echo "  Copiando /js..."
    cp -r $PLATAFORMA_DIR/js/* js/
fi

if [ ! -d less ]; then
    echo "  No existe /less, creando..."
    cp -r $PLATAFORMA_DIR/less .
else
    echo "  Copiando /less..."
    cp -r $PLATAFORMA_DIR/less/* less/
fi

if [ ! -d lib ]; then
    echo "  No existe /lib, creando..."
    mkdir lib
fi

cd $SITIO_WEB_DIR/lib

if [ ! -d Autores ]; then
    echo "  No existe /lib/Autores, creando..."
    mkdir Autores
fi

if [ ! -d Base ]; then
    echo "  No existe /lib/Base, creando..."
    cp -r $PLATAFORMA_DIR/lib/Base .
else
    echo "  Copiando /lib/Base..."
    cp $PLATAFORMA_DIR/lib/Base/* Base/
fi

if [ ! -d Michelf ]; then
    echo "  No existe /lib/Michelf, creando..."
    cp -r $PLATAFORMA_DIR/lib/Michelf .
else
    echo "  Copiando /lib/Michelf..."
    cp $PLATAFORMA_DIR/lib/Michelf/* Michelf/
fi

if [ ! -d Configuracion ]; then
    echo "  No existe /lib/Configuracion, creando..."
    cp -r $PLATAFORMA_DIR/lib/Configuracion .
fi

cd $SITIO_WEB_DIR

if [ ! -d scss ]; then
    echo "  No existe /scss..."
    cp -r $PLATAFORMA_DIR/scss .
else
    echo "  Copiando /scss..."
    cp -r $PLATAFORMA_DIR/scss/* scss/
fi

echo "[Copiar] Terminó con éxito."
exit $EXITO
