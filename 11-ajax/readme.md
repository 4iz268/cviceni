# 11. Ajax, JS objekty

## Ajax

* asynchronous JavaScript and XML
* technologie, která umožňuje tvorbu asynchronních aplikací
* asynchronní = v pozadí




---

### TODO:
- odeslání a zpracování XHR požadavku
- držení stavu a historie
- zpracování odpovědi ve formátech XML a JSON
- aktualizace části stránky na základě odpovědi XHR




## Objekty v JavaScriptu

* **objekt = něco, s čím můžu v aplikaci "hýbat"**
* OOP = objektově orientované programování = tvorba vlastního světa v kódu
* ve světě jsou objekty, proto programujeme tak, že tvoříme objekty a říkáme, co mají dělat (umět) a jak se mají chovat (reagovat na vstupy, události)
* objekt má typicky nějaké vlastnosti (hodnoty, atributy) a funkce (v některých programovacích jazycích jsou to "metody"), pomocí kterých s objektem můžu pracovat
* analogie s autem: auto je objekt, jeho vlastosti jsou např. "barva, typ, SPZ". Funkce jsou "nastartuj, zrychli, brzdi, blikej".
* **[práce s objekty - konstruktory, inicializátory](./11-js-objects.html)**
* https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object


## Prototypes

* **prototype = rozšíření funkce o další vlastnosti (atributy, funkce) pro všechna další volání**
* **POZOR: rozšiřujeme pouze vlastní funkce, nikoli cizí, mohlo by to vést k chybám. Nikdy nerozšiřujeme standardní JavaScript objekty!**
* paralela s rozšířením třídy (Class) v Javě. Každá nová instance z této rozšířené třídy bude mít tyto nové vlastnosti.
* **[práce s prototypy](./11-js-prototypes.html)**
* http://www.w3schools.com/js/js_object_prototypes.asp


## Výchozí JavaScriptové objekty

### Window
* reprezentuje otevřené okno prohlížeče
* default objekt, funkce jako alert(), confirm() apod. bez určení objektu jsou funkce objektu window
* některé z funkcí objektu window:
  * **document()** - odkaz na DOM objekt, reprezentující celý HTML DOM stránky
  * **alert()** - zobrazí upozornění. Browser může potlačit volání, pokud si to uživatel přeje, na zobrazení tedy nelze spoléhat.
  * **confirm()** - dialogové okno OK/Cancel. Používáme např. pro potvrzení odeslání nebo smazání formuláře.
  * **blur()** - zruší zaměření okna (udělá ho neaktivní)
  * **focus()** - zaměří okno (udělá ho aktivní)
  * **getSelectionText()** - získá text, který uživatel na stránce označil
  * **open()** - otevře nové okno, parametr je URL
  * **close()** - zavře aktivní okno
  * **print()** - pošle stránku na tiskárnu (jako kdybychom zvolili Print z menu nebo stiskli CTRL+P)
  * **prompt()** - zeptá se uživatele na vstup - nejde kontrolovat, doporučuji využít normální formulář
  * **resizeTo()** - změní velikost okna na zadaný počet pixelů (výška, šířka)
  * **[práce s window objektem](./11-js-window.html)**
  * http://www.w3schools.com/jsref/obj_window.asp

### History
* reprezentuje historii stránek, na kterých uživatel byl
* z bezpečnostních důvodů nejde získat seznam stránek, pouze se mezi nimi pohybovat dopředu/zpět
* atributy:
  * length - počet položek v historii
* funkce:
  * **back()** - jdi zpět o 1 krok. Stejně jako by uživatel kliknul na "Zpět" v browseru.
  * **forward()** - jdi dopředu o 1 krok. Stejně jako by uživatel kliknul na "Vpřed" v browseru.
  * **go()** - jdi na stránku z historie. Kladné číslo - počet kroků vpřed, záporné číslo = počet kroků zpět. Akceptuje i URL.
* **[práce s history objektem](./11-js-history.html)**
* http://www.w3schools.com/jsref/obj_history.asp


### Location
- http://www.w3schools.com/jsref/obj_location.asp

### Math
TODO

## Časování
TODO timer