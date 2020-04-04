# Repo configuration 
> How to add config files to your git repo and what they do


## Git attributes

Add a `.gitattributes` file at the root.

One setup approach can let you prevent certain files from showing up with `git diff` but still actually version the file. Such as a `package.lock.json` or `Gemfile.lock`.

- [Customizing git attributes)(https://git-scm.com/book/en/v2/Customizing-Git-Git-Attributes)


## Editor config

Create `.editorconfig` at the root. 

This is a way of setting IDE config values centrally so that all contributors follow them, overriding any IDE settings that already exist.

This will be recognized by IDEs, but you may need to add support to your IDE to appy it.

VS Code has the [Editor Config](https://marketplace.visualstudio.com/items?itemName=EditorConfig.EditorConfig) extension. It supports the following properties:


- indent_style
- indent_size
- tab_width
- end_of_line (on save)
- insert_final_newline (on save)
- trim_trailing_whitespace (on save)
