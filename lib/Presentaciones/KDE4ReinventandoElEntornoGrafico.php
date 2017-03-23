<?php
/**
 * Movimiento Libre - KDE 4 Reinventando el entorno gráfico
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

namespace Presentaciones;

/**
 * Clase KDE4ReinventandoElEntornoGrafico
 */
class KDE4ReinventandoElEntornoGrafico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'KDE 4 Reinventando el entorno gráfico';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2009-04-21T12:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'kde-4-reinventando-el-entorno-grafico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Presentación sobre el origen y la versión 4 del entorno gráfico KDE';
        $this->claves                     = 'Presentacion, KDE, GUI';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/KDE4ReinventandoElEntornoGrafico.md';
        // Para el Organizador
        $this->categorias                 = array('GNU Linux', 'KDE');
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
    } // constructor

} // Clase KDE4ReinventandoElEntornoGrafico

?>
