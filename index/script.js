const myImgs = document.querySelectorAll('.card');

const options = {
  rootMargin: '0px',
  threshold: 1
};

let observer = new IntersectionObserver((entries) => {
   console.log(entries);
   entries.forEach(entry => {
    if(entry.isIntersecting ) {
       entry.target.classList.add('isVisible');
    } else {
      entry.target.classList.remove('isVisible');
    }
   });
}, options);

myImgs.forEach(image => {observer.observe(image)} );
