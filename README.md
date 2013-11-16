carouFredSel - ein Karussell für Contao
=======================================

***carouFredSel*** ist ein jQuery-Plugin von Fred Heusschen, das beliebige HTML Elemente in ein Karussell/einen Slider verwandelt. Es kann dabei ein oder mehrere Elemente gleichzeitig scrollen, egal ob horizontal oder vertikal, unendlich oder kreisförmig, automatisch oder bei Nutzeraktivität.

Möglichkeiten von carouFredSel
------------------------------

* scrollen von beliebigen Inhalten in horizontaler (links/rechts) und vertikaler (hoch/runter) Richtung
* automatisches scrollen oder scrollen durch Buttons, mittels Tastatur, dem Mausrad oder durch Wischen
* Scrollmodi: einmalig, kreisförmig (scrollt am Ende mit dem ersten Element weiter) und unendlich (spult am Ende zum ersten Element zurück)
* konfigurierbare Anzahl von gleichzeitig scrollenden Elementen
* konfigurierbare Anzeigedauer und Verzögerung bis das erste Mal gescrollt wird
* Pause bei Maus-Hover oder durch Button
* Fortschritts-Balken oder Kreis-Diagramm zur Anzeige bis erneut gescrollt wird
* 9 eingebaute Übergangs-Effekte: none, scroll, directscroll, fade, crossfade, cover, cover-fade, uncover und uncover-fade
* konfigurierbare Länge der Übergangsdauer
* optionales responsive/fluid/liquid Karussell
* konfigurierbare Größe des Karussells sowie der einzelnen Elemente
* unterstützt variable Element-Größen (ebenso mit einer variablen Anzahl von sichtbaren Elementen)
* konfigurierbare Anzahl von sichtbaren Elementen
* konfigurierbares oder zufälliges Start-Element
* speichern der letzten Position zwischen Seitenwechseln
* eingebaute Tastatur- und Maus-Navigation sowie Pagination

Implementation in Contao
------------------------
* beliebige Inhalte können gescrollt werden
* beliebig viele Karussells auf einer Seite
* Karussells können als Inhalts-Element oder Modul eingebunden werden
* Newsticker-Modul basierend auf dem Modul *Nachrichtenliste*
* Inhalts-Element/Modul *carouFredSel - Galerie* analog der Contao Galerie mit automatisch erstellten scrollbaren Vorschaubildern
* Inhalts-Element/Modul *carouFredSel - Hintergrund* für ein fensterfüllendes Hintergrund-Karussell mit automatisch erstellten scrollbaren Vorschaubildern
* Synchronisation zwischen zwei Karussells im gleichen Artikel
* individuelles HTML-, CSS- und JavaScript-Template pro Karussell möglich
* individuelle CSS-Formatierung pro Karussell möglich - jedes Karussell erhält eine eindeutige ID
* die meisten/wichtigsten Einstellungen können im Backend konfiguriert werden
* fehlende/zu komplexe Funktionalität kann im entsprechenden JavaScript-Template individuell hinzugefügt werden (jQuery/PHP Kenntnisse vorausgesetzt). Die meisten dynamischen Funktionen werden im Backend nicht abgebildet.

Quelle/Beispiele/Anwendungs-Ideen
---------------------------------

* http://caroufredsel.dev7studios.com (Hauptseite)
* https://github.com/gilbitron/carouFredSel (GitHub-Repository zum Quellcode des Scripts)
* http://coolcarousels.frebsite.nl (Anwendungs-Ideen)
* http://de.contaowiki.org/Dk_carouFredSel (Online-Anleitung zur Erweiterung)

Tipps/Hinweise
--------------

* Damit carouFredSel gestartet wird, muß im Seitenlayout *jQuery* zum Layout hinzugefügt werden.
* Bei Nutzung von HTML5 sollte man ein *figure { margin:0; padding:0; }* in seiner CSS-Definition verwenden, falls man das CSS-Reset Style-Sheet von Contao nicht einbindet.
* Einstellungsmodus konfigurierbar in den Contao-Einstellungen: für eine bessere Übersichtlichkeit werden in der Grundeinstellung (*einfach*) nur die am häufigsten/wichtigsten Einstellungen angezeigt. Dies kann dort bei bedarf auf *erweitert* umgeschaltet werden um Zugang zu allen Möglichkeiten zu haben.

Die Entwicklung wurde unterstützt von
-------------------------------------

* glaswasser Konzept & Design (http://www.glaswasser.com)
