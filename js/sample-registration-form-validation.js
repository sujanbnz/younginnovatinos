function formValidation()
{
    var u_name = document.registration.u_name;
    var phone = document.registration.phone;
    var address = document.registration.address;
    var nationality = document.registration.nationality;
    var dob = document.registration.dob;
    var edu_back = document.registration.edu_back;
    var contact = document.registration.contact;
    var male = document.registration.male;
    var female = document.registration.female; 
    
if(u_name_validation(u_name,1,50))
{
if(validaddress(address,1,100))
{
if(validcontact(phone,email))
{
if(allnumeric(phone))
{ 
if(allLetter(nationality))
{
if(validatedob(dob))
{
if(ValidateEmail(email))
{
if(validgender(male,female))
{
}
} 
}
} 
}
}
}
}
return false;

} 

function u_name_validation(u_name,mx,my)
{
var u_name_len = u_name.value.length;
if (u_name_len == 0 || u_name_len >= my || u_name_len < mx)
{
alert("Name should not be empty / length be between "+mx+" to "+my);
u_name.focus();
return false;
}
return true;
}

function validaddress(address,mx,my)
{
var adrress_len = address.value.length;
if (address_len == 0 || address_len >= my || address_len < mx)
{
alert("Adrress should not be empty / length be between "+mx+" to "+my);
address.focus();
return false;
}
return true;
}


function allLetter(nationality)
{ 
var letters = /^[A-Za-z]+$/;
if(nationality.value.match(letters))
{
return true;
}
else
{
alert('Nationality must have alphabet characters only');
nationality.focus();
return false;
}
}

function allnumeric(phone)
{ 
var numbers = /^[0-9]+$/;
if(phone.value.match(numbers))
{
return true;
}
else
{
alert('Phone number must have numeric characters only');
phone.focus();
return false;
}
}

function validatedob(dob)
{ 
var numbers = /^[0-9]+$/;
if(dob.value.match(numbers))
{
return true;
}
else
{
alert('Date of Birth must have numeric characters only');
dob.focus();
return false;
}
}

function ValidateEmail(email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
email.focus();
return false;
}
} 

function validcontact(email,contact)
{
x=0;

if(email.selected) 
{
x++;
} if(phone.selected)
{
x++; 
}
if(x==0)
{
alert('Select email/phone');
contact.focus();
return false;
}
}

function validgender(male,female)
{
x=0;

if(male.checked) 
{
x++;
} if(female.checked)
{
x++; 
}
if(x==0)
{
alert('Select Male/Female');
gender.focus();
return false;
}
else
{
alert('Form Succesfully Submitted');
window.location.reload()
return true;
}
}