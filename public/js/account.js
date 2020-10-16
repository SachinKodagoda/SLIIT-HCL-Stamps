function validateform(){  
    var username=document.accountForm.username.value;  
    var displayname=document.accountForm.displayname.value;
    var companyname=document.accountForm.companyname.value;  
    var firstname=document.accountForm.firstname.value;
    var middlename=document.accountForm.middlename.value;  
    var lastname=document.accountForm.lastname.value;
    var zipcode=document.accountForm.zipcode.value;  
    var city=document.accountForm.city.value;
    var address1=document.accountForm.address1.value;  
    var address2=document.accountForm.address2.value;
    var password1=document.accountForm.password1.value;
    var password2=document.accountForm.password2.value;  
    var email=document.accountForm.email.value;  

    var atposition=email.indexOf("@");  
    var dotposition=email.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
    alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n Dot position:"+dotposition);  
    return false;  
    } 
      
    else if (username==null || username==""){  
      alert("Username can't be blank");  
      return false;  
    }

    else if (displayname==null || displayname==""){  
        alert("Displayname can't be blank");  
        return false;  
      }

    else if (companyname==null || companyname==""){  
        alert("Companyname can't be blank");  
        return false;  
      }

    else if (firstname==null || firstname==""){  
        alert("Firstname can't be blank");  
        return false;  
      }

    else if (middlename==null || middlename==""){  
        alert("Middlename can't be blank");  
        return false;  
      }  
    
    else if (lastname==null || lastname==""){  
        alert("Lastname can't be blank");  
        return false;  
      }   
    
    else if (zipcode==null || zipcode==""){  
        alert("Zipcode can't be blank");  
        return false;  
      }
      
    else if (city==null || city==""){  
        alert("City can't be blank");  
        return false;  
      } 

    else if (address1==null || address1==""){  
        alert("Address1 can't be blank");  
        return false;  
      } 

    else if (address2==null || address2==""){  
        alert("Address2 can't be blank");  
        return false;  
      }
    
    else if(password1==password2){
        return true;
        }
    else if(password1!=password2) {
        alert("password must be same!");
        return false;
    }
     
    else if (isNaN(num)){
        alert("Name can't be blank");
        return false;
    }    
    else {
        
        return true;
    }   
} 