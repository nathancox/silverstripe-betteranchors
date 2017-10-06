(function ($) {
  $.entwine('ss', function ($) {

    $('form.htmleditorfield-linkform').entwine({
      /**
       * This fetches the non-content anchors from the textarea's data-anchors attribute and
       * inserts them in to the anchors dropdown
       */
      getAnchors: function() {
        var dfdAnchors = this._super()

        var extraAnchors = this.getElement().data('anchors')

        if (extraAnchors !== undefined) {
          var insertBefore = []
          var insertAfter = extraAnchors

          if (extraAnchors['before'] !== undefined) {
              insertBefore = extraAnchors['before']
          }

          if (extraAnchors['after'] !== undefined) {
              insertAfter = extraAnchors['after']
          }

          dfdAnchors.then(function(anchors) {
              for (var i = insertBefore.length - 1; i >= 0; i--) {
                  anchors.unshift(insertBefore[i])
              }

              for (var i = 0; i < insertAfter.length; i++) {
                  anchors.push(insertAfter[i])
              }
          })

        }
        return dfdAnchors
      }
    })

  })
})(jQuery)

