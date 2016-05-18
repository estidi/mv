
function get(source, id)
{
	var requestObj = new XMLHttpRequest();
	
	if (requestObj) {
        var obj = $(id);
        requestObj.open("GET", source);
        requestObj.setRequestHeader("X-Requested-With", "XMLHttpRequest");
        requestObj.onreadystatechange = function () {
            if (requestObj.readyState == 4 && requestObj.status == 200) {
		obj.innerHTML = requestObj.responseText;
            }
        } 
            requestObj.send(null);
	}
}
     