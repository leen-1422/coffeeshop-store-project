const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
form.addEventListener('submit', e => {
    e.preventDefault();
    validateInputs();
});
const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}
const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};
const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    if(usernameValue === '') {
        setError(username, 'اسم المسخدم مطلوب');
    } else {
        setSuccess(username);
    }
    if(emailValue === '') {
        setError(email, 'الايميل مطلوب');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'ادخل الايميل بشكل صحيح');
    } else {
        setSuccess(email);
    }
    if(passwordValue === '') {
        setError(password, 'رجاء ادخل المشكله');
    } 
    else {
        setSuccess(password);
    }

    

};
function deleteProduct(id,img){

    var ok = confirm("انت تقوم بحذف منتج");
    if(ok){
        location.href = "?delete="+id+"&img="+img;
    }
    
}