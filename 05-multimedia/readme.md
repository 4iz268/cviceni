# 5. Multimédia 

## Layout webu - opakování
 * float, flexbox, grid layout
 * rozebrání základních stavebních prvků vybraných webů (struktura etc.)

## Obrázky pro web

 * Formáty obrázků pro použití na webu (opakování ze 2. cvičení)
    * bitmapy vs. vektory
    * Které z těchto formátů byste si vybrali a proč?
        * JPEG, PNG, BMP, TIFF, PSD, [WebP](https://cs.wikipedia.org/wiki/WebP)  
        * SVG, AI, CDR, EPS, PS
 * Základní úpravy obrázků v grafických editorech (ořez, změna rozlišení, optimalizace kvality)
    * Photoshop, Gimp
 * **Prvky, které je možné vyřešit textem či pomocí CSS (pozadí, rámečky), neřešíme obrázkem!**
 * v HTML5 lze kromě obrázků zadaných jednoduše značkou IMG použít také složitější konstrukce s více možnostmi - viz [dále](#nové-možnosti-obrázků-v-html-5) 

### Tvorba webu na základě šablony
 * podklady dodány obvykle ve formě PSD (připadně AI či CDR) souboru
    * neakceptujeme podklady od grafika, který je ochoten je předat jen jako JPEG!
    * možnost postupného vypínání vrstev
    * pokud jsou použity speciální fonty, jsou obvykle přiloženy k souboru s obrázkem (pro možnost "vypreparování" potřebných částí textu)
 * na netu lze nalézt také volně dostupné šablony
 * Jakým způsobem by šlo vytvořit web z šablon [1](./05-psd-examples/template1) a [2](./05-psd-examples/template2) umístěných v tomto úložišti?
 
## Ikony a fonty

### Favicon
 * Proč?
 * Ikona pro použití v prohlížeči
 * Ikony pro mobilní zařízení
 
```html
<link rel="icon" href="demo_icon.ico" type="image/x-icon" sizes="16x16" /> 
```

 * http://www.favicon-generator.org/
 * http://www.favicon.cc/

### Načítání písem z webu
 * Písma se vyskytují v celé řadě formátů - optimálně WOFF, TTF/OTF
 * Pozor na licenci! (to, že máte font nainstalovaný, nebo jde stáhnout z webu, ještě neznamená, že jej můžete volně šířit)
 * Vložení pomocí CSS:
 
```css
@font-face {
    font-family: myFont;
    src: url(myFontFile.woff);
}

div {
    font-family: myFont;
} 
```

### Google web fonts
 * https://www.google.com/fonts
 * načtení pomocí CSS (@import, link) nebo javascriptu
 * načítejte jen nezbytně nutné části písem (řezy písma, znaky lokálních abeced)
 * **vyzkoušejte si české znaky** (zejména *ř* a *ž*) - je nutné je otestovat i v jiném prohlížeči, než jen v Google Chrome
 
### IcoMoon
 * https://icomoon.io/app/
 * intuitivní aplikace umožňující si sestavit vlastní obrázkové písmo, do kterého je možné přidat i další obrázky v SVG

### Font Awesome - ikonkový font
 * http://fortawesome.github.io/Font-Awesome/icons/

### Zdroje obrázkových ikon
 * http://www.iconarchive.com/

## HTML5 audio a video
 * přehrávání přímo v rámci prohlížeče, možnost ovládání javascriptem
 * **stránka by neměla pouštět zvuky, pokud o to uživatel nestojí!**
    * rozhodně ne automaticky, pokud to uživatel nečeká
 * možnost vložení obsahu ve větším množstvím formátů - prohlížeč si vybere nejvhodnější variantu...
 * audio vkládáme obvykle v MP3
 * video:
    ** MP4 (video: H.264, audio: AAC nebo MP3)
    ** OGG, WebM
 * pro prohlížeče, které audio a video nepodporují, je vhodné umístit alternativní obsah (např. odkaz pro stažení videa)
 * vzhled ovládacích prvků je závislý na použitém prohlížeči
    * ovládací prvky zobrazíme uvedením atributu *controls*
    * atribut *autoplay* zajistí automatické spuštění po načtení stránky
 * je nutné zvážit, zda opravdu sdílet video na vlastním serveru (pozor na limity přenosové kapacity a zatížení serveru)
 * pro audio i video lze vložit titulky, metadata atp. pomocí značky **track**
 * volitelný atribut **poster** umožňuje definovat cestu k úvodnímu obrázku, zobrazenému před spuštěním videa
 * volitelný atribut **preload** umožňuje určit, zda má prohlížeč video rovnou začít načítat, nebo má vyčkat na jeho spuštění (hodnoty *auto*, *metadata*, *none*)

```html
<audio controls>
  <source src="sound.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<video width="320" height="240" controls autoplay poster="movie.jpg">
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  <track src="subtitles_en.vtt" kind="subtitles" srclang="en" label="English">
  Your browser does not support the video tag.
</video> 
```
 
 * http://www.w3schools.com/tags/ref_av_dom.asp

## Nové možnosti obrázků v HTML 5
### Figure
 * HTML5 element pro definici obrázku s popiskem (jako např. obrázky v odborném textu)

  ```html
  <figure>
    <img src="img.jpg" alt="Popisek obrázku" width="304" height="228">
    <figcaption>Popisek obrázku</figcaption>
  </figure>
  ```

  
### Picture
 * HTML5 element pro definici více variant obrázku v závidlosti na rozlišení/typu média
 * https://www.w3schools.com/tags/tag_picture.asp

  ```html
  <picture>
    <source media="(min-width: 650px)" srcset="img_pink_flowers.jpg">
    <source media="(min-width: 465px)" srcset="img_white_flower.jpg">
    <img src="img_orange_flowers.jpg" alt="Flowers" style="width:auto;">
  </picture> 
 ```
  
### Img - srcset
 * obdobně, jako lze vložit více variant obrázku pro různá rozlišení pomocí elementu **picture**, lze je nově definovat v přímo v rámci značky **img**
 * atribut **srcset** definuje jednotlivé varianty obrázku podle šířky displeje
    * descriptor **w** udává, jaká je skutečná šířka obrázku
    * descriptor **x** udává, jaký obrázek má prohlížeč využít na displeji s vyšší hustotou pixelů (retina atp.), např. *2x* znamená, že daný obrázek se použije v situaci, kdy *device-pixel-ratio* bude 2 či vyšší 
 * volitelný atribut **sizes** definuje cílové velikosti obrázku v závislosti na rozlišení
    * prohlížeč vybere obrázek podle toho, jaký je prostor k jeho vykreslení; kromě jednotky *px* lze použít také jednotku *vw* (100vw = 100% šířky okna)   
  
  ```html
  <img srcset="img-320w.jpg 320w,
               img-480w.jpg 480w,
               img-800w.jpg 800w"
       sizes="(max-width: 320px) 280px,
              (max-width: 480px) 440px,
              800px"
       src="img-800w.jpg" alt="Example image" />
       
  <img srcset="image.png, 
               image@2x.png 2x"
       src="image.png"
       width="200" height="200" alt="…"> 
  ```
  
 * hezký manuál najdete na:
   * https://www.vzhurudolu.cz/prirucka/srcset-sizes
   * https://www.vzhurudolu.cz/prirucka/responzivni-obrazky

## Definice vzhledu obrázku pomocí CSS
 * **width**, **height**
 * **opacity**
 * definice průhlednosti objektu v intervalu &lt;0-1&gt; (stejně, jako definice průhlednosti v RGBA)

### Filtry, transformace, rotace
 * http://davidwalsh.name/demo/css-filters.php
 * transformace, rotace
    * http://www.w3schools.com/css/css3_2dtransforms.asp

### Ostatní
 * **border-image**
    * tvorba rámečků tvořených obrázky
    * http://www.w3schools.com/css/css3_border_images.asp



