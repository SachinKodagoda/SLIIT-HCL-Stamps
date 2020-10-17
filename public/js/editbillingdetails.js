function validateform(){  
    var username=document.userForm.username.value;  
    var displayname=document.userForm.displayname.value;
    var company=document.userForm.company.value;  
    var first_name=document.userForm.first_name.value;
    var middle_name=document.userForm.middle_name.value;  
    var last_name=document.userForm.last_name.value;
    var zip=document.userForm.zip.value;  
    var city=document.userForm.city.value;
    var address_1=document.userForm.address_1.value;  
    var address2=document.userForm.address_2.value;
    var password=document.userForm.password.value;
    var password2=document.userForm.password2.value;  
    var email=document.userForm.email.value;  

    var atposition=email.indexOf("@");  
    var dotposition=email.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
    alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\:"+dotposition);  
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

    else if (company==null || company==""){  
        alert("Companyname can't be blank");  
        return false;  
      }

    else if (first_name==null || first_name==""){  
        alert("Firstname can't be blank");  
        return false;  
      }

    else if (middle_name==null || middle_name==""){  
        alert("Middlename can't be blank");  
        return false;  
      }  
    
    else if (last_name==null || last_name==""){  
        alert("Lastname can't be blank");  
        return false;  
      }   
    
    else if (zip==null || zip==""){  
        alert("Zipcode can't be blank");  
        return false;  
      }
      
    else if (city==null || city==""){  
        alert("City can't be blank");  
        return false;  
      } 

    else if (address_1==null || address_1==""){  
        alert("Address1 can't be blank");  
        return false;  
      } 

    else if (address2==null || address2==""){  
        alert("Address2 can't be blank");  
        return false;  
      }
    
    else if(password==password){
        return true;
        }
    else if(password!=password2) {
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