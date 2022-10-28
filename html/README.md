## Spaces

Zur besseren Gruppierung kann zwischen zwei Elementen eine Zeile frei gelassen werden. Zwei leere Zeilen sind nicht erlaubt. Vor einem schließenden Tag ist keine Leerzeile erlaubt.

```html
<header>
  …
</header>

<main>
  <div>
    <span></span>
    <span></span>
    
    <h1></h1>
    
    <p></p>
  </div>
</main>

<footer>
  …
</footer>
```

## Attributes

Normalerweise werden Attributes inline geschrieben. Sollten es mehr als drei Attribute geben, werden die Attribute untereinander geschrieben.

```html
<header
  id="header"
  class="o-header"
  data-example="*"
  aria-describedby="header-heading"
>
  …
</header>
```

### Order of Attributes
- `id`
- `href`
- `type`
- `name`
- `title`
- `class`
- `data-*`
- `aria-*`
- `hidden`


## Class Attribute

Sollte ein HTML-Element gleichzeitig ein *Block* und *Element* (BEM-Methology) sein, wird zuerst der *Block* geschrieben, dann der *Modifier* des *Blocks*, dann das *Element* und zuletzt der *Modifier* des *Elements*. Bei Bedarf kann der Value des Class-Attributes auch untereinander geschrieben werden.

```html
<a 
  class="
    m-teaser__link -external 
    a-button -positive
  "
>…</a>
```
