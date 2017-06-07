<?php
/**
 * Movimiento Libre - Venezuela impulsa el software libre
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
 * Clase VenezuelaImpulsaElSoftwareLibre
 */
class VenezuelaImpulsaElSoftwareLibre extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Venezuela impulsa el software libre';
        $this->fecha                      = '2008-01-01T21:20';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'venezuela-impulsa-el-software-libre';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El movimiento del software libre no sólo se trata de programas para computadoras; traspasa a los ámbitos culturales, sociales y políticos. Vemos en varios países de europa y algunos en latinoamérica iniciativas concretas a nivel gubernamental por usar y promover el software libre.';
        $this->claves                     = 'Software Libre, Venezuela';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/VenezuelaImpulsaElSoftwareLibre.md';
        // Para el Organizador
        $this->categorias                 = array('Política');
    } // constructor

} // Clase VenezuelaImpulsaElSoftwareLibre

?>
