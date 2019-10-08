// Get DOM Elements
const modal = document.querySelector('#my-modal');
const modalBtn = document.querySelector('#modal-btn');
const closeBtn = document.querySelector('.close');
const emailInput= document.querySelector('#emailV');
const phoneInput= document.querySelector('#phoneV');
const nameInput= document.querySelector('#nameV');


//Validar si están llenos los campos.
function checkIfOpenModal(){
if (emailInput.value != "" && nameInput.value != "" && phoneInput.value != "" ){
  openModal();
  
}else{
  swal("No has terminado aún","Debes llenar los campos para poder continuar. Gracias¡","error");
}

};


// Events
modalBtn.addEventListener('click', checkIfOpenModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick);

// Open
function openModal() {
  modal.style.display = 'block';
}

// Close
function closeModal() {
  modal.style.display = 'none';
}

// Close If Outside Click
function outsideClick(e) {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
}
