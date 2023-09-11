# JavaScript – úvod


## Zdroje

* https://developer.mozilla.org/en-US/docs/Web/JavaScript
* http://www.w3schools.com/js/


## Co je JavaScript (JS)?

* programovací jazyk, který může být spuštěn přímo v browseru
* case-sensitive (citlivý na malá VS velká písmena)
* používá Unicode znakovou sadu
* dynamicky typovaný = typ proměnné se může měnit a vyhodnocuje se za běhu (protiklad je staticky typovaný jazyk, např. Java)
* JS podporují všechny moderní prohlížeče
* JS má přístup k HTML elementům, DOMu, CSS, může měnit dynamicky stránku
* existují bezpečnostní omezení, JS třeba nemá standardně přístup k lokálnímu filesystému (aby autor stránky nemohl třeba brát soubory uživatele)
* nemá nic společného z Javou (jen kousek názvu)
* **[JavaScript není Java](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Introduction#JavaScript_and_Java)**. Na začátku se JavaScript jmenoval LiveScript a autoři ho přejmenovali, aby se svezli na popularitě Javy od Sunu (teď Oracle)
* JS jde v prohlížeči zakázat, pak se ale připravme, že přestane fungovat většina moderních stránek
* pokud používáme JS, *teoreticky* by naše stránka měla fungovat i pokud je JS zakázaný. V praxi bych to vůbec neřešil.
  * pokud je stránka na JS závislá, je vhodné uvést aspoň info o omezení funkčnosti: ```<noscript>Bez javascriptu to nepůjde...</noscript>```


### JS a ECMAScript 6

* JS je jedna z implementací ECMAScript, scriptovacího programovacího jazyka (ECMA-262 and ISO/IEC 16262).
* Aktuálně používaná verze: ECMAScript 6 (2015), viz **http://www.ecma-international.org/publications/files/ECMA-ST/Ecma-262.pdf**
* různé prohlížeče mají různou implementaci ECMAScript, základní a používané věci však většinou fungují ve všech moderních prohlížečích dobře
* pokud napíšete JS, který funguje jen v některém prohlížeči, pak bude zřejmě problém ve vás :)
* compatibility table: **https://kangax.github.io/compat-table/es6/**
* ECMAScript 6 features: **http://es6-features.org/**


## Vložení skriptu do stránky

* [inline](./08-js-insert-inline.html)
* [head](./08-js-insert-head.html)
* [body](./08-js-insert-body.html)
* [external](./08-js-insert-external.html)


## Otravná okýnka, aneb hello world!

```javascript
<script>
  alert('Tak takhle to prográmko vždycky začíná! :)');
</script>
```

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
* **undefined**. Nedefinovaná hodnota.
* **Number**. Číslo. 42 nebo 3.14159.
* **String**. Řetězec. "Ahoj světe."
* **Symbol** (nově v ECMAScript 6). Datový typ, jehož instance jsou unikátní a nemění se.
* **[práce s datovými typy](./08-js-datatypes.html)**


### Proměnné (variables)

* **proměnná = symbolický název pro nějakou hodnotu v aplikaci (aby se nám na něco dobře odkazovalo)**
* název proměnné určuje programátor
* doporučuji nepoužívat v názvech proměnných diakritiku (nutno přepínat CS/EN klávesnici, myslete na cizince, atd.)
* používat v názvech proměnných EN, nebo max. češtinu bez diakritiky
* název by měl být krátký (jsme líní psát dlouhé texty a děláme pak chyby), ale zase ne příliš krátký
* vhodné názvy proměnných: `currentDate`, `totalRevenue`, `userName`
* nevhodné názvy proměnných: `tohle_je_ale_opravdu_moc_dlouhy_nazev_kdo_to_ma_furt_psat`, `a`, `b`, `xxx`
* proměnná musí začínat písmenem `nazev`, podtržítkem: `_nazev`, nebo dolarem: `$nazev`. Druhý a další znak můžou být i číslice 0-9, ale ne jako první znak, např.  `nazev1` je OK.
* **[práce s proměnnými](./08-js-variables.html)**


### Konstanty (constants)

* **konstanta = proměnná, která se nastaví jen jednou a pak je dál jen pro čtení**
* pokus o opětovné přenastavení vyhodí výjimku
* stejná pravidla pro název jako u proměnných
* **[práce s konstantami](./08-js-constants.html)**


