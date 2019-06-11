

/* zercom systems support */


//open a ticket
function openTicket() {
	var openTkt = document.getElementById("openticket");
	var statusTkt = document.getElementById("statusticket");
	var openCtn = document.getElementById("opencont");

	statusTkt.style.display = "none";
	openTkt.style.display = "block";
	openTkt.style.WebkitAnimation = "divopacity .4s";
    	openTkt.style.animation = "divopacity .4s";
	openCtn.style.WebkitAnimation = "changeopen .4s";
	openCtn.style.animation = "changeopen .4s";
	document.body.style.overflow = "hidden";

}

function statusTicket() {
	var openTkt = document.getElementById("openticket");
	var statusTkt = document.getElementById("statusticket");
	var statusCtn = document.getElementById("statuscont");

	openTkt.style.display = "none";
	statusTkt.style.display = "block";
	statusTkt.style.WebkitAnimation = "divopacity .4s";
    	statusTkt.style.animation = "divopacity .4s";
	statusCtn.style.WebkitAnimation = "changeopen .4s";
	statusCtn.style.animation = "changeopen .4s";
	document.body.style.overflow = "hidden";
}

function closeMdl() {
	var openTkt = document.getElementById("openticket");
	var statusTkt = document.getElementById("statusticket");
	var closeModel = document.getElementsByClassName("banner-right");
	var statusCtn = document.getElementById("statuscont");
	var openCtn = document.getElementById("opencont");
	var i;

	for (i = 0; i < closeModel.length; i++) {
		if (closeModel[i].onclick) {

			statusCtn.style.WebkitAnimation = "changeclose .4s";
		    	statusCtn.style.animation = "changeclose .4s";
		    	openCtn.style.WebkitAnimation = "changeclose .4s";
		    	openCtn.style.animation = "changeclose .4s";

		    	setTimeout(function() {
		    		statusTkt.style.display = "none";
		    		openTkt.style.display = "none";
		    		document.body.style.overflow = "auto";
		    	}, 200);	


			//statusTkt.style.display = "none";			
			//openTkt.style.display = "none";
			//document.body.style.overflow = "auto";
			

		}		
	}

}


function validateEmail(result) {

	var emailAdd = document.getElementById("email-add");
	var Msg = document.getElementById("email-err");	
	var testEmail = /\S+@\S+\.\S+/;
	var result = emailAdd.value;

	if (testEmail.test(result)) {
		Msg.innerHTML = "";
		return true;		
	} 	

	Msg.innerHTML = "Not valid. Enter your email address";
	document.getElementById("email-add").focus();
	return false;	
}



function validateTicket(result) {
	var tktNum = document.getElementById("tktnum");
	var Msg = document.getElementById("tkt-err");			
	var testStatus = /^\d+$/;
	var result = tktNum.value;

	if (testStatus.test(result)) {
		Msg.innerHTML = "";
		return true;
	}

	Msg.innerHTML = "Not valid. Enter your ticket number";
	document.getElementById("tktnum").focus();
	return false;	
}


function validateFullname(result) {
	var fullName = document.getElementById("full-name");
	var Msg = document.getElementById("name-err");			
	var testName = /^[a-zA-Z ]+$/;;
	var result = fullName.value;

	if (testName.test(result)) {
		Msg.innerHTML = "";
		return true;
	}

	Msg.innerHTML = "Please enter your name";
	document.getElementById("full-name").focus();
	return false;	
}


function validateMail(result) {

	var mailAdd = document.getElementById("mail-add");
	var Msg = document.getElementById("mail-err");	
	var testMail = /\S+@\S+\.\S+/;
	var result = mailAdd.value;

	if (testMail.test(result)) {
		Msg.innerHTML = "";
		return true;		
	} 	

	Msg.innerHTML = "Not valid. Enter your email address";
	document.getElementById("mail-add").focus();
	return false;	
}

function validateSum(result) {

	var issueSum = document.getElementById("issue-sum");
	var Msg = document.getElementById("sum-err");	
	//var testMail = /\S+@\S+\.\S+/;
	var result = issueSum.value;

	if (result == "") {
		Msg.innerHTML = "You need to enter your issue summary";
		//document.getElementById("mail-add").focus();
		return false;
	} 

	Msg.innerHTML = "";
	return true;			
}

function validateDet(result) {

	var issueDet = document.getElementById("issue-det");
	var Msg = document.getElementById("det-err");	
	//var testMail = /\S+@\S+\.\S+/;
	var result = issueDet.value;

	if (result == "") {
		Msg.innerHTML = "Please enter your issue.";
		//document.getElementById("mail-add").focus();
		return false;
	} 

	Msg.innerHTML = "";
	return true;			
}

function resetBtn() {
	document.getElementById("full-name").value = "";
	document.getElementById("mail-add").value = "";
	document.getElementById("phone").value = "";
	document.getElementById("issue-sum").value = "";
	document.getElementById("issue-det").value = "";
	//document,getElementById("full-name").value = "";
}