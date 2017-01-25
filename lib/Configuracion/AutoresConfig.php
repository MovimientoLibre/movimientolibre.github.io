<?php
/**
 * Movimiento Libre - Autores Config
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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

namespace Configuracion;

/**
 * Clase AutoresConfig
 */
class AutoresConfig {

    const VINCULOS_INDICE          = '\\Base\\VinculosTarjetas';           // Ruta a la clase para el índice de autores, en autores/index.html
    const VINCULOS_INDIVIDUAL      = '\\Base\\VinculosAcordeonesListados'; // Ruta a la clase para listar las publicaciones de cada autor, a usarse en las páginas de los autores
    const ORDENAR_POR              = 'nivel_asc';                          // Texto que usa el Recolector para ordenar las publicaciones, puede ser dir_nombre_asc, fecha_desc o nivel_asc
    const DIRECTORIO               = 'autores';                            // Nombre del directorio que se creará en la raiz para depositar los archivos HTML
    const NAVEGACION_OPCION_ACTIVA = '';                                   // Opción del menú activa cuando esté en el índice, debe ser un valor en /Configuracion/NavegacionConfig
    const INDICE_TITULO            = 'Autores';                            // Título para la página índice
    const INDICE_DESCRIPCION       = 'Todos los autores de este sitio';    // Descripción para la página índice
    const INDICE_CLAVES            = 'Autores, Escritores, Personas';      // Claves para la página índice
    public $autores                = array();                              // Arreglo asociativo con instancias de \Base\Autor
    public $mostrar_no_definidos   = false;                                // Verdadero pone todos los autores encontrados, falso SOLO los del arreglo autores
    public $imagen_tamano          = 128;                                  // Tamaño del icono a usuarse en \Base\PaginasAutoresIndice

    /**
     * Constructor
     */
    public function __construct() {
        // Autor constructor parámetros: apodo, titulo, nombre_completo, icono, empresa, cargo, semblanza, email, twitter, perfil_archivo, estatus
    //  $this->autores[] = new \Base\Autor('diana',    '',     'Diana Valdés Espinoza',          'preferences-desktop-user', '',               'Estudiante',                 '', 'dianavales@gmail.com',         '',               '');
        $this->autores[] = new \Base\Autor('guivaloz', 'Ing.', 'Guillermo Valdés Lozano',        'preferences-desktop-user', 'IMPLAN Torreón', 'Desarrollador y Divulgador', '', 'guivaloz@movimientolibre.com', 'guivaloz',       'guillermo-valdes-lozano.md');
        $this->autores[] = new \Base\Autor('rosy',     '',     'Rosa Elena Espinoza Villarreal', 'preferences-desktop-user', 'Nemosíntesis',   'Escritora',                  '', 'rosyespin@gmail.com',          'hielitodelimon', '');
    } // constructor

    /**
     * Obtener
     *
     * @param  string Apodo, titulo + nombre completo, nombre completo
     * @return mixed  La instancia de Autor encontrada, falso si no se haya
     */
    public function obtener($texto_a_buscar) {
        foreach ($this->autores as $autor) {
            if ($autor->apodo == $texto_a_buscar) {
                return $autor;
            } elseif ("{$autor->titulo} {$autor->nombre_completo}" == $texto_a_buscar) {
                return $autor;
            } elseif ($autor->nombre_completo == $texto_a_buscar) {
                return $autor;
            }
        }
        return false;
    } // obtener

} // Clase AutoresConfig

?>
