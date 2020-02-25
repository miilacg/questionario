function testeConclusao(perg2, perg3){
    var q2 = document.getElementById('perg2').value;
    var q3 = document.getElementById('perg3').value;
    
    if (q2 >= q3){
        alert ("Ano de conclusão menor ou igual ao de ingresso. Coloque um ano valido.");
        document.getElementById('perg3').value = "";
    }
}

function testeConclusao1(perg2, perg3){
    var q2 = document.getElementById('perg2').value;
    var q3 = document.getElementById('perg3').value;
    
    if (q3 != ""){
       if (q2 >= q3){
            alert ("Ano de conclusão menor ou igual ao de ingresso. Coloque um ano valido.");
            document.getElementById('perg3').value = "";
        } 
    }
    
}

function abreEstado(){
    var q6 = document.getElementById('perg6').value;
    if (q6 == "BR"){
        var q7 = document.getElementById('estado7');
        q7.classList.remove("estado");
        var p7 = document.getElementById('perg7');
        p7.setAttribute("required", "required");
    }else{
        var q7 = document.getElementById('estado7');
        q7.classList.add("estado");
        var p7 = document.getElementById('perg7');
        if (p7.hasAttribute("required")){
            p7.removeAttribute("required");
        }
    }
}