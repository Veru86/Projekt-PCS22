function validate(doc) {
  var inputs = [...doc.getElementsByTagName("input")];
  var required = inputs.filter((element) => element.hasAttribute("required"));
  var email = document.getElementById("email");
  var password = document.getElementById("password");
  var result1 = validateRequired(required);
  var result2 = validateEmail(email);
  var result3 = validatePassword(password);
  var res = result1 && result2 && result3;
  if (res) {
    console.log("OK");
  }

  return res;
}

function validateRequired(requiredElements) {
  var result = requiredElements.some((el) => el.value == "");
  if (result) {
    console.log("Nejsou vyplněna všechna povinná pole.");
  }
  return !result;
}

function validateEmail(email) {
  const pattern =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var result = pattern.test(email.value);
  if (!result) {
    console.log("Nesprávný formát emailu");
  }
  return result;
}

function validatePassword(password) {
  if (!(password.value.length >= 16)) {
    console.log("Přiliš krátké heslo");
    return false;
  }
  return true;
}
