function validate()
{
    let x=document.getElementById("Pass").value;
    if(x=="")
    {
        alert("Fill E-Mail section first")
        
    }
    var check="";
    var flag=0;
    for(i=0;i<x.length;i++)
    {
        if(x[i]=="@")
        {   
            flag=1;
        }
        if(flag==1)
        {
            check=check.concat(x[i]);
        }
    }
    if(check!="@thapar.edu")
    {
        alert("Only 'thapar.edu' domain")
    }
}