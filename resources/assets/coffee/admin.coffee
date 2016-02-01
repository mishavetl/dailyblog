$('tr[data-href]').on 'click', ->
    document.location = $(this).data('href')
