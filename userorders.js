
function upTotal(element){
    var totals = document.getElementById("totaldisplay");
    if(element.checked==true){
      totals.innerHTML = (totals.innerHTML*1)+(element.value)*1
    }else{
      totals.innerHTML = (totals.innerHTML*1)-(element.value)*1
    }
}
