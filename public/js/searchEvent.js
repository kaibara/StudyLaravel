function searchEvent(){
    if(document.getElementById('selecter')){
        id = document.getElementById('selecter').value;
        if(id == 'WORKS'){
            document.getElementById('job').style.display = "";
            document.getElementById('word').style.display = "none";
        }else if(id != 'WORKS'){
            document.getElementById('job').style.display = "none";
            document.getElementById('word').style.display = "";
        }
    }
}
window.onload = searchEvent;
