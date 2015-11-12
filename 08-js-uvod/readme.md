# JavaScript – úvod


## Zdroje

* https://developer.mozilla.org/en-US/docs/Web/JavaScript
* http://www.w3schools.com/js/


## Co je JavaScript (JS)?

* programovací jazyk, který může být spuštěn přímo v browseru
* case-sensitive (citlivý na malá VS velká písmena)
* používá Unicode znakovou sadu
* JS podporují všechny moderní prohlížeče
* JS má přístup k HTML elementům, DOMu, CSS, může měnit dynamicky stránku
* existují bezpečnostní omezení, JS třeba nemá standardně přístup k lokálnímu filesystému (aby autor stránky nemohl třeba brát soubory uživatele)
* nemá nic společného z Javou (jen kousek názvu)
* **[JavaScript není Java](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Introduction#JavaScript_and_Java)**. Na začátku se JavaScript jmenoval LiveScript a autoři ho přejmenovali, aby se svezli na popularitě Javy od Sunu (teď Oracle)
* JS jde v prohlížeči zakázat, pak se ale připravme, že přestane fungovat většina moderních stránek
* pokud používáme JS, *teoreticky* by naše stránka měla fungovat i pokud je JS zakázaný. V praxi bych to vůbec neřešil.


### JS a ECMAScript 6

* JS je jedna z implementací ECMAScript, scriptovacího programovacího jazyka (ECMA-262 and ISO/IEC 16262).
* Aktuálně používaná verze: ECMAScript 6 (2015), viz **http://www.ecma-international.org/publications/files/ECMA-ST/Ecma-262.pdf**
* různé prohlížeče mají různou implementaci ECMAScript, základní a používané věci však většinou fungují už v moderních prohlížečích fungují dobře
* pokud napíšete JS, který funguje jen v některém prohlížeči, pak bude zřejmě problém ve vás :)
* compatibility table: **https://kangax.github.io/compat-table/es6/**
* ECMAScript 6 features: **http://es6-features.org/**


## JS konzole

* [využití JS konzole v browseru](./08-js-console.html)
* pro ladění výstupů JS


## Základy syntaxe JS

* https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide
* http://www.w3schools.com/js/js_syntax.asp
* https://developer.mozilla.org/en-US/docs/Web/JavaScript


### Datové typy

#### Primitivní datové typy (primitivní = není to objekt a nemá metody)

* **Boolean**. true a false. Ano/ne
* **null**. Prázdná hodnota. Není to prázdný řetězec! Protože je JS case-sensitive, tak Null, NULL, atd. není to samé jako null.
* **undefined**. Nedefinovaná hodnota. A top-level property whose value is undefined.
* **Number**. Číslo. 42 nebo 3.14159.
* **String**. Řetězec. "Ahoj světe."
* **Symbol** (nově v ECMAScript 6). Datový typ, jehož instance jsou unikátní a nemění se.



### Funkce

* funkce = zapouzdřená posloupnost příkazů
* funkce může přijímat vstupy (argumenty či parametry funkce) a pracovat s nimi
* smysl funkce je pro opakované použití stejného kódu (nechceme duplicitu) či stejného kódu s různými parametry
* klasické vs anonymní funkce
* klíčové slovo return vyskakuje z funkce, může mít nějakou hodnotu
* **[práce s funkcemi](./08-js-functions.html)**


### Objekty (objects)

* https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object
* objekt = něco, s čím můžu v aplikaci "hýbat"
* pararela s objekty v reálném světě
* objekt má typicky nějaké vlastnosti (hodnoty, atributy) a funkce (v některých programovacích jazycích jsou to "metody"), pomocí kterých s objektem můžu pracovat
* analogie s autem: auto je objekt, jeho vlastosti jsou např. "barva, typ, SPZ". Funkce jsou "nastartuj, zrychli, brzdi, blikej".
* **[práce s objekty](./08-js-objects.html)**

