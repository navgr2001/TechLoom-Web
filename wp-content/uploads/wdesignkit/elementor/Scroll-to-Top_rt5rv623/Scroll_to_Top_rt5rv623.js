(function ($) {
        "use strict";
            var WidgetScrollSequenceHandler = function($scope, $) { 
                let is_editable = elementorFrontend?.isEditMode();
                let button = $scope[0].querySelector('.wkit-scrolltotop');

let applyTo = (button.getAttribute("data-applyto")) ? button.getAttribute("data-applyto") : 'body' ;
let cid = (button.getAttribute("data-cid")) ? button.getAttribute("data-cid") : '' ;


let btnOffset = (button.getAttribute("data-desk")) ? Number(button.getAttribute("data-desk")) : 100 ;
let btnOffsetTab = (button.getAttribute("data-tab")) ? Number(button.getAttribute("data-tab")) : btnOffset ;
let btnOffsetMob = (button.getAttribute("data-mob")) ? Number(button.getAttribute("data-mob")) : btnOffsetTab ;

let btnOffsetN = "", winScroll = '', conTopOff = 0, topOff = 0;

let width = screen.width;
if (width >= 1024) {
    btnOffsetN = btnOffset;
} else if (width < 1024 && width >= 768) {
    btnOffsetN = btnOffsetTab;
} else if (width < 768){
    btnOffsetN = btnOffsetMob;
}
if(applyTo == 'container'){
    winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    let getSelector = '';
    if(cid){
        getSelector = document.querySelector(cid);
    }else{
        getSelector = $scope[0].closest('.e-con-boxed, .e-con-full');
    }
    if(getSelector){
        conTopOff = getSelector.offsetTop;   
    }
    topOff = conTopOff;
    btnOffsetN = btnOffsetN + conTopOff;
}

window.addEventListener('scroll',() => {
    if(window.scrollY >= btnOffsetN){
        button.style.visibility = "visible";
    }
    else{
        button.style.visibility = "hidden";
    }
});


button.addEventListener('click',() => {
    window.scroll({
        top: topOff,
        behavior: 'smooth'
    }); 
});  
            };	
        $(window).on('elementor/frontend/init', function () {
          elementorFrontend.hooks.addAction('frontend/element_ready/wb-rt5rv623.default', WidgetScrollSequenceHandler);
        });
    })(jQuery);