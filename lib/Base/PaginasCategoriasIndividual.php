<?php
/**
 * Plataforma de Conocimiento - Páginas Categorías Individual
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
 * Clase PaginasCategoriasIndividual
 */
class PaginasCategoriasIndividual extends Paginas {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $en_raiz;
    // public $en_otro;
    protected $categoria;  // Instancia de Categoria
    protected $recolector; // Instancia de RecolectorCategorias

    /**
     * Constructor
     *
     * @param mixed Instancia de Categoria
     * @param mixed Instancia de RecolectorCategorias
     */
    public function __construct(Categoria $categoria, RecolectorCategorias $recolector) {
        // Parámetros
        $this->categoria  = $categoria;
        $this->recolector = $recolector;
        // Los vínculos apuntan a páginas en otros directorios
        $this->en_otro            = true;
        $this->categoria->en_raiz = $this->en_raiz;
        $this->categoria->en_otro = $this->en_otro;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir el título y la descripción
        $this->titulo      = $this->categoria->nombre;
        $this->descripcion = $this->categoria->descripcion;
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular encabezado
        $a[] = $this->encabezado_html();
        // Definir concentrador
        $clase             = \Configuracion\CategoriasConfig::VINCULOS_INDIVIDUAL;
        $concentrador      = new $clase();
        // Bucle por todos los autores
        foreach ($this->recolector->obtener_publicaciones() as $publicacion) {
            // Definir vínculo
            $vinculo          = new \Base\Vinculo();
            $vinculo->en_raiz = $this->en_raiz;
            $vinculo->en_otro = $this->en_otro;
            $vinculo->definir_con_publicacion($publicacion);
             // Agregar vínculo
            $concentrador->agregar($vinculo);
        }
        // Acumular concentrador
        $a[] = $concentrador->html();
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase PaginasCategoriasIndividual

?>
