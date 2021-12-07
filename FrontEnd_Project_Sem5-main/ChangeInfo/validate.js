function validate()
{
    let phone=document.getElementById("curr_mob").value;
    if(phone=="")
    {
        alert("Enter old mobile number!!");
        return false;
    }
    if(phone.length!=10)
    {
        alert("Not 10 numbers in old mobile number");
        return false;
    }

    let phone_new=document.getElementById("new_mob").value;
    if(phone_new=="")
    {
        alert("Enter new mobile number!!");
        return false;
    }
    if(phone_new.length!=10)
    {
        alert("Not 10 numbers in new mobile number");
        return false;
    }

    let uid=document.getElementById("curr_uid").value;
    if(uid=="")
    {
        alert("Old user-ID not entered!!");
        return false;
    }

    let uid_new=document.getElementById("new_uid").value;
    if(uid_new=="")
    {
        alert("New user-ID not entered!!");
        return false;
    }
}