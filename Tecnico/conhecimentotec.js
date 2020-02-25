function abre9(){
    var q8 = document.getElementsByName('perg8');
    if (q8[0].checked){
        var q9 = document.getElementById('nove');
        q9.classList.remove("esconde");
        var p9 = document.getElementById('perg9');
        p9.setAttribute("required", "required");        
    }else if (q8[1].checked){
        var q9 = document.getElementById('nove');
        q9.classList.add("esconde");
        var p9 = document.getElementById('perg9');
        if (p9.hasAttribute("required")){
            p9.removeAttribute("required");
        }
    }
}

function abre19(){
    var q18 = document.getElementsByName('perg18');
    if (q18[0].checked){
        var q19 = document.getElementById('dezenove');
        q19.classList.remove("esconde");
        var p19 = document.getElementById('caixa');
        p19.setAttribute("required", "required");
    }else if (q18[1].checked){
        var q19 = document.getElementById('dezenove');
        q19.classList.add("esconde");
        var p19 = document.getElementById('caixa');
        if (p19.hasAttribute("required")){
            p19.removeAttribute("required");
        }
    }
}

function abre21(){
    var q20 = document.getElementsByName('perg20');
    if (q20[0].checked){
        var q21 = document.getElementById('vinteeum');
        q21.classList.remove("esconde");
        var p21 = document.getElementById('caixa1');
        p21.setAttribute("required", "required");
    }else if (q20[1].checked){
        var q20 = document.getElementById('vinteeum');
        q20.classList.add("esconde");
        var p21 = document.getElementById('caixa1');
        if (p21.hasAttribute("required")){
            p21.removeAttribute("required");
        }
    }
}