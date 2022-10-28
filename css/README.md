# Writing (S)CSS

SCSS files in the `/develop/scss` directory (*scss root*) contain only imports, but no custom rules. These files are compiled to (`/public/assets/css`).

In the *scss-root* there is an `index.scss` file. This file contains all fonts, libraries, configs, helpers and components that are relevant for most of the whole website.

For special pages a separate SCSS file can be created. For example, this file can contain large libraries and/or components that are only relevant for certain pages/templates. Not everything needs to be placed in the index.scss. Thus, the index.css can be kept small. The load time of the web pages are optimized thereby.

<details>
<summary>What should be swapped out to a separate scss file?</summary>

In general, large CSS libraries (for example mapbox-gl.css) that are only needed on certain pages should not be imported into index.scss.

</details>


## Naming

Each *Block* must have a prefix (`a`, `m`, `o` or `t`, according to Atomic Design) followed by `-` and the name of the block (e.g `header`). *Kebab-case* is used, words are connected with `-`.  
Example: `m-alert-banner`

The name of the *Element* is separated by `__`.  
Example `m-alert-banner__heading`

The name of a *Modifier* is preceded by `-`. (e.g. `-danger`). The *Modifier* isn’t hard wired to the *Element* (in pure BEM it would be `m-alert-banner--danger`). This must be taken into account. The pros and cons of this technique are described in [ABEM. A more useful adaptation of BEM. – CSS-Tricks](https://css-tricks.com/abem-useful-adaptation-bem/#aa-abem-modifier-issues).

Generally names should describe the function not the appearance. Names should be as general as possible but as specific as needed. A red “delete item” button should have get a `-danger` *Modifier*. `-red` is describing the appearance. `-delete` is too specific, `-danger` is more generic.

The same rule comes into play for *variables*. E.g. `--color-negative` or `--color-postive` (instead of `--color-red` and `--color-green`).  


## Nesting

Nesting makes writing CSS much easier. But when it's overused, the specificity is getting higher and the indentations get longer and longer. It’s getting harder to read and more difficult to maintain. That's why not everything that can be nested is nested.

### Blocks and Elements

Each block get’s its own file (e.g. `components/_m-alert-banner.scss`. The file starts with the rule of the *Block* selector itself. The *Block* selector is followed by the *Element* selectors.

```scss
.m-alert-banner {
  …
}

.m-alert-banner__heading {
  …
}

.m-alert-banner__buttons {
  …
}
```

*Elements* theoretically could be nested inside of the *Block* (`&__heading`), but this would clutter the *Block* which make it harder to maintain and read.

### Modifiers

*Modifiers* are written inside of each *Block* or *Element*. Preferably only *Blocks* do have *Modifiers*, but *Elements* can have *Modifiers* too.

```scss
.m-alert-banner {
  &.-danger {
    …
  }
}
```
#### Element with Block Modifier
```scss
.m-alert-banner__heading {
  .m-alert-banner.-danger & {
    …
  }
}
```

### CSS selectors

Inside a *Block*/*Element* there might be rules for other DOM elements. To avoid conflicts these rules should be very specific. Namely DOM elements should be selected only with the [Child combinator](https://developer.mozilla.org/en-US/docs/Web/CSS/Child_combinator).

```scss
.m-alert-banner {
  > h2 {
    …
    
    > span {
      …
    }
  }
}
```

Maximal two children should be nested. 

### Order inside of *Block*/*Element*

The rules inside of a *Block*/*Element* could be very long that’s why a specific order could become handy to find things. After each group of rules there should be single empty line.

- [`@keyframes`](https://developer.mozilla.org/en-US/docs/Web/CSS/@keyframes)
- Properties  
  See [*Order of properties*](#order-of-properties)
- [Pseudeo-elements](https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-elements)  
  `&::after`, `::backdrop`
- [Child combinator](https://developer.mozilla.org/en-US/docs/Web/CSS/Child_combinator)  
  `> h1`
- [Adjacent sibling combinator](https://developer.mozilla.org/en-US/docs/Web/CSS/Adjacent_sibling_combinator) in combination with *Child combinator*   
  This is used to define how elements behave against other elements. E.g. the `margin-block-start` of a `p` element after a `h1` element. (See [The Stack: Every Layout](https://every-layout.dev/layouts/stack/))  
  `> h1 + p` 
- *Modifiers* ([Element with Block Modifier](#element-with-block-modifier))  
  `.m-alert-banner.-danger &`
- *Modifiers*  
  `&.-danger`
- `@supports` rules
- [Pseudo-classes](https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-classes)  
  `:hover`, `:focus-visible`
- *Adjacent sibling combinator* for the *Block*/*Element* itself  
  This is used to define how this *Block*/*Element* behaves against other *Blocks*/*Elements* of the same kind.  
  `& + &`
- *Adjacent sibling combinator* for the *Block*/*Element* against other *Blocks*/*Elements*  
  This is used to define how this *Block*/*Element* behaves against other *Blocks*/*Elements*.  
  `.m-form + &`
- `@media` queries  
  `(min-width: …)` before `not all and (min-width: …)`

#### Fictive example

```scss
.m-alert-banner {
  @keyframes pulse {
    …
  }
  
  --var-lorem: …;
  padding: 1rem;
  border: 2px solid var(--color-alert);
  animation-name: pulse;
  …
  
  > h2 {
    font-size: …;
  }
  > p {
    …
  }
  
  > h2 + p {
    margin-block-start: 1rem;
  }
  
  &.-danger {
    …
  }
  
  @supports (…) {
    …
    
    &.-danger {
      …
    }
  }
  
  &:focus-inside {
    > h2 {
      …
    }
  }

  & + & {
    margin-block-start: 1rem;
  }
  
  .m-form + & {
    …
  }
  
  @media (min-width: …) {
    …
  }
  @media not all and (min-width: …) {
    …
  }
}
```

### Selecting *Blocks*/*Elements* inside of *Blocks*/*Elements*

*Blocks*/*Elements* are independent components. That’s why *Blocks*/*Elements* may not be selected inside of another *Blocks*/*Elements*. 

When it’s needed to style a *Block* depended on another *Block*, this could be achieved like this:

```scss
.a-button {

  .m-alert-banner & {
    background-color: …;
  }
}
```

This syntax should be avoided. What if the `a-button` is inside a `m-dialog` (which is inside of `m-alert-banner`). `a-button` will get the background-color which might not be the intended behavior.  
Modifiers should be used instead.

```scss
.a-button {

  &.-alert {
    background-color: …;
  }
}
```


## Media queries

A mobile-first approach should be followed. In most cases, the user interface design for mobile devices is simpler than that for larger devices. Additional complexitiy (larger devices) is added to the simpler mobile styles. This is the reason why `@media (min-width: …)` should be used.

To add specific styles for smaller devices the `(min-width)` rule can be negated like this `@media not all and (min-width: …)`


## Other SCSS Features

SCSS comes with great features like *Variables*, *Mixins*, *Extend/Inheritance* and *Math Operators*. These features have their merits, but they are not needed for this Style Guide. They partly contradict the modular idea of BEM and Atomic Design (*Mixins*, *Extend/Inheritance*). Other features like *Variables* and *Math Operators* have their counterpart in plain CSS nowadays, which should always be preferred.

Some day in the future [CSS Nesting](https://caniuse.com/css-nesting) could be used, then SCSS is not needed anymore.


## Order of properties

There are about 400 CSS properties. To quickly find the right property there is the following order. The list is incomplete. Missing properties can be sorted accordingly.

- variables
  `--var-*`
- generated content  
  `content`
- appearance  
  `position`, `display`, `appearance`, `opacity`, `visibility`, `cursor`, `pointer-events`
  - clipping  
    `clip-path`, `overflow`
- positioning
    - size  
      `box-sizing`, `width`, `height`, `[min|max]-[width|heigh]`,
    - grid/flex (Properties for the Children)  
      `grid-[row|column]-[start|end]`  
      `flex-base`, `flex-shrink`, `flex-grow`  
      `justify-self`, `align-self`
    - inset/margin  
      `inset`, `z-index`, `margin`
    - `translate`  
- border  
  `box-shadow`, `border`, `border-radius`, `outline`
- padding  
  `padding-[inline|block]`
- content  
    - grid/flex (Properties for the Parent)   
      `grid-template-[columns|rows]`, `[justify|align]-[content|items]`, `gap`
    - lists/columns/table  
      `list-style`, `columns`, `border-collapse`
    - typography  
      `text-[align|transform|...]`  
      `line-height`, `letter-spacing`  
      `font-[size|weight|...]`  
      `white-space`, `hyphens`  
      `color`
- background  
  `background-[image|color|...]`, `backdrop-filter`
- animation  
  `transition`, `animation`, `will-change`