### Funkce

* **funkce = zapouzdřená posloupnost příkazů**
* funkce může přijímat vstupy (argumenty či parametry funkce) a pracovat s nimi
* smysl funkce je pro opakované použití stejného kódu (nechceme duplicitu) či stejného kódu s různými parametry
* klasické vs anonymní funkce
* klíčové slovo return vyskakuje z funkce, může mít nějakou hodnotu
* **[práce s funkcemi](./08-js-functions.html)**


### Pole (arrays)

* **pole = seznam více hodnot (neplést s seznamem List v Javě!)**
* přístup k poli přes index (pořadové číslo prvku v poli)
* **pole jsou číslovaná od 0** - **javascript neumí pole s jinými, než číselnými indexy**
* stejná pravidla pro název jako u proměnných
* pole jsou v JS dynamicky typovaná, jdou tedy za běhu rozšiřovat, měnit, atd. (narozdíl od Javy, kde se pole inicializuje s velikostí a pak už jeho velikost měnit nejde)
* **[práce s polem](./08-js-arrays.html)**
* metody pro práci s polem:
  * **.pop()** - odebrání posledního prvku
  * **.push(xxx)** - přidání prvku na konec
  * **.shift()** - odebrání prvního prvku
  * **.unshift()** - přidání prvku na začátek
  * **.splice(index,počet)** - odebrání prvků z pole
  * viz [JavaScript Array Methods](http://www.w3schools.com/js/js_array_methods.asp)


### Operátory (operators)

* **operátor = provádí nějakou operaci nad daty (typicky přirazení, porovnání, matematika, podmínka, atd.)**
* přiřazovací - assignment
* srovnávací - comparison
* aritmetické - arithmetic
* logické - logical
* řetězcové - string
* podmínečné (ternární) - conditional (ternary)
* relační - relational (nebudeme ukazovat)
* unární - unary (nebudeme ukazovat)
* bitové - bitwise (nebudeme ukazovat)
* **[práce s operátory](./08-js-operators.html)**


###  Řídící struktury (control flow)

* **řídící struktura = řídí tok programu, usměrňuje ho, dává směr toku**
* typicky podmínka "když něco, tak udělej tohle, nebo tohle"
* **if else**
* **switch case**
* **try catch finally**
* **[práce s řídícími strukturami](./08-js-control-flows.html)**


### Cykly a iterace

* **cyklus = opakuje určitou část kódu**
* iterátor = objekt je iterátorem, pokud umí procházet nějakou kolekci dat a ví, na které pozici se zrovna nachází (resp. ví alespoň, jaký bude příští prvek). Zná tedy pořadí procházení.
* **for**
* **do .. while**
* **while**
* **[práce s cykly](./08-js-loops.html)**


### Rezervovaná klíčová slova (keywords)

* **tato slova nelze v ECMAScript 6 použít jako názvy proměnných nebo funkcí:**
  * break
  * case
  * class
  * catch
  * const
  * continue
  * debugger
  * default
  * delete
  * do
  * else
  * export
  * extends
  * finally
  * for
  * function
  * if
  * import
  * in
  * instanceof
  * let
  * new
  * return
  * super
  * switch
  * this
  * throw
  * try
  * typeof
  * var
  * void
  * while
  * with
  * yield
  * enum (budoucí rezervované slovo)
  * await (budoucí rezervované slovo)
  * implements (budoucí rezervované slovo)
  * package (budoucí rezervované slovo)
  * protected (budoucí rezervované slovo)


### Komentáře (comments)

* text, nebo kousky kódu, které programovací jazyk nemá vyhodnocovat. Pro vývojáře.
* kód, který potřebuje často komentáře, není dobře napsaný. Ze syntaxe by mělo být vidět, co se dělá.
* **obecné pravidlo: nekomentujeme CO A JAK kód dělá (to má být vidět z čistého zápisu), komentujeme PROČ to dělá**
* **[práce s komentáři](./08-js-comments.html)**


## Změna CSS pomocí JS

* objekt style
* [css a js](./08-js-css.html)


##

## Obsluha událostí

* události je něco, co se může přihodit HTML elementům (někam klikneme, na něco najedem myší atp.)
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


---


### Objekty (objects)

* [viz objects v kapitole 11](./11-ajax/11-js-objects.html)
* [viz prototypes v kapitole 11](./11-ajax/11-js-prototype.html)

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
