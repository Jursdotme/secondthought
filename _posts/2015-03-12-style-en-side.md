---
layout: page
title: "Style en Side"
category: tut
date: 2015-03-12 15:05:36
---


Jeg antager du allerede har læst ["Kom godt igang"]({% post_url 2015-02-12-kom-godt-igang %}) guiden og er begyndt at bygge sider med Page Builder. Denne guide vil hjælpe dig med de mere avancerede begreber styling a Page Builder.

## Styling en række

Nedenstående eksempel viser standard række og celle styling for eksempel siden:

![Widget attributter]({{ site.baseurl }}/assets/PB21a.jpg)

Eksempel række og celle layout

![Widget attributter]({{ site.baseurl }}/assets/PB21b.jpg)

Standard række og celle styling

I "Rediger Row" dialog, vil du finde de rækken styling fanerne i rækken Styles Sidebar. Som standard er der tre grupper: attributter, layout og design. Klik på hver fane for at få vist indstillingerne i denne gruppe.

![Widget attributter]({{ site.baseurl }}/assets/PB21.jpg)

### Attributter

Under fanen attributter, kan du angive Row klasse og Cell klasse. Brug CSS editor til at tilføje brugerdefinerede styling til rækken, og cellerne ved hjælp af dine valgte klasser.

![Widget attributter]({{ site.baseurl }}/assets/PB22.jpg)

### Layout

Under fanen layout, kan du finde indstillinger for Bottom Margin, Gutter, Polstring, og Row Layout.

![Widget attributter]({{ site.baseurl }}/assets/PB23.jpg)

#### Bottom Margin, Gutter og Padding

Du kan angive dine layouts hjælp næsten enhver enhed. Klik på drop-down menu til at ændre den enhed, du bruger.

Det er, hvad hver af de indstillinger, betyder i Page Builder sammenhæng:


* Den nederste margin justerer rummet under rækken

* Den tagrenden justerer rummet under hver celle

* Polstringen justerer rummet omkring hele rækken


En sammenligning af standard række og celle styling og det følgende eksempel er vist nedenfor for den første række:

![Widget attributter]({{ site.baseurl }}/assets/PB23d.jpg)

Eksempler på indstillinger

![Widget attributter]({{ site.baseurl }}/assets/PB21c.jpg)

Standard række og celle styling. Baggrundsfarven i den første række er blevet justeret til en lyseblå for visuelle formål og forklaring.

![Widget attributter]({{ site.baseurl }}/assets/PB23c.jpg)

Bottom Margin = 15px, Gutter = 10px og Padding = 30px

#### Række Layout

Række Layout Indstillingen har tre muligheder; Standard, Fuld bredde og fuld bredde strakt. Der er eksempler for hver layout:

![Widget attributter]({{ site.baseurl }}/assets/PB23g.png)

![Widget attributter]({{ site.baseurl }}/assets/PB21c.jpg)

Row Layout - Standard

![Widget attributter]({{ site.baseurl }}/assets/PB23e.jpg)

Row Layout - Fuld bredde - Row baggrund vises fuld bredde

![Widget attributter]({{ site.baseurl }}/assets/PB23f.jpg)

Row Layout = Fuld bredde Udspændt - Row baggrund og indhold vises i fuld bredde


### Design

Under fanen design, vil du finde indstillinger for Baggrundsfarve, baggrundsbillede, Background displayet og Border Color.

![Widget attributter]({{ site.baseurl }}/assets/PB24.jpg)

#### Baggrundsfarve

Hvis du vil vælge en række baggrundsfarve, klik på "Vælg farve" knappen under overskriften baggrundsfarve.

![Widget attributter]({{ site.baseurl }}/assets/PB24a.jpg)

Vælg den ønskede farve med farve palle, eller skriv farven Hex (#) Værdi. Justere farveintensiteten ved hjælp af skyderen.

#### Baggrundsbillede

Sådan vælger du en række baggrundsbillede, skal du klikke på "Vælg billede" knappen.

![Widget attributter]({{ site.baseurl }}/assets/PB24b.jpg)

Dialogen mediebibliotek vises. Vælg det ønskede billede og klik på "Udført".

![Widget attributter]({{ site.baseurl }}/assets/PB24c.jpg)

Vælg, hvordan du ønsker, at billedet skal vises fra "Baggrundsbillede Display" drop-down menuen.

![Widget attributter]({{ site.baseurl }}/assets/PB24d.jpg)

Nedenfor er et eksempel på en flise-stand baggrundsbillede, genereres ved hjælp af SiteOrigin helt egen <a href="http://bg.siteorigin.com/" title="SiteOrigin's baggrundsbillede generator"> baggrundsbillede generator </a>, anvendes som en række baggrund. Baggrundsbilledet Display er sat til "Flisebelagt billede."

![Widget attributter]({{ site.baseurl }}/assets/PB24f.jpg)


Flisebelagt baggrundsbillede med Background displayet indstillet til "Flisebelagt billede."


#### Border Color

For at vælge en grænse farve, skal du klikke på "Vælg farve" knappen under overskriften Border Color.

![Widget attributter]({{ site.baseurl }}/assets/PB24e.jpg)

Vælg den ønskede farve med farve palle eller type i farven Hex (#) Værdi. Justere farveintensiteten ved hjælp af skyderen.

![Widget attributter]({{ site.baseurl }}/assets/PB24g.jpg)

Row grænserne farve sat til # f40000


### Ændring Row Ordrer

Hvis du vil ændre rækkefølgen af ​​en række, klik og hold på ikonet pilen i det øverste hjørne over denne række.

![Widget attributter]({{ site.baseurl }}/assets/PB27.jpg)


Når du har placeret rækken, slip ikonet for at gennemføre ændringen.

## Styling en widget

Klik på en widget for at åbne redigere dialog. Den lille dims styling funktioner kan variere fra widget til widget, afhængigt af forfatteren af ​​denne særlige widget. Der er dog nogle grundlæggende standard styling muligheder.

### Attributter

Under fanen attributter, kan du angive Widget klasse og bruge CSS editor til at tilføje brugerdefinerede styling til denne widget ved hjælp af din valgte klasse.

![Widget attributter]({{ site.baseurl }}/assets/PB31.jpg)

### Layout

Under fanen layout vil du finde en polstring tekstfelt. Denne værdi angiver polstring omkring hele widget under dens celle. Du kan angive denne værdi ved hjælp næsten enhver enhed. Klik på drop-down menu til at ændre den enhed, du bruger.

![Widget attributter]({{ site.baseurl }}/assets/PB32.jpg)

![Widget attributter]({{ site.baseurl }}/assets/PB32a.jpg)

Sammenligning af standard widget layout polstring vs 30px polstring.


### Design

Under fanen Design, vil du finde indstillinger svarende til dem, der findes under fanen Row Styling Design, nemlig Baggrundsfarve, baggrundsbillede, Background displayet, og Border Color. Alle disse indstillinger er dækket efter § Row Styling & gt; Design.

Ud over disse, vil du finde Skriftfarve.

#### Skriftfarve

Hvis du vil vælge en skriftfarve, skal du klikke på "Vælg farve" knappen under overskriften Skriftfarve.

![Widget attributter]({{ site.baseurl }}/assets/PB33a.jpg)

Vælg den ønskede farve med farve palle, eller skriv farven Hex (#) Værdi. Justere farveintensiteten ved hjælp af skyderen.
