function validate()
{
     var name=document.getElementById("name").value;
     var type=document.getElementById("type").value;
     var chairs=document.getElementById("chairs").value;
     if(name==="")
     {
         document.getElementById("x").innerHTML="*plane name can't be empty";
         return false;
     }
     
     else
     {
        document.getElementById("x").innerHTML="";

     }
     if(type==="")
     {
         document.getElementById("x").innerHTML="*plane type can't be empty";
         return false;
     }

     else
     {
        document.getElementById("x").innerHTML="";

     }
     if(chairs==="")
     {
         document.getElementById("x").innerHTML="*plane chairs can't be empty";
         return false;
     }
     re=/[0-9]/;
      if(!re.test(chairs))
     {
        document.getElementById("x").innerHTML="*plane chairs must be numbers";
        return false;
     }
     else
     {
        document.getElementById("x").innerHTML="";

     }
     //alert("D");

  }