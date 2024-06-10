    
document.addEventListener("DOMContentLoaded", (event) => {
    let Button = document.getElementById('login-form__submit');
    let Password = document.getElementById('password');
    let Email = document.getElementById('email');
    let ErrorMessage = document.getElementById('error-message');
    let ErrorPassword = document.getElementById('error__password');
    let ErrorEmail = document.getElementById('error__email');
    let ShowPassword = document.getElementById('show-password');
    let CorrectPassword = true;
    let CorrectEmail = true;
    Button.addEventListener('click', (e)=>{
        e.preventDefault()
        if(Password.value === ''){
            ErrorPassword.innerHTML = 'Password is required.';
            ErrorPassword.style.display = 'block';
            CorrectPassword = false;
        }else{
            ErrorPassword.style.display = 'none';
            CorrectPassword = true;
        }
        if(Email.value === ''){
            ErrorEmail.innerHTML = 'Password is required.';
            ErrorEmail.style.display = 'block';
            CorrectEmail = false;
        }else{
            if(!ValidMail(Email.value)){
                ErrorEmail.innerHTML = 'Incorrect email format. Correct format is ****@**.***';
                ErrorEmail.style.display = 'block';
                CorrectEmail = false;
              }else{
                 ErrorEmail.style.display = 'none';
                 CorrectEmail = true;
              }
        }
        if(!(CorrectEmail && CorrectPassword)){
            ErrorMessage.classList.remove("hidden");
            document.getElementById('error-message__img').classList.remove("hidden");
            document.getElementById('error-message__title').classList.remove("hidden");
        }else{
            ErrorMessage.classList.add("hidden");
            document.getElementById('error-message__img').classList.add("hidden");
            document.getElementById('error-message__title').classList.add("hidden");
        }
        if(CorrectEmail && CorrectPassword){
            fetch("api/login", {
			method: "POST",
			body: JSON.stringify({
				password: md5(Password.value),
				email: Email.value,
			}),
			headers: {
				"Content-type": "application/json; charset=UTF-8"
			}
		})
            .then(response => response.text())
			.then(responseText => {
                if(responseText == '200'){
                    window.location.replace("/admin");
                }
                else
                {
                    ErrorPassword.innerHTML = 'Email is not valid. Please, enter correct one.';
                    ErrorPassword.style.display = 'block';
                    ErrorEmail.innerHTML = 'Email is not valid. Please, enter correct one.';
                    ErrorEmail.style.display = 'block'; 
                    ErrorMessage.classList.remove("hidden");
                    document.getElementById('error-message__img').classList.remove("hidden");
                    document.getElementById('error-message__title').classList.remove("hidden");
                }
            });
        }
        

    });
    
    ShowPassword.addEventListener('click', (e)=>{
        if(Password.type == 'password'){
            Password.type = 'text';
            ShowPassword.src = "./images/login_page/eye.svg"

        }else{
            Password.type = 'password';
            ShowPassword.src = "./images/login_page/eye-off.png"
        }
    });
    function ValidMail(myMail) {
        var re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
        var valid = re.test(myMail);
        return valid;
    }
        
  });