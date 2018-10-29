# 7. Pokročilé techniky

## CSS preprocesory
 * zjednodušují tvorbu komplexních stylů a jejich zápis v textové podobě
 * doplňují funkce pro výpočty, konstanty, předpřipravené části stylů, cykly, podmínky atd.
 * rozšířenými zástupci jsou **SASS**, **LESS** a **STYLUS**
 * [Sass Guide](http://sass-lang.com/guide)
 * [Sass online compiler](http://beautifytools.com/scss-compiler.php)
 * [Stylus documentation](https://learnboost.github.io/stylus/)
 * [Stylus - online ukázky](https://learnboost.github.io/stylus/try.html)
 * [Less - český manuál](http://www.lesscss.cz/)

Ukázka kódu ve Stylusu:

```stylus
 textColor = #2D83BE

 body
    color textColor
 ul
    a
        color textColor

 border-radius()
    -webkit-border-radius arguments
    -moz-border-radius arguments
    border-radius arguments

 a.button
    border-radius(5px)
```

## Responsivní weby

* stránky reagují na různou velikost okna
* v ideálním případě jde web zobrazit na všech možných zařízeních s různou velikostí okna prohlížeče
* media queries - viz [3. cvičení](../03-css-uvod#media)
* mobile first vs. desktop first přístup - dnes je populární mobile first (nejdřív uděláme web pro mobily, teprve pak pro desktop)
* tvorba speciální mobilní verze webu vs. responsivní styly (výhody a nevýhody)


## Responsivní obrázky

* velikost obrázku se mění dle velikosti okna
* **width: 100%** - šířka obrázku = šířka okna. Nevýhoda: zvětšuje obrázek i přes jeho původní velikost.
* **max-width: 100%** - šířka obrázku = šířka okna. Nezvětšuje obrázek přes jeho původní šířku.
* **[responsive-images.html](./responsive-images.html)**
* http://www.w3schools.com/css/css_rwd_images.asp
* více viz [4. cvičení - nové možnosti obrázků v HTML 5](../05-multimedia#nové-možnosti-obrázků-v-html-5)

## Pozadí

* **[backgrounds.html](./backgrounds.html)**
* http://www.w3schools.com/css/css_rwd_images.asp
* pozadí elementu přes background-image: url('NĚJAKÉ URL');
* background-size: contain - obrázek vyplní pozadí, ale zachová původní velikost
* background-size: 100% 100% - obrázek vyplní pozadí, úplně, nezachová původní velikost
* background-repeat: no-repeat - obrázek se nebude opakovat, pokud jeho velikost nestačí na výplň pozadí
* background-size: cover - obrázek se v pozadí přiblíží tak, aby zakryl celou plochu, udělá si výřez, pokud je to nutné.


## Bootstrap

* web framework
* de-facto standard při vývoji web aplikací
* CSS, komponenty, JavaScript přes jQuery
* responsivní layout, grid model
* mobile-first přístup
* kompatibilní se všemi moderními prohlížeči
* **razantně** urychluje vývoj
* **velmi doporučujeme používat**
* http://getbootstrap.com/getting-started/
* http://getbootstrap.com/css/
* http://getbootstrap.com/components/
* http://getbootstrap.com/javascript/
* **[bootstrap-grid.html](./bootstrap-grid.html)**
* **[bootstrap-responsive.html](./bootstrap-responsive.html)**
* **[bootstrap-css.html](./bootstrap-css.html)**
* **[bootstrap-components.html](./bootstrap-components.html)**
* **[bootstrap-js.html](./bootstrap-js.html)**

## Animace pomocí CSS

* animace v CSS - změna jednoho stylu v jiný
* pro animaci je třeba nastavit keyframes - konkrétní stavy v čase pro animaci
* https://developer.mozilla.org/en-US/docs/Web/CSS/animation
* http://www.w3schools.com/cssref/css3_pr_animation.asp
* **[css-animation.html](./css-animation.html)**

## Transformace pomocí CSS

* transformace v CSS - změna objektu - posunutí, rotace, atd.
* https://developer.mozilla.org/en-US/docs/Web/CSS/transform
* http://www.w3schools.com/cssref/css3_pr_transform.asp
* http://meyerweb.com/eric/tools/matrix/
* http://desandro.github.io/3dtransforms/
* **[css-transform.html](./css-transform.html)**


