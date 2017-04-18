<?php
/**
 * Movimiento Libre - KDEAmarokBotonesMultimedia
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

namespace Apuntes;

/**
 * Clase KDEAmarokBotonesMultimedia
 */
class KDEAmarokBotonesMultimedia extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre, porque en PublicacionConfig se define el publisher
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Cómo configurar los botones multimedia en KDE';
        $this->fecha                      = '2007-12-20T00:25';
        // El nombre del archivo a crear
        $this->archivo                    = 'kde-amarok-botones-multimedia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Quienes usamos GNU/Linux nos vemos en la necesidad de hacer la configuración de los botones multimedia forma manual.';
        $this->claves                     = 'Gentoo Linux, Multimedia, Botones';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/KDEAmarokBotonesMultimedia.md';
        // Para el Organizador
        $this->categorias                 = array('Gentoo Linux', 'KDE');
    } // constructor

} // Clase KDEAmarokBotonesMultimedia

?>
