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
- ale to už vlastně umíme :) Pro výběr prvků použijeme funkci **$**, které jako parametr předáme stejný selektor, jako v CSS
- na vybraných prvcích zavoláme funkci provádějící zvolenou akci:
```javascript
$('p#mujOdstavec').hide(); //skrytí odstavce s ID "mujOdstavec"
```
- funkce pro zobrazování prvků
  - **.show()** - zobrazení daného prvku; při zavolání s číselným parametrem bude zobrazení animované: ``` $('#a1').show(1000); ```
  - **.hide()** - skrytí daného prvku
  - **.toggle()** - přepnutí zobrazení daného prvku
  - **.fadeIn()**, **.fadeOut()**, **.slideDown()**, **.slideUp()**, **.stop()**
- funkce pro manipulaci s obsahem prvků
  - **.text()** - získání obsahu daného prvku v podobě prostého textu
  - **.text('xxx')** - nastavení textového obsahu prvku
  - **.html()** - získání HTML obsahu daného prvku
  - **.html('xxx')** - nastavení HTML obsahu daného prvku
- funkce pro práci s CSS
  - **.addClass('xxx')** - přidání zvolené třídy
  - **.removeClass('xxx')** - odebrání zvolené třídy
  - **.hasClass('xxx')** - funkce pro zjištění, jestli má daný prvek zvolenou třídu
  - **.css('propertyname')** - funkce pro zjištění hodnoty zvolené CSS vlastnosti
  - **.css('propertyname','value')** - funkce pro nastavení hodnoty zvolené CSS vlastnosti
    - lze zadat také pole vlastností
    ```javascript

     $("p").css({"background-color": "yellow", "color": "maroon"});

    ```
  - [funkce pro práci s rozměry](http://www.w3schools.com/jquery/jquery_dimensions.asp)
- funkce pro manipulaci s DOM stromem
  - **.append('xxx')** - připojení daného HTML obsahu na konec obsahu prvku
  - **.prepend('xxx')** - připojení daného HTML obsahu na začátek obsahu prvku
  - **.before(xxx)**, **.after(xxx)** - vložení prvků do daného umístění v rámci DOM stromu
  - **.remove()** - funkce pro odebrání prvku
  - **.empty()** - funkce pro vyprázdnění obsahu daného prvku
  - u všech funkcí pracujících s HTML obsahem lze využít buď HTML zápis, nebo jQuery objekty
  - nový jQuery objekt, který není v DOM stromu, lze vytvořit např.:
    ```var divObj = $('<div></div>').text(content);```
  - **.appendTo** - připojení jQuery objektu k jinému objektu zadanému selektorem
- funkce pro práci s atributy
  - **.attr("attributeName")** - funkce pro zjištění hodnoty daného atributu
  - **.attr("attributeName","value")** - funkce pro nastavení hodnoty daného atributu
  - **.removeAttr("attributeName") - funkce pro odebrání atributu
  - **.prop("propertyName")**, **.prop("propertyName","value")**, **.removeProp("propertyName")**
    - properties != atributy (rozdílné hodnoty...)

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

### Připojování událostí pomocí jQuery
- nepoužíváme atributy pro připojení událostí
- po připravení stránky zavoláme inicializační řást javascriptu, v rámci které připojíme k vybraným elementům příslušné události
- lze připojit víc funkcí (handlerů) k jedné události

TODO


---


## Existující javascriptové aplikace
- pro většinu běžných "hejblátek" existují k dispozici již hotové a odladěné skripty
- ručně píšeme do stránek jen kód specifický pro danou stránku a inicializaci existujících komponent
  - je prostě zbytečné psát si vlastní WYSIWYG editor nebo lightbox
- při připojování externích skriptů je nutné dbát na pořadí jejich načtení
- příklady:
  - TODO


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

----

## TODO:
- průchod a manipulace s DOM
- využití querySelectAll()
- jQuery
- použití existujících JS aplikací a komponent (kalendáře, WYSIWYG editory atp.)
- Bootstrap a jQuery