# 12. HTML 5 API

### Offline aplikace (application cache)

  * cachování = uchování a použití lokální kopie dat, abychom nemuseli načít soubor "zdaleka"
  * HTML 5 application cache - uložení stránek na disk, abychom se na ně mohli podívat, i když nejsme připojení k Internetu
  * funguje dobře u statických stránek či zdrojů (CSS, JS, obrázky)
  * z podstaty věci nemůže fungovat v případě server-side jazyků (PHP, Rails, Java), protože tam logiku provádí jazyk na serveru
  * výhody
    * offline zobrazení stránek (uživatel zadá URL v Internetu a zobrazí se mu naše stránky, i když není připojen)
    * rychlost - zdroje se můžou načíst z lokálního disku, kam se uložily, když jsme byli online. Cache se používá, i když jsme online.
    * web je dostupný i v případě chyby - uživatelům se zobrazí web, i když nám nejede server
    * **na mobilech to má větší smysl, než na desktopu, to je jediná opravdová výhoda**
  * nevýhody
    * nevýhody převáží výhody (viz dole, na co si dát pozor)
    * většina aplikací je dynamických a uživatel nevidí aktuální data
    * **application cache je zbytečně složitá, doporučuji shlédnout, pochopit a nepoužívat**
  * cache začneme používat přidáním odkazu na manifest soubor do HTML elementu:

```html
<html manifest="demo.appcache">
```
  Struktura manifest souboru:

```
CACHE MANIFEST
# tohle se cachuje
bootstrap.min.css
jquery-1.11.3.min.js

FALLBACK:
# tyhle soubory pouzij, pokud neni sit
img/hd.jpg img/kolo.jpg

NETWORK:
# tady muzeme dat, co se nikdy nema cachovat
```

  * stránky, které mají odkaz na manifest, jsou cachovány automaticky, není třeba je vypisovat do manifestu
  * Pozor na:
    * Pokud definujeme appcache, browser ji používá, i když jsme online, zkracuje se tím doba načtení stránky
    * **Pokud změníme jakékoli stránky, které používají appcache, pak musíme změnit také obsah manifest cache souboru, jinak neuvidíme změny!** V příkladu používám datum a čas poslední změny.
    * **Nikdy necachujte manifest, protože pak se i změněný manifest tahá z cache a změny se nikdy neprojeví**
    * Pokud cachujeme stránku, která používá další zdroje (třeba CSS, JS soubory) a tyto zdroje nebudou explicitně uvedeny v manifestu, nebudou cachovány.
  * ke cache jde přistupovat i přes JS, viz http://www.html5rocks.com/en/tutorials/appcache/beginner/#toc-updating-cache
  * http://www.w3.org/TR/2011/WD-html5-20110525/offline.html
  * https://developer.mozilla.org/en-US/docs/Web/HTML/Using_the_application_cache
  * http://alistapart.com/article/application-cache-is-a-douchebag
  * http://www.html5rocks.com/en/tutorials/appcache/beginner/
  * **[práce s application cache](./12-api-appcache.html)**


## Detekce offline/online stavu

  * aplikace může reagovat na přepnutí online/offline stavu
  * způsoby:
    * registrujeme **addEventListener** na objekt **window**, **document** nebo **document.body**
    * přiřadíme vlastnosti  **.ononline** nebo **.onoffline** objektu **document** nebo **document.body** na JS funkci
    * přidáme JS do atributů **ononline="..."** nebo **onoffline="..."** do elementu **body**
  * https://developer.mozilla.org/en/docs/Online_and_offline_events
  * **[práce s detekcí online/offline stavu](./12-api-online-offline-detection.html)**

## Service workers

  * **W3C Working Draft, není finální verze, poslední update 25 June 2015, http://www.w3.org/TR/service-workers/**
  * poslední verze (nightly build): https://slightlyoff.github.io/ServiceWorker/spec/service_worker/index.html
  * service worker - kód, který běží v pozadí stránky a něco dělá
  * náhrada application cache
  * protože pracuje se sítí, vyžaduje HTTPS (kvůli man-in-the-middle útokům)
  * novinka, pozor na kompatibilitu mezi browsery: https://jakearchibald.github.io/isserviceworkerready/
  * je to zase jenom JS, ale z bezpečnostních důvodů nemá přístup přímo k DOMu, registrujeme pro stránku události, které se pak volají jako callback
  * https://developer.mozilla.org/en-US/docs/Mozilla/Projects/Social_API/Service_worker_API_reference
  * http://www.html5rocks.com/en/tutorials/service-worker/introduction/
  * https://jakearchibald.com/2014/service-worker-first-draft/


## Geolokace

* geolokace = zjištění, kde se na Zemi uživatel nachází, typicky souřadnice
* jak to funguje?
  * každý browser pošle request na nějakou službu, kterou má v implementaci pro GEO zadanou a pošle službě svou IP, MAC, seznam WiFi pointů, a vše, k čemu má přístup a co jde nějak použít pro zjištění pozice
