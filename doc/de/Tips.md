
## .htaccess-Datei

### Fehlerseiten definieren

Die Standardseiten, die der Apache liefert, wenn etwas nicht gefunden wurde sehen ziemlich unschön aus.
So kann man den Webserver dazu bringen stattdessen andere, viel schönere Seiten anzuzeigen.

	ErrorDocument 402 http://www.domain.de/402.html
	ErrorDocument 403 http://www.domain.de/403.html
	ErrorDocument 404 http://www.domain.de/404.html

///////////////////////////////////////////

### Verzeichnis-übergreifenden Zugriff verhindern

**Hinweis**: ggf. ist diese Funktion nicht für htaccess frei gegeben. Kontaktieren Sie in diesem Fall ihren Provider.

Sollen auf einem Server Projekte für unterschiedliche Gruppen/Kunden verwaltet werden und dabei anderen EntwicklerInnen die möglichkeit gegeben werden Extensions oder PHP-Scripte anzulegen, sollte der Verzeichnis-übergreifende Zugriff auf andere Projekte verhindert werden!

Dies geschieht über die Einrichtung eines "virtuellen Sandkastens", der den PHP-Funktionen den Zugriff auf Ressourcen ausserhalb des eigenen Projektverzeichnisses verbietet. Zusätzlich sollte der Zugriff auf das tmp-Verzeichnis gegeben sein, damit Datei-Uploads funktionieren.

	php_value open_basedir /pfad-zum-projektverzeichnis/projektname/:/tmp

//////////////////////////////////////////

### phpinfo blockieren

ggf. ist es sinnvoll die Funktion phpinfo() zu blockieren, da sich darüber einige sicherheitsrelevante Informationen auslesen lassen.

Dies geschieht über die php.ini

	disable_functions=phpinfo

oder htaccess

	php_value disable_functions phpinfo

//////////////////////////////////////////

Redirect requests using .htaccess and mod_rewrite

* Make sure Apache .htaccess is enabled
* Make sure the Apache module mod_rewrite is enabled. 
  * Execute: sudo a2enmod rewrite 
  * and see if rewrite is listed here: sudo apache2ctl -M

and then you can redirect requests using RewriteRules. Example:

	RewriteEngine On
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^(.*)$ index.php?_REQUEST=$1 [L]
