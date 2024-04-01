document.addEventListener('DOMContentLoaded', function() {
    var bouton = document.querySelector("button");
    
    bouton.addEventListener('click', () => {
        var input1 = document.querySelector('#in1');
        var input2 = document.querySelector('#in2');
        var input3 = document.querySelector('#in3');
        
        var p1 = document.createElement('p');
        p1.textContent = input1.value;

        var p2 = document.createElement('p');
        p2.textContent = input2.value;

        var p3 = document.createElement('p');
        p3.textContent = input3.value + 'dt';
        
        var liste = document.querySelector(".liste");
        var nouv = document.createElement('li');
        nouv.appendChild(p1);
        nouv.appendChild(p2);
        nouv.appendChild(p3);
        liste.appendChild(nouv);
    });
    var bouton2=document.querySelector('#but');
    bouton2.addEventListener('click', () => {
        
        // nfaskhou l'element ml base de données bch yetfasakh automatiquement ml page html 
    });
});
