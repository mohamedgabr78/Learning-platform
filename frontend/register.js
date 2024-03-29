// method to validate the sign up form.
function validate(e) {

  //create two objects to hold the values of inputs and the error messages.
  const errors = {};
  const values = {};
  for (let i = 0; i <= [...e.target.elements].length; i++) {
    const element = e.target.elements[i];

    if (element?.name) {
      values[element.name] = element.value;
      errors[element.name] = "";
    }
  }

  if (document.getElementById("terms").checked) {
    values.terms = "on";
  } else values.terms = "off";

  if (!values.name) {
    //check if User Name is entered
    errors.name = "enter your name";
  }

  //check User Name length
  if (values.name.length > 20) {
    errors.name = "Your name has to be less than 20 characters";
  }

  //check email validation
  if (!values.email) {
    errors.email = "please enter your email";
  }

  //check email
  if (!validateEmail(values.email) && values.email) {
    errors.email = "please enter a valid email";
  }

  //check password length
  if (!values.pass1 || values.pass1.length < 6) {
    errors.pass1 = "your password must be more than 6 characters";
  }

  //check password similarity
  if (values.pass1 != values.pass2) {
    errors.pass2 = "your password has to be the same";
  }

  //check password validate
  if (!validatePassword(values.pass1) && values.pass1) {
    errors.pass1 =
      "your password have one lower case character and one upper as minimum";
  }

  // console.log(errors, values);
  // debugger;

  //loop to get (key and value) for each error.
  Object.entries(errors).forEach(([key, value]) => {
    showError(key, value);
  });

  if (Object.values(errors).every((error) => !error) && values.terms === "on") {
    values.name = values.name.toLowerCase();
    return values;
  } else {
    e.preventDefault();
  }
}

function showError(inputID, error) {
  const small = document.getElementById(inputID + "_error");
  if (!small) return;

  small.innerText = error;
  if (error) {
    document.getElementById(inputID + "_error_icon").style.display =
      "inline-block";
    return;
  }
  document.getElementById(inputID + "_error_icon").style.display = "none";
}
// check email validation by regex.
function validateEmail(email) {
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}

// check password validation by regex.
function validatePassword(password) {
  var re = /^(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d]*$/;
  return re.test(password);
}

//xml request usin Ajax to send the form to the backend.
let xhr = new XMLHttpRequest();
xhr.open("POST", "backend/signup.php", true);
xhr.onload = () => {
  if (xhr.readyState === XMLHttpRequest.DONE) {
    if (xhr.status === 200) {
      let data = xhr.response;
      console.log(data);
    }
  }
};

let formData = new FormData(form);
xhr.send(formData);
