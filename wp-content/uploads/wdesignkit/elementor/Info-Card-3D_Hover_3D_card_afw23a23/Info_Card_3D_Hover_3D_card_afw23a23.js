(function ($) {
        "use strict";
            var WidgetScrollSequenceHandler = function($scope, $) { 
                let is_editable = elementorFrontend?.isEditMode();
                let infoCard = $scope[0].querySelector('.wkit-hover-3d-card-main');
let cardItem = infoCard.querySelector('.wkit-hover-3d-card-item');
let link = cardItem.querySelector('.info-link');
const isTablet = window.innerWidth >= 768 && window.innerWidth <= 1024;
const isMobile = window.innerWidth <= 767;

link.addEventListener('click', (e) => {
    if (
        (isMobile && !cardItem.classList.contains('disable-mobile-link')) ||
        (isTablet && !cardItem.classList.contains('disable-tablet-link'))
    ) {
        e.preventDefault();
        e.stopPropagation();
    }
});  
            };	
        $(window).on('elementor/frontend/init', function () {
          elementorFrontend.hooks.addAction('frontend/element_ready/wb-Hover_3D_card_afw23a23.default', WidgetScrollSequenceHandler);
        });
    })(jQuery);