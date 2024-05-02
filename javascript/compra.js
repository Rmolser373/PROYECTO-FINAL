document.addEventListener('DOMContentLoaded', function() {
    var ace1 = document.getElementById('ace1');
    var ace2 = document.getElementById('ace2');
    var ace3 = document.getElementById('ace3');
    var can1 = document.getElementById('can1');
    var can2 = document.getElementById('can2');
    var can3 = document.getElementById('can3');

    var prel1;
    var prel2;
    var prel3;

    function calcular() {
        prel1 = precio(ace1.value);
        prel2 = precio(ace2.value);
        prel3 = precio(ace3.value);

        document.getElementById("prel1").innerHTML = prel1;
        document.getElementById("prel2").innerHTML = prel2;
        document.getElementById("prel3").innerHTML = prel3;

        var sub1 = (can1.value * prel1).toFixed(2); //Redondeado a 2 decimales para asegurar que sea en céntimos
        var sub2 = (can2.value * prel2).toFixed(2);
        var sub3 = (can3.value * prel3).toFixed(2);

        document.getElementById("sub1").innerHTML = sub1;
        document.getElementById("sub2").innerHTML = sub2;
        document.getElementById("sub3").innerHTML = sub3;

        var total = (parseFloat(sub1) + parseFloat(sub2) + parseFloat(sub3)).toFixed(2);
        document.getElementById("total").innerHTML = total;
    }

    function precio(valor) {
        switch(valor) {
            case '1':
                return 11.3;
                break;
            case '2':
                return 8.9;
                break;
            case '3':
                return 5.4;
                break;
            case '4':
                return 4.5;
                break;
            case '0':
                return 0;
                break;
            default:
                return 0;
                break;
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