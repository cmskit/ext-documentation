# Extensions

Die Funktionalität von cms-kit lässt sich einfach über so genannte Extensions erweitern.

## Allgemein

Eine Extension ist im Prinzip ein Paket an Dateien, das in einem speziellen Verzeichnis abgelegt ist. Wenn PHP-Funktionen, (Sub-)Templates, CSS-Dateien, Konfigurations-Scripte und/oder einfach nur Dokumentationen als Paket ausgeliefert und genutzt werden sollen empfiehlt sich deren Bündelung als Extension. Ausgeliefert werden Extensions als ZIP-Dateien (das Erstellen eigener Extensions mit "Bordmitteln" ist also im Prinzip kein Problem, siehe [hier](.Extension_Development.md) )

Über den **Extension-Manager** lassen sich Extensions von Admins hochladen, einsehen, bearbeiten und in das Live-System importieren.

Es werden zwei Sorten von Extensions unterschieden.

### Globale Extensions

**Pfad:** backend/extensions/[ExtensionName]/

Globale Extensions stehen *allen* Projekten innerhalb der cms-kit-Installation zur Verfügung. Sie enthalten dementsprechend *keine Projekt-spezifischen Einstellungen* (und sollten in Multi-Admin-Umgebungen auch nicht editierbar sein - dafür sind die Dateirechte entsprechend zu setzen!). Der Upload neuer Extensions in das globale Extension-Verzeichnis ist nur Super-Admins gestattet!

### Projekt-Extensions

**Pfad:** projects/[Projektname]/extensions/[ExtensionName]/

Projekt-Extensions lassen sich nur innerhalb des jeweiligen Projekts nutzen. Sie lassen sich auch von Projekt-Admins (User mit root-Status) hochladen. 

Mit dem eingeschränkten Wirkungsbereich eignen sich Projekt-Extensions insbesondere für Anwendungen im Frontend, die projektspezifische Konfigurationen und Anpassungen benötigen.

### spezielle Extensions

Es gibt (derzeit) zwei spezielle Extensions, die funktional besonders im Backend "verankert" sind:

**user**

cms-kit lässt sich (als Super-Admin) auch ohne das User-Management nutzen. Das User-Management ist mit einer Abfrage im Login-Bereich und einigen Buttons im Backend fest verankert.

**all**

Zur Ausführung von Hooks aus den Extension-Verzeichnissen wird versucht, die PHP-Dateien

    backend/extensions/all/hooks.php
und

    projects/[Projektname]/extensions/all/hooks.php

einzubinden.

Der entsprechende Hook wird nur ausgeführt, wenn die entsprechende Funktion auch vorliegt. Also bitte importieren und testen!

## das Menü


Im ersten Dropdown im Menü kann zwischen den Globalen-, den Projekt-Extensions und den Wizards gewechselt werden. 

Mit der Wahl eines Bereichs werden dessen verfügbare/anzeigbare Dokumentationen, Konfigurationsscripte und Dateien aufgelistet. Je nach Schreib-Berechtigung lassen sich Dokumente, Konfigurationen und Dateien über Editoren auch direkt bearbeiten.

Wurde eine Extension/ein Wizard gewählt 



