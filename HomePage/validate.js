document.getElementById("myDate").value=getDate();
function getDate()
{
    let today = new Date().toISOString().slice(0, 10);
    return today;
}
function validate()
{
    let x=document.getElementById("myDate").value;
    let today = new Date().toISOString().slice(0, 10);
    if(today>x)
    {
        alert('Wrong date entered');
        return false;
    }
}