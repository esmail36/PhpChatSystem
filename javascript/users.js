const searchInp = document.querySelector(".users .search input"),

      searchbtn = document.querySelector(".users .search button"),
      userslist = document.querySelector(".users .users-list");

      searchbtn.onclick = ()=> {
            searchInp.classList.toggle("active");
            searchbtn.classList.toggle("active");
            searchInp.focus();
            searchInp.value = "";
      }

      searchInp.onkeyup = ()=>{
            let searchTerm = searchInp.value;

            if(searchTerm != "") {
                  searchInp.classList.add("active");
            }else {
                  searchInp.classList.remove("active");
            }

            // Ajax start
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "php/search.php", true);
            xhr.onload = () => {
                  if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                              let data = xhr.response;
                              userslist.innerHTML = data;
                        }
                  }
            }
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("searchTerm="+ searchTerm);
      }

      setInterval(()=>{
            // Ajax 
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "php/users.php", true);
            xhr.onload = () => {
                  if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                              let data = xhr.response;
                              if(!searchInp.classList.contains("active")) {
                                    userslist.innerHTML = data;
                              }
                        }
                  }
      }
      xhr.send();
      }, 500)