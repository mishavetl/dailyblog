(function() {
  $('tr[data-href]').on('click', function() {
    return document.location = $(this).data('href');
  });

}).call(this);

//# sourceMappingURL=admin.js.map
