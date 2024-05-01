/* document.addEventListener('DOMContentLoaded', function() {

var ace1 = document.getElementById('ace1').value;
var ace2 = document.getElementById('ace2').value;
var ace3 = document.getElementById('ace3').value;
var can1 = document.getElementById('can1').value;
var can2 = document.getElementById('can2').value;
var can3 = document.getElementById('can3').value;

var prel1, prel2, prel3;

switch(ace1){
    case 1:
        var prel1 = 11.3;
        break;
    case 2:
        var prel1 = 8.9;
        break;
    case 3:
        var prel1 = 5.4;
        break;
    case 4:
        var prel1 = 4.5;
        break;  
}
switch(ace2){
    case 0:
        var prel2 = 0;
        break;
    case 1:
        var prel2 = 11.3;
        break;
    case 2:
        var prel2 = 8.9;
        break;
    case 3:
        var prel2 = 5.4;
        break;
    case 4:
        var prel2 = 4.5;
        break;  
}
switch(ace3){
    case 0:
        var prel3 = 0;
        break;
    case 1:
        var prel3 = 11.3;
        break;
    case 2:
        var prel3 = 8.9;
        break;
    case 3:
        var prel3 = 5.4;
        break;
    case 4:
        var prel3 = 4.5;
        break;  
}

document.getElementById("prel1").innerHTML = prel1;
document.getElementById("prel2").innerHTML = prel2;
document.getElementById("prel3").innerHTML = prel3;


function calcular() {
    var sub1 = (can1 * prel1).toFixed(2); // Redondeado a 2 decimales porque trabajamos con céntimos
    var sub2 = (can2 * prel2).toFixed(2);
    var sub3 = (can3 * prel3).toFixed(2);
    //total.value = (parseFloat(sub1.value) + parseFloat(sub2.value) + parseFloat(sub3.value)).toFixed(2);
    total.value = (sub1 + sub2 + sub3).toFixed(2);
}

ace1.addEventListener('input', function() {
    switch(ace1){
        case '1':
            prel1 = 11.3;
            break;
        case '2':
            prel1 = 8.9;
            break;
        case '3':
            prel1 = 5.4;
            break;
        case '4':
            prel1 = 4.5;
            break;  
    }
    document.getElementById("prel1").innerHTML = prel1;
    calcular();
});

ace2.addEventListener('input', function() {
    switch(ace2){
        case '0':
            prel2 = 0;
            break;
        case '1':
            prel2 = 11.3;
            break;
        case '2':
            prel2 = 8.9;
            break;
        case '3':
            prel2 = 5.4;
            break;
        case '4':
            prel2 = 4.5;
            break;  
    }
    document.getElementById("prel2").innerHTML = prel2;
    calcular();
});

ace3.addEventListener('input', function() {
    switch(ace3){
        case '0':
            prel3 = 0;
            break;
        case '1':
            prel3 = 11.3;
            break;
        case '2':
            prel3 = 8.9;
            break;
        case '3':
            prel3 = 5.4;
            break;
        case '4':
            prel3 = 4.5;
            break;  
    }
    document.getElementById("prel3").innerHTML = prel3;
    calcular();
});


can1.addEventListener('input', calcular);
can2.addEventListener('input', calcular);
can3.addEventListener('input', calcular);
  
calcular();

}); */

document.addEventListener('DOMContentLoaded', function() {
    var ace1 = document.getElementById('ace1');
    var ace2 = document.getElementById('ace2');
    var ace3 = document.getElementById('ace3');
    var can1 = document.getElementById('can1');
    var can2 = document.getElementById('can2');
    var can3 = document.getElementById('can3');
    //var total = document.getElementById('total');

    var prel1;
    var prel2;
    var prel3;

    function calcular() {
        prel1 = getPrecio(ace1.value);
        prel2 = getPrecio(ace2.value);
        prel3 = getPrecio(ace3.value);

        document.getElementById("prel1").innerHTML = prel1;
        document.getElementById("prel2").innerHTML = prel2;
        document.getElementById("prel3").innerHTML = prel3;

        var sub1 = (can1.value * prel1).toFixed(2);
        var sub2 = (can2.value * prel2).toFixed(2);
        var sub3 = (can3.value * prel3).toFixed(2);

        document.getElementById("sub1").innerHTML = sub1;
        document.getElementById("sub2").innerHTML = sub2;
        document.getElementById("sub3").innerHTML = sub3;

        var total = (parseFloat(sub1) + parseFloat(sub2) + parseFloat(sub3)).toFixed(2);
        document.getElementById("total").innerHTML = total;
    }

    function getPrecio(valor) {
        switch(valor) {
            case '1':
                return 11.3;
            case '2':
                return 8.9;
            case '3':
                return 5.4;
            case '4':
                return 4.5;
            case '0':
                return 0;
            default:
                return 0;
        }
    }

    ace1.addEventListener('input', calcular);
    ace2.addEventListener('input', calcular);
    ace3.addEventListener('input', calcular);
    can1.addEventListener('input', calcular);
    can2.addEventListener('input', calcular);
    can3.addEventListener('input', calcular);

    calcular();
});