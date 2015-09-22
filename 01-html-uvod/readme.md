# Úvod do HTML

##  Organizační informace

* školní server, přístupy, SFTP, viz http://webovky.vse.cz/php-mysql/22-server-eso-vse-cz
* http://eso.vse.cz/
* editor * PSPAD, nebo jakýkoli jiný, který máte rádi
* je na ucebnach PSPAD?
* zajistit si redukci na projektor, budu to ukazovat na macu

### Kontakt, konzultační hodiny

* jiri@hradil.cz
* moje konzultační hodiny NB 413, každý pátek 10:00-11:00

### Zdroje

* http://webovky.vse.cz/
* HTML primární zdroj, final verze specifikace z 28.10.2014: http://www.w3.org/TR/html5/
* zdrojáky ze cvičení: https://github.com/4iz268/cviceni
* kniha Dive into HTML5, zdarma, kus přeložený, můžete pomoci s překladem: http://kniha.html5.cz
* HTML5 tvorba dokonalých webových stránek: http://htmlguru.cz/
* http://www.w3.org/standards/webdesign/htmlcss
* http://www.w3schools.com/tags/
* validátor: http://validator.nu/
* http://validator.w3.org/
* Plus zdroje uvedené v Sylabu předmětu

### Časový plán na semestr

Viz sylabus.

### Požadavky na absolování (cvičení)

* semestrální práce, HTML prezentace, max. 100 bodů, pro absolování nutno min. 50 bodů
* na co si dát pozor: musíte to psát sami a být schopni vysvětlit každou část
* extra body za aktivitu

### HTML prezentace

* viz http://webovky.vse.cz/pozadavky-hodnoceni/staticka-prezentace
* sémantické značení
* musí fungovat i při vypnutí CSS, Flashe, JS
* styly pro tisk
* layout bez tabulek * nicméně, pokud si přede mnou dokážete obhájit, proč jste MUSELI použít tabulky, tak si je použijte, ale nemusím vám to uznat
* web bude dostupný na Internetu * libovolný hosting nebo na školním serveru
* alespoň 5 stránek,
* alespoň 2 sloupečky
* projet W3C validátorem, musí být validní
* někdy se validátor plete, pak musíte ale dokázat, že máte pravdu :)

### Školní server eso

eso.vse.cz

* nahrávání HTML prezentací
* viz http://eso.vse.cz/
* dostupné z Internetu pod http://eso.vse.cz/~xname/

# 1. cvičení

Základy HTML

* základy syntaxe, formátování, odkazy
* příprava zdrojového kódu v HTML (HTML editory) a prohlížení výsledku v prohlížeči

## Editory

* PSPAD (instalován na učebnách)
* Notepad.exe
* Textmate (OSX)
* Sublime Text
* nebo jakýkoli jiný, který máte rádi

## Prohlížeče

Stačí, když vaše stránky budou podporovat tyto 3 (MSIE, Firefox, Chrome):

* MSIE
* Mozilla Firefox * budeme používat na cvičeních, má firebug plugin (něco podobného má chrome rovnou v sobě)
* Google Chrome * doporučuji kvůli rychlosti

Ostatní (minoritní prohlížeče, nebudu kontrolovat funkčnost):

* Opera * skomírá
* Safari * na Macu
* ostatní jsou minor


## Základy syntaxe

HTML

What is HyperText

http://www.w3.org/WhatIs.html

Hypertext is text which is not constrained to be linear.

Hypertext is text which contains links to other texts. The term was coined by Ted Nelson around 1965 (see History ).

HyperMedia is a term used for hypertext which is not constrained to be text: it can include graphics, video and sound , for example. Apparently Ted Nelson was the first to use this term too.

Hypertext and HyperMedia are concepts, not products.

See also:

* A list of terms used in hypertext litterature.
* Conferences
* Commercial (and academic) products
* A newsgroup on hypertext, "alt.hypertext" .
* WorldWideWeb is a project which uses hypertext concepts.

## DOCTYPE

* určuje typ dokumentu, instrukce prohlížeči, jak a co má zobrazit
* nejedná se o HTML tag
* musí být jako první v dokumentu

XHTML 1.0 Strict

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd”>

XHTML 1.0 Transitional

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

XHTML 1.0 Frameset

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN” "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

XHTML 1.1

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN” "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

HTML5

<!DOCTYPE html>

### XHTML

* tagy jsou ukončené, i jednoduché tagy musí být napsány např. jako <br/>
* tagy a atributy malými písmeny
* styly a scripty jsou externí soubory
* stránka je validní XML

### HTML5

* sémantika
* canvas
* lepší formy * email, colorpicker, search form
* všechny funkce nepodporují všechny browsery, nutno zkusit
* kniha Dive Into HTML5 * http://kniha.html5.cz

## Základní struktura dokumentu

