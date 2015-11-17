# 9. jQuery, DOM strom

## jQuery - co to je?
- univerzální javascriptová knihovna (framework) pro výrazné zjednodušení práce a urychlení vývoje
- obaluje funkcionalitu javascriptu a rozdíly mezi prohlížeči
- je využíván celou řadou aplikací, dalších skriptů atd.
- je k dispozici celá řada pluginů
- nejde o jediný dostupný framework
  - alternativou s obdobnou funkcionalitou je *Mootools*
  - existuje také řada MVC javascriptových frameworků - např. *Angular.js*, *KnockoutJS*...

### Načtení jQuery
- z CDN zdroje - viz např. https://code.jquery.com/
- stažení JS souboru a jeho připojení ke stránkám
- pro řadu běžných operací stačí využít soubor **jQuery Core**
- pro vizuální prvky postavené na jQuery je potřeba připojit také **jQuery UI** s příslušnými styly

```html
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js" ></script>
```

### Další zdroje
- [jQuery API](https://api.jquery.com/)
- [jQuery Tutorial](http://www.w3schools.com/jquery/)
- [jQuery zkoušečka](http://jquery.jslab.net/zkousecka)

## Základy práce s jQuery

### Jednoduchá práce s více prvky
- pro výběr prvků použijeme funkci **$**, které jako parametr předáme stejný selektor, jako v CSS
  - ale to už vlastně umíme :)
  - [jQuery Selectors](http://www.w3schools.com/jquery/jquery_ref_selectors.asp)
  - [jQuery selector tester](http://www.w3schools.com/jquery/trysel.asp)
- na vybraných prvcích zavoláme funkci provádějící zvolenou akci:
```javascript
$('p#mujOdstavec').hide(); //skrytí odstavce s ID "mujOdstavec"
```

- v rámci samotného javascriptu lze též vybrat více prvků najednou - viz [HTML DOM querySelectorAll() Method](http://www.w3schools.com/jsref/met_document_queryselectorall.asp)

### Připojování událostí pomocí jQuery
- *Co jsou to události?* - viz [minulé cvičení](../08-js-uvod)
- při použití jQuery obvykle nepoužíváme atributy pro připojení událostí
- po připravení stránky zavoláme inicializační řást javascriptu, v rámci které připojíme k vybraným elementům příslušné události
- lze připojit víc funkcí (handlerů) k jedné události, zároveň lze připojit jednu událost k většímu množství prvků najednou
- pro události máme k dispozici buď pojmenované funkce pro připojení události (**.click(handler)**, **.dblclick(handler)**, **.focus(handler)**,...), nebo univerzální funkci **.on('event',handler)**
- pro odebrání události lze využít funkci **.off('event')**, pokud má být reakce na událost spuštěna pouze jednou a poté odebrána, lze využít připojení pomocí funkce **.one('event',handler)**
- přehled eventů a souvisejících funkcí: [jQuery Event Methods](http://www.w3schools.com/jquery/jquery_ref_events.asp)
```javascript
  $('#klikac').click(function(){
    //kód spouštěný při události onclick
  });
```

### Spuštění kódu až po připravení stránky
- pokud chceme manipulovat s prvky na stránkách, je potřeba, aby tyto prvky již byly připraveny v rámci DOM stromu stránky
```javascript
//zápis v plné podobě
$( document ).ready(function() {
  // tady bude vlastní kód...
});

//možné zkrácení zápisu
$(function() {
  // tady bude vlastní kód
});
```

- ukázkové příklady:
  - [document ready](./09-jquery-document-ready.html)
  - [reakce na události](./09-jquery-events.html)


### Často užívané jQuery funkce
- pro manipulaci s prvky a jejich obsahem máme k dispozici celou řadu funkcí
- většina funkcí může mít zároveň připojenou "callback funkci" (funkci, která se spustí po dokončení požadované akce)

#### Funkce pro zobrazování prvků
- **.show()** - zobrazení daného prvku; při zavolání s číselným parametrem bude zobrazení animované: ``` $('#a1').show(1000); ```
- **.hide()** - skrytí daného prvku
- **.toggle()** - přepnutí zobrazení daného prvku
- **.fadeIn()**, **.fadeOut()**, **.slideDown()**, **.slideUp()**, **.stop()**
- ukázkové příklady
  - [Zobrazení prvků](./09-jquery-display.html)
  - [Callback funkce](./09-jquery-display-callback.html)

#### Funkce pro práci s CSS
- **.addClass('xxx')** - přidání zvolené třídy
- **.removeClass('xxx')** - odebrání zvolené třídy
- **.hasClass('xxx')** - funkce pro zjištění, jestli má daný prvek zvolenou třídu
- **.css('propertyname')** - funkce pro zjištění hodnoty zvolené CSS vlastnosti
- **.css('propertyname','value')** - funkce pro nastavení hodnoty zvolené CSS vlastnosti
  - lze zadat také pole vlastností
  ```javascript

   $("p").css({"background-color": "yellow", "color": "maroon"});

  ```
- [ukázkové příklady](./09-jquery-css.html)
- [funkce pro práci s rozměry](http://www.w3schools.com/jquery/jquery_dimensions.asp)

#### Funkce pro manipulaci s obsahem prvků
- **.text()** - získání obsahu daného prvku v podobě prostého textu
- **.text('xxx')** - nastavení textového obsahu prvku
- **.html()** - získání HTML obsahu daného prvku
- **.html('xxx')** - nastavení HTML obsahu daného prvku
- [ukázkové příklady](./09-content.html)

#### Funkce pro manipulaci s DOM stromem
- *Co je to DOM strom?*
- **.append('xxx')** - připojení daného HTML obsahu na konec obsahu prvku
- **.prepend('xxx')** - připojení daného HTML obsahu na začátek obsahu prvku
- **.before(xxx)**, **.after(xxx)** - vložení prvků do daného umístění v rámci DOM stromu
- **.remove()** - funkce pro odebrání prvku
- **.empty()** - funkce pro vyprázdnění obsahu daného prvku
- procházení DOM stromu: [jQuery Traversing](http://www.w3schools.com/jquery/jquery_traversing.asp)
- u všech funkcí pracujících s HTML obsahem lze využít buď HTML zápis, nebo jQuery objekty
- nový jQuery objekt, který není v DOM stromu, lze vytvořit např.:
  ```var divObj = $('<div></div>').text(content);```
- **.appendTo** - připojení jQuery objektu k jinému objektu zadanému selektorem
- ukázkové příklady:
  - [manipulace s prvky](./09-jquery-dom.html)
  - [vytvoření elementu v jQuery](./09-jquery-dom2.html)

#### Funkce pro práci s atributy
  - **.attr("attributeName")** - funkce pro zjištění hodnoty daného atributu
  - **.attr("attributeName","value")** - funkce pro nastavení hodnoty daného atributu
  - **.removeAttr("attributeName") - funkce pro odebrání atributu
  - **.prop("propertyName")**, **.prop("propertyName","value")**, **.removeProp("propertyName")**
    - properties != atributy (rozdílné hodnoty...)

### Procházení kolekcí
  - pro procházení výběrů prvků máme k dispozici funkci **.each()**
  - [ukázkový příklad](./09-jquery-each.html)

### jQuery UI, komponenty postavené na jQuery
- jQuery UI
  - https://jqueryui.com/
    - doporučuji custom download, v rámci kterého si vyberete jen zvolené komponenty
  - sada vizuálních komponent a interakcí postavených na jQuery
  - příklady:
    - [komplexní demonstrace komponent v jQuery UI](./09-jquery-ui.html)
    - [ukázka konfigurace datepickeru](./09-datepicker.html)
    - [datepicker v češtině](./09-datepicker-cz.html)
- [jQuery je využíváno také v Bootstrapu](http://getbootstrap.com/javascript/)
  - modální okna, alerty, tooltipy
  - Dropdowns (rozbalovací menu)
  - ScrollSpy (skrolování v rámci obsahu)
  - Tooltip
  - Carousel ("listování" fotkami či upoutávkami)
  - Affix (inteligentní zafixování viditelných prvků při skrolování)

## Existující javascriptové aplikace
- pro většinu běžných "hejblátek" existují k dispozici již hotové a odladěné skripty
- ručně píšeme do stránek jen kód specifický pro danou stránku a inicializaci existujících komponent
  - je prostě zbytečné psát si vlastní WYSIWYG editor nebo lightbox
- při připojování externích skriptů je nutné dbát na pořadí jejich načtení
- příklady:
  - TinyMCE (http://www.tinymce.com)
    - [výchozí inicializace](./09-tinymce.html)
    - [inicializace pomocí jQuery](./09-tinymce-jquery.html)
  - Lightbox 2 (http://lokeshdhakar.com/projects/lightbox2/)
    - [ukázkový příklad](./09-lightbox.html)
  - fancyBox (http://fancyapps.com/fancybox/)
    - nejen obrázky, ale také iframe, youtube atd.
    - [ukázkový příklad](./09-fancybox.html)
  - Chart.js (http://www.chartjs.org/)
    - kreslení (interaktivních) grafů v HTML5
    - [ukázkové příklady](./09-chart.js)

### jQuery compatibility mode
- pokud máme na stránkách použitou kromě jQuery např. také knihovnu Mootools (nebo jakoukoliv jinou), která využívá znak ```$``` pro vlastní funkčnost, máme možnost tento identifikátor v rámci jQuery změnit na jiný
- občas narazíme na nefunkčnost skriptů postavených na jQuery
- možnost řešení
  - zavedení vlastního identifikátoru (např. místo *$* si zavedeme *$jq*)
  ```javascript

  var $jq = jQuery.noConflict(true);

  ```
  - zrušení přiřazení znaku *$*
  ```javascript

  jQuery.noConflict();
  jQuery( "div p" ).hide();

  ```
  - zavolání skriptů využívajících *$* ve vlastním elementu script
  ```javascript

  <script>
    jQuery.noConflict();
    (function( $ ) {
      $(function() {
        // More code using $ as alias to jQuery
      });
    })(jQuery);
  </script>

  ```
