MathJax.Hub.Config({
    "HTML-CSS":
    {
      preferredFont: "TeX",
      scale:95,
      linebreaks: { automatic:true },
      EqnChunk: (MathJax.Hub.Browser.isMobile ? 10 : 50)
    },
    SVG: {
      blacker: 10,
      matchFontHeight: true,
      font: "Gyre-Pagella",
      linebreaks: { automatic:true }
    },
    tex2jax: {
        inlineMath: [ ["$", "$"], ["\\(","\\)"] ],
        displayMath: [ ["$$","$$"], ["\\[", "\\]"] ],
        processEscapes: true,
        ignoreClass: "tex2jax_ignore|dno"
    },
    TeX: {
      noUndefined: { attributes: { mathcolor: "red", mathbackground: "#FFEEEE", mathsize: "90%" },
      Macros: { RR: '\\mathbb{R}'}
    },
    Safe: {
        allow: {
            URLs: "safe",
            classes: "safe",
            cssIDs: "safe",
            styles: "safe",
            fontsize: "all" }
        }
    },
    messageStyle: "none",
    elements: [ "blog-post-preview" ]
});

function updateMathJax()
{
  MathJax.Hub.Queue(["Typeset", MathJax.Hub, "blog-post-preview" ]);
}

var timeout;

$(window).load(function () {

  $("textarea").keyup(function () {
    clearTimeout(timeout);
    timeout = setTimeout(updateMathJax, 2000);
  });
});
