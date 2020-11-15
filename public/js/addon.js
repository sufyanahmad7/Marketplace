var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

function add_review() 
{
  alert("Review added");
}

function delete_review() 
{
  alert("Review deleted");
}

$("#weather").on("click",function(e)
{
	let reqURL = 'https://api.data.gov.sg/v1/environment/air-temperature/'
	let request = new XMLHttpRequest(); 
	request.open('GET', reqURL);
	request.responseType = 'json';
	request.send();
	request.onload = function() 
	{ 
	alert(JSON.stringify("Temperature today is: " + request.response.items[0].readings[0].value));
	}
})
