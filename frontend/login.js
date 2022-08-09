function validate(e) {
  const errors = {};
  const values = {};
  for (let i = 0; i <= [...e.target.elements].length; i++) {
    const element = e.target.elements[i];

    if (element?.name) {
      values[element.name] = element.value;
      errors[element.name] = "";
    }
  }
  //check email validation
  if (!values.email) {
    errors.email = "please enter your email";
  }

  //check email
  if (!validateEmail(values.email) && values.email) {
    errors.email = "please enter a valid email";
  }
}

function validateEmail(email) {
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}

function validatePassword(password) {
  var re = /^(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d]*$/;
  return re.test(password);
}

let xhr = new XMLHttpRequest();
xhr.open("POST", "backend/login.php", true);
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

function showMessage() {
  const urlParams = new URLSearchParams(location.search);
  const params = Object.fromEntries(urlParams);
  if (params.email_exists)
    document.getElementsByClassName("alert-toast")[0].style.display = "block";
}
