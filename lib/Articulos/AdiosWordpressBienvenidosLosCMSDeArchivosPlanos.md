
Ha comenzado una nueva ola de sitios web que buscan la simplicidad y la rápida implementación abandonando el uso de [Wordpress](http://wordpress.org/) como software para implementar un CMS (Content Management System), es decir, un administrador de contenidos.

Entre la variedad de las nuevas propuestas de CMS de archivos planos están [Ghost](https://ghost.org/), [Kirby](http://getkirby.com/), [Statamic](http://statamic.com/) y [Jekyll](http://jekyllrb.com/). Aprovecho la ocasión para mencionar el de mi autoría [CMS de Movimiento Libre](http://cms.movimientolibre.com/).

**¿Por qué está ocurriendo esto?** Bueno, un buen número de desarrolladores web se ha percatado que **Wordpress es un software muy grande y muy sofisticado**, tal vez demasiado para un sitio pequeño o mediano. Es decir, que tener un motor de PHP y una base de datos MySQL esté bien para un sitio de noticias donde se publiquen decenas o cientos de artículos diarios; pero **en la gran mayoría de los sitios no hay actualizaciones diarias** y la cantidad de contenidos es de decenas a cientos de artículos por año.

Un sitio construido por un **CMS de archivos planos** es sencillamente un conjunto _bien_ organizado de archivos en [Markdown](http://www.movimientolibre.com/categorias/markdown.html) u otro y de directorios que producen un sitio web en **HTML**, no PHP u otros tipos de archivo. Es un regreso al estilo _vintage_ de los orígenes de la _World Wide Web_ pero con la modernidad de estilos de cascada CSS, Javascript, [Twitter Bootstrap](http://getbootstrap.com/) y mucho más.

Planteo la pregunta: **¿Qué es mejor, la base de datos o cientos o miles de archivos?...** La respuesta, como es de esperarse, es _DEPENDE_. Aquí tienen las ventajas de los CMS de archivos planos:

#### Ventajas de un CMS de archivos planos

* **Velocidad**: Sin la lentitud de una base de datos, las páginas web se entregan de inmediato.
* **Seguridad**: No hay inicio de sesión, ni usuario, ni contraseña. Las páginas **HTML** son en sí mismas _incrakeables_.
* **Simplicidad**: Se basa en archivos y directorios; por lo que es sencillo de mantener y tienen un crecimiento prácticamente ilimitado (claro, sólo por la capacidad de almacenamiento del disco duro).
* **Menos recursos en el servidor web**: Sin base de datos ni intérprete de **PHP** o similar; sólo se necesita el servicio **HTTPD** como, por ejemplo, [Apache](http://httpd.apache.org/)
* **Control de versiones**: Usando la plataforma de [GitHub](http://github.com) _matamos dos pájaros de un tiro_ puesto que nos brinda alojamiento y control de versiones.
* **Portabilidad**: Como su contenido se almacena en simples archivos de texto, podemos darle nuevos artículos en cualquier sistema operativo usando simples editores de texto.

#### Referencias

* Inspirado en el artículo [Goodbye WordPress: 2014 Will Be the Year of the Flat-File CMS](http://www.typeandgrids.com/blog/goodbye-wordpress-2014-will-be-the-year-of-flat-file-cmses)
* [Ghost](https://ghost.org/)
* [Kirby](http://getkirby.com/)
* [Statamic](http://statamic.com/)
* [Jekyll](http://jekyllrb.com/)
* [CMS de Movimiento Libre](http://cms.movimientolibre.com/)
* [Twitter Bootstrap](http://getbootstrap.com/)
* [Apache](http://httpd.apache.org/)
* [GitHub](http://github.com)
