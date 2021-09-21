module('Component', {
    setup: function(){
        this.component = $('<div class="input-append date" id="datepicker">'+
                               '<input type="text">'+
                           '</div>')
                        .appendTo('#qunit-fixture')
                        .datepicker();
        this.dp = this.component.data('datepicker');
        this.picker = this.dp.picker;
    },
    teardown: function(){
        this.picker.remove();
    }
});

test('Check title with timezone', function(){
    var target;

    this.dp.viewDate = UTCDate(2021, 3, 29);
    this.dp.fill();

    target = this.picker.find('.datepicker-days .datepicker-switch');
    equal(target.text(), 'March 2021', 'Title is "March 2021"');
});
