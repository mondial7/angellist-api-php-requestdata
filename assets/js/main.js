var FILENAME;
// Functions called on form submissions
function getData(type){
    url="./scripts/store_data.php";
    callback = "getdata";
    parameters = "filename="+document.getElementById("filename").value;
    parameters += "&access_token="+document.getElementById("token").value;
    
    if(type=="post"){
        // Get all the parameters
        parameters += "&type=post&url="+document.getElementById("post_url").value;
        parameters += "&parameters="+document.getElementById("post_parameters").value;
    } else if(type=="get"){
        // Get all the parameters
        parameters += "&type=get&url="+document.getElementById("get_url").value;
    } else {
        alert("Error");
    }
    
    // Send the request to the server script
    connectPOST(url,parameters,callback);
    
    return false;
}