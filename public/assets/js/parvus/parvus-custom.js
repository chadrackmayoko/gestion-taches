const prvs = new Parvus({
    gallerySelector: '.gallery',
    // previousButtonIcon: '<i class="fa-solid fa-arrow-left"></i>',
    // nextButtonIcon: '<i class="fa-solid fa-arrow-right"></i>',
    // closeButtonIcon: '<i class="fa-solid fa-xmark"></i>',  
  })
  
  // API
  const newImage = document.querySelector('.lightbox-new')
  
  prvs.add(newImage)
  
  // Events
  const EVENT_EL = document.querySelector('.event')
  
  prvs.on('open', function () {
    EVENT_EL.removeAttribute('hidden');
    EVENT_EL.innerHTML = 'Opened Parvus'
  })
  
  prvs.on('select', function () {
    EVENT_EL.innerHTML = `Select slide ${prvs.currentIndex() + 1}`
  })
  
  prvs.on('close', function () {
    EVENT_EL.innerHTML = 'Closed Parvus'
    
    setTimeout(function () {
      EVENT_EL.setAttribute('hidden', true);
    }, 2000);
  })