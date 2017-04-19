<?php
/**
 * Movimiento Libre - Consejos para una Informática Ecológica
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
 * Clase ConsejosInformaticaEcologica
 */
class ConsejosInformaticaEcologica extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Consejos para una Informática Ecológica';
        $this->fecha                      = '2008-05-17T15:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'consejos-informatica-ecologica';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Ante una nueva era donde hay más conciencia por la conservación del medio ambiente nos vemos en la necesidad de buscar mejores alternativas, más eficientes energéticamente hablando, de nuestros equipos informáticos.';
        $this->claves                     = 'Presentacion, GNU Linux, Ecologia, Energia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Presentaciones/ConsejosInformaticaEcologica.md';
        // Para el Organizador
        $this->categorias                 = array('GNU Linux');
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
    } // constructor

} // Clase ConsejosInformaticaEcologica

?>
