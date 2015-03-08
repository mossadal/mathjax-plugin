# mathjax-plugin

Simple plugin for OctoberCMS. The plugin enables MathJax in the backend blog
entry page, so that blog post previews containing mathematical formulas are
rendered correctly.


## Description

[MathJax](http://mathjax.org) is a de facto standard for allowing high-quality
typeset matematical formulas on the web, using LaTeX markup.

This plugin allows you to have live rendering of MathJax in the blog preview
area when you are writing blog posts with mathematical content.

## Note

You still need to configurate MathJax in the frontend layout for your theme to
get rendering of mathematical formulas in the frontend. Typically, you want
to add something like

    <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>

in your layout file, possibly together with some extra configuration. See
[the MathJax web site](http://mathjax.org) for more details.

## Technical description

The plugin works by injecting MathJax Javascript into the `Rainlab\Blog\Controllers\Posts`
controller, making sure MathJax is loaded on the relevant backend pages.

To provide live rendering in the blog preview pane, a jQuery function provides
a `textarea.keyup` event handler. To prevent unneccesary flickering, the event
handler fires once the user hasn't entered any input for 2 seconds.

When the event handler fires, MathJax is asked to typeset the text in the preview
pane.


## ToDo:

* Add settings for MathJax config block.
