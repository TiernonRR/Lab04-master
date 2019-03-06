function checkQuantities(){
    let firstItem = document.getElementById("itemOne").value;
    let secondItem = document.getElementById("itemTwo").value;
    let thirdItem = document.getElementById("itemThree").value;

    if(firstItem.length == 0 || secondItem.length == 0 ||thirdItem.length == 0){
        return(1);
    }
    if(firstItem < 0 || secondItem < 0 || thirdItem < 0){
        return(2);
    }
    return(3);
}

function loginCheck(){
    let userName = document.getElementById("Username").value;
    let password = document.getElementById("Password").value;

    console.log(password);

    if(!(userName.includes("@")) || !(userName.includes(".com"))){
        return(1);
    }
    if(password.length == 0){
        return(2);
    }

    return(3);
}

function checkForm(){
    let quanCheck   = checkQuantities();
    let credCheck   = loginCheck();

    if(quanCheck == 1){
        alert("Don't leave quanitity fields blank!");
    }
    else if(quanCheck == 2){
        alert("Quantities must be a positive value!");
    }

    if(credCheck == 1){
        alert("Please, enter a valid email address.");
    }
    else if(credCheck == 2){
        alert("Please, enter a password.");
    }
    if(credCheck != 3 || quanCheck != 3){
      return false;
    }
    return true;

}
