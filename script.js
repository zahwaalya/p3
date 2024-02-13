var nameError = document.getElementById('name-error');
var phoneError = document.getElementById('phohe-error');
var emailError = document.getElementById('email-error');
var messageError = document.getElementById('message-error');
var submitError = document.getElementById('submit-error');

function validateName(){
    var name = document.getElementById('contact-name').value;

    if(name.length == 0){
        nameError.innerHTML = 'Name is required';
        return false;
    }
    if(!name.match(/^[A_Za-z]*\s{1}[A_Za-z]*$/)){
        nameError.innerHTML = 'Write full name';
        return false;
    }
   
 nameError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
 return true;
}

function validatePhone() {
    var phone = document.getElementById('contact-phone').value;
    var phoneError = document.getElementById('phone-error'); // Assuming phoneError is the id of the element to display error message

    if (phone.length == 0) {
        phoneError.innerHTML = 'Phone number is required';
        return false;
    }
    if (phone.length !== 12) {
        phoneError.innerHTML = 'Phone number should be 12 digits';
        return false;
    }
    if (!phone.match(/^[0-9]{12}$/)) {
        phoneError.innerHTML = 'Only digits please';
        return false;
    }

    phoneError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validateEmail(){
    var email = document.getElementById('contact-email').value;
    

    if(email.length == 0){
        emailError.innerHTML = 'Email is required';
        return false;
    }
    if(!email.match(/^[A_Za-z._\-[0-9]*[@][A_Za-z]*[\.][a-z]{2,4}$/)){
        emailError.innerHTML = 'Email is invalid';
        return false;
    }

 emailError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}


function validateMessage(){
    var message = document.getElementById('contact-message').value;
    var required = 30;
    var left = required - message.length;

    if(left>0){
        messageError.innerHTML = left + 'more characters required';
        return false;
    }
    messageError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;

}

function validateForm(){
    if(!validateName() || !validatePhone() || !validateEmail() || !validateMessage()){
        submitError.innerHTML = 'Please fix error submit';
        return false;
    }
}