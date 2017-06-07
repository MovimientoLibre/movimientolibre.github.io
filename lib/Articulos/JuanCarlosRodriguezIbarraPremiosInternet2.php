<?php
/**
 * Movimiento Libre - Juan Carlos Rodríguez Ibarra, Premios Internet II
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
 * Clase JuanCarlosRodriguezIbarraPremiosInternet2
 */
class JuanCarlosRodriguezIbarraPremiosInternet2 extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Juan Carlos Rodríguez Ibarra, Premios Internet II';
        $this->fecha                      = '2010-06-27T00:50';
        // El nombre del archivo a crear, también es el nombre del directorio donde pueden estar la imagen e imagen-previa
        $this->archivo                    = 'juan-carlos-rodriguez-ibarra-premios-internet-2';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Quien habla es Juan Carlos Rodríguez Ibarra, ex-político español del PSOE. Quien fue presidente de la Junta de Extremadura durante 24 años. El 17 de mayo de 2010 recibió el Premio Día Mundial de Internet en la Sala Europa del Senado por parte de la Asociación de Usuarios de Internet.';
        $this->claves                     = 'Política';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Articulos/JuanCarlosRodriguezIbarraPremiosInternet2.md';
        // Para el Organizador
        $this->categorias                 = array('Política');
    } // constructor

} // Clase JuanCarlosRodriguezIbarraPremiosInternet2

?>
