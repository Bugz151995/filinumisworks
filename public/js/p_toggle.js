document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.toggle-show-pass').forEach((item) => {
    item.addEventListener('click', () => {
      const pass = document.getElementsByClassName('password');
      const eye = document.getElementsByClassName('eye-icon');
  
      if (pass.length < 2) {
        if (pass[0].type == 'password') {
          eye[0].classList.toggle('fa-eye-slash');
          pass[0].type = 'text'
        } else {
          eye[0].classList.toggle('fa-eye');
          pass[0].type = 'password';
        }
      } else {
        for (let index = 0; index < pass.length; index++) {
          if (pass[index].type == 'password') {
            eye[index].classList.toggle('fa-eye-slash');
            pass[index].type = 'text';
          } else {
            eye[index].classList.toggle('fa-eye');
            pass[index].type = 'password';
          }
        }
      }
    })
  })
});