"usse strict";
function add(){
    var m = Number(document.getElementById('m').value);
    var v = Number(document.getElementById('v').value);
     document.getElementById('result').innerHTML= m / v;
    return false;
}
document.getElementById('go').addEventListener('click',add);
