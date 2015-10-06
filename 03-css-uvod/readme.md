# 3. CSS - úvod

### Proč CSS?
 * oddělení vzhledu stránky od obsahu - přizpůsobení prezentace pro rozdílná zařízení (displej vs. tisk, velikost zobrazovaíc plochy...)
 * postupná specifikace jednotlivých vlastností, kaskádovost vlastností

### Připojení stylů ke stránce
 * **atribut style**
    * styly definované přímo u konkrétních elementů
    * nejjednodušší, ale postrádáme oddělení stylů od obsahu (se všemi důsledky)
    * ```<span style="color:red">červený text</span>```
 * **element style**
    * začlenění stylů přímo do obsahu stránky (na "jednom" místě)
    * možnost využití direktivy *@import*
    * ``` <style type="text/css"> @import url("adresa");</style>```
 * **element link**
    * připojení externích zdrojů ke stránce (nejen styly, ale také favicon, RSS atd.)
    * možnost definice atributu *media*
    * ```<link rel="stylesheet" type="text/css" href="/URL adresa" media="screen,projection" />```

### Základní zápis stylů
TODO

### Selektory
TODO

### Formátování textu
TODO

### Pozadí
TODO

### Rámečky a okraje
TODO
