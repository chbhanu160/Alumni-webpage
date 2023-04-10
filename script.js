function validateForm() {
    var name = document.forms["myForm"]["name"].value;
    var branch = document.forms["myForm"]["branch"].value;
    var year = document.forms["myForm"]["year"].value;
    var contact = document.forms["myForm"]["contact"].value;
    var email = document.forms["myForm"]["email"].value;
    var address = document.forms["myForm"]["address"].value;
    var company = document.forms["myForm"]["company"].value;
    var job = document.forms["myForm"]["company"].value;
    if (name == "" || branch == "" || year == "" || contact == "" || email == "" || address == "" || company == "" || job == "") {
      alert("Please fill in all fields");
      return false;
    }
  }
  