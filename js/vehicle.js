saveColor = () => {
    let color = document.getElementById("color").value;
    let http = new XMLHttpRequest();
    http.open('POST','../controller/vehicle/color.php',true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange = () => {
        if(http.readyState == 4 && http.status == 200){
            document.getElementById("color-msg").innerHTML =
            showMsg(http.responseText,'success');
            loadAllColor();
        }
    }
    http.send("color="+color);
}

loadAllColor = () => {
    let http = new XMLHttpRequest();
    http.open('GET','../controller/vehicle/loadAllColor.php',true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange = () => {
        if(http.readyState == 4 && http.status == 200){
            document.getElementById("color-data").innerHTML = http.responseText;
        }
    }
    http.send();
}