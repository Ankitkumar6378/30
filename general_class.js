
 function verifyNull(){

    var isValid = true;
    if(!document.getElementById('username').value.trim().length){
         isValid = false;
         alert('Please enter username');
    }
    else if(!document.getElementById('password').value.trim().length){
    isValid = false;
         alert('Please enter password');
    }
   return true;
}