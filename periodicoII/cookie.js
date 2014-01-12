function getCookieVal (offset) {
var endstr = document.cookie.indexOf (";", offset);
if (endstr == -1)
endstr = document.cookie.length;
return unescape(document.cookie.substring(offset, endstr));
}
function GetCookie (name) {
var arg = name + "=";
var alen = arg.length;
var clen = document.cookie.length;
var i = 0;
while (i < clen) {
var j = i + alen;
if (document.cookie.substring(i, j) == arg)
return getCookieVal (j);
i = document.cookie.indexOf(" ", i) + 1;
if (i == 0) break; 
}
return null;
}  
function SetCookie (name, value) {
var argv = SetCookie.arguments;
var argc = SetCookie.arguments.length;
var expires = (argc > 2) ? argv[2] : null;
var path = (argc > 3) ? argv[3] : null;
var domain = (argc > 4) ? argv[4] : null;
var secure = (argc > 5) ? argv[5] : false;
document.cookie = name + "=" + escape (value) +
((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
((path == null) ? "" : ("; path=" + path)) +
((domain == null) ? "" : ("; domain=" + domain)) +
((secure == true) ? "; secure" : "");
}


function show_count() {
var expdate = new Date();
var num;
expdate.setTime(expdate.getTime() +  (24 * 60 * 60 * 1000 * 31)); 
if(!(num = GetCookie("jtotwcount"))) 
num = 0;
num++;
SetCookie ("jtotwcount", num, expdate);
if (num == 1) document.write("Es la primera vez que nos visitas.");
else document.write("Has estado aquí " + num + " veces."); 
}


function auto_show_name() {
if(GetCookie("jtotwname") != null)
document.write("Bienvenido de nuevo " + GetCookie('jtotwname'));

   }

function set_name(form) {
var expdate = new Date ();
expdate.setTime (expdate.getTime() + (24 * 60 * 60 * 1000 * 31));
var username = form.usuario.value
if (username != "") {
SetCookie ("jtotwname", username, expdate);
window.history.go(0);
   }
else alert("Introduce todos los campos");
}
function cerrar(){
var expdate = new Date ();
expdate.setTime (expdate.getTime() + (0));
var username = ''
if (confirm("Seguro desea salir?")) {
SetCookie ("jtotwname", username, expdate);
window.history.go(0);
   }
}
	
	




