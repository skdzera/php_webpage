complete_page= document.querySelector(".complete_page"),
web_page = document.querySelector(".web_page"),
form = document.querySelector("form"),
selectbtn = form.querySelector(".submit"),
form_page = document.querySelector(".form_page");

function enroll(){
    web_page.style.display= "none";
    form_page.style.display= "block";
}

function cancel(){
    web_page.style.display= "block";
    form_page.style.display= "none";
}

form.onsubmit= (e)=>{
    e.preventDefault();
}

selectbtn.onclick= ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "enroll.php", true);
    xhr.onload= ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "success"){
                    cancel();
                }
                
            }
        }
    }

    let formdata = new FormData(form);
    xhr.send(formdata);
}
