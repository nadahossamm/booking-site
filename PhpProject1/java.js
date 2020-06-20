function loadDoc5() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("completion2").innerHTML = this.responseText;
            }
          };
          xhttp.open("post","fromcritera.php", true);
          xhttp.send();
};
function loadDoc6() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("completion2").innerHTML = this.responseText;
            }
          };
          xhttp.open("post","tocritera.php", true);
          xhttp.send();
};
function loadDoc7() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("completion2").innerHTML = this.responseText;
            }
          };
          xhttp.open("post","departcritera.php", true);
          xhttp.send();
};
function loadDoc8() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("completion2").innerHTML = this.responseText;
            }
          };
          xhttp.open("post","passengerscritera.php", true);
          xhttp.send();
};
    function loadDoc() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("completion").innerHTML = this.responseText;
            }
          };
          xhttp.open("post","critera.php", true);
          xhttp.send();
};

function loadDoc2() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("completion").innerHTML = this.responseText;
            }
          };
          xhttp.open("post","cancelation.php", true);
          xhttp.send();
};
function loadDoc3() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("completion").innerHTML = this.responseText;
            }
          };
          xhttp.open("post","change_class.php", true);
          xhttp.send();
};
function loadDoc4() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("completion").innerHTML = this.responseText;
            }
          };
          xhttp.open("post","payment.php", true);
          xhttp.send();
};
function loadDoc9() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("completion").innerHTML = this.responseText;
            }
          };
          xhttp.open("post","book.php", true);
          xhttp.send();
};
function loadDoc10() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("completion").innerHTML = this.responseText;
            }
          };
          xhttp.open("post","updateuserdetails.php", true);
          xhttp.send();
};
function loadDoc11() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("completion").innerHTML = this.responseText;
    }
  };
  xhttp.open("post","logout2.php", true);
  xhttp.send();
};
function nameupdate()
  {
    
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function()
    {
  if(this.readyState == 4 && this.status == 200 )
    {
    
    document.getElementById('about').innerHTML = this.responseText;
    
    
    }
  
  };
  xhr.open('get','updatename2.php',true);
  xhr.send();
  };
  function passupdate()
  {
    
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function()
    {
  if(this.readyState == 4 && this.status == 200 )
    {
    
    document.getElementById('about').innerHTML = this.responseText;
    
    
    }
  
  };
  xhr.open('get','updatepass2.php',true);
  xhr.send();
  }
  
  
  
  
  function phoneupdate()
  {
    
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function()
    {
  if(this.readyState == 4 && this.status == 200 )
    {
    
    document.getElementById('about').innerHTML = this.responseText;
    
    
    }
  
  };
  xhr.open('get','updatephone.php',true);
  xhr.send();
  }
  

  
  function mailupdate()
  {
    
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function()
    {
  if(this.readyState == 4 && this.status == 200 )
    {
    
    document.getElementById('about').innerHTML = this.responseText;
    
    
    }
  
  };
  xhr.open('get','updatemail2.php',true);
  xhr.send();
  }
  function mailvalidation()
  {
      var email=document.getElementById('email').value;
      var newmail=document.getElementById('newmail').value;

          if (email=="")
          {
              document.getElementById('e').innerHTML="Email can't be empty";
              document.getElementById("email").focus();

              return false;
          }
          else
          document.getElementById('e').innerHTML="";

          if (newmail=="")
          {
              document.getElementById('ne').innerHTML="Email can't be empty";
              return false;
          }
          re=/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
          if(!re.test(newmail))
          {
              document.getElementById("ne").innerHTML="Email must be as nada.hossam@gmail.com";
              document.getElementById("newmail").focus();
             return false;

          }
          else
          document.getElementById('ne').innerHTML="";

          
         

  }
  function phonevalidation()
            {
                var email=document.getElementById('email').value;
                var number=document.getElementById('number').value;
        
                    if (email=="")
                    {
                        document.getElementById('e').innerHTML="Email can't be empty";
                        document.getElementById("email").focus();

                        return false;
                    }
                    else
                    document.getElementById('e').innerHTML="";
                    if(isNaN(number))
                    {
                        document.getElementById("n").innerHTML="Please enter number correctly";
                        document.getElementById("number").focus();

                        return false;
                    }
                    if(number.length!=11)
                    {
                        document.getElementById("n").innerHTML="Phone number must be 11 number ";
                        document.getElementById("number").focus();

                        return false;
                    }
                    else
                    {
                        document.getElementById("n").innerHTML=" ";
                    }
                }
  function namevalidation()
                {
                    var email=document.getElementById('email').value;
                    var fname=document.getElementById('firstname').value;
                    var lname=document.getElementById('lastname').value;
            
                        if (email=="")
                        {
                            document.getElementById('e').innerHTML="Email can't be empty";
                            document.getElementById("email").focus();
    
                            return false;
                        }
                        else
                        document.getElementById('e').innerHTML="";
    
                        if (fname=="")
                        {
                            document.getElementById('fn').innerHTML="Firstname can't be empty";
                            return false;
                        }
                        re=/[a-z]/;
                        if(!re.test(fname))
                        {
                            document.getElementById("fn").innerHTML="Name must be characters";
                            document.getElementById("fname").focus();
                           return false;
    
                        }
                        else
                        document.getElementById('fn').innerHTML="";
    
                        
                        if (lname=="")
                        {
                            document.getElementById('ln').innerHTML="Lastname can't be empty";
                            return false;
                        }
                        re=/[a-z]/;
                        if(!re.test(fname))
                        {
                            document.getElementById("ln").innerHTML="Name must be characters";
                            document.getElementById("lname").focus();
                           return false;
    
                        }
                        else
                        document.getElementById('ln').innerHTML="";
    
            
                }
                function passvalidation()
                {  var email=document.getElementById('email').value;
                      var newpass=document.getElementById('newpass').value;
                      var pass=document.getElementById('oldpass').value;
              
                          if (email=="")
                          {
                              document.getElementById('e').innerHTML="Email can't be empty";
                              document.getElementById("email").focus();
      
                              return false;
                          }
                          else
                          document.getElementById('e').innerHTML="";
                          if(pass == "")
                                  {
                                      document.getElementById("p").innerHTML=" The password can't be empty ";
                                      document.getElementById("oldpass").focus();
      
                                      return false;
                                  }
                                  
        
                                  if(pass.length<6)
                                  {
                                      document.getElementById("p").innerHTML=" The password must be more than or equal 6 elements ";
                                      document.getElementById("oldpass").focus();
      
                                      return false;
                                                          }
                                  else
                                  {
                                      document.getElementById("p").innerHTML=" ";
                                  }
      
                                  if(newpass == "")
                                  {
                                      document.getElementById("np").innerHTML=" The password can't be empty ";
                                      document.getElementById("newpass").focus();
      
                                      return false;
                                  }
                                  
                              
                                  if(newpass.length<6)
                                  {
                                      document.getElementById("np").innerHTML=" The password must be more than or equal 6 elements ";
                                      document.getElementById("newpass").focus();
      
                                      return false;
                                  }
                                  else
                                  {
                                      document.getElementById("np").innerHTML=" ";
                                  }
                              }
 