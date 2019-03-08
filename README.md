[TOC]

# [Modern CSS for Backend Developers](https://laracasts.com/series/modern-css-for-backend-developers)

> I know too many backend developers who are stifled by one glaring phobia: CSS. How do you construct a layout when nothing lines up? Every browser renders your code differently. Floats constantly break. Nothing works!

> If you agree, your thinking might be a bit out of date. You'll be happy to hear that the ecosystem is vastly better than fifteen years ago. This series is specifically for backend developers who understand the basics, but need a fast primer on modern CSS that they'll actually use in their day-to-day workflow.

## Episodes

### 01. [Piece By Piece - Structure, Resets, and Flexbox](https://laracasts.com/series/modern-css-for-backend-developers/episodes/1)

> Let's begin by reproducing a common navigation layout. We'll first visualize the underlying HTML structure, and will then move on to writing CSS piece by piece. This will provide us with an opportunity to review browser resets, and the greatest addition to CSS in the last decade: flexbox.

#### Note

> public\css\app.css

```css
body {
    font-family: 'Open Sans', sans-serif;
}

a {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

header {
    background-image: linear-gradient(to right, #a25b5b, #692e4c);
}

.header-top {
    display: flex;
    justify-content: space-between;
}

.header-top a {
    color: inherit;
}

nav {
    display: flex;
    justify-content: center;
}

nav > a{
    text-transform: uppercase;
    color: rgba(255,255,255,0.5);
}
```

#### Reference

- [Open Sans - Google Fonts](https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans:400,700)

- [linear-gradient() - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/linear-gradient)

- [justify-content - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/justify-content)

- [flex - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/flex)

- [text-transform - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/text-transform)

- [inherit - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/inherit)

## References Collection

- [Google Fonts](https://fonts.google.com/)

- [Normalize.css: Make browsers render all elements more consistently.](http://necolas.github.io/normalize.css/)

- [CSS: em, px, pt, cm, in…](https://www.w3.org/Style/Examples/007/units.en.html)

### CSS

- [linear-gradient() - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/linear-gradient)

- [justify-content - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/justify-content)

- [flex - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/flex)

- [text-transform - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/text-transform)

- [inherit - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/inherit)

## Example

### CSS

```css
.div {
    font-family: 'Open Sans', sans-serif;

    background-image: linear-gradient(to right, #a25b5b, #692e4c);

    display: flex;
    justify-content: space-between;

    text-transform: uppercase;
    color: rgba(255,255,255,0.5);

    color: inherit;
}
```

```css
a {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
```
