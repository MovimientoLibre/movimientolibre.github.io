<?php
/**
 * Movimiento Libre - PlataformasDeConocimientos
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * Clase PlataformasDeConocimientos
 */
class PlataformasDeConocimientos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Plataformas de Conocimientos';
    //~ $this->autor                      = 'guivaloz';
        $this->fecha                      = '2017-07-08T01:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'plataformas-de-conocimientos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Cómo funciona la Plataforma del Conocimiento que construye el sitio web del IMPLAN Torreón; reconocido nacionalmente.';
        $this->claves                     = 'Sitios Web, Desarrollo, Plataformas, Conocimiento, Gobierno, IMPLAN Torreon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/PlataformasDeConocimientos.md';
        // Para el Organizador
        $this->categorias                 = array('PHP', 'Markdown', 'Política');
    } // constructor

} // Clase PlataformasDeConocimientos

?>
