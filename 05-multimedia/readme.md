# 5. Multimédia 

## Layout webu - opakování
 * rozebrání základních stavebních prvků vybraných webů (struktura etc.)

## Obrázky pro web

 * Formáty obrázků pro použití na webu (opakování ze 2. cvičení)
    * bitmapy vs. vektory
    * Které z těchto formátů byste si vybrali a proč?
        * JPEG, PNG, BMP, TIFF, PSD, [WebP](https://cs.wikipedia.org/wiki/WebP)  
        * SVG, AI, CDR, EPS, PS
 * Základní úpravy obrázků v grafických editorech (ořez, změna rozlišení, optimalizace kvality)
 * **Prvky, které je možné vyřešit textem či pomocí CSS (pozadí, rámečky), neřešíme obrázkem!** 
 
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
 * vyzkoušejte si české znaky (zejména *ř* a *ž*)
 
### Font Awesome - ikonkový font
 * http://fortawesome.github.io/Font-Awesome/icons/

### Obrázky obsahující ikony
 * shromáždění "více obrázků" do jednoho souboru (ikon) - výhody vs. nevýhody
 * umístění obrázku na pozadí dle absolutních souřadnic 

## HTML5 audio a video
 * přehrávání přímo v rámci prohlížeče, možnost ovládání javascriptem
 * stránka by neměla pouštět zvuky, pokud o to uživatel nestojí!
 * možnost vložení obsahu ve větším množstvím formátů - prohlížeč si vybere...
 * audio vkládáme obvykle v MP3
 * video:
    ** MP4 (video: H.264, audio: AAC nebo MP3)
    ** OGG, WebM

```html
<audio controls>
  <source src="horse.mp3" type="audio/mpeg">
  <source src="horse.ogg" type="audio/ogg">
  Your browser does not support the audio element.
</audio>
<video width="320" height="240" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video> 
```
 
 * http://www.w3schools.com/tags/ref_av_dom.asp

## Flash
 * Co, k čemu, jak použít?
 * Korektní vložení flashového obsahu do stránky - viz 05-flash.html


## Úpravy vzhledu obrázků pomocí CSS
 
 **TODO**

