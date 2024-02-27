var selectedRow = null;
var nameError = document.getElementById('firstname-error');
var nameeError = document.getElementById('lastname-error');
var nooError = document.getElementById('no-error');

// Show Alerts
function showAlert(message, className){
    const div = document.createElement("div");
    div.className = `alert alert-$(className}`;

    div.appendChild(document.createTextNode(message));
    const container = document.querySelector(".container");
    const main = document.querySelector(".main");
    container.insertBefore(div, main);

    setTimeout(() => document.querySelector(".alert").remove(), 3000);
}

// Clear All Fields
function clearFields(){
    document.querySelector("#firstName").value = "";
    document.querySelector("#lastName").value = "";
    document.querySelector("#rollNo").value = "";
}

function validatefirstName(){
    var name = document.getElementById('firstName').value;

    if(name.length == 3){
        nameError.innerHTML = 'Name is required';
        return false;
    }
    if(!name.match(/^[A-Za-z]*\s{0}[A-Za-z]*$/)){
        nameError.innerHTML = 'Write first name';
        return false;
    }
    nameError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validatelastName(){
    var name = document.getElementById('lastName').value;

    if(name.length == 3){
        nameeError.innerHTML = 'Name is required';
        return false;
    }
    if(!name.match(/^[A-Za-z]*\s{0}[A-Za-z]*$/)){
        nameeError.innerHTML = 'Write first name';
        return false;
    }
    nameeError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validaterollNo(){
    var name = document.getElementById('rollNo').value;
    var nameError = document.getElementById('no-error');

    if(name.length < 12){
        nameError.innerHTML = 'minimal 12 karakter';
        return false;
    }else{
        nameError.innerHTML = ''; 
        nameError.innerHTML = '<i class="fas fa-check-circle"></i>';
        return true;
    }
}


// Add Data

document.querySelector("#student-form").addEventListener("submit", (e) =>{
    e.preventDefault();

    // Get Form Values
    const firstName = document.querySelector("#firstName").value;
    const lastName = document.querySelector("#lastName").value;
    const rollNo= document.querySelector("#rollNo").value;

    // validate
    if(firstName == "" || lastName == "" || rollNo == ""){
        showAlert("Please fill in all fields", "danger");
    }
    else{
        if(selectedRow == null){
            const list = document.querySelector("#student-list");
            const row = document.createElement("tr");

            row.innerHTML = `
            <td>${firstName}</td>
            <td>${lastName}</td>
            <td>${rollNo}</td>
            <td>
            <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
            <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
            `;
            list.appendChild(row);
            selectedRow = null;
            showAlert("Student Added", "success");
        }
        else{
            selectedRow.children[0].textContent = firstName;
            selectedRow.children[1].textContent = lastName;
            selectedRow.children[2].textContent = rollNo;
            selectedRow = null;
            showAlert("Student Info Edited", "info");
        }
        clearFields();
    }
});
// Edit Data

document.querySelector("#student-list").addEventListener("click", (e) =>{
    target = e.target;
    if(target.classList.contains("edit")){
        selectedRow = target.parentElement.parentElement;
        document.querySelector("#firstName").value =  selectedRow.children[0].textContent;
        document.querySelector("#lastName").value =  selectedRow.children[1].textContent;
        document.querySelector("#rollNo").value =  selectedRow.children[2].textContent;
    }
});


// Delete Data

document.querySelector("#student-list").addEventListener("click", (e) =>{
    target = e.target;
    if(target.classList.contains("delete")){
        target.parentElement.parentElement.remove();
       showAlert("Student Data Deleted", "danger");
    }
});