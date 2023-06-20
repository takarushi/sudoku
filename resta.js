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
if(fix[0] == "d" && fix[1] == "e" && fix[2] == "b" && fix[3] == "c" && fix[4] == "a")
{
    document.querySelector("h2").innerHTML = "Excelente";
}else{
    document.querySelector("h2").innerHTML = "Que mal, intentelo nuevamente";
}
}