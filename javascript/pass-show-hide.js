const pswrd = document.querySelector(".form input[type = 'password']"),
togglebtn = document.querySelector(".form .field i");

togglebtn.onclick = ()=> {
      if(pswrd.type == 'password') {
            pswrd.type = 'text';
            togglebtn.classList.add('active');
      }else {
            pswrd.type = 'password';
            togglebtn.classList.remove('active');
      }
}

