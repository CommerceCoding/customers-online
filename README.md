# Customers Online

## Wichtig

Diese Erweiterung wurde auf Basis der modified eCommerce Shopsoftware (Version 1.06 rev 4356) entwickelt. Manche Dateien dieser Erweiterung ergänzen vorhandene Dateien des Shopsystems.  Diese Dateien sollten nicht einfach über bestehende kopiert werden, sondern sollen als Anhaltspunkt für die richtigen Stellen der Einfügen dienen. Ein Backup des Shops vorher ist empfehlenswert. Es wird keine Haftung übernommen.

## Sprachdateien

### lang/english/lang_english.conf

An den Block *[boxes]* folgendes anfügen:

```
# Customers Online - Commerce Coding - BEGIN
heading_customers_online = 'Customers Online'
text_nowonline = 'Currently online'
# Customers Online - Commerce Coding - END
```

### lang/german/lang_german.conf

An den Block *[boxes]* folgendes anfügen:

```
# Customers Online - Commerce Coding - BEGIN
heading_customers_online = 'Kunden Online'
text_nowonline = 'Momentan online'
# Customers Online - Commerce Coding - END
```

## Kunden-Online-Box

### templates/xtc5/boxes/box_customers_online.html
### templates/xtc5/source/boxes/customers_online.php

Diese Dateien sind neu und können direkt aus dem Download-Unterordner *neu* in das Shopsystem kopiert werden.

### templates/xtc5/source/boxes.php

In dieser Datei wird die neue Box gemeinsam mit den anderen vorbereitet. Dafür im ersten *require*-Abschnitt folgendes einfügen:

```php
// Customers Online - Commerce Coding - BEGIN
require_once(DIR_WS_BOXES . 'customers_online.php');
// Customers Online - Commerce Coding - END
```

### templates/xtc5/index.html

Je nachdem, auf welcher Seite die Box erscheinen soll im gewünschte div *leftcol* bzw. *rightcol* die Box ausgeben:

```html
<!-- Customers Online - Commerce Coding - BEGIN -->
{$box_CUSTOMERS_ONLINE}
<!-- Customers Online - Commerce Coding - END-->
```

## Credits
Copyright: © 2013, Commerce Coding, http://www.commerce-coding.de  
Lizenz: http://opensource.org/licenses/GPL-2.0  GNU General Public License, version 2 (GPL-2.0)