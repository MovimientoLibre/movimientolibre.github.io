
* GIT es un software de Control de Revisiones. Esto significa que es capaz de recordar los estados previos en que se hayan guardado los muchos archivos de un sistema.
* GIT también se puede comunicar con computadoras y servidores remotos, para lograr así la descarga, sincronización y actualización en un solo comando.
* GIT es Software Libre con licencia GPL versión 2. Usado por los desarrolladores del kernel Linux y diseñado por Linus Torvalds.

#### Para averiguar la versión instalada

Para averiguar la versión instalada.

    $ git version
    git version 1.8.3.2

Ejecute GIT sin parámetros para mostrar una ayuda simple.

    $ git

#### Configuraciones globales

Debe configurar sus datos personales. Con estos datos se firmarán sus cambios y aportaciones al código.

    $ git config --global user.name "Tu Nombre Completo"
    $ git config --global user.email tunombre@servidor.com

Algo muy útil son colores en los textos del comando Git.
Habilite el uso de color en la terminal con:

    $ git config --global color.ui auto

También es recomendable crear un par de llaves OpenSSH para asegurar la transmisión de datos entre el servidor y su equipo.

    $ ssh-keygen
    $ scp .ssh/id_rsa.pub usuario@servidor.com:/home/usuario/millavepublica.pub

#### Descarga de un repositorio en GiHub

