function checkInput()
{
	var errorMessage = "";
	var hasError = 0;

	var nameCheck = /^[a-zA-Z ]{5,}$/
	if (document.formsample.name.value.search(nameCheck) == -1)
	{
		hasError = 1;
		errorMessage += "Invalid name. ";
	}


	var zipCheck = /^\d{5}$/
	if (document.formsample.zip.value.search(zipCheck) == -1)
	{
		hasError = 1;
		errorMessage += "Invalid zip code. ";
	}


	var emailCheck = /^\w+@{1}\w+\.{1}\w{2,4}$/
	if (document.forms["formsample"]["email"].value.search(emailCheck) == -1)
	{
		hasError = 1;
		errorMessage += "Invalid email. ";
	}

	if (hasError == 1)
	{
		$("#form-feedback").show();
		$("#form-feedback").html("Error: " + errorMessage + "Try again.");
		return false;
	}

	$("#form-feedback").hide();
	alert("Form submitted successfully!");
	return true;
}