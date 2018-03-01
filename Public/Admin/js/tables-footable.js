$(window).on('load', function() {
    $('#demo-foo-row-toggler').footable();
    var fooColExp = $('#demo-foo-col-exp');
    fooColExp.footable().trigger('footable_expand_first_row');
    $('#demo-foo-collapse').on('click', function(){
        fooColExp.trigger('footable_collapse_all');
    });
    $('#demo-foo-expand').on('click', function(){
        fooColExp.trigger('footable_expand_all');
    })
    $('#demo-foo-accordion').footable().on('footable_row_expanded', function(e) {
        $('#demo-foo-accordion tbody tr.footable-detail-show').not(e.row).each(function() {
            $('#demo-foo-accordion').data('footable').toggleDetail(this);
        });
    });
    $('#demo-foo-pagination').footable();
    $('#demo-show-entries').change(function (e) {
        e.preventDefault();
        var pageSize = $(this).val();
        $('#demo-foo-pagination').data('page-size', pageSize);
        $('#demo-foo-pagination').trigger('footable_initialized');
    });
    var filtering = $('#demo-foo-filtering');
    filtering.footable().on('footable_filtering', function (e) {
        var selected = $('#demo-foo-filter-status').find(':selected').val();
        e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
        e.clear = !e.filter;
    });
    $('#demo-foo-filter-status').change(function (e) {
        e.preventDefault();
        filtering.trigger('footable_filter', {filter: $(this).val()});
    });
    $('#demo-foo-search').on('input', function (e) {
        e.preventDefault();
        filtering.trigger('footable_filter', {filter: $(this).val()});
    });
    // var addrow = $('#demo-foo-addrow');
    // addrow.footable().on('click', '.demo-delete-row', function() {
    //     var footable = addrow.data('footable');
    //     var row = $(this).parents('tr:first');
    //     //footable.removeRow(row);
    // });
    $('#demo-input-search2').on('input', function (e) {
        e.preventDefault();
        addrow.trigger('footable_filter', {filter: $(this).val()});
    })
});