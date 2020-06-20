function add()
{
    var x= new XMLHttpRequest();
    x.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("details").innerHTML=this.responseText;
        }

    }    
    x.open("get","flights-details.php",true)
    x.send();

}

function update()
{
    var y=new XMLHttpRequest();
    y.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("details").innerHTML=this.responseText;
        }
    }
    y.open("get","flights-details-update.php",true);
    y.send();
}

function addaircraft()
{
    var z= new XMLHttpRequest();
    z.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("details").innerHTML=this.responseText;
        }

    }    
    z.open("get","addaircraft.php",true)
    z.send();
}

function updateaircraft()
{
    var s= new XMLHttpRequest();
    s.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("details").innerHTML=this.responseText;
        }

    }    
    s.open("get","aircraftupdateform.php",true)
    s.send();
}

function updateuser()
{
    var s= new XMLHttpRequest();
    s.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("details").innerHTML=this.responseText;
        }

    }    
    s.open("get","updateuserdetails.php",true);
    s.send();
}
function logout()
{
    var m= new XMLHttpRequest();
    m.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("details").innerHTML=this.responseText;
        }

    }    
    m.open("get","logout2.php",true);
    m.send();
}