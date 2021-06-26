function checkpassword(){
if(document.getElementsById("password").value!=document.getElementsById("rpassword").value){

	alert("password mismatch");
	return false;
  }
else {


	alert("success");
	return true;
   }
}

function enablebtn(){

if(document.getElementsByid("policy").checked){

	document.getElementsByid("btn1").disabled=false;
}

else{

	document.getElementsByid("btn1").disabled=true;
}


}


function validateForm() {
  var x = document.forms["form1"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}