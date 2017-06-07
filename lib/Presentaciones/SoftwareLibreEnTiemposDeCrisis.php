<?php
/**
 * Movimiento Libre - Software Libre en tiempos de crisis
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
 * Clase SoftwareLibreEnTiemposDeCrisis
 */
class SoftwareLibreEnTiemposDeCrisis extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Software Libre en tiempos de crisis';
        $this->fecha                      = '2009-03-14T16:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'software-libre-en-tiempos-de-crisis';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'He aquí una gran oportunidad para usar Software Libre, ya que si no podemos ahorrar en la compra y mantenimiento de hardware, sí lo podemos hacer al dejar de pagar el alto costo de las licencias privativas de software.';
        $this->claves                     = 'Presentacion, Software Libre, Crisis';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/SoftwareLibreEnTiemposDeCrisis.md';
        // Para el Organizador
        $this->categorias                 = array('GNU Linux');
    } // constructor

} // Clase SoftwareLibreEnTiemposDeCrisis

?>
