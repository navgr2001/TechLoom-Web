(function ($) {
        "use strict";
            var WidgetScrollSequenceHandler = function($scope, $) { 
                let is_editable = elementorFrontend?.isEditMode();
                let hzMain = $scope.find('.wkit-multi-step-hz-wrapper');
let hzStep = hzMain[0].querySelectorAll('.wkit-hz-pix-levels-step');

hzStep.forEach(function(el) {
    if (!el.classList.contains('wkit-hz-active')) {
        el.classList.add('wkit-hz-active');
    }else{
        el.classList.remove('wkit-hz-active');
        el.classList.add('wkit-hz-complete');
    }
});

var hzNumber = hzMain[0].querySelectorAll('.wkit-hz-inner-style-2 .wkit-prg-two');
hzNumber.forEach(function(element) {
    var dataIndex = parseInt(element.getAttribute('data-index'));
    element.setAttribute('data-index', dataIndex + 1);
});

var hzCheckIcon = hzMain[0].querySelectorAll('.wkit-hz-inner-style-3 .wkit-hz-active-yes .wkit-hz-pix-levels-dot-inner');
hzCheckIcon.forEach(function(ele) {
    ele.classList.add('wkit-hz-check-mark');
});
  
            };	
        $(window).on('elementor/frontend/init', function () {
          elementorFrontend.hooks.addAction('frontend/element_ready/wb-1hnn3l23.default', WidgetScrollSequenceHandler);
        });
    })(jQuery);