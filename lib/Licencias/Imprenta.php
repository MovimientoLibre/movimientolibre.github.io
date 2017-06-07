<?php
/**
 * Movimiento Libre - Imprenta
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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

namespace Licencias;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio  = 'Licencias';
        // Los siguientes parámetros dan datos para el concentrador y las páginas que no los tienen
        $this->titulo                    = 'Licencias';
        $this->descripcion               = 'Algunas licencias de software libre y abierto.';
        $this->claves                    = 'Licencias, Software, Libre, Abierto';
        // Parámetros que el Recolector definirá en las Publicaciones si éstas no los tienen
        $this->aparece_en_pagina_inicial = FALSE;
        $this->imagen                    = '../imagenes/imagen.jpg';
        $this->imagen_previa             = '../imagenes/imagen-previa.jpg';
        $this->nombre_menu               = 'Licencias';
        $this->poner_imagen_en_contenido = FALSE;
        // Clase para hacer el index.html
        $this->indices_paginas           = '\\Base\\PaginasListado';
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio                = 'licencias';
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>
