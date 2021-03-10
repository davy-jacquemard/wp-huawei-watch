const links = document.querySelectorAll('a[href*="#"]');

 
for (const link of links) {
  link.addEventListener("click", clickHandler);
}
 
function clickHandler(e) {
  e.preventDefault();
  const href = this.getAttribute("href");
  const offsetTop = document.getElementById(href).getBoundingClientRect().top + window.scrollY;
 
  scroll({
    top: offsetTop,
    behavior: "smooth"
  });
}