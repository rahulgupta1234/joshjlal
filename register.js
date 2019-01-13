function myfunction()
{
  var user=document.getElementById('usrnm').value;
  var coll=document.getElementById("clgnm").value;
  var pass=document.getElementById("psw").value;
  var repass=document.getElementById("rpsw").value;
  var num=document.getElementById("num").value;

  var t1=document.getElementById("text1");
  var t2=document.getElementById("text2");
  var t3=document.getElementById("text3");
  var t4=document.getElementById("text4");
  var t5=document.getElementById("text5");

  var bool=true;
  var userformat=/^[a-zA-Z0-9_]+$/;

  if(user.match(userformat)==null)
  {
    t1.innerHTML="*Username can contain only Alphabets, Numbers and underscore.";
    bool=false;
  }
  else t1.innerHTML="";

  if(pass.length<7)
  {
      t3.innerHTML="*Minimum password length should be 7."
      bool=false;
  }
  else t3.innerHTML="";

  if(pass!=repass)
    {
       t4.innerHTML="*Passwords do not match.";
       bool=false;
     }
     else t4.innerHTML="";

  if(isNaN(num)||num.length<10)
  {
      t5.innerHTML="*Invalid number format.";
      bool=false;
  }
  else t5.innerHTML="";

  return bool;
}