### Proměnné (variables)

* **proměnná = symbolický název pro nějakou hodnotu v aplikaci (aby se nám na něco dobře odkazovalo)**
* název proměnné určuje programátor
* doporučuji nepoužívat v názvech proměnných diakritiku (nutno přepínat CS/EN klávesnici, myslete na cizince, atd.)
* používat v názvech proměnných EN, nebo max. češtinu bez diakritiky
* název by měl být krátký (jsme líní psát dlouhé texty a děláme pak chyby), ale zase ne příliš krátký
* vhodné názvy proměnných: `current_date`, `total_revenue`, `user_name`
* nevhodné názvy proměnných: `tohle_je_ale_opravdu_moc_dlouhy_nazev_kdo_to_ma_furt_psat`, `a`, `b`, `xxx`
* proměnná musí začínat písmenem `nazev`, podtržítkem: `_nazev`, nebo dolarem: `$nazev`. Druhý a další znak můžou být i číslice 0-9, ale ne jako první znak, např.  `nazev1` je OK.
* **[práce s proměnnými](./08-js-variables.html)**


### Konstanty (constants)

* konstanta = proměnná, která se nastaví jen jednou a pak je dál jen pro čtení
* pokus o opětovné přenastavení vyhodí výjimku
* stejná pravidla pro název jako u proměnných
* **[práce s konstantami](./08-js-constants.html)**


### Literály

* literál = fixní (natvrdo) hodnoty
* nejsou to proměnné
* stejná pravidla pro název jako u proměnných



### Values (hodnoty)


### Operators (operátory)


### Expressions (výrazy)


### Keywords (klíčová slova)


### Comments (komentáře)




## Vložení skriptu do stránky

* [inline](./08-js-insert-inline.html)
* [head](./08-js-insert-head.html)
* [body](./08-js-insert-body.html)
* [external](./08-js-insert-external.html)


## Změna CSS pomocí JS

* objekt style
* [css a js](./08-js-css.html)


## Obsluha událostí

* události je něco, co se může přihodit HTML elementům
* JavaScript může na tyto události reagovat
* http://www.w3schools.com/js/js_events.asp

| Událost (event)     | Popis                                                               |
|---------------------|---------------------------------------------------------------------|
| onchange            | HTML element se změnil (třeba se změnil stav formulářového políčka) |
| onclick             | Uživatel kliknul na HTML element                                    |
| onmouseover         | Uživatel přejíždí kurzorem přes HTML element, je v něm              |
| onmouseout          | Uživatel odjel kurzorem pryč z HTML elementu                        |
| onkeydown           | Uživatel stisknul klávesu                                           |
| onload              | Prohlížeč dokončil načítání stránky                                 |


### Příklady událostí
* [onclick](./08-js-event-onclick.html) 
* [onchange](./08-js-event-onchange.html)
* [onmouseover onmouseout](./08-js-event-mouse.html)


## Čtení a zápis do formulářových polí 

* [form input, form checkbox, form confirm](./08-js-form-fields.html)
* [form password, potvrzení hesla](./08-js-form-password.html)
* http://www.w3schools.com/jsref/dom_obj_form.asp
* http://www.w3schools.com/jsref/coll_form_elements.asp



## Debug  (chytání chyb)

* Chrome: View/Developer/JavaScript Console
* [script s chybou, debug v prohlížeči](./08-js-debug.html)

## jQuery, doporučený postup v produkčním prostředí

* JS stačí umět základy, používat raději jQuery
* **[jQuery](https://jquery.com/)**
  * JS knihovna
  * zjednodušená syntaxe
  * kompatibilní s hlavními browsery
  * razantně zjednodušuje a zrychluje vývoj
  * hotové komponenty
  * lépe se debuguje
  * používá ji i [Bootstrap](http://getbootstrap.com/javascript/)
  * **bude na dalších cvičeních**
