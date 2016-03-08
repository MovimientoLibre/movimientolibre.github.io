<?php
/**
 * Plataforma de Conocimiento - Recolector
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
 * @package PlataformaDeConocimiento
 */

namespace Base;

/**
 * Clase Recolector
 *
 * Su función es recolectar las Publicaciones y ordenarlas cronológicamente de la más nueva a la más antigua
 */
class Recolector {

    const LIB_DIR            = 'lib';        // Directorio que contiene los namespaces de donde se recolectarán las clases
    protected $publicaciones = array();      // Arreglo con instancias de Publicacion
    protected $ordenar_por   = 'fecha_desc'; // Puede ser 'fecha_desc' o 'dir_nombre_asc'

    /**
     * Obtener clases en directorio
     *
     * @param  string Nombre del directorio en LIB_DIR de donde se recolectarán los archivos PHP
     * @return array  Arreglo con textos de la forma Directorio\Clase
     */
    protected function obtener_clases_en($dir) {
        // Validar parámetro
        if (!is_string($dir) || (trim($dir) == '')) {
            throw new \Exception("Error en Recolector: Parámetro incorrecto.");
        }
        // Si no existe
        $lib_dir = sprintf('%s/%s', self::LIB_DIR, $dir);
        if (!is_dir($lib_dir)) {
            throw new \Exception("Error en Recolector: No existe el directorio $lib_dir");
        }
        // Obtener el listado con los archivos PHP
        $archivos = glob("$lib_dir/*.php");
        if ($archivos === false) {
            throw new \Exception("Error en Recolector: Falló la obtención de archivos PHP en el directorio $lib_dir");
        }
        if (count($archivos) == 0) {
            throw new RecolectorExceptionVacio("Aviso en Recolector: No hay archivos PHP en el directorio $lib_dir");
        }
        // Bucle en los archivos encontrados
        $a = array();
        foreach ($archivos as $archivo) {
            // Definir la ruta a la clase
            $a[] = $dir.'\\'.basename($archivo, '.php');
        }
        // Entregar
        return $a;
    } // obtener_clases_en

    /**
     * Agregar publicaciones en
     *
     * @param string Nombre del directorio en LIB_DIR de donde se recolectarán las publicaciones
     * @param mixed  Opcional, instancia de Imprenta para pasar variables
     */
    public function agregar_publicaciones_en($lib_dir, $imprenta=null) {
        // Acumularemos las instancias en este arreglo
        $instancias = array();
        // Bucle con las clases recolectadas
        foreach ($this->obtener_clases_en($lib_dir) as $clase) {
            // Cargar
            $publicacion = new $clase();
            // Si es instancia de Publicacion, se acumula
            if ($publicacion instanceof Publicacion) {
                // Si el estado es diferente de publicar, se salta
                if (strtolower($publicacion->estado) != 'publicar') {
                    continue;
                }
                // Si viene una instancia de Imprenta
                if ($imprenta instanceof ImprentaPublicaciones) {
                    $publicacion->definir_encabezado($imprenta->encabezado);
                    $publicacion->definir_encabezado_color($imprenta->encabezado_color);
                    $publicacion->definir_encabezado_icono($imprenta->encabezado_icono);
                    $publicacion->definir_claves($imprenta->claves);
                    $publicacion->definir_directorio($imprenta->directorio);
                    $publicacion->definir_nombre_menu($imprenta->nombre_menu);
                    $publicacion->definir_imprenta_titulo($imprenta->titulo);
                }
                // Orden
                switch ($this->ordenar_por) {
                    case 'dir_nombre_asc':
                        // La clave para ordenar es clase que es Directorio/Nombre
                        $clave = Funciones::caracteres_para_web(sprintf('%s-%s', $publicacion->directorio, $publicacion->nombre));
                        break;
                    case 'fecha_desc':
                    default:
                        // La clave para ordenar es el tiempo_creado-clase, donde clase es Directorio/Archivo
                        $clave = sprintf('%s-%s', $publicacion->tiempo_creado(), $clase);
                }
                $instancias[$clave] = $publicacion;
            }
        }
        if (count($instancias) > 0) {
            // Acumular
            $this->publicaciones = array_merge($this->publicaciones, $instancias);
            // Al ordenar de forma ascendente por la clave, queda del más nuevo al más viejo
            ksort($this->publicaciones);
        }
    } // agregar_publicaciones_en

    /**
     * Agregar publicaciones de imprentas
     *
     * @param mixed Texto (ruta a ImprentaPublicaciones), Arreglo de textos (rutas a ImprentaPublicaciones)
     */
    public function agregar_publicaciones_de_imprentas($entrada) {
        // Definir rutas siempre como un arreglo
        if (is_string($entrada) && ($entrada != '')) {
            $rutas = array($entrada);
        } elseif (is_array($entrada) && (count($entrada) > 0)) {
            $rutas = $entrada;
        } else {
            throw new \Exception("Error en Recolector: Al agregar publicaciones de imprentas, no se dio un texto o un arreglo.");
        }
        // Bucle por las rutas
        foreach ($rutas as $clase) {
            // Iniciar instancia
            $imprenta_publicaciones = new $clase();
            // Si es ImprentaPublicaciones se agrega
            if ($imprenta_publicaciones instanceof ImprentaPublicaciones) {
                $this->agregar_publicaciones_en($imprenta_publicaciones->publicaciones_directorio, $imprenta_publicaciones);
            }
        }
    } // agregar_publicaciones_de_imprentas

    /**
     * Obtener publicaciones
     *
     * @param  integer Opcional, entero cantidad límite
     * @return array   Arreglo con instancias de publicaciones
     */
    public function obtener_publicaciones($limite=null) {
        if (is_int($limite) && ($limite > 0)) {
            return array_slice($this->publicaciones, 0, $limite, true);
        } else {
            return $this->publicaciones;
        }
    } // obtener_publicaciones

    /**
     * Obtener cantidad de publicaciones
     *
     * @return integer Cantidad de publicaciones
     */
    public function obtener_cantidad_de_publicaciones() {
        return count($this->publicaciones);
    } // obtener_cantidad_de_publicaciones

} // Clase Recolector

?>
