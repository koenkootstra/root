function popupinfo()
{
var naam = document.getElementById("naam").value;
var voornaam = document.getElementById("voornaam").value;
var hnummer = document.getElementById("huisnummer").value;
var toevoeging = document.getElementById("toevoeging").value;
var email = document.getElementById("email").value;
var nummer = document.getElementById("telefoon").value;

alert("naam: " + naam + "\r\n" + "voornaam: " + voornaam + "\r\n" + "huisnummer: " + hnummer + "\r\n" + "toevoeging: " + toevoeging + "\r\n" + "email: " + email + "\r\n" + "telefoonnummer: " + nummer);

}




function onlynumbers(input)
{
    if (/^[0-9]{1,10}$/.test(input))
        {
            return(true);
        }
        else
        {
            alert ("U kunt alleen getallen invoeren (max 10.)");
            return(false);
        }
        }
        
    function onlyletters(input)
{
if (/^[A-Za-z]{1,50}$/.test(input))
        {
            return(true);
        }
        else
        {
            alert ("alleen letters zijn mogelijk (max 50.)");
            return(false);
        }
        }

function huisnummers(input)
{
    if (/^[0-9]{1,3}$/.test(input))
        {
            return(true);
        }
        else
        {
            alert ("U kunt alleen getallen invoeren tot de 999");
            return(false);
        }
        }

 function toevoegingen(input)
{
if (/^[A-Za-z]{1,2}$/.test(input))
        {
            return(true);
        }
        else
        {
            alert ("alleen letters zijn mogelijk (max 2.)");
            return(false);
        }
        }
         var messageBox = document.getElementById("display");
         
