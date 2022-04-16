function statement3x() {
    // Get the checkbox
    var checkBox = document.getElementById("statement");
    // Get the output text
    var text = document.getElementById("statement3");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
  }

function securitynumberx() {
  var radio = document.getElementById("citizen1");
  var text = document.getElementById("securitynumber");
    if (radio.checked == true){
    text.style.display = "block";
    document.getElementById('countryofcitizenship').style.display = "none";
    } else {
      text.style.display = "none";

      countryofcitizenshipx();
    }
  }

function countryofcitizenshipx() {
  var radio = document.getElementById("citizen2");
  var text = document.getElementById("countryofcitizenship");
     if (radio.checked == true){
      text.style.display = "block";
     } else {
       text.style.display = "none";
    }
   }