GitHub es el repositorio más grande y popular de software que usa GIT. Obtener un clon de un software desde ahí es sencillo. Por ejemplo, para descargar [Twitter Bootstrap](http://getbootstrap.com/):

    $ mkdir -p ~/Descargas/GIT
    $ cd ~/Descargas/GIT
    $ git clone git@github.com:twbs/bootstrap.git
    $ cd bootstrap

Haga una cuenta gratuita o de pago en GitHub para subir su llave pública OpenSSH.

#### Iniciar un repositorio

Cabe resaltar la flexibilidad de Git en que puede iniciar un nuevo repositorio en su propio equipo o en el servidor local; y en cualquier directorio de su disco duro interno o unidad de almacenamiento extena. Para iniciar un repositorio cámbiese al directorio base del mismo y ejecute _git init_.

    $ cd ~/Documentos/Prueba
    $ git init

Se creará un directorio oculto con nombre **.git**. Como dato importante, de aquí en delante, todos los comandos Git de este repositorio debe ejecutarlos en este directorio. También puede ejecutar este comendo indicando el nombre del directorio a crear:

    $ git init Proyecto

Se creará un directorio de nombre _Proyecto_. Verifique cambiándose a ese directorio y solicitando el _estatus_ del repositorio:

    $ cd Proyecto
    $ git status

#### Directorios y archivos a ignorar

No todos los archivos que ponga en su copia local tienen que estar necesariamente también en el repositorio. Es conveniente que archivos temporales, por ejemplo los creador por **LaTeX** (aux, log, toc), sean excluidos. Edite el archivo _exclude_:

    $ nano -w .git/info/exclude

Y en cada línea agregue los nombres de archivos y directorios que NO serán incluidos en el repositorio; puede usar comodines como el asterisco. Por ejemplo:

    .*
    *~
    *.aux
    *.log
    *.toc
    *.geany

#### Agregar archivos al repositorio local

Para agregar archivos y directorios, nuevos y modificados al repositorio, debe de estar en el directorio base y ejecutar **git add**:

    $ cd ~/Documentos/Prueba
    $ git add .

Para mostrar un listado con los cambios en el repositorio que están en espera de aplicarse ejecute **git status**:

    $ git status

Éstos están pendientes de ser integrados o _comiteados_.

#### Remover archivos o directorios antes de integrar

Si al ver el status nota que un archivo o directorio NO debiera incluirse, ejecute el comando **git rm**.

    $ git rm directorio/archivoquenodebeincluirse.txt

Y revise de nuevo.

    $ git status

De otra forma, para agregar archivos y tomar en cuenta de una vez los eliminados use:

    $ git add . --all

#### Integrar los cambios

Después de agregar, modificar o eliminar archivos proceda a integrar. Para integrar hay que hacer un **git commit**. Este comando puede incluir un comentario:

    $ git commit -m "He terminado la rama de Informática."

Después de éste, ejecute otro status para observar que ya no hay nada más nuevo.

    $ git status

Cada integración agrega un registro en una bitácora de cambios. La bitacora puede verse con **git log**.

    $ git log

#### Descargue las novedades del servidor

Para actualizar su copia local con las novedades en el servidor, ya sea por que otra persona haya subido aportaciones o porque usted haya hecho cambios en otro equipo, _jale_ una actualización del servidor con **git pull**. En caso de no haber cambios, mostrará un mensaje de que está al día.

    $ git pull

Lea los comentarios de sus compañeros con **git log**:

    $ git log

#### Despues de aportar debe respaldar localmente

Debe respaldar cada buen avance que lleve, ya sea al final del día o antes si lo amerita. Agregue sus archivos nuevos y modificados. Luego revise.

    $ git add .
    $ git status

Si Usted lo aprueba, integre...

    $ git commit -m "Avance en el módulo Direcciones."

#### Derivaciones

Una derivación o _branch_ es una rama en el desarrollo de un sistema que permite establecer una distinta en el desarrollo. Ésto le permite trabajar con una nueva cualidad sin dañar al sistema que ya funcione bien. De inicio todo repositorio tiene el _branch master_. Para listar las derivaciones ejecute **git branch** solamente:

    $ git branch
    * master

Para agregar una nueva derivación use la orden _branch_ seguida del nombre de la nueva derivación, por ejemplo para crear el _branch desarrollo_:

    $ git branch desarrollo

Luego cámbiese a la derivación en uso con la orden _checkout_

    $ git checkout desarrollo

Verifique listando las derivaciones. El marcado con asterisco es el _branch_ en uso.

    $ git branch
      master
    * desarrollo

#### Trabaje en su derivación

Trabaje en su _branch_. Los cambios que haga se quedan en éste. Para integrar use los comandos **git add** y **git commit** ya mencionados.

    $ git status
    $ git add .
    $ git status
    $ git commit -m "He hecho un par de mejoras."

Puede conmutar a otro _branch_, siempre y cuando no tenga archivos pendientes por agregar y _comitear_. Por ejemplo, para cambiar a _master_:

    $ git checkout master

Si observa el contenido del directorio en un administrador de archivos notará como aparecen archivos agregados y desaparecen los que han sido eliminados o no existentes en el otro _branch_. Para cambiar de nuevo a _desarrollo_:

    $ git checkout desarrollo

#### Fusionar derivaciones

Conforme va haciendo _commits_ en un _brach_ éste se dice que va adelantado al _master_. Para mostrar un listado de los _branchs_ y el último comentario de cada _commit_ ejecute:

    $ git branch -v

Cuando el _branch desarrollo_ quede listo y necesite que _master_ reciba todas las novedades de éste, debe usar la orden **git merge**.

    $ git checkout master
    $ git merge desarrollo

Ahora _master_ se ha _corrido_ a donde apunta _desarrollo_ y son iguales. Verifique con:

    $ git branch -v

#### Eliminar derivaciones

En caso de que quiera descartar un _branch_ o derivación.

    $ git branch -d desarrollo

Este comando funciona siempre y cuando no tenga archivos pendientes de integrar.

#### Repositorios remotos

Las más recientes versiones de Git solicitan que defina la forma local de subir los archivos. Así que en su equipo y usuario ejecute sólo una vez:

    $ git --config push.default simple

Git recuerda el origen de cada repositorio cuyo origen sea un servidor remoto. Ejecute este comando para averiguar cuál es:

    $ git remote -v

He notado que Git va impedir que suba cambios al _branch master_ de su servidor, a excepción de **GitHub**. Por lo que debe estar en una derivación distinta a _master_ antes de subir.

#### Subir una nueva derivación al servidor

Teniendo permiso de lectura y escritura en el servidor, puede subir un nuevo branch al servidor con la orden push.

    $ git push origin nombredelbranch

Si esa derivación no existe en el servidor, será creada.

#### Bajar una derivación desde el servidor

Al clonar sólo se bajará el _branch master_. Si desea bajar una derivación del repositorio remoto, por ejemplo _desarrollo_, ejecute:

    $ git fetch origin desarrollo

Luego, cámbiese a ese _branch_ que ha bajado y descargue.

    $ git checkout desarrollo
    $ git pull origin desarollo

Además, el comando **git fetch** bajará la información de todos las derivaciones remotas.

    $ git fetch

Tendrá que ejecutar el _checkout_ para que se listen con un **git branch**.

    $ git branch -v

#### Subir actualizaciones de la derivación local al servidor

Si ha hecho nuevos programas o cambios en los mismos, suba su actualización al servidor con el siguiente comando. Claro que localmente debe estar en ese branch.

    $ git push

Puede ser específico a un _brach_ por ejemplo para _desarrollo_:

    $ git push origin desarrollo

#### Actualizar el repositorio local

Para bajar las actualizaciones de una derivación (sólo el branch en uso) desde el servidor, use la orden pull.

    $ git checkout desarrollo
    $ git pull origin desarrollo
