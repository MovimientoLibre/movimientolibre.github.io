<?php
/**
 * Movimiento Libre - Crear certificados autofirmados para Apache 2
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
 * Clase Apache2CertificadosAutofirmados
 */
class Apache2CertificadosAutofirmados extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Crear certificados autofirmados para Apache 2';
     // $this->autor                      = 'Autor';
        $this->fecha                      = '2014-02-22T17:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'apache2-certificados-autofirmados';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En este apunte escribo los pasos para crear certificados autofirmados para que el servidor web Apache opere cifrando las comunicaciones con SSL. Dicho de otra forma, es usar el HTTPS en lugar del HTTP.';
        $this->claves                     = 'Apache';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/Apache2CertificadosAutofirmados.md';
        // Para el Organizador
        $this->categorias                 = array('Software Libre');
    } // constructor

} // Clase Apache2CertificadosAutofirmados

?>
