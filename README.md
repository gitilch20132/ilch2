# Ilch (Pluto) CMS, version 2.0 (development)

Das ***Ilch CMS 2.0***, auch bekannt unter *Ilch Pluto*, ist der offizielle Nachfolger vom *Ilch Clan 1.2*. Das CMS richtet sich an Privatanwender sowie kleine und mittelständige Unternehmen. Es ist modular erweiterbar und baut auf dem ***Kohana Framework*** in der Version 3.2.X auf.

## Entwicklung ##
Als *version control system* dient ***GIT***. Das Projekt wird auf [github.com](http://www.github.com) in der Organisation [IlchCMS](https://github.com/IlchCMS) gehostet. Eine indirekte Mitarbeit am Programmcode kann über einen persönlichen *Fork* des Projektes erfolgen. Für eine direkte Mitarbeit, als eingetragener Entwickler, ist eine entsprechende Bewerbung an den Nutzer *KoernerWS* auf [github.com](https://github.com/KoernerWS) oder [ilch.net](http://www.ilch.de/user-details-19817.html) zu richten.

***Issues*** werden auf [github.com](https://github.com/IlchCMS/ilch2/issues) verwaltet. Die ***Projektwiki*** auf [github.com](https://github.com/IlchCMS/ilch2/wiki) richtet sich nur an Entwickler. Für Endnutzer steht bis zum Release auf [ilch-pluto.net](http://www.ilch-pluto.net) eine entsprechende ***Dokumentation*** zur Verfügung.

## Offizielle Projektseiten ##
Der Download vom *Ilch CMS 2.0* kann direkt über die Projektseite [ilch-pluto.net](http://www.ilch-pluto.net) erfolgen. Für Hilfestellungen wurde die ***Ilch-Community*** unter der Domain [ilch.de](http://www.ilch.de/forum.html) eingerichtet, welche bereits seit 2003 Fragen zu den Vorgängerversionen beantwortet.

***Erweiterungen***, wie *Module* und *Themes/Designs*, werden auf der Projektseite [ilch-pluto.net](http://www.ilch-pluto.net) angeboten. Für die Vorgängerversionen stehen Erweiterungen weiterhin auf [ilch.de](http://www.ilch.de/downloads.html) zur Verfügung.

## Ordnerstruktur ##
Die Ordnerstruktur richtet sich stark an dem *Kohana Framework* mit ein paar Modifikationen. Der *system* sowie der *modules*-Ordner des *Kohana Frameworks* liegen in dem Ordner *kohana*, um das Grundsystem vom *Ilch CMS 2.0* nicht mit dem *Kohana*-System zu vermischen. Das Grundsystem und die vorinstallierten Module und Themes vom *Ilch CMS 2.0* liegen in dem Ordner *ilch*. Eigene Erweiterungen lassen sich in den entsprechenden Unterordnern des Ordners *contents* ablegen.

Daraus ergibt sich folgende Basis-Ordnerstruktur:

- application/
- content/
 - ./modules
 - ./themes
- ilch/
 - ./modules
 - ./themes
 - ./system
- kohana/
 - ./modules
 - ./system

Die Ordnerstruktur des *application*-Ordners spiegelt sich in den Ordnern einer jeden Erweiterung wieder. Durch das vom *Kohana Framework* angewandte ***Cascading-Filesystem***, lassen sich alle Dateien des *Kohana Frameworks*, alle Dateien des *Ilch CMS 2.0* und alle Dateien der Erweiterungen überladen. Die *Kohana*-Dokumentation geht genauer auf dieses Prinzip ein. Der *application*-Ordner hat bei diesem Prinzip die höchste Priorität, dazwischen die Themes, die Module, dann das *Ilch System* und anschließend das *Kohana-System*.

Damit es nicht zum ungewollten überladen zwischen den Erweiterungen kommen kann, muss in der ***Konfigurations-Datei*** der Erweiterung angegeben werden, welche anderen Erweiterungen benötigt und evtl. überschrieben werden dürfen. Wird diese Angabe nicht gemacht und dennoch überlädt eine Erweiterung eine andere Erweiterung, so können die Erweiterungen nicht gleichzeitig genutzt werden.

Um diese Problematik etwas einzudämmen, sind ein paar Regelungen zu dem Ablageort und der Benennung der Dateien einer Erweiterung getroffen worden. Um auf diese Regelungen genauer eingehen zu können, vorerst ein paar Unterschiede zwischen den Modulen und Themes.

Es können mehrere Module gleichzeitig installiert und aktiviert werden, um die Funktionalität des *Ilch CMS 2.0* zu erweitern. Module können sich niemals gegenseitig überladen, da immer ein Modul zuerst geladen werden muss, welches dann automatisch die höhere Priorität hat.

Es können mehrere Themes gleichzeitig installiert werden, jedoch wird bei einem Aufruf immer nur ein Theme geladen. Für das Back- und Frontend können unterschiedliche Themes aktiviert werden. Ein Theme kann somit keine Dateien eines anderen Themes überladen, da immer nur ein Theme geladen wird und es somit keine anderen Themes gibt, dessen Dateien überladen werden könnten. Ein Theme kann jedes beliebige Modul überladen, da es eine höhere Priorität als Module hat. Somit können im Gegenzug Module keine Dateien eines Themes überladen.

***Jedes Modul*** hat einen ***individuellen Ordnernamen***. Nehmen wir für unser Beispiel den Namen *forum*. Der Controller für dieses Modul darf nun ausschließlich unter *./controller/forum.php* liegen, sofern das überladen anderer Module nicht erwünscht ist. Werden mehrere Controller für das Modul benötigt, kann ein Unterordner in *./controller* namens *forum* erstellt werden. Dieser Lösungsweg hat zur Folge, dass das Modul eine zusätzliche Route namens *module_forum* anlegen muss. Werden mehrere Routen angelegt, ist die Namensgebung *module_forum_xxxxx*, wobei *xxxxx* ein beliebiger Wert sein kann. Auf dem gleichen Prinzip ist mit anderen Ordnern zu verfahren, wie zum Beispiel dem *views*-Ordner.

***Hinweis:*** Ein Modulordner sollte niemals *backend* oder *frontend* benannt werden, da diese Namen für die Themes vorbehalten sind.

Bei den Themes verhält sich diese Regelung ähnlich, mit der Ausnahme, dass im *views*-Ordner ein Ordner *frontend* und/oder *backend* angelegt wird, in diesen die *index.php* des Themes abgelegt wird.


----------


*Dieses Dokument soll als kurzen Einstieg in die aktive Entwicklung dienen und stellt keine offizielle Entwickler-Dokumentation da.*