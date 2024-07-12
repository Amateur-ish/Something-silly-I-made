const rollTenTimes = document.getElementById("rollten");
const rollOnce = document.getElementById("rollone");
const counter = document.getElementById("counter");
let possibility = 0;
let rollCounter = 0;


rollOnce.onclick = function () {


    possibility = Math.floor(Math.random() * 100) + 1;

    for(let CommonList = 1; CommonList <= 69; CommonList++) {
        if(possibility == CommonList) {
            let commonchoose = Math.floor(Math.random() * 7) + 1;
            switch(commonchoose) {
                case 1:
                    document.getElementById("roll1").src = "Carndox.png";
                    document.getElementById("roll1").style.border = "3px solid blue";
                    document.getElementById("roll1text").textContent = "Carndox(☆☆☆)"
                    break;
                case 2:
                    document.getElementById("roll1").src = "Basic.png";
                    document.getElementById("roll1").style.border = "3px solid blue";
                    document.getElementById("roll1text").textContent = "Basic(☆☆☆)";
                    
                    break;
                case 3:
                    document.getElementById("roll1").src = "Admiral.png";
                    document.getElementById("roll1").style.border = "3px solid blue";
                    document.getElementById("roll1text").textContent = "Admiral(☆☆☆)";
                    break;

                case 4:
                    document.getElementById("roll1").src = "Allusio.png";
                    document.getElementById("roll1").style.border = "3px solid blue";
                    document.getElementById("roll1text").textContent = "Allusio(☆☆☆)";
                    break;

                case 5:
                    document.getElementById("roll1").src = "Qin.png";
                    document.getElementById("roll1").style.border = "3px solid blue";
                    document.getElementById("roll1text").textContent = "Qin(☆☆☆)";
                    
                    break;

                case 6:
                    document.getElementById("roll1").src = "Mystic.png";
                    document.getElementById("roll1").style.border = "3px solid blue";
                    document.getElementById("roll1text").textContent = "Mystic(☆☆☆)";
                    break;

                case 7:
                    document.getElementById("roll1").src = "Gengar.png";
                    document.getElementById("roll1").style.border = "3px solid blue";
                    document.getElementById("roll1text").textContent = "Gengar(☆☆☆)";
                    break;

            }
        }
    }
    for(let UncommonList = 70; UncommonList <= 97; UncommonList++) {
        if(possibility == UncommonList) {
            let uncommonchoose = Math.floor(Math.random() * 5) + 1;
            switch(uncommonchoose) {
                case 1:
                    document.getElementById("roll1").src = "Leo.png";
                    document.getElementById("roll1").style.border = "3px solid purple";
                    document.getElementById("roll1text").textContent = "Mystic(☆☆☆☆)";
                    break;

                case 2:
                    document.getElementById("roll1").src = "WrongAvatarLol.png";
                    document.getElementById("roll1").style.border = "3px solid purple";
                    document.getElementById("roll1text").textContent = "Gala(☆☆☆☆)";
                    break;

                case 3:
                    document.getElementById("roll1").src = "Goz.png";
                    document.getElementById("roll1").style.border = "3px solid purple";
                    document.getElementById("roll1text").textContent = "Goz(☆☆☆☆)";
                    break;

                case 4:
                    document.getElementById(rolls).src = "Jaz.jpg";
                    document.getElementById(rolls).style.border = "3px solid purple";
                    document.getElementById(rolltext).textContent = "Jaz(☆☆☆☆)";
                    break;

                case 5:
                    document.getElementById(rolls).src = "Lian.png";
                    document.getElementById(rolls).style.border = "3px solid purple";
                    document.getElementById(rolltext).textContent = "Lian(☆☆☆☆)";
                    break;

            }
        }
    }
    for(let RareList = 98; RareList <= 100; RareList++) {
        if(possibility == RareList) {
            let rarechoose = Math.floor(Math.random() * 4) + 1;
            switch(rarechoose) {
                case 1:
                    document.getElementById("roll1").src = "Hito.png";
                    document.getElementById("roll1").style.border = "3px solid yellow";
                    document.getElementById("roll1text").textContent = "Hito(☆☆☆☆☆)";
                    break;

                case 2:
                    document.getElementById("roll1").src = "download.png";
                    document.getElementById("roll1").style.border = "3px solid yellow";
                    document.getElementById("roll1text").textContent = "Fizzy(☆☆☆☆☆)";
                    break;

                case 3:
                    document.getElementById("roll1").src = "Moaz.png";
                    document.getElementById("roll1").style.border = "3px solid yellow";
                    document.getElementById("roll1text").textContent = "Moaz(☆☆☆☆☆)";
                    break;

                case 4:
                    document.getElementById("roll1").src = "Blob.png";
                    document.getElementById("roll1").style.border = "3px solid yellow";
                    document.getElementById("roll1text").textContent = "Blob(☆☆☆☆☆)";
                    break;

            }
        }
    }
    rollCounter++;
    counter.textContent = rollCounter;
}

                   
rollTenTimes.onclick = function() {
let amount = 1
let rolls = "roll" + amount;
let rolltext = "roll" + amount + "text";
while (amount <= 10) {
    possibility = Math.floor(Math.random() * 100) + 1;
    for(let CommonLists = 1; CommonLists <= 69; CommonLists++) {
        if(possibility == CommonLists) {
            let commonchooser = Math.floor(Math.random() * 7) + 1;
            switch(commonchooser) {
                case 1:
                    document.getElementById(rolls).src = "Carndox.png";
                    document.getElementById(rolls).style.border = "3px solid blue";
                    document.getElementById(rolltext).textContent = "Carndox(☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;
                case 2:
                    document.getElementById(rolls).src = "Basic.png";
                    document.getElementById(rolls).style.border = "3px solid blue";
                    document.getElementById(rolltext).textContent = "Basic(☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;
                case 3:
                    document.getElementById(rolls).src = "Admiral.png";
                    document.getElementById(rolls).style.border = "3px solid blue";
                    document.getElementById(rolltext).textContent = "Admiral(☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;

                case 4:
                    document.getElementById(rolls).src = "Allusio.png";
                    document.getElementById(rolls).style.border = "3px solid blue";
                    document.getElementById(rolltext).textContent = "Allusio(☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;

                case 5:
                    document.getElementById(rolls).src = "Qin.png";
                    document.getElementById(rolls).style.border = "3px solid blue";
                    document.getElementById(rolltext).textContent = "Qin(☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;

                case 6:
                    document.getElementById(rolls).src = "Mystic.png";
                    document.getElementById(rolls).style.border = "3px solid blue";
                    document.getElementById(rolltext).textContent = "Mystic(☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;

                case 7:
                    document.getElementById(rolls).src = "Gengar.png";
                    document.getElementById(rolls).style.border = "3px solid blue";
                    document.getElementById(rolltext).textContent = "Gengar(☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;
            }
        }
    }
    for(let UncommonLists = 70; UncommonLists <= 97; UncommonLists++) {
        if(possibility == UncommonLists) {
            let uncommonchooser = Math.floor(Math.random() * 5) + 1;
            switch(uncommonchooser) {
                case 1:
                    document.getElementById(rolls).src = "Leo.png";
                    document.getElementById(rolls).style.border = "3px solid purple";
                    document.getElementById(rolltext).textContent = "Leo(☆☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;

                case 2:
                    document.getElementById(rolls).src = "WrongAvatarLol.png";
                    document.getElementById(rolls).style.border = "3px solid purple";
                    document.getElementById(rolltext).textContent = "Gala(☆☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;

                case 3:
                    document.getElementById(rolls).src = "Goz.png";
                    document.getElementById(rolls).style.border = "3px solid purple";
                    document.getElementById(rolltext).textContent = "Goz(☆☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;
                    
                case 4:
                    document.getElementById(rolls).src = "Jaz.jpg";
                    document.getElementById(rolls).style.border = "3px solid purple";
                    document.getElementById(rolltext).textContent = "Jaz(☆☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;

                case 5:
                    document.getElementById(rolls).src = "Lian.png";
                    document.getElementById(rolls).style.border = "3px solid purple";
                    document.getElementById(rolltext).textContent = "Lian(☆☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;


            }
        }
    }
    for(let RareLists = 98; RareLists <= 100; RareLists++) {
        if(possibility == RareLists) {
            let rarechooser = Math.floor(Math.random() * 4) + 1;
            switch(rarechooser) {
                case 1:
                    document.getElementById(rolls).src = "Hito.png";
                    document.getElementById(rolls).style.border = "3px solid yellow";
                    document.getElementById(rolltext).textContent = "Hito(☆☆☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;

                case 2:
                    document.getElementById(rolls).src = "download.png";
                    document.getElementById(rolls).style.border = "3px solid yellow";
                    document.getElementById(rolltext).textContent = "Fizzy(☆☆☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;

                case 3:
                    document.getElementById(rolls).src = "Moaz.png";
                    document.getElementById(rolls).style.border = "3px solid yellow";
                    document.getElementById(rolltext).textContent = "Moaz(☆☆☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;
                
                case 4:
                    document.getElementById(rolls).src = "Blob.png";
                    document.getElementById(rolls).style.border = "3px solid yellow";
                    document.getElementById(rolltext).textContent = "Blob(☆☆☆☆☆)";
                    amount++;
                    rolltext = "roll" + amount + "text";
                    rolls = "roll" + amount;
                    break;


            }
        }
    }
}
rollCounter = rollCounter + 10;
    counter.textContent = rollCounter;

}