* DOCTYPE * kvůli jednoduchosti budeme na cvičení používat HTML 5, pokud odevzdáte na cvičení XHTML, je to jedno, vyvarovat se HTML 4
* html
* head
* body

## Značky

* párové
* jednoduché

## Blokové elementy

### h1, h2, h3, h4, h5, h6

* header, hlavička * nadpisy
* měly by jít po úrovních, každá stránka by měla mít jen 1 h1 a postupně jít dolů
* podle toho indexují roboti
* v HTML5 už nemusí být 1 pro celou stránku, ale i pro část stránky (tag article, atd., viz kniha)

### div

* division = sekce, blok
* kontejner, seskupuje elementy
* obdélník, obaluje elementy
* hlavně kvůli formátování pomocí CSS
* default se za ním zalomí řádek

### p

* paragraph = odstavec
* základ formátování pro text

### blockquote

* bloková citace * citace z jiného zdroje
* do parametru cite se uvádí URL adresa zdroj
* browser provede default odsazení.

### q * inline element

* quote = řádková citace
* inline citace, krátká
* browser neprovede zalomení řádku

### pre

* preformatted text
* zachovává všechny mezery a zalamování řádků
* typicky ukázka zdrojového kódu nebo kus textu odjinud, ve kterém nechceme ztratit formátování

### hr

* horizontal rule * horizontální oddělovač
* nepárová značka <hr /> vykreslí na stránce horizontální čáru

### br

* break = ruční zalomení řádky
* neměli bychom jich používat víc za sebou, špatně se s tím pak pracuje a je to nepřehledné
* Používat místo toho div, p a mezery řešit v CSS

### table

* tabulka, budeme brát 2. cvičení za týden

### ul, ol, li, dl, dt, dd

* seznamy, budeme brát 2. cvičení za týden

### form a jeho elementy, label, input, textarea

* formuláře
* budeme brát na 3. cvičení za 2 týdny

## Inline elementy

### a

* anchor [ˈæŋkə]
* párová značka
* uvnitř může být text, obrázek
* hypertextový odkaz
* src = odkaz kam, pokud je na začátku #, pak je to odkaz na místo v tom samém dokumentu
* target _blank, _top, _parent, _self (default)
* v HTML 4 také name pro quote v documentu, ale v HTML 5 je používáno už jen id
* default je odkaz podtržený a barevný (modrý), rozlišuje se barva navštíveného a nenavštíveného odkazu, lze změnit pomocí CSS

### img

* image, obrázek
* budeme brát na 2. cvičení

### span

* =rozpětí
* jen inline kontejner, jen seskupuje prvky, nereprezentuje nic konkrétního
* jako div, ale řádkový
* kvůli formátování

### cite

* krátká citace, kterou chceme uvést v textu
* “title of work” * název knihy, skladby, díla
* v HTML 4 je to citace, v HTML 5 title of work
* browsery obyčejně zobrazují kurzívou


### sub, sup

* dolní a horní index
* moc se nepoužívá

### strong

* strong importance = vysoká důležitost
* zvýraznění
* dříve b (bold), teď používat tohle, protože to má i sémantický význam
* zvýraznění nemusí být tučné, je to default zobrazení browseru
* lze změnit pomocí CSS
* logický stav
* hlavně kvůli spiderům
* silná sémantická váha

### b

* bold
* chápu, proč se může zdát b lepší = je to kratší
* b se dle HTML5 může používat jako last resort, pokud prostě nevyhovuje h1, h2..h6, ani em, ani strong
* není to výslovně zakázáno, jen to postrádá sémantický význam
* osobně s b nemám problém :)
* fyzický stav


#### strong vs b

* https://www.seroundtable.com/google-strong-bold-tag-17552.html * Google inženýr: je to úplně stejný

### em

* emphasize = zdůraznění
* browsery to default zobrazují kurzívou

### i

* italic
* alternate voice or mood
* technický termín, cizí jazyk
* prostě se to nějak liší od okolního textu
* podobné jako b, mělo by to být last resort, pokud nejde použít strong, em, atd.

Zdůraznění části text * vykreslováno zpravidla kurzívou.

### Komentáře

* <!-* text komentare —>
* Nevýhoda komentářů: je to vidět ve zdrojácích. V praxi jsem viděl, jak programátoři cpali do zdrojáků citlivé nebo hanlivé texty * bacha na to.
* Ukázat: zobrazení zdrojáku v browseru.
* Jak schovat komentáře: udělat jako PHP komentář, PHP generuje HTML a PHP komentáře vynechává.
* HTML cesta, jak utajit? Obfuskátory. Zkuste si sami najit, koho to zajímá. Často je to ale jenom komplikace, pokud máte HTML kod, který se musí schovat, tak je něco špatně.

### Zápis matematických vzorců

Math ML

* není podporován Chrome, viz seznam, kdo to podporuje: http://caniuse.com/#feat=mathml