function validateForm()
{
    let x=document.forms["myForm"]["User"].value;
    if(x=="")
    {
        alert('Name must be filled out');
        return false;
    }
    let p=document.forms["myForm"]["Pass"].value;
    if(p=="")
    {
        alert('Password not entered!!');
        return false;
    }

}