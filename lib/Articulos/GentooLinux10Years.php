<?php
/**
 * Movimiento Libre - GentooLinux10Years
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

namespace Articulos;

/**
 * Clase GentooLinux10Years
 */
class GentooLinux10Years extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Gentoo Linux... ¡10 años compilando!';
        $this->fecha                      = '2009-10-06T22:00';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'gentoo-linux-10-years';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El 5 de octubre de 2009 se celebró el décimo aniversario de la distribución Gentoo Linux con la liberación de un LiveDVD conmemorativo. Hace diez años, el proyecto Enoch fue renombrado como Gentoo y el nombre de dominio gentoo.org fue registrado.';
        $this->claves                     = 'Gentoo Linux';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/GentooLinux10Years.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux');
    } // constructor

} // Clase GentooLinux10Years

?>
