const form = document.querySelector(".typing-area"),
      inputField = document.querySelector(".input-field"),
      sendBtn = document.querySelector(".message-btn"),
      chatBox = document.querySelector(".chat-box");

      form.onsubmit = (e)=> {
            e.preventDefault();
      }

      
      sendBtn.onclick = ()=>{
             // Ajax start here
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "php/insert-chat.php", true);
            xhr.onload = () => {
                  if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                              inputField.value = "";
                              scrollToBottom();
                        }
                  }
            }
            
            let formdata = new FormData(form);
            xhr.send(formdata);
      }

      chatBox.onmouseenter = ()=>{
            chatBox.classList.add("active");
      }
      chatBox.onmouseleave = ()=>{
            chatBox.classList.remove("active");
      }

      setInterval(()=>{
            // Ajax 
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "php/get-chat.php", true);
            xhr.onload = () => {
                  if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                              let data = xhr.response;
                              chatBox.innerHTML = data;
                              if(!chatBox.classList.contains("active")) {
                                    scrollToBottom();
                              }
                        }
                  }
            }
            let formdata = new FormData(form);
            xhr.send(formdata);
      }, 500)

      function scrollToBottom() {
            chatBox.scrollTop = chatBox.scrollHeight;
      }