/********************************************************** 
VERIF INSERT USER ******** 
**********************************************************/

document.getElementById("formu_users").onsubmit = function () {
  //alert("submit !");
  if (document.getElementById("nom_users").value == "")
  {
    alert("Nom obligatoire !");
    return false;
  }
  else if (document.getElementById("prenom_users").value == "")
  {
    alert("Prénom obligatoire !");
    return false;
  }
  else if (document.getElementById("phone_users").value=="")
  {
    alert("Téléphone obligatoire !");
    return false;
  }
  else if (isNaN(document.getElementById("phone_users").value))
  {
    alert("Le numéro de téléphone doit être numérique !");
    return false;
  }
  else if (isEmail(document.getElementById("mail_users").value) == false)
  {
    alert("Mail obligatoire !");
    return false;
  }
  else if (document.getElementById("mdp_users").value=="")
  {
    alert("Mots de passe obligatoire !");
    return false;
  }
  else
  {
    return true;
  }
}


/**********************************************************
Fonction    : isEmail()
**********************************************************/
function isEmail(email)
{
     if ( ( email.indexOf("@") == -1 ) 
     || ( email.indexOf("@") == 0 ) 
     || ( email.indexOf("@") != email.lastIndexOf("@") ) 
     || ( email.indexOf(".") == email.indexOf("@") - 1 ) 
     || ( email.indexOf(".") == email.indexOf("@") + 1 ) 
     || ( email.indexOf("@") == email.length -1 ) 
     || ( email.indexOf (".") == - 1 ) 
     || ( email.lastIndexOf (".") == email.length - 1 ) )
         return false;
      else
         return true;
}

/**********************************************************************/