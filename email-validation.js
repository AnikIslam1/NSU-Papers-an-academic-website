function ValidateEmail(inputText)
{
var mailformat = ^[a-zA-Z0-9.!#$%&'+=^_`{}~-]+@northsouth.edu$;
if(inputText.value.match(mailformat))
{
alert(Valid email address!);
document.form1.text1.focus();
return true;
}
else
{
alert(You have entered an invalid email address!);
document.form1.text1.focus();
return false;
}
}

@northsouth.edu