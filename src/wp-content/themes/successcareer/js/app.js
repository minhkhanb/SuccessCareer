var App = window.App || {};

var $ = jQuery.noConflict();

var carousel;

App.hoverEffects = function() {
  var itemMemory = $('.ourCores').find('.item');
  itemMemory.on('mouseenter', function(evt) {
    evt.preventDefault();
    var el = $(this);
    el.toggleClass('hover');
  });
};

App.tabMenuContent = function() {
  var tabs = $('.tabs li a'),
    tabContent = $('.tabContent');
  tabs.on('click', function(evt) {
    evt.preventDefault();
    var el = $(this);
    var tabName = el.text();
    el.closest('li')
      .addClass('active')
      .siblings()
      .removeClass('active');
    tabContent
      .find('li[data-tab="' + tabName + '"]')
      .addClass('active')
      .siblings()
      .removeClass('active');
  });
};

App.sGallery = function() {
  carousel = $('.owl-carousel');
  if (carousel.length > 0) {
    carousel.owlCarousel({
      loop: false,
      margin: 1,
      responsiveClass: true,
      dots: false,
      lazyLoad: true,
      autoHeight:true,
      nav: true,
      responsive: {
        0: {
          items: 1,
          // nav: true
        },
        600: {
          items: 1,
          // nav: false
        },
        1000: {
          items: 1,
        }
      }
    });
  }

  carousel.on('changed.owl.carousel', function(evt) {
    console.log('lazy loaded');
  });
};

App.modalHandler = function() {
  var selectedItem = 2,
    speed = 1;
  $('.modal').on('shown.bs.modal', function(e) {
    selectedItem = $(e.relatedTarget).data('id');
    carousel.trigger('to.owl.carousel', [selectedItem, speed]);
  });
  $('.modal').on('hidden.bs.modal', function(e) {
    carousel.trigger('refresh.owl.carousel');
  });
};

App.checkboxCustom = function() {
  var uiCheckbox = $('.ui-checkbox label'), checkBoxElem = $('.ui-checkbox').find('span').first();
  
  uiCheckbox.off('click').on('click', function(evt) {
    // evt.preventDefault();
    var el = $(this), checkbox = el.find('input[type=checkbox]');
    if(checkbox.is(':checked')) {
      el.closest('.ui-checkbox').addClass('checked');
    }
    else {
      el.closest('.ui-checkbox').removeClass('checked');
    }
    
  });
  checkBoxElem.on('click', function(evt){
    var el = $(this), parent = el.closest('.ui-checkbox'), checkbox = parent.find('input[type=checkbox]');
    if(parent.hasClass('checked')) {
      parent.removeClass('checked');
      checkbox.prop('checked', false);
    }
    else {
      parent.addClass('checked');
      checkbox.prop('checked', true);
    }
  });
}

App.fileHandler = function() {
  var fileField = $('.ui-file-handle input[type=file]'), fileInfo = $('.ui-file-info h6');
  fileField.on('change', function(evt){
    var el = $(this), files = el.get(0).files, file = files[0] ;
    fileInfo.text(file.name);
    // console.log('file event: ', evt, file);
  });
}

App.common = function() {
  var applyNowBtn = $('.apply-now a');
  applyNowBtn.on('click', function(evt){
    evt.preventDefault();
  });
}

App.toggleButton = function() {
  var menuIcon = $('.menu-toggler'), topbar = $('#top-bar');
  menuIcon.on('click', function(evt){
    $(this).toggleClass('show');
    topbar.toggleClass('show');
  });
}

App.init = function() {
  App.hoverEffects();
  App.tabMenuContent();
  App.sGallery();
  App.modalHandler();
  App.checkboxCustom();
  App.fileHandler();
  App.common();
  App.toggleButton();
};

$(document).ready(function() {
  App.init();
});
