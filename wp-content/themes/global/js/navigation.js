/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function ($) {
  var container, button, menu, links, subMenus, i, len;

  container = document.getElementById('site-navigation');
  if (!container) {
    return;
  }

  button = container.getElementsByTagName('button')[0];
  if (typeof button === 'undefined') {
    return;
  }

  menu = container.getElementsByTagName('ul')[0];

    // Hide menu toggle button if menu is empty and return early.
  if (typeof menu === 'undefined') {
    button.style.display = 'none';
    return;
  }

  menu.setAttribute('aria-expanded', 'false');
  if (menu.className.indexOf('nav-menu') === -1) {
    menu.className += ' nav-menu';
  }

  button.onclick = function () {
    if (container.className.indexOf('toggled') !== -1) {
      container.className = container.className.replace(' toggled', '');
      button.setAttribute('aria-expanded', 'false');
      menu.setAttribute('aria-expanded', 'false');
    } else {
      container.className += ' toggled';
      button.setAttribute('aria-expanded', 'true');
      menu.setAttribute('aria-expanded', 'true');
    }
  };

    // Get all the link elements within the menu.
  links = menu.getElementsByTagName('a');
  subMenus = menu.getElementsByTagName('ul');

    // Set menu items with submenus to aria-haspopup="true".
  for (i = 0, len = subMenus.length; i < len; i++) {
    subMenus[i].parentNode.setAttribute('aria-haspopup', 'true');
    subMenus[i].parentNode.setAttribute('aria-marcin', 'true');
  }

    // Each time a menu link is focused or blurred, toggle focus.
  for (i = 0, len = links.length; i < len; i++) {
    links[i].addEventListener('focus', toggleFocus, {passive: true});
    links[i].addEventListener('blur', toggleFocus, {passive: true});
    // links[i].addEventListener('click', menuShowDropdown, {passive: true});
  }

    /**
     * Sets or removes .focus class on an element.
     */
  function toggleFocus () {
    var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
    while (self.className.indexOf('nav-menu') === -1) {
            // On li elements toggle the class .focus.
      if (self.tagName.toLowerCase() === 'li') {
        if (self.className.indexOf('focus') !== -1) {
          self.className = self.className.replace(' focus', '');
        } else {
          self.className += ' focus';
        }
      }

      self = self.parentElement;
    }
  }

//
// Toggles `focus` class to allow submenu access on tablets.
//
  (function (container) {
    var touchStartFn, i,
      parentLink = container.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');

    if ('ontouchstart' in window) {
      touchStartFn = function (e) {
        var menuItem = this.parentNode, i;

        if (!menuItem.classList.contains('focus')) {
          e.preventDefault();
          for (i = 0; i < menuItem.parentNode.children.length; ++i) {
            if (menuItem === menuItem.parentNode.children[i]) {
              continue;
            }
            menuItem.parentNode.children[i].classList.remove('focus');
          }
          menuItem.classList.add('focus');
        } else {
          menuItem.classList.remove('focus');
        }
      };

      for (i = 0; i < parentLink.length; ++i) {
        parentLink[i].addEventListener('touchstart', touchStartFn, { passive: true });
      }
    }
  }(container));

  function menuShowDropdown (e) {
    // e.preventDefault();

    if ($(this).next('.sub-menu') === '.sub-menu') {
      var self = this;
      var menuDropdown = $(this).next('.sub-menu');
      console.log(menuDropdown);

      $('.sub-menu').removeClass('active');
      $('.sub-menu').blur();
      // $('.sub-menu').css({
      //     opacity: '',
      //     top: 'auto'
      // });

      menuDropdown.addClass('active');
      // menuDropdown.css({
      //     opacity: '1',
      //     top: '38px'
      // });
      menuDropdown.focus();
    }
  }
})(jQuery);
