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

- [Flex Item - MDN Web Docs Glossary: Definitions of Web-related terms | MDN](https://developer.mozilla.org/en-US/docs/Glossary/Flex_Item)
- [flex - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/flex)

- [text-transform - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/text-transform)

- [inherit - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/inherit)

### 02. [Flex Your Grids](https://laracasts.com/series/modern-css-for-backend-developers/episodes/2)

> Creating a reliable CSS grid used to require hours of work with meticulous percentage calculations to protect your layout from breaking entirely. Luckily, life is much easier these days. Add a few selectors and you're off to the races, all thanks to flexbox.

#### Note

> public\css\app.css

```css
.flex,
.row {
    display: flex;
}

.row {
    margin-left: -10px;
    margin-right: -10px;
}

.col {
    flex: 1;
    padding: 10px;
}

.box {
    background: #e3e3e3;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    /*line-height: 100px;
    text-align: center;*/
}
```

#### Reference

- [Flexbox - Learn web development | MDN](https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Flexbox)
- [CSS Flexible Box Layout Module Level 1](https://www.w3.org/TR/css-flexbox-1/)

### 03. [Workshop - Card Design](https://laracasts.com/series/modern-css-for-backend-developers/episodes/3)

> Workshop time. We've been given a card design that needs to be converted to HTML and CSS. Piece by piece, let's construct it from scratch. As you'll find, yet again, flexbox comes to the rescue over and over.

#### Note

```css
html,
body {
    height: 100%;
    font-family: "Open Sans", sans-serif; 
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
}
```

```css
.card {
    box-shadow: 0 4px 8px 0px rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, 0.08);
    width: 475px;
    height: 258px;
    display: flex;
    border-radius: 10px;
}
```

```css
.card-meta > div:first-child {
    margin-right: 1em;
}
```

### 04. [Refactoring to Utility Classes and Tailwind](https://laracasts.com/series/modern-css-for-backend-developers/episodes/4)

> In the previous lesson, we constructed a card component in a fairly traditional fashion. Let's try a different approach in this episode. Using the completed design, we'll drastically reduce the size of our CSS file by refactoring to utility classes and [Tailwind](http://tailwindcss.com/).

#### Reference

- [Tailwind CSS - A Utility-First CSS Framework for Rapid UI Development](https://tailwindcss.com/docs/what-is-tailwind/)

### 05. [Easy Flexbox Wins](https://laracasts.com/series/modern-css-for-backend-developers/episodes/5)

> Before moving on, let's review five examples of every-day CSS requirements that can instantly be solved with flexbox.

#### Reference

- [350x150 (350×150)](http://via.placeholder.com/350x150)

## References Collection

- [Google Fonts](https://fonts.google.com/)

- [Normalize.css: Make browsers render all elements more consistently.](http://necolas.github.io/normalize.css/)

- [CSS: em, px, pt, cm, in…](https://www.w3.org/Style/Examples/007/units.en.html)

- [Getting Started With CSS Layout — Smashing Magazine](https://www.smashingmagazine.com/2018/05/guide-css-layout/)

- [Tailwind CSS - A Utility-First CSS Framework for Rapid UI Development](https://tailwindcss.com/docs/what-is-tailwind/)

- [Placeholder.com: Placeholder Images Done For You [JPG, GIF & PNG]](https://placeholder.com/)

### CSS

- [linear-gradient() - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/linear-gradient)

- [justify-content - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/justify-content)

- [text-transform - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/text-transform)

- [inherit - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/inherit)

- [BEM 101 | CSS-Tricks](https://css-tricks.com/bem-101/)

#### flex

- [Flex Item - MDN Web Docs Glossary: Definitions of Web-related terms | MDN](https://developer.mozilla.org/en-US/docs/Glossary/Flex_Item)

- [flex - CSS: Cascading Style Sheets | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/flex)

- [Flexbox - Learn web development | MDN](https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Flexbox)

- [CSS Flexible Box Layout Module Level 1](https://www.w3.org/TR/css-flexbox-1/)

## Examples

### tailwindcss

|      Class       |            Properties           |
|------------------|---------------------------------|
| flex             | display: flex;                  |
| flex-col         | flex-direction: column;         |
| flex-1           | flex: 1;                        |
| item-center      | align-items: center;            |
| justify-center   | justify-content: center;        |
| justify-between  | justify-content: space-between; |
| font-light       | font-weight: 300;               |
| no-underline     | text-decoration: none;          |
| rounded          | border-radius: .25rem;          |
| rounded-full     | border-radius: 9999px;          |
| text-center      | text-align: center;             |
| text-white       | color: #ffffff;                 |
| text-grey-darker | color: #606f7b;                 |
| text-xs          | font-size: .75rem;              |
| text-2xl         | font-size: 1.5rem;              |
| w-3/4            | width: 75%;                     |
| h-64             | height: 16rem;                  |
| h-full           | height: 100%;                   |
| h-screen         | height: 100vh;                  |
| min-h-screen     | min-height: 100vh;              |
| bg-red           | background-color: #e3342f;      |
|                  |                                 |


> padding margin 

>> CLASS

    p       Padding
    m       Margin
    -m      Negative Margin

> SIDE (optional)

            All (default)
    t       Top
    r       Right
    b       Bottom
    l       Left
    x       Horizontal
    y       Vertical

>> SPACE

    0       0
    1       0.25rem
    2       0.5rem
    3       0.75rem
    4       1rem
    5       1.25rem
    6       1.5rem
    8       2rem
    10      2.5rem
    12      3rem
    16      4rem
    20      5rem
    24      6rem
    32      8rem
    px      1px
    auto    auto (margins only)

### CSS

```css
.div {
    font-family: 'Open Sans', sans-serif;

    background-image: linear-gradient(to right, #a25b5b, #692e4c);
    background: linear-gradient(to bottom, #21c8f6, #637bff);

    box-shadow: 0 4px 8px 0px rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, 0.08);

    display: flex;
    flex: 1;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;

    text-transform: uppercase;
    color: rgba(255,255,255,0.5);

    color: inherit;
    
    height: 100vh;
    min-height: 100vh;
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

```css
html,
body {
    height: 100%;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-meta > div:first-child {
    margin-right: 1em;
}
```
