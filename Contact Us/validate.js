function validate()
{
    let x=document.forms["form"]["name"].value;
    if(x=="")
    {
        alert("Name feild empty!!")
        return false;
    }
    if(isNaN(x)==false)
    {
        alert("Does names conatin a number?")
        return false;
    }
    alert(isNaN(x))
    let m=document.forms["form"]["mail"].value;
    if(m=="")
    {
        alert("E-Mail section empty!!")
        return false;
    }
    var check="";
    var flag=0;
    for(i=0;i<m.length;i++)
    {
        if(m[i]=="@")
        {   
            flag=1;
        }
        if(flag==1)
        {
            check=check.concat(m[i]);
        }
    }
    if(check!="@thapar.edu")
    {
        alert("Only 'thapar.edu' domain")
        return false;
    }

    let mess=document.forms["form"]["message"].value;
    if(mess=="")
    {
        alert("Message feild is empty");
        return false;
    }
}