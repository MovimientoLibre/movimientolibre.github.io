<?php
/**
 * Plataforma de Conocimiento - Imprenta Autores
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
 * Clase ImprentaAutores
 */
class ImprentaAutores extends Imprenta {

    const AUTORES_DIR              = 'autores'; // Nombre del directorio que se creará en la raiz para depositar los archivos HTML
    const NAVEGACION_OPCION_ACTIVA = 'Autores'; // Opción del menú en /Configuracion/NavegacionConfig
    protected $imprentas;                       // Arreglo con rutas a las clases de ImprentaPublicaciones
    protected $recolector;                      // Instancia de RecolectorAutores
    protected $contador            = 0;         // Entero, cantidad de archivos HTML de autores creados

    /**
     * Constructor
     *
     * @param array Arreglo con rutas a las clases de ImprentaPublicaciones
     */
    public function __construct($imprentas) {
        $this->imprentas  = $imprentas;
        $this->recolector = new RecolectorAutores();
    } // constructor

    /**
     * Imprimir autores
     *
     * Crea los archivos para cada autor usando la clase PaginasAutoresIndividual
     */
    protected function imprimir_autores() {
        // Cargar la configuración de autores
        $autores_config = new \Configuracion\AutoresConfig();
        // Iniciar la plantilla
        $plantilla                            = new Plantilla();
        $plantilla->navegacion                = new Navegacion();
        $plantilla->mapa_inferior             = new MapaInferior();
        $plantilla->directorio                = self::AUTORES_DIR;
        $plantilla->navegacion->opcion_activa = self::NAVEGACION_OPCION_ACTIVA;
        // Crear directorio
        $this->crear_directorio($plantilla->directorio);
        // Bucle por todas los autores
        foreach ($this->recolector->obtener_autores() as $autor_texto) {
            // Filtrar por este autor
            $this->recolector->filtrar_publicaciones_de_autor($autor_texto);
            // Definir la ruta del archivo HTML para este autor
            $autor = $autores_config->obtener($autor_texto);
            if ($autor === false) {
                $autor = new Autor('', '', $autor_texto);
            }
            $autor->en_raiz = true;
            $autor->en_otro = false;
            $ruta           = $autor->url();
            // Iniciar PaginasAutoresIndividual
            $pagina                  = new PaginasAutoresIndividual($autor, $this->recolector);
            // Pasar a la plantilla estos valores
            $plantilla->titulo       = $pagina->titulo;
            $plantilla->descripcion  = $pagina->descripcion;
            $plantilla->claves       = "Autor, $autor_texto";
            $plantilla->archivo_ruta = $ruta;
            // Pasar a la plantilla el HTML y Javascript
            $plantilla->contenido    = $pagina->html();
            $plantilla->javascript   = $pagina->javascript();
            // Crear archivo
            $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
            $this->contador++;
        }
    } // imprimir_autores

    /**
     * Imprimir index
     *
     * Crea el archivo /autores/index.html usando PaginasAutoresIndice
     */
    protected function imprimir_index() {
        // Iniciar la plantilla
        $plantilla                            = new Plantilla();
        $plantilla->navegacion                = new Navegacion();
        $plantilla->mapa_inferior             = new MapaInferior();
        $plantilla->directorio                = self::AUTORES_DIR;
        $plantilla->navegacion->opcion_activa = self::NAVEGACION_OPCION_ACTIVA;
        $plantilla->titulo                    = "Autores";
        $plantilla->descripcion               = "Todas los autores";
        $plantilla->claves                    = "Autores";
        $plantilla->archivo_ruta              = sprintf('%s/index.html', $plantilla->directorio);
        // Iniciar PaginasAutoresIndice
        $pagina                = new PaginasAutoresIndice($this->recolector);
        $pagina->titulo        = $plantilla->titulo;
        $pagina->descripcion   = $plantilla->descripcion;
        // Definir contenido
        $plantilla->contenido  = $pagina->html();
        $plantilla->javascript = $pagina->javascript();
        // Crear archivo
        $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
    } // imprimir_index

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaAutores:       ";
        $this->recolector->agregar_publicaciones_de_imprentas($this->imprentas);
        $this->imprimir_autores();
        $this->imprimir_index();
        // Mensaje
        echo sprintf("  %d en %s\n", $this->contador, self::AUTORES_DIR);
    } // imprimir

} // Clase ImprentaAutores

?>
