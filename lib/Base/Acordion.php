<?php
/**
 * Plataforma de Conocimiento - Acordion
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
 * Clase Acordion
 */
class Acordion {

    public $clave;                            // Texto único que identifica a la lengüeta
    public $padre_identificador;              // Texto único que identifica al grupo de lengüetas
    public $etiqueta;                         // Texto que va a aparecer en la lengüeta
    public $contenido;                        // Mixto, puede ser texto, un objeto o un arreglo de objetos
    public $javascript;                       // Texto, javascript
    public $es_activa              = true;    // Booleano, verdadero si es la pestaña activa
    public $necesita_activador     = false;   // Booleano, es visto por el metodo javascript en Lenguetas
    protected $digerido_di         = array(); // Si contenido es o son objetos, acumularemos los identificadores
    protected $digerido_html       = array(); // Si contenido es o son objetos, acumularemos el HTML
    protected $digerido_javascript = array(); // Si contenido es o son objetos, acumularemos el javascript
    protected $he_digerido         = false;   // Bandera

    /**
     * Constructor
     *
     * @param string Clave
     * @param string Etiqueta
     * @param mixed  Contenido, opcional
     * @param string Javascript, opcional
     */
    public function __construct($clave, $etiqueta, $contenido='', $javascript='') {
        // Parámetros
        $this->clave      = $clave;
        $this->etiqueta   = $etiqueta;
        $this->contenido  = $contenido;
        $this->javascript = $javascript;
    } // constructor

    /**
     * Digerir
     *
     * Como el contenido puede ser uno o más instancias, éstas son ejecutadas para obtener su HTML y Javascript
     */
    protected function digerir() {
        // Si ya ha digerido, no hace nada
        if ($this->he_digerido) {
            return;
        }
        // Si es arreglo de instancias o es una instancia
        if (is_array($this->contenido) && (count($this->contenido) > 0)) {
            foreach ($this->contenido as $instancia) {
                $this->digerido_html[]       = $instancia->html();
                $this->digerido_javascript[] = $instancia->javascript();
                if ($instancia->identificador != '') {
                    $this->digerido_di[]      = $instancia->identificador;
                    $this->necesita_activador = true;
                }
            }
        } elseif (is_object($this->contenido)) {
            $this->digerido_html[]       = $this->contenido->html();
            $this->digerido_javascript[] = $this->contenido->javascript();
            if ($this->contenido->identificador != '') {
                $this->digerido_di[]      = $this->contenido->identificador;
                $this->necesita_activador = true;
            }
        }
        // Cambiar bandera
        $this->he_digerido = true;
    } // digerir

    /**
     * Panel HTML
     *
     * @return string Código HTML
     */
    public function panel_html() {
        // Acumularemos el HTML en este arreglo
        $a = array();
        // Pendiente validar clave
        //
        $a[] = '  <div class="panel panel-default">';
        $a[] = sprintf('    <div class="panel-heading" role="tab" id="%s">', $this->clave);
        $a[] = '      <h4 class="panel-title">';
        $a[] = '        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">';
        $a[] = '        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">';
        $a[] = '';
        $a[] = '';
        $a[] = '';
        $a[] = '';
        $a[] = '';
        $a[] = '';
        $a[] = '';
        $a[] = '';
        $a[] = '';
        // Entregar HTML
        return implode("\n", $a);
    } // panel_html
/*



        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
 */

    /**
     * Javascript
     *
     * @return string Javascript
     */
    public function javascript() {
        // Acumularemos el javascript en este arreglo
        $a = array();
        // Entregar javascript
        if (count($a) == 0) {
            return false;
        } else {
            return implode("\n", $a);
        }
    } // javascript

} // Clase Acordion

?>
