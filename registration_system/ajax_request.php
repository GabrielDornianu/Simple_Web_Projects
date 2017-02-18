<script>
function submit_data(){
var username = document.getElementById("username").value;
var password = document.getElementById("password1").value;
var email = document.getElementById("email").value;

console.log(username + password + email);

var ajax = new XMLHttpRequest();

ajax.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		var response_data = ajax.responseText;
	}
}

ajax.open("POST", "php_connection.php", true);
ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
ajax.send("username="+username+"&password="+password+"&email="+email);

}
</script>
