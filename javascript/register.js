const form = document.querySelector('#form');
const fname = document.querySelector('#fname');
const lname = document.querySelector('#lname');
const email = document.querySelector('#email');
const address = document.querySelector('#address');
const phoneno = document.querySelector('#phoneno');
const password = document.querySelector('#password');
const cpassword = document.querySelector('#cpassword');

form.addEventListener('submit', (e)=>{

  if (!validateInputs()){
    e.preventDefault();
  }
})

function validateInputs(){
  const fnameVal = fname.value.trim();
  const lnameVal = lname.value.trim();
  const emailVal = email.value.trim();
  const addressVal = address.value.trim();
  const phonenoVal = phoneno.value.trim();
  const passwordVal = password.value.trim();
  const cpasswordVal = cpassword.value.trim();
  let success = true

  if(fnameVal === ''){
    success=false;
    setError(fname, 'First Name is Required')
  }else{
    setSuccess(fname)
  }

  if(lnameVal === ''){
    success=false;
    setError(lname, 'Last Name is Required')
  }else{
    setSuccess(lname)
  }

  if(emailVal === ''){
    success=false;
    setError(email,'Email is Required')
  } else if(!validateEmail(emailVal)) {
    success=false;
    setError(email, 'Please enter a valid email')
  } else{
    setSuccess(email)
  }

  if(addressVal === ''){
    success=false;
    setError(address, 'Address is Required')
  }else{
    setSuccess(address)
  }

  if(phonenoVal === ''){
    success=false;
    setError(phoneno, 'Phone Number is Required')
  } else if(phonenoVal.length < 10){
    success=false;
    setError(phoneno, 'Invalid Phone Number')
  } else {
    setSuccess(phoneno)
  }

  if(passwordVal === ''){
    success=false;
    setError(password,'Password is Required')
  } else if(passwordVal.length < 8){
    success=false;
    setError(password,'Invalid Password')
  } else{
    setSuccess(password)
  }

  if(cpasswordVal === ''){
    success=false;
    setError(cpassword, 'Confirm password is requird')
  } else if(cpasswordVal !== passwordVal){
    success=false;
    setError(cpassword, 'Password is not matched')
  } else{
    setSuccess(cpassword)
  }

  return success;

}

function setError(element,message){
  const signupinputbox = element.parentElement;
  const errorElement =signupinputbox.querySelector('.error')

  errorElement.innerText = message;
  signupinputbox.classList.add('error')
  signupinputbox.classList.remove('success')
}

function setSuccess(element,message){
  const signup_input_box = element.parentElement;
  const errorElement =signup_input_box.querySelector('.error')

  errorElement.innerText = '';
  signup_input_box.classList.add('success')
  signup_input_box.classList.remove('error')
}

const validateEmail = (email)=>{
  return String(email)
  .toLowerCase()
  .match(/^(([^<>()[\]\\.,;:\s@""]+(\.[^()[\]\\.,;:\s@""]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)[a-zA-Z]{2,}))$/);
};