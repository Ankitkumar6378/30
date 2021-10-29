function valid() {
    try{
        validation()
    }
    catch (error)
    {
        document.getElementById('console').innerHTML = 
        "<h3 style='color:red'> Warning: </h3>" + error.message;
    }

}
function validation()
{
    var user = document.getElementById('username').value.trim();
    var pass = document.getElementById("password").value.trim();

    // var filter = /^(?=.{8,20}$)(?![.])(?!.*[_.]{2})[a-zA-Z0-9]+(?<![.])$/  ////Regular expression
    var isValid = true;
    var illegalChars = /\W/; // allow letters, numbers, and underscores

    if ((user.length < 5) || (user.length > 15)) {
        isValid = false;
        // error = "The username is the wrong length.\n";
        // alert(error);
        throw new Error("The username is the wrong length.\n");

    } else if (illegalChars.test(user)) {
        isValid = false;
        // error = "illegal characters not allowed in username.\n";
        // alert(error);
        throw new Error("illegal characters not allowed in username.\n");

    }



//    <-------------PASSWORD VALIDATION---------------------->



    else if ((pass.length < 5) || (pass.length > 25)) {
        isValid = false;
        // error = "The password is the wrong length.\n";
        // alert(error);
        throw new Error("The password is the wrong length.\n");

    }

    else if (!/[A-Z]/.test(pass)) {
        isValid = false;
        // error = "password must contain one capital letter\n";
        // alert(error);
        throw new Error( "password must contain one capital letter\n");

    }

    else if (!/[a-z]/.test(pass)) {
        isValid = false;
        // error = "password must contain one small letter\n";
        // alert(error);
        throw new Error( "password must contain one small letter\n");

    }

    else if (!/[0-9]/.test(pass)) {
        isValid = false;
        // error = "password must contain one numeric\n";
        // alert(error);
        throw new Error("password must contain one numeric\n");

    }

    else if (!/\W/.test(pass)) {
        isValid = false;
        // error = "password must contain one special character\n";
        // alert(error);
        throw new Error("password must contain one special character\n");

    }
    document.getElementById('console').innerHTML = "<h3 style='color:green'> User Name is: </h3>"+ user ;

}