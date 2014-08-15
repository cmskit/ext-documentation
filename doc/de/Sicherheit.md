# cms-kit: Sicherheit

Im folgenden werden die Sicherheitskonzepte von cms-kit und Möglichkeiten diese umzusetzen angerissen.

## System-Architektur

### Modularität

cms-kit ist strikt modular aufgebaut. 

* Die Frontend-Ausgabe ist komplett unabhängig vom Backend. Eine Web-Ausgabe, die über das Internet zu erreichen ist, lässt sich z.B. auf Wunsch von der administrativen Ebene physisch entkoppeln indem das Backend auf einem anderen Server (z.B. in einer Intranet-Umgebung) vorgehalten und die Daten auf den/die öffentlichen Server gespiegelt werden. Dies empfiehlt sich auch für stark frequentierte Seiten (Web-Ausgabe über Loadbalancing).
* Daten lassen sich auf mehrere Datenbanken verteilen. Für die entkoppelte Webausgabe auf einem separaten Webserver werden beispielsweise keine Userdaten benötigt, die dann im Fall eines Einbruchs auch nicht erbeutet werden können.
* Das Backend benötigt keines der Administrations-Module (je nach Anforderung lassen sich diese einzeln zuladen oder entfernen).
* Auch Extensions und Wizards sind je nach Bedarf lad- und entfernbar.


### Datenbank-Abstraktion

* Der Datenbank-Zugriff erfolgt über den Datenbank-Abstraktions-Layer der automatisch erzeugten PHP-Klassen. Diese kapseln Datenbankanfragen in so genannte Prepared Statements und verhindern so, dass Eingaben über SQL-Injections die Datenbank kompromittieren. Zusätzlich werden auf dieser Ebene Eingabe-/Ausgabe-Filter angewendet. Somit ist der Zugriff auf die Datenbank gesichert, standardisiert, prüf- und nachvollziehbar. 
* Da die Datenbank-Klassen *nur wenige Abhängigkeiten*[^1] haben, sind sie einfach zu verstehen[^2] und einzusetzen.

[^1] : Eine ORM-Klasse ("objects/class.[objektname].php") benötigt lediglich die Klasse "objects/__database.php", die wiederum "objects/__configuration.php" includiert.

[^2] : Sicherheitslücken in Erweiterungen grosser Frameworks entstehen meist duch eigene, unzureichend implementierte Datenbankzugriffe. Diese "Abkürzungen" werden häufig aufgrund mangelhafter Kenntnisse der verfügbaren APIs gewählt.


### diverse Features 

#### Passwort-Verschlüsselung

Passwörter werden über das besonders sichere bcrypt-Hashing mit einem zusätzlichen *individuell vergebenen, zufälligen* Salt verschlüsselt. Mit dieser Kombination sind Passwörter gegen Angriffe mithilfe von Rainbow-Tables optimal geschützt.

#### Super-Admin-Zugang

Auf öffentlich zugänglichen Servern (nicht localhost) ist der Zugang für den Super-Admin-Account über ein Captcha (statt User-Namen) abgesichert. So wird ein automatisierter Angriff auf diesen besonders begehrten Zugang zusätzlich erschwert.

#### Symmetrische Verschlüsselung einzelner Datenbank-Felder

Einzelne Datenbank-Felder lassen sich per Blowfish-Verschlüsselung zusätzlich gegen Daten-Diebstahl absichern.

#### rekursive Code-Prüfsummen

Über ein Admistrations-Tool lassen sich aus Projekt- und Backendverzeichnissen rekursiv Prüfsummen generieren. So lassen sich Änderungen am Code, die ggf. auf einen Einbruch hindeuten leicht ausmachen und gezielt bekämpfen.

## eigene Maßnahmen

"Sicherheit" ist kein absolutes Fixum sondern vom jeweiligen Einsatzzweck abhängig.

### cms-kit als persönliches Daten-Verwaltungswerkzeug

Wird cms-kit lokal auf dem Home-Server oder in einem Intranet eingesetzt, braucht es entsprechend keine oder kaum Sicherungsmaßnahmen im CMS (der eigene Computer sollte natürlich gesichert sein ;-) ).

Werden Daten weitergegeben oder sind diese ggf. nicht ausreichend gegen Verlust geschützt (z.B. bei lokalen cms-kit-Instanzen auf Laptop oder Smartphone) können *sensible Datenfelder zusätzlich verschlüsselt* werden[^3]. Die  Passwörter zur Verschlüsselung der Datenfelder sollten hier nur temporär verfügbar sein (müssen also nach jedem Login erneut gesetzt werden). Diese Methode erlaubt es auch, einzelne Felder eines Datensatzes nur entsprechend autorisierten Usern zugänglich zu machen.

[^3] : eine weitere Methode auf Betriebssystemebene ist natürlich die Verschlüsselung der kompletten Festplatte oder bestimmter Verzeichnisse. Mit entsprechenden Erweiterungen lassen sich auch Datenbanken separat verschlüsseln.

<!---
### cms-kit auf Web-Servern einsetzen

die Liste ist so selbstverständlich wie langweilig.

* Server absichern: ein unzureichend gesicherter Web-Server ist das Einfallstor Nr. 1. Aktualisierte Software (insbesondere ein aktuelles PHP) und die richtigen Server-Einstellungen sind enorm wichtig.
* Passwörter: sichere Passwörter sind *eigentlich* eine Selbstverständlichkeit. Insbesondere das Super-Passwort sollte ausreichend lang und komplex sein
* Datensicherung: regelmäßige Backups der Datenbank und der Datei-Verzeichnisse erlauben die Wiederherstellung einer entsprechend aktuellen Version nach einem Daten-Crash.
* cms-kit Updates: Super-Admins bekommen beim Login ins Backend Hinweise auf neuere Versionen der Software angezeigt. Zusätzlich kann man sich per Newsletter über Systemaktualisierungen informieren lassen.
* Extensions: fremde Extensions sollten auf ihre Sicherheit hin überprüft werden. Hier helfen auch Bewertungen von anderen.
* Verzeichnisschutz via .htaccess: sollen mehrere Projekte parallel betrieben und dabei unterschiedlichen Kunden *als Root-User* verfügbar gemacht werden empfiehlt sich ein Verzeichnis-Schutz via .htaccess. Dabei lässt sich für ein Projekt z.B. der Zugriff auf andere Projektverzeichnisse, das Auslesen der Systemeinstellungen etc. verhindern.
* überflüssige Komponenten entfernen: Admin-Module, Wizards und Extensions, die nicht genutzt werden sollten ggf. entfernt werden.
* DBAL-Klassen nutzen: bei der Entwicklung eigener Programme sollten für die Datenbankzugriffe die automatisch erzeugten PHP-Klassen genutzt werden, da diese (auch durch zukünftige Updates) Schutz gegen SQL-Injections bieten.
-->


