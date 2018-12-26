$(document).ready(function(){

    var item = document.querySelector('.dates__item--selected');
    var widhtItem = item.offsetWidth;
    var widhtItems = item.offsetWidth * item.attributes['data-numitem'].value;
    console.log(widhtItems);

    var container = document.getElementById('dates-overflow--hidden');
    var itemFirst = document.getElementById('dates__item--first');

    var widthContainer = container.offsetWidth;
    var widthItemFirst = itemFirst.offsetWidth;

    console.log(widthContainer);
    console.log(widthItemFirst);

    var middleWidthContainer = (widthContainer - widhtItems) / 2;
    var middleWidthContainer = (widthContainer / 2) - (widhtItem / 2);
    console.log(middleWidthContainer);
    var totalMoveScroll = widhtItems + widthItemFirst - widthContainer + middleWidthContainer + (widhtItem / 2);
    var totalMoveScroll = widhtItems + widthItemFirst - widthContainer + middleWidthContainer;
    console.log(totalMoveScroll);

    // Item Selected
    scrollCalendar(totalMoveScroll);

    var scrolling = 50;

    function scrollCalendar(value) {
        container.scrollLeft = container.scrollLeft + value;
    }

    $('#calendar__button-preview').click(function () {
        scrollCalendar(-scrolling);
    });

    $('#calendar__button-next').click(function () {
        scrollCalendar(scrolling);
    });

});