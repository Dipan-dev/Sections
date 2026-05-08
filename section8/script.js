
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".click-text");
  
    links.forEach(link => {
      link.addEventListener("click", function (e) {
        e.preventDefault(); // remove this if using real section links
  
        links.forEach(l => l.classList.remove("active"));
        this.classList.add("active");
      });
    });
  });