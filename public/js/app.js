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

// const navItem = $(".nav-item")
// $(document).ready(() => {
//     $(allNavTabs).on("click", (event) => {
//         if($(event.target).hasClass("paths-tab")) {
//             $(event.target).addClass("is-active");
//         }
//         else {
//             $(".paths-tab").removeClass("is-active");
//         }
//     })
// });

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
    })

    $(formExitBtn).on("click", () => {
        $(loginWindow).hide(500);
    })
});