* z důvodu soukromí musí uživatel se zaměřením souhlasit, nejde zjistit lokaci bez vědomí uživatele (jedině třeba podle IP adresy, ale to už není HTML 5 Geo API)
* ne všechny prohlížeče geo podporují, je vhodné vyjímkovat script
* přístup ke geo api je přes JS (jak jinak :)
* existují i knihovny pro jQuery: http://jquerygeo.com
* v budoucnu bude nutné používat https server kvůli insecure origin, viz https://sites.google.com/a/chromium.org/dev/Home/chromium-security/deprecating-powerful-features-on-insecure-origins
* příklady použití:
  * zobrazení na mapě
  * spočítání vzdálenost k cílovému místu včetně naplánování ideální cesty (např. pomocí Google Maps)
  * hledat služby jen ve městě, ve kterém uživatel je
  * nejbližší restaurace, hotely, obchody, kina, nemocnice, čerpací stanice...
  * kombinace: nejbližší italské restaurace s nejvyšším hodnocením a nejnižší cenou
  * identifikovat zemi uživatele a podle ní přizpůsobit obsah (statistika, jazyková verze aplikace, výchozí měna, formátování data a času, apod.)
* desktop pozná lokaci jen podle IP, WiFi, zaměření nebude tak přesné jako u mobilů
* na mobilech je typicky k dispozici GPS a vzdálenost od BTS stanic, zaměření je přesnější, ale kvůli GPS může být pomalejší
* https://developer.mozilla.org/en-US/docs/Web/API/Geolocation/Using_geolocation
* http://www.w3schools.com/html/html5_geolocation.asp
* **[práce s geolocation](./12-api-geo.html)**
* **[práce s geolocation a zobrazení v mapě](./12-api-geo-map.html)**


## Drag & Drop

* přetahování objektů myší (chytnu, potáhnu, pustím)
* např. přesunutí položky do košíku, šachy (táhnutí figurek), apod.
* browsery default podporují:
  * přetahování označeného textu
  * obrázky (třeba na desktop, do adresního řádku)
  * soubory do input file elementu
  * pokud chceme něco víc, musíme si to napsat sami 
* při přetahování musíme určit:
  * zdroj - co budeme přetahovat, za co půjde chytit (source)
  * typ dat, která se přetahují (data payload)
  * cíl - kam budeme přetahovat, kam to půjde pustit (target)
* události, které lze zachytit při drag and drop:
  * **dragstart** - začali jsme přetahovat
  * **drag** - přetahujeme
  * **dragenter** - přetahujeme a právě jsme vstoupili do komponenty, která čeká na drop
  * **dragleave** - přetahujeme a právě jsme opustili komponentu, která čeká na drop
  * **dragover** - jsme v komponentě, která čeká na drop (bude voláno opakovaně v řádu milisekund)
  * **drop** - upustili jsme, co jsme přetahovali
  * **dragend** - ukončili jsme přetahování
* http://www.html5rocks.com/en/tutorials/dnd/basics/
* http://www.w3schools.com/html/html5_draganddrop.asp
* https://developer.mozilla.org/en-US/docs/Web/Events/dragenter
* **[práce s drag and drop](./12-api-dnd.html)**

## Práce se soubory
* **W3C Working Draft, není finální verze, poslední update 21 April 2015, http://www.w3.org/TR/FileAPI/** 
* https://developer.mozilla.org/en/docs/Web/API/FileReader
* http://www.html5rocks.com/en/tutorials/file/dndfiles/
* http://blog.teamtreehouse.com/reading-files-using-the-html5-filereader-api

## Web storage
* web storage - malá lokální databáze
* používá se také název DOM storage, session storage (neplést s klasickými sessions!) nebo local storage
* uchovává data jako klíč:hodnota = key/value store
* datové typy: klíč je string, hodnota taky string
* jakýkoli jiný typ dat musíme převést na string, lze tak ukládat třeba JSON
* maximální velikost 5MB (Chrome, Opera, Firefox), 10 MB MSIE (klasické cookies max 4 KB)
* chápat jako rozšíření cookies, nikoli jako plnohodnotnou databázi
* dočasné úložiště, neukládat tam ostrá data!
* pozor na podporu mezi browsery, starší nepodporují, kód by měl mít fallback pro tyto případy
* 2 formy uložení:
  * **sessionStorage** - data jsou platná jen pro aktuální session (než uživatel zavře okno nebo záložku s aplikací)
  * **localStorage** - data budou uchována i po zavření okna, nemají expiraci, jsou tam "pořád"
* pozor na incognito mode v browserech - pak se může stát, že browser smaže data, i když byla uložena v localStorage
* jde používat i jako jQuery plugin: https://github.com/julien-maurel/jQuery-Storage-API
* **POZOR: prohlížeče si mezi sebou web store nesdílí, každý má svou vlastní databázi. Pokud např. něco uložíte v Chrome, tak to ve Firefoxu na stejném počítači nepřečtete!**
* http://www.w3.org/TR/webstorage/
* https://developer.mozilla.org/en-US/docs/Web/API/Web_Storage_API/Using_the_Web_Storage_API
* https://developer.mozilla.org/en-US/docs/Web/API/Web_Storage_API
* http://www.w3schools.com/html/html5_webstorage.asp
* **[práce se sessionStorage](./12-api-session-storage.html)**
* **[práce s localStorage](./12-api-local-storage.html)**