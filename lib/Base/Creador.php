<?php
/**
 * Plataforma de Conocimiento - Creador
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
 * Clase Creador
 *
 * Esta clase coordina los conjuntos de programas que crean el sitio web. Se ejecuta con bin/Crear.php
 */
class Creador extends \Configuracion\CreadorConfig {

    // public $imprentas;
    // public $imprentas_autores;
    // public $imprentas_categorias;
    // public $imprentas_pagina_inicial;
    // public $imprentas_mapa_sitio;
    // public $imprentas_redifusion;

    /**
     * Imprimir
     */
    public function imprimir() {
        // Imprimir publicaciones
        foreach ($this->imprentas as $imprenta) {
            $imprenta_publicaciones = new $imprenta();
            $imprenta_publicaciones->imprimir();
            unset($imprenta_publicaciones);
        }
        // Imprimir categorías
        $imprenta_categorias = new ImprentaCategorias($this->imprentas_categorias);
        $imprenta_categorias->imprimir();
        unset($imprenta_categorias);
        // Imprimir autores
        $imprenta_autores = new ImprentaAutores($this->imprentas_autores);
        $imprenta_autores->imprimir();
        unset($imprenta_autores);
        // Imprimir página inicial (index.html)
        $imprenta_pagina_inicial = new ImprentaPaginaInicial($this->imprentas_pagina_inicial);
        $imprenta_pagina_inicial->imprimir();
        unset($imprenta_pagina_inicial);
        // Imprimir mapa del sitio (sitemap.xml)
        $imprenta_mapa_sitio = new ImprentaMapaSitio($this->imprentas_mapa_sitio);
        $imprenta_mapa_sitio->imprimir();
        unset($imprenta_mapa_sitio);
        // Imprimir redifusión (RSS feed)
        $imprenta_redifusion = new ImprentaRedifusion($this->imprentas_redifusion);
        $imprenta_redifusion->imprimir();
        unset($imprenta_redifusion);
        // Imprimir página para los resultados del buscador
        $imprenta_buscador_resultados = new ImprentaPaginaBuscadorResultados();
        $imprenta_buscador_resultados->imprimir();
        unset($imprenta_buscador_resultados);
    } // imprimir

} // Clase Creador

?>
