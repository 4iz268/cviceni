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
TODO

### History
TODO

### Location
- http://www.w3schools.com/jsref/obj_location.asp

### Math
TODO

## Časování
TODO timer