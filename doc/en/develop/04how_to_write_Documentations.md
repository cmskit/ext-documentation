# how to write Documentations

## Synopsis

The Documentation-System used by the Extension-Manager is simple but quite powerful. 

* every Extension, Wizard, Admin-Wizard and Template can come with its own Documentations. 
* Documentations are located in a Subfolder of the Package called *doc*, whitch holds language-specific Subfolders (eg. *en*, *de*, *fr*, ect.)
* if a Extension is opened in Extension-Manager it looks for a language-specific Sub-Sub-Folder and falls back to en if the User's Language is not available
* additionally english Documentations (if available) are shown in Menu, so it is recommended to write your Documentations first in english (and of course put them in the *doc/en*-Folder)

some Features of the Documentation-System

* Documentations can be created as Plaintext-Documents using [Markdown-Extra](http://michelf.ca/projects/php-markdown/extra)-Syntax (Mimetypes: .md or .txt) or as HTML (Mimetypes: .html or .htm) if you want to incorporate sophisticated Styles or JS-Functions.
* Documentations can be viewed without beeing logged in. If viewed inside the I-Frame there is a "create external Link"-Button to open the sharable URL
* if allowed, Documents can edited online ("edit"-Button)


## How To

1. create the Folder-Structure in your Package (eg. doc/en/[^1]) 
2. create a File with a meaningful Name[^1] with one of the following File-Extensions: .md, .txt, .html or .htm  
File-Names can contain special Characters for better Management of your Documentations
  * Filenames beginning with a Dot (eg. .additional_Infos.md) are not shown in Menu (and probably are also not shown by your File-Manager or FTP-Program!)
  * Numbers at the Beginning of the Filename are stripped in Menu. So you can create a specific Order in your Menu (eg. 01Introduction.md, 02Beginning.md, ...)
  * of course Filenames should not contain special Characters and also no Whitespaces. To create a Whitespace in Menu you can use the Underscore instead
  * on UNIX you should additionally check Permissions for Files and Folders
3. write your Documentation using your favorite Text-/Markdown-/HTML-Editor or the buid-in Code-Editor. We strongly recommend [Markdown-Extra](http://michelf.ca/projects/php-markdown/extra)-Syntax for better maintability and some neat extra-Features[^2].

### Markdown-Extra Documents

[Markdown-Extra](http://michelf.ca/projects/php-markdown/extra) is a enhanced Version of the famous and widely used [Markdown](http://daringfireball.net/projects/markdown)-Syntax. To write Markdown you can use every serious Text-Editor. Some Editors out there offering additional Support for Markdown like Syntax-Highlighting, Auto-Completition etc..

<!--
#### Relative Links and Images

Relative Links to other Documents and Images can be created like this.

	[more Infos here](.additional_infos.md) this is a Link opening ".additional_infos.md" inside the Documentation-Preview
	
	![image-alt-tag](images/screenshot.jpg) this is a Image-Tag showing screenshot.jpg located relatively to the file in images/
-->

#### Included Documents

To embed Content form another Document (like Abbrevations, Footers and other reusable Text-Snippets) you can use a special Import-Directive. The Content of this Document is loaded into the Document as it would be directly part of the Document[^3].

<pre>
<code class="markdown">
@<!-- -->import url(RELATIVE_PATH_TO_THE_OTHER_DOCUMENT)
</code>
</pre>

## Tips & Suggestions

### Chapters

You can group/organize Documents in Chapters by using Subfolders inside the Language-Folder (probably usefull if you have a lot of Documents or some Topics you want to group). Every Chapter/Subfolder is shown as a separate Accordion-Menu showing the Number of Articles and the Language.

### Table of Contents

To benefit from the automatically generated *Table of Contents* you should organize your Documents with Headings in a meanigfull way. Additionally the first heading is used to set the Document-Title in external View.

### Caching

Your markdown-documents will be translated live. This is maybe slow on high-traffic usage. To activate caching you have to alter/uncomment some code in "showDoc.php".

if you did so, you can clear cache 
<button type="button" onclick="var a=top.location.toString().split('?').shift();window.open(a.substring(0,a.length-11)+'admin/package_manager/cache/clear.php','c')">here</button>

### Searching

To provide a simple fulltext-search[^4] in your document simply put the marker **@<!-- -->SEARCHBOX@** somewhere in your text.  
The result will look like this:

@SEARCHBOX@

If you want to place it on the top-right of the Document, simply put it in a container like this and place the snippet at the very beginning of your document

<<!---->div style="float:right;margin-right:50px">@<!---->SEARCHBOX@<<!---->/div>

### Other formats than HTML

If you want to translate your documents to some other formats like PDF, DOC etc. we recommend [Pandoc](http://johnmacfarlane.net/pandoc/index.html) to do this job.

### Printing

Documentations are prepared for printing. However, by default printed HTML pages contain (ugly) headers and footers with the url, time of printing etc..

In general, the page elements for the headers and footers are controlled by the browser (IE, Firefox, and Opera, for example, all display somewhat different information).

For browsing, you can turn this off in the page setup. Using Internet Explorer as an example, go to File>Page Setup and removing the tags in the header and footer boxes. This will provide a clean print of the page without the noted headers and footers. In Firefox go to File>Print and change header/footer in Options.

### Collaborative writing

This documentation system is not a full blown wiki. Especially if you want to write your docs together with other people you will miss versioning with save-points. If you want to do that with this system we recommend you to use additionally a serious version-control-system like [git](https://en.wikipedia.org/wiki/Git_%28software%29). Git-Hosting-Providers like [Github](http://github.com) usually offer accounts for free. If you want to collaborate writing simultaneous on the same document you can use something like [Etherpad](http://etherpad.org).



[^1]: You can also create Files and Folders online using the Kickstarter. 

[^2]: like Edit- + Share-Links, Table of Contents, automatic Path-prefixes for internal Links and Images...

[^3]: this means Links and Image-Paths are treated relative to the loading Document

[^4]: because the Documentation-System is decentralized and the Documentation of a Package may contain only few "Pages", the Searchbox is sometimes an "overkill" and therefore must be placed manually. The Search will look for the Search-String in all Documents within the actual Language-Folder. There is no AND-/OR-/Wildcard-/Brainwave-Search, simply a lowercased String-Search.
