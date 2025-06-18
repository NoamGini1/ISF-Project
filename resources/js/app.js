jQuery(document).ready(function($) {

  const $menuToggle = $('.menu-toggle');
  const $menu = $('.main-menu');
  const $menuClose = $('.menu-close');
  const $siteHeader = $('.site-header');

  function openMenu() {
    $menu.addClass('open');
    $menuToggle.attr('aria-expanded', true);
    $siteHeader.addClass('menu-open');
    $menuToggle.addClass('hidden');
    $('body').toggleClass('menu-open');
  }

  function closeMenu() {
    $menu.removeClass('open');
    $menuToggle.attr('aria-expanded', false);
    $siteHeader.removeClass('menu-open');
    $menuToggle.removeClass('hidden');
     $('body').removeClass('menu-open');
  }

  $menuToggle.on('click', function() {
    if ($menu.hasClass('open')) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  $menuClose.on('click', closeMenu);

});

