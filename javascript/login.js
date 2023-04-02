const form = document.querySelector(".login .form"),
      continuebtn = form.querySelector(".button"),
      errortxt = form.querySelector(".error-text");

form.onsubmit = (e) => {
      e.preventDefault();
}

continuebtn.onclick = () => {
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "php/login.php", true);
      xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                  if (xhr.status == 200) {
                        let data = xhr.response;
                        
                        if (data == "success") {
                              location.href = "users.php";

                        } else {

                              errortxt.style.display = "block";
                              errortxt.textContent = data;

                        }
                  }
            }
      }
      
      let formdata = new FormData(form);

      xhr.send(formdata);
}