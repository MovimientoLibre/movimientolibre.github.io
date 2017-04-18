<?php
/**
 * Movimiento Libre - Instalación de CentOS para virtualizar
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
 * Clase CentOSInstalacionParaVirtualizar
 */
class CentOSInstalacionParaVirtualizar extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre, porque en PublicacionConfig se define el publisher
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Instalación de CentOS para virtualizar';
        $this->fecha                      = '2014-01-30T10:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'centos-instalacion-para-virtualizar';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Instalar CentOS con lo mínimo necesario para virtualizar con KVM. Teniendo en mente que sólo va a llegar a Terminal, es decir, sin interfaz gráfica o GUI. La administración será vía OpenSSH y por el Administrador de Virtualizaciones desde otro equipo.';
        $this->claves                     = 'CentOS, KVM, Virtualizar';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Apuntes/CentOSInstalacionParaVirtualizar.md';
        // Para el Organizador
        $this->categorias                 = array('CentOS', 'Virtualización');
    } // constructor

} // Clase CentOSInstalacionParaVirtualizar

?>
