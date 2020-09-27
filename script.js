var formMenu = document.getElementById('input-form');
formMenu.style.display = 'none';

function editForm() {
    if (formMenu.style.display === "none") {
        formMenu.style.display = "block";
    } else {
        formMenu.style.display = "none";
    }

    var name = document.getElementById('pName').innerHTML;
    var role = document.getElementById('pRole').innerHTML;
    var available = document.getElementById('pAvailable').innerHTML;
    var age = document.getElementById('pAge').innerHTML;
    var location = document.getElementById('pLocation').innerHTML;
    var experience = document.getElementById('pExperience').innerHTML;
    var email = document.getElementById('pEmail').innerHTML;

    document.getElementById('inpName').value = name;
    document.getElementById('inpRole').value = role;
    document.getElementById('inpAvailable').value = available;
    document.getElementById('inpAge').value = age;
    document.getElementById('inpLocation').value = location;
    document.getElementById('inpExperience').value = experience;
    document.getElementById('inpEmail').value = email;

}

// function simpanForm() {
//     formMenu.style.display = "none";
//     var name = document.getElementById('inpName').value;
//     var role = document.getElementById('inpRole').value;
//     var available = document.getElementById('inpAvailable').value;
//     var age = document.getElementById('inpAge').value;
//     var location = document.getElementById('inpLocation').value;
//     var experience = document.getElementById('inpExperience').value;
//     var email = document.getElementById('inpEmail').value;

//     document.getElementById('pName').innerHTML = name;
//     document.getElementById('pRole').innerHTML = role;
//     document.getElementById('pAvailable').innerHTML = available;
//     document.getElementById('pAge').innerHTML = age;
//     document.getElementById('pLocation').innerHTML = location;
//     document.getElementById('pExperience').innerHTML = experience;
//     document.getElementById('pEmail').innerHTML = email;
// }


// responsive Navbar on mobile
function showMenu() {
    var menu = document.getElementById("menu");
    var box = document.getElementById("box-profile");

    if (menu.style.display === "block") {
        menu.style.display = "none";
        box.style.paddingTop = "0px";
    } else {
        menu.style.display = "block";
        box.style.paddingTop = "150px";
    }
}