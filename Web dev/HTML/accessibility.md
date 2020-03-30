# Accessibility

## Docs

- [Aria](https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA) on Mozilla docs.
    - [Roles, states and properties](https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/ARIA_Techniques)
    - [Main role](https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Roles/Main_role)
    - [Dialog role](https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Roles/dialog_role)
    
## Tutorials

- Hiding content
    - [Invisible Content Just for Screen Reader Users](https://webaim.org/techniques/css/invisiblecontent/)
        - Use `display:none;` or `visibility: hidden;` to hide from user _and_ screen reader. 
        - Note that hidden elements take up space, so use `display` if you don't want that. [source](https://www.w3schools.com/cssref/pr_class_visibility.asp)
    - [Places it’s tempting to use `display: none;`, but don’t](https://css-tricks.com/places-its-tempting-to-use-display-none-but-dont/) - Alternatives to using `display` and `visibility` attributes, if you _want_ screen readers to still read the hidden elements.
