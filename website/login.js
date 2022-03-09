function validate() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (username == "admin" && password == "pass") {
  } else {
    alert("login failed");
  }
}
