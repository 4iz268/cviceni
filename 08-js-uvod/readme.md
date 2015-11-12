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


## Základy syntaxe JS

* https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide
* http://www.w3schools.com/js/js_syntax.asp
* https://developer.mozilla.org/en-US/docs/Web/JavaScript


### Datové typy

#### Primitivní datové typy (primitivní = není to objekt a nemá metody)

* Boolean. true a false. Ano/ne
* null. Prázdná hodnota. Není to prázdný řetězec! Protože je JS case-sensitive, tak Null, NULL, atd. není to samé jako null.
* undefined. Nedefinovaná hodnota. A top-level property whose value is undefined.
* Number. Číslo. 42 nebo 3.14159.
* String. Řetězec. "Ahoj světe."
* Symbol. Datový typ, jehož instance jsou unikátní a nemění se.


#### Objekty



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
