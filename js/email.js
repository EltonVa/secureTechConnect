const nameCheck = () => {
  let userName = document.getElementById("name").value;
  let userEmail = document.getElementById("email").value;

  let regex = /^[a-zA-Z]+$/;
  let emailCheck = userEmail.split('@')

  if (regex.test(userName) == false) {
    document.getElementById("name").value = "";
    return alert("Please use correct name information!");
  }
  
  if (userEmail =="" || emailCheck.length == 1) {
    document.getElementById("email").value = "";
    return alert("Please use correct email form!");
  }

};
