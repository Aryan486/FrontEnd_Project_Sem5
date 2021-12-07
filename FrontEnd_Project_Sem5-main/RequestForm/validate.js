function validate()
{
    let x=document.getElementById("getName").value;
    if(x=="")
    {
        alert("Name not filled!!");
        return false;
    }
    if(isNaN(x)==false)
    {
        alert("Number in name");
        return false;
    }

    let phone=document.forms["form"]["mobile"].value;
    if(phone=="")
    {
        alert("No number entered!!")
        return false;
    }
    if(phone.length==10){}
    else{
        alert("Wrong mobile number entered!!");
    }

    let eve=document.forms["form"]["event"].value;
    if(eve=="")
    {
        alert("Give a name to your event");
        return false;
    }

    let purpose=document.forms["form"]["purpose"].value;
    if(purpose=="")
    {
        alert("Input purpose for this event");
        return false;
    }

    let date=document.forms["form"]["eventDate"].value;
    if(date=="")
    {
        alert("Input date");
        return false;
    }

    let t1=document.forms["form"]["eventTime"].value;
    if(t1=="")
    {
        alert("Input event start time");
        return false;
    }
    let t2=document.forms["form"]["eventTime1"].value;
    if(t2=="")
    {
        alert("Input event end time");
        return false;
    }

    let str=document.forms["form"]["people"].value;
    if(str=="")
    {
        alert("Input strength");
        return false;
    }

    let r1=document.forms["form"]["AC"].value;
    if(r1=="")
    {
        alert("AC requirement not filled");
        return false;
    }

    let r2=document.forms["form"]["SS"].value;
    if(r1=="")
    {
        alert("Speaker System requirement not filled");
        return false;
    }
}