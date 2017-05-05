function useasmaster(){
	window.location.assign('/selectside?s=master');
}

function useasslave(){
window.location.assign('/selectside?s=slave');
}

function logout(username){
	window.location.assign('/logout?u='+username);
}

function runScript(e) {
    if (e.keyCode == 13) {
        var tb = document.getElementById("scriptBox");
        eval(tb.value);
        return false;
    }
}

function handle(e){
    e.preventDefault(); // Otherwise the form will be submitted
}

function adminpagemanageposts(){
  window.location.assign('/adminpage/manageposts');
}

function approvepost(id){
    window.location.assign('/adminpage/manageposts/approve?post='+id);
}

function opendeclinepost(id){
    document.getElementById('targetpost').value = id;
}

function authenticate(){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }
    else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            if(xmlhttp.responseText == 'okadmin'){
                window.location.assign('/adminpage');
            }else if(xmlhttp.responseText == 'oksuperadmin'){
                window.location.assign('/superadminpage');
            }else if(xmlhttp.responseText == 'ok'){
                window.location.assign('/');
            }else{
                document.getElementById("sessionMessage").innerHTML = xmlhttp.responseText;
                document.getElementById("btnLogin").className = "btn btn-primary btn-block btn-lg";
                document.getElementById("btnLogin").style.opacity = "1";
            }
        }else{
            document.getElementById("btnLogin").className = "btn btn-primary btn-block btn-lg disabled";
            document.getElementById("btnLogin").style.opacity = "0.4";
        }
    }
    var username = document.getElementById("usernameLogin").value;
    var password = document.getElementById("passwordLogin").value;
    var token = document.getElementById("_token").value;

    url = "/authenticate?username="+username+"&password="+password;
    xmlhttp.open("get", url, true);
    // xhttp.setRequestHeader("X-CSRF-TOKEN", token);
    xmlhttp.send();
}

function loginclick(e){
    e = e || window.event;
    if (e.keyCode == 13){
        document.getElementById("btnLogin").click();
    }
    return true;
}

function approveuser(id){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
           document.getElementById("adminmanageusers").innerHTML = xmlhttp.responseText;
        }else{

        }
    }
    url = "/adminapproveuser?u="+id;
    xmlhttp.open("get", url, true);
    xmlhttp.send();
}

function declineuser(id){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
           document.getElementById("adminmanageusers").innerHTML = xmlhttp.responseText;
        }else{

        }
    }
    url = "/admindeclineuser?u="+id;
    xmlhttp.open("get", url, true);
    xmlhttp.send();
}

function applyforjob(postid){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
           document.getElementById("btnapply"+postid).style.display = "none";
           document.getElementById("btncancelapply"+postid).style.display = "inline-block";
        }else{

        }
    }
    url = "/applyforjob?p="+postid;
    xmlhttp.open("get", url, true);
    xmlhttp.send();
}

function cancelapplyforjob(postid){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
           document.getElementById("btnapply"+postid).style.display = "inline-block";
           document.getElementById("btncancelapply"+postid).style.display = "none";
        }else{

        }
    }
    url = "/cancelapplyforjob?p="+postid;
    xmlhttp.open("get", url, true);
    xmlhttp.send();
}

var targetpost;

function viewapplications(postid){
    targetpost = postid;
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
           document.getElementById("applications").innerHTML = xmlhttp.responseText;
        }else{
           document.getElementById("applications").innerHTML = "Loading ..."
        }
    }
    url = "/viewapplications?p="+postid;
    xmlhttp.open("get", url, true);
    xmlhttp.send();
}

function approveApplication(id){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            document.getElementById("btnapproveapplication"+id).style.display = "none";
            document.getElementById("btndeclineapplication"+id).style.display = "none";
            document.getElementById("btnopenchat"+id).style.display = "inline-block";
            document.getElementById("btnundo"+id).style.display = "inline-block";
        }else{

        }
    }
    url = "/approveapplication?a="+id;
    xmlhttp.open("get", url, true);
    xmlhttp.send();
}

function xapproveApplication(id){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            document.getElementById("xbtnapproveapplication"+id).style.display = "none";
            document.getElementById("xbtndeclineapplication"+id).style.display = "none";
            document.getElementById("xbtnopenchat"+id).style.display = "inline-block";
            document.getElementById("xbtnundo"+id).style.display = "inline-block";
        }else{

        }
    }
    url = "/approveapplication?a="+id;
    xmlhttp.open("get", url, true);
    xmlhttp.send();
}

function undoapply(id){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            document.getElementById("btnapproveapplication"+id).style.display = "inline-block";
            document.getElementById("btndeclineapplication"+id).style.display = "inline-block";
            document.getElementById("btnopenchat"+id).style.display = "none";
            document.getElementById("btnundo"+id).style.display = "none";
        }else{

        }
    }
    url = "/undoapplication?a="+id;
    xmlhttp.open("get", url, true);
    xmlhttp.send();
}

function xundoapply(id){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            document.getElementById("xbtnapproveapplication"+id).style.display = "inline-block";
            document.getElementById("xbtndeclineapplication"+id).style.display = "inline-block";
            document.getElementById("xbtnopenchat"+id).style.display = "none";
            document.getElementById("xbtnundo"+id).style.display = "none";
        }else{

        }
    }
    url = "/undoapplication?a="+id;
    xmlhttp.open("get", url, true);
    xmlhttp.send();
}

function declineApplication(id){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            document.getElementById("applications").innerHTML = xmlhttp.responseText;
        }else{

        }
    }
    url = "/declineapplication?a="+id+"&p="+targetpost;
    xmlhttp.open("get", url, true);
    xmlhttp.send();
}

function xdeclineApplication(id){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4){
            document.getElementById("applications").innerHTML = xmlhttp.responseText;
        }else{

        }
    }
    url = "/declineapplication?a="+id+"&p="+targetpost;
    xmlhttp.open("get", url, true);
    xmlhttp.send();
}