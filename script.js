'use strict';

const modal = document.querySelector('.moda');
const overlay = document.querySelector('.overlay');
const btnCloseModal = document.querySelector('.close-modal');
//const btnsOpenModal = document.querySelectorAll('.show-modal');
const button_1 = document.querySelector('.show-modal_1');
const button_2 = document.querySelector('.show-modal_2');
const openModal = function () {
  modal.classList.remove('hidden');
  overlay.classList.remove('hidden');
};

const closeModal = function () {
  modal.classList.add('hidden');
  overlay.classList.add('hidden');
};

//for (let i = 0; i < btnsOpenModal.length; i++)
  //btnsOpenModal[i].addEventListener('click', openModal);
button_1.addEventListener('click', openModal);
btnCloseModal.addEventListener('click', closeModal);
overlay.addEventListener('click', closeModal);



//btnCloseModal.addEventListener('click', closeModal);
//overlay.addEventListener('click', closeModal);

document.addEventListener('keydown', function (e) {
  // console.log(e.key);

  if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
    closeModal();
  }
});
