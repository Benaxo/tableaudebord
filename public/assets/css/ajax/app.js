const activite = getElementById("selection_activite");
const formValue = activite.value;

formValue.addEventListener("onchange", bah)

function bah(){
    if (formValue == "1"){

        console.log("Bah oui !");

    }
    else{

        console.log("Bah non !");

    }
}
