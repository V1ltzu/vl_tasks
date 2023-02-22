function hello(){
    alert("Moi");
}

function add(){
    document.write(5+6);
}

function changeBackgroundColor(where, newColor){
    if (where.localeCompare(newColor)){
        document.body.style.backgroundColor = newColor;
    }
}

function changeColor(){
    let backgroundColor = document.getElementById('background').value;
    let color = document.getElementById('font').value;
    document.body.style.backgroundColor = backgroundColor;
    document.body.style.fontColor = color;
}

function changeColor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color = fcolor;
}

document.body.classList.add('custom');

// crud
function fnameVal(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First name must have at least 5 characters");
        return false;
    }
}