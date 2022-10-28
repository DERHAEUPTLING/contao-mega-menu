window.addEventListener("DOMContentLoaded", () => {

  const mm_container = document.querySelectorAll(".mm_container");
  const mm_links = document.querySelectorAll(".mm_link_onClickOnly");


  mm_links.forEach((link) => { 
    link.addEventListener("click", (e) => {
      e.preventDefault();
      mm_links.forEach(link => link.classList.remove('mm_isActive'));
      link.classList.add('mm_isActive');
    });
  });



  document.addEventListener("click", (event) => {
    let isClickInside = false;

    mm_container.forEach(container => {
      console.log("each test for outside");
      if (container.contains(event.target)) { isClickInside = true };
    })
  
    if (!isClickInside) {
      mm_links.forEach(link => link.classList.remove('mm_isActive'));
    }
  });
});


