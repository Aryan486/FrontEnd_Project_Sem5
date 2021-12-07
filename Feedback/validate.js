function validate()
{
    let x=document.forms["form"]["rate"].value;
    if(x=="")
    {
        alert("Fill the rating first");
        return false;
    }
}