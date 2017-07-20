(function (global, factory) {
	typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
	typeof define === 'function' && define.amd ? define(factory) :
	(global.PrismComponent = factory());
}(this, (function () { 'use strict';

function assign(obj) {
  var arguments$1 = arguments;

  for (var i = 1; i < arguments.length; i++) {
    // eslint-disable-next-line guard-for-in, prefer-rest-params
    for (var p in arguments[i]) { obj[p] = arguments$1[i][p]; }
  }
  return obj
}

var index = {
  functional: true,
  props: {
    code: {
      type: String
    },
    language: {
      type: String,
      default: 'markup'
    }
  },
  render: function render(h, ctx) {
    var code = ctx.props.code || ctx.children[0].text;
    var language = ctx.props.language;
    var prismLanguage = Prism.languages[language];
    var className = "language-" + language;

    if ("production" === 'development' && !prismLanguage) {
      throw new Error(
        ("Prism component for language \"" + language + "\" was not found, did you forget to register it? See all available ones: https://cdn.jsdelivr.net/npm/prismjs/components/")
      )
    }

    return h(
      'pre',
      assign({}, ctx.data, {
        class: [ctx.data.class, className]
      }),
      [
        h('code', {
          class: className,
          domProps: {
            innerHTML: Prism.highlight(code, prismLanguage)
          }
        })
      ]
    )
  }
};

return index;

})));
