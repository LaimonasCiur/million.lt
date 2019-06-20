function changeContent() {
    let panel1 = document.querySelector('#first');
    let panel1Tab = document.querySelector('.panel-first');
    let panel2 = document.querySelector('#second');
    let panel2Tab = document.querySelector('.panel-second');

    if (panel1.style.display == "block") {
        panel1.style.display = "none";
        panel2.style.display = "block";
        panel1Tab.style.background = "#eeeeef";
        panel2Tab.style.background = "#fff";
    } else {
        panel1.style.display = "block";
        panel2.style.display = "none";
        panel2Tab.style.background = "#eeeeef";
        panel1Tab.style.background = "#fff";
    }
}

function countPeriod() {
    document.getElementById("first").addEventListener("submit", function (event) {
        event.preventDefault()
    });
    let age = document.getElementById('age').value;
    let moneyNow = document.getElementById('moneyNow').value;
    let moneyInvest = document.getElementById('moneyInvest').value;

    if (isNaN(age) || isNaN(moneyNow) || isNaN(moneyInvest)) {
        alert("Privalote įvesti skaičius!");
        return false;
    }

    let x = +moneyNow;
    let y = +moneyInvest;
    let amzius = +age;
    let metai = 0;

    while (x <= 1000000) {
        metai++;
        x += x * 0.18;
        if (x <= 1000000) {
            x += y;
        }
    }

    let old = amzius + metai;
    //alert('Milijonierium būsi sulaukęs ' + old + ' metų.');

    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("close")[0];

    modal.style.display = "block";

    var div = document.createElement('div');

    div.className = 'millionaire';

    div.innerHTML = "<div class='modal-content millionaire'>\
            <span onclick='closeModal()' class='close'>&times;</span>\
            <h1>Tapk milijonieriumi!</h1>\
            <hr>\
            <p>Dabar tau yra " + amzius + " metų(-ai)</p>\
            <p>Jei šiandien investuosi " + moneyNow + "€, o kasmet pridėsi dar po " + y + "€</p>\
            <p>Kai tau bus " + old + " metų(-ai), tu būsi milijonierius!</p>\
            <hr>\
            <a href='knyga.php?book=1'>Sužinok kaip juo tapti</a>\
            </div>";

    modal.appendChild(div);

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    //return false;
}

function closeModal() {
    var modal = document.getElementById('myModal');
    modal.style.display = "none";
    location.reload();
}

function countSingle() {
    document.getElementById("second").addEventListener("submit", function (event) {
        event.preventDefault()
    });
    let age = document.getElementById('age1').value;
    let moneyNow = document.getElementById('moneyNow1').value;

    if (isNaN(age) || isNaN(moneyNow)) {
        alert("Privalote įvesti skaičius!");
        return false;
    }

    let x = +moneyNow;
    let amzius = +age;
    let metai = 0;

    while (x <= 1000000) {
        metai++;
        x += x * 0.18;
    }

    let old = amzius + metai;
    //alert('Milijonierium būsi sulaukęs ' + old + ' metų.');

    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("close")[0];

    modal.style.display = "block";

    var div = document.createElement('div');

    div.className = 'millionaire';

    div.innerHTML = "<div class='modal-content millionaire'>\
            <span onclick='closeModal()' class='close'>&times;</span>\
            <h1>Tapk milijonieriumi!</h1>\
            <hr>\
            <p>Dabar tau yra " + amzius + " metų(-ai)</p>\
            <p>Jei šiandien investuosi " + moneyNow + "€</p>\
            <p>Kai tau bus " + old + " metų(-ai), tu būsi milijonierius!</p>\
            <hr>\
            <a href='knyga.php?book=1'>Sužinok kaip juo tapti</a>\
            </div>";

    modal.appendChild(div);

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    //return false;
}

function closeModal() {
    var modal = document.getElementById('myModal');
    modal.style.display = "none";
    location.reload();
}
