/********************************************************** 
VERIF INSERT RESTAURANT ******** 
**********************************************************/

document.getElementById("formu_resto").onsubmit = function () {
  //alert("submit !");
  if (document.getElementById("nom_resto").value == "")
  {
    alert("Nom du restaurant obligatoire !");
    return false;
  }
  else if (document.getElementById("addresspicker").value == "")
  {
    alert("Adresse du restaurant obligatoire !");
    return false;
  }
  else if (document.getElementById("desc_resto").value == "")
  {
    alert("Description du restaurant obligatoire !");
    return false;
  }
}