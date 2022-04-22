// Menu Active Js
const CurrentLocation = location.href;
const menuItem = document.querySelectorAll(".navbar_menus li a");
const menuLength = menuItem.length;
for (let i = 0; i < menuLength; i++) {
  if (menuItem[i].href === CurrentLocation) {
    menuItem[i].className = "active_tab";
  }
}
// Menu Active Js