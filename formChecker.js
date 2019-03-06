function checkQuantities(){
    let firstItem = document.getElementById("itemOne").value;
    let secondItem = document.getElementById("itemTwo").value;
    let thirdItem = document.getElementById("itemThree").value;

    if(firstItem == null){
        return(false;)
    }
    if(secondItem == null){
        return(false;)
    }
    if(thirdItem == null){
        return(false;)
    }

    return(true);
}

function radioSelect(){
    let firstRadio = document.getElementById('free').checked;
    let secondRadio = document.getElementById('overNight').checked;
    let thirdRadio = document.getElementById('threeDay').checked;

    if(firstRadio || secondRadio || thirdRadio){
        return true;
    }

    return false;
}

function checkForm(){
    let quanCheck   = checkQuantities();
    let radioSelect = checkRadio();
    
    if(quanCheck && radioSelect){
        //send off form
    }
}