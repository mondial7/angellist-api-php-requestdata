// http get request to server with callback
// NOTE: we use the switchCallback function to call the real function,
//		 the parameter callback is only a string used as key in the switch. 
function connectGET(url,callback){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
            switchCallback(callback,xmlhttp.responseText);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

// http postrequest to server with callback
function connectPOST(url,parameters,callback){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
            switchCallback(callback,xmlhttp.responseText);
        }
    };
    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(parameters);
}

function switchCallback(callback, value){
	switch(callback){
		case "sayhello":
			alert("Hello " + value);
			break;
        case "getdata":
            alert(value);
            break;
	}
}