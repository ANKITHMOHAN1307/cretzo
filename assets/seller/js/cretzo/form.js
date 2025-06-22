

const form1 = document.querySelector('.form1');
const form2 = document.querySelector('.form2');
const form3 = document.querySelector('.form3');

const btnNext1 = document.querySelector('.btn-next-1');
const btnNext2 = document.querySelector('.btn-next-2');
const btnBack1 = document.querySelector('.btn-back-1');
const btnBack2 = document.querySelector('.btn-back-2');


const sliderLine1 = document.querySelector('.completion-line-1');
const sliderLine2 = document.querySelector('.completion-line-2');

const formIndicator2  = document.querySelector('.form-indicator-2');
const formIndicator3  = document.querySelector('.form-indicator-3');

const photoInput = document.getElementById('photoInput');
const photoContainer = document.querySelector('.preview-container');
const photoPreview = document.getElementById('photoPreview');
const profileIcon = document.querySelector('.profile-icon');


photoContainer.addEventListener('click', function(){
    photoInput.click();
})

photoInput.addEventListener('change', function() {
    const file = this.files[0];
    if (file && file.type.startsWith('image/')) {
      const reader = new FileReader();

      reader.onload = function(e) {
        photoPreview.src = e.target.result;
        // photoPreview.style.display = 'block';
        photoPreview.classList.remove('hidden');
        profileIcon.classList.add('hidden');
      }

      reader.readAsDataURL(file);
    } else {
    //   photoPreview.style.display = 'none';
        photoPreview.classList.add('hidden');
        profileIcon.classList.remove('hidden');
        photoPreview.src = '';
    }
  });

btnNext1.addEventListener('click', function(){
    form1.style.left = '-500%';
    form2.style.left = '0';

    sliderLine1.classList.add('active');
    formIndicator2.classList.add('active');

})

btnNext2.addEventListener('click', function(){
    form2.style.left = '-500%';
    form3.style.left = '0';
    sliderLine2.classList.add('active');
    formIndicator3.classList.add('active');
})

btnBack1.addEventListener('click', function(){
    form1.style.left = '0';
    form2.style.left = '500%';

    sliderLine1.classList.remove('active');
    formIndicator2.classList.remove('active');

})

btnBack2.addEventListener('click', function(){
    form2.style.left = '0';
    form3.style.left = '500%';
    sliderLine2.classList.remove('active');
    formIndicator3.classList.remove('active');
})


    

    