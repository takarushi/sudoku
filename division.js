let fix = ["","","","",""];
function allowDrop(ev)
{
    ev.preventDefault();
}
function drag(ev)
{
    ev.dataTransfer.setData("text", ev.target.id);
}
function drop(ev)
{
    if(fix[parseInt(ev.target.id)] == "")
    {
        var data = ev.dataTransfer.getData("text");
        fix[parseInt(ev.target.id)] = data;
        ev.target.appendChild(document.getElementById(data));
    }
if(fix[0] != "" && fix[1] != "" && fix[2] != "" && fix[3] != "" && fix[4] != "")
if(fix[0] == "a" && fix[1] == "b" && fix[2] == "c" && fix[3] == "d" && fix[4] == "e")
{
    document.querySelector("h2").innerHTML = "Excelente";
}else{
    document.querySelector("h2").innerHTML = "Que mal, intentelo nuevamente";
}
}