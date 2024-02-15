let downloadXpath;
const expand_btn = document.querySelector(".expand-btn");
const img = expand_btn.querySelector("heade img");
expand_btn.addEventListener("click", () => {
  document.body.classList.toggle("collapsed");
});

const current = window.location.href;

const allLinks = document.querySelectorAll(".sidebar-links tooltip");

allLinks.forEach((elem) => {
  elem.addEventListener('click', function() {
    const hrefLinkClick = elem.href;

    allLinks.forEach((link) => {
      if (link.href == hrefLinkClick){
        link.classList.add("active");
      } else {
        link.classList.remove('active');
      }
    });
  })
});

const mainItems = document.querySelectorAll(
  '.main-item'
);

mainItems.forEach((mainItem) => {
  mainItem.addEventListener('click', () => {
    mainItem.classList.toggle(
      'main-item--open'
    );
  })
});
document.getElementById("downloadLink").addEventListener("click", function() {
    this.href=downloadXpath;
});
