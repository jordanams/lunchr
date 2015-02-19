/********************************************************** 
VERIF INSERT RESTAURANT ******** 
**********************************************************/

document.getElementById("formu_resto").onsubmit = function () {
  //alert("submit !");
  if (document.getElementById("nom_resto").value == "")
  {
    alert("Nom du restaurant obligatoire");
    return false;
  }
  else if (document.getElementById("addresspicker").value == "")
  {
    alert("Adresse du restaurant obligatoire");
    return false;
  }
  else if (document.getElementById("desc_resto").value == "")
  {
    alert("Description du restaurant obligatoire");
    return false;
  }
  else if (document.getElementById("img1_resto").value == "")
  {
    alert("Ajout de 4 images obligatoire pour le restaurant");
    return false;
  }
  else if (document.getElementById("img2_resto").value == "")
  {
    alert("Ajout de 4 images obligatoire pour le restaurant");
    return false;
  }
  else if (document.getElementById("img3_resto").value == "")
  {
    alert("Ajout de 4 images obligatoire pour le restaurant");
    return false;
  }
  else if (document.getElementById("img4_resto").value == "")
  {
    alert("Ajout de 4 images obligatoire pour le restaurant");
    return false;
  }
}