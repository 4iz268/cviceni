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
 * v HTML5 lze kromě obrázků zadaných jednoduše značkou IMG použít také složitější konstrukce s více možnostmi - viz [dále]() 

### Tvorba webu na základě šablony
 * podklady dodány obvykle ve formě PSD (připadně AI či CDR) souboru
    * neakceptujeme podklady od grafika, který je ochoten je předat jen jako JPEG!
    * možnost postupného vypínání vrstev
    * pokud jsou použity speciální fonty, jsou obvykle přiloženy k souboru s obrázkem (pro možnost "vypreparování" potřebných částí textu)
 * na netu lze nalézt také volně dostupné šablony
 * Jakým způsobem by šlo vytvořit web z šablon [1](./psd-examples/template1) a [2](./psd-examples/template2) umístěných v tomto úložišti?
 
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
 
### Font Awesome - ikonkový font
 * http://fortawesome.github.io/Font-Awesome/icons/

### Obrázky obsahující ikony - sprite icons
 * shromáždění "více obrázků" do jednoho souboru (ikon) - výhody vs. nevýhody
 * umístění obrázku na pozadí dle absolutních souřadnic 

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

```html
<audio controls>
  <source src="sound.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<video width="320" height="240" controls autoplay>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video> 
```
 
 * http://www.w3schools.com/tags/ref_av_dom.asp

## Flash
 * Co, k čemu, jak použít?
 * Korektní vložení flashového obsahu do stránky - viz [05-flash.html](./05-flash.html)

## Nové možnosti obrázků v HTML 5
### Figure
 * HTML5 element pro definici obrázku s popiskem (jako např. obrázky v odborném textu)

 ```html
  <figure>
    <img src="img.jpg" alt="Popisek obrázku" width="304" height="228">
    <figcaption>Popisek obrázku</figcaption>
 </figure>
 ```

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



