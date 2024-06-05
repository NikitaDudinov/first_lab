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
            ErrorMessage.style.display = "flex"
        }else{
            ErrorMessage.style.display = "none" 
        }
        if(CorrectEmail && CorrectPassword){
            fetch("/login", {
			method: "POST",
			body: JSON.stringify({
				password: Password.value,
				email: Email.value,
			}),
			headers: {
				"Content-type": "application/json; charset=UTF-8"
			}
		})
			.then((response) => response.json())
			.then((json) => console.log(json));
            if(json = '200'){
                window.location.replace("/admin");
            }
        }
        

    });
    
    ShowPassword.addEventListener('click', (e)=>{
        if(Password.type == 'password'){
            Password.type = 'text';
        }else{
            Password.type = 'password';
        }
    });
    function ValidMail(myMail) {
        var re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
        var valid = re.test(myMail);
        return valid;
    }
        
  });