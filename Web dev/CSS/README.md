# CSS

## Resources

- W3 Schools [CSS](https://www.w3schools.com/css/default.asp).
- [How to center things with style in CSS](https://www.freecodecamp.org/news/how-to-center-things-with-style-in-css-dc87b7542689/)
- Images
    - [Basics of CSS Blend Modes](https://css-tricks.com/basics-css-blend-modes/)
    - [Mix blend mode](https://css-tricks.com/almanac/properties/m/mix-blend-mode/)
    - [Blend modes in practical use](https://www.atomicsmash.co.uk/blog/blend-modes-in-practical-use/)
    - [Isolation](https://css-tricks.com/almanac/properties/i/isolation/)
    - [Mix colors](https://stackoverflow.com/questions/39144056/how-to-mix-colors-in-css)
    - How to overlay images
        - [How to overlay images](https://stackoverflow.com/questions/403478/how-to-overlay-images)
        - [How can we overlap two images using css style?](https://stackoverflow.com/questions/1782601/how-can-we-overlap-two-images-using-css-style)

## Positioning

[source](https://stackoverflow.com/questions/905597/what-is-the-containing-block-of-an-absolutely-positioned-element)

> A common solution is to have a centered container (margin: 0 auto) with position: relative within which other items are placed with position: absolute.

## SVG styling

```css
.my-class {
    width: 100%;
    height: 100px;
    stroke: red;
    fill: red;
}
```

## Change color on hover

[source](https://css-tricks.com/change-color-of-svg-on-hover/)

```css
svg:hover {
    fill: red;
}
```

See also [source](https://stackoverflow.com/questions/22252472/how-to-change-the-color-of-an-svg-element).

## !Important

A CSS modifier to give a low-specificity style higher priority.

From [When using !important is the right choice](https://css-tricks.com/when-using-important-is-the-right-choice/)


```html
<section id="content">
    <p>  text text blah <a href="#" class="button">Do Thing</a>  </p>
</section>
```

With this styling, the button class item get underlined when that is not desired.

```css
#content a {
    border-bottom: 1px dotted blue;
}
```

So we add this to the styling to ensure the button's class styling takes precedence over the ID styling. A few extra things have been included to protect the item.

```css
.button {
    background: red            !important;
    color: white               !important;
    padding: 3px               !important;
    border-radius: 5px         !important;
    border: 1px solid black    !important;

    /* For good measure */     
    text-decoration: none      !important;
}
```
