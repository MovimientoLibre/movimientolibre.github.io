<?php
/**
 * Movimiento Libre - Mozilla Firefox | Dejar de preguntar por plugin Adobe Flash
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
 * Clase MozillaFirefoxDejarPreguntarPluginFaltante
 */
class MozillaFirefoxDejarPreguntarPluginFaltante extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre, porque en PublicacionConfig se define el publisher
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Mozilla Firefox | Dejar de preguntar por plugin Adobe Flash';
        $this->fecha                      = '2014-02-03T19:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'mozilla-firefox-dejar-preguntar-plugin-faltante';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Quienes hemos optado por no instalar el Adobe Flash nos encontramos ante la situación de que Mozilla Firefox nos pregunte si lo queremos instalar al entrar a cada sitio web que lo use.';
        $this->claves                     = 'Mozilla, Firefox, Adobe Flash';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/MozillaFirefoxDejarPreguntarPluginFaltante.md';
        // Para el Organizador
        $this->categorias                 = array('Software Libre');
    } // constructor

} // Clase MozillaFirefoxDejarPreguntarPluginFaltante

?>
