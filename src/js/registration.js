function checkPassword(){
	var pass = document.getElementById("pass").value;
	var rpass = document.getElementById("rpass").value;
	if( pass != rpass)
	{
		alert("Password are missmatched!");
		return false;
	}
	else{
		alert("Password matched!");
		return true;
	}
}

var loadFile = function(event)
{
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
}
