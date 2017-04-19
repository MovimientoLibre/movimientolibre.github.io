<?php
/**
 * Movimiento Libre - Imprenta
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package MovimientoLibre
 */

namespace Presentaciones;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene las clases con las publicaciones
        $this->publicaciones_directorio = 'Presentaciones';
        // Los siguientes parámetros dan datos para el índice/galería que será creado
        $this->titulo                   = 'Presentaciones';
        $this->descripcion              = 'Presentaciones hechas por Guillermo Valdés Lozano.';
        $this->claves                   = 'Presentaciones';
        // Opción de Navegación a poner activa
        $this->nombre_menu              = 'Presentaciones';
        // Clase para hacer el index.html
        $this->indices_paginas          = '\\Base\\PaginasTarjetas';
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio               = 'presentaciones';
        // Nivel es el orden de la rama para las páginas por categorías
        $this->nivel                    = 1000;
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>
