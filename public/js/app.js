const pathsTab = $(".paths-tab");
const pathsDropMenu = $(".paths-dropdown");
const coursesTab = $(".courses-tab");
const coursesDropMenu = $(".courses-dropdown");
const communityTab = $(".community-tab");
const communityDropMenu = $(".community-dropdown");
const resourcesTab = $(".resources-tab");
const resourcesDropMenu = $(".resources-dropdown");
const allNavTabs = $(".nav-tabs");
const allDropMenus = $(".dropdown-menu");

$(document).ready(() => {
  $(allNavTabs).on("click", (event) => {
    if ($(event.target).hasClass("paths-tab")) {
      $(pathsDropMenu).toggle(500);
    } else {
      $(pathsDropMenu).hide(500);
    }

    if ($(event.target).hasClass("resources-tab")) {
      $(resourcesDropMenu).toggle(500);
    } else {
      $(resourcesDropMenu).hide(500);
    }

    if ($(event.target).hasClass("community-tab")) {
      $(communityDropMenu).toggle(500);
    } else {
      $(communityDropMenu).hide(500);
    }

    if ($(event.target).hasClass("courses-tab")) {
      $(coursesDropMenu).toggle(500);
    } else {
      $(coursesDropMenu).hide(500);
    }
  });
});

const navLink = $(".nav-link");
$(document).ready(() => {
  $(navLink).on("click", (event) => {
    if ($(event.target).hasClass("paths-tab")) {
      $(event.target).addClass("active");
    } else {
      $(".paths-tab").removeClass("active");
    }

    if ($(event.target).hasClass("courses-tab")) {
      $(event.target).addClass("active");
    } else {
      $(".courses-tab").removeClass("active");
    }

    if ($(event.target).hasClass("contact-tab")) {
      $(event.target).addClass("active");
    } else {
      $(".contact-tab").removeClass("active");
    }

    if ($(event.target).hasClass("resources-tab")) {
      $(event.target).addClass("active");
    } else {
      $(".resources-tab").removeClass("active");
    }

    if ($(event.target).hasClass("go-pro-tab")) {
      $(event.target).addClass("active");
    } else {
      $(".go-pro-tab").removeClass("active");
    }

    if ($(event.target).hasClass("community-tab")) {
      $(event.target).addClass("active");
    } else {
      $(".community-tab").removeClass("active");
    }

    if ($(event.target).hasClass("home-tab")) {
      $(event.target).addClass("active");
    } else {
      $(".home-tab").removeClass("active");
    }
  });
});

//   $(pathsTab).on("click", () => {
//     $(pathsDropMenu).toggle(500);
//   });

//   $(coursesTab).on("click", () => {
//     $(coursesDropMenu).toggle(500);
//   });

//   $(communityTab).on("click", () => {
//     $(communityDropMenu).toggle(500);
//   });

//   $(resourcesTab).on("click", () => {
//     $(resourcesDropMenu).toggle(500);
//   });
// });

const formExitBtn = $(".form-exit");
const loginWindow = $(".login-cont");
const loginNavLink = $(".login-link");
$(document).ready(() => {
  $(loginNavLink).on("click", () => {
    $(loginWindow).show(500);
    $(allDropMenus).hide(500);
  });

  $(formExitBtn).on("click", () => {
    $(loginWindow).hide(500);
  });
});
