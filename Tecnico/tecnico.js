function abre22(){
    var q22 = document.getElementsByName('perg22');
    if (q22[0].checked){
        var qS = document.getElementById('sim');
        qS.classList.remove("esconde");
        var qN = document.getElementById('nao');
        qN.classList.add("esconde1");
        var p23 = document.getElementById('perg23');
        p23.setAttribute("required", "required");
        var p24 = document.getElementById('perg24');
        p24.setAttribute("required", "required");
        var p25 = document.getElementById('perg25');
        p25.setAttribute("required", "required");
        var p26 = document.getElementById('perg26');
        p26.setAttribute("required", "required");
        var qN = document.getElementById('nao');
        qN.classList.add("esconde1");
        var p35 = document.getElementById('perg35');
        if (p35.hasAttribute("required")){
            p35.removeAttribute("required");
        }
    }else if (q22[1].checked){
        var qS = document.getElementById('sim');
        qS.classList.add("esconde");
        var qN = document.getElementById('nao');
        qN.classList.remove("esconde1");
        var p23 = document.getElementById('perg23');
        if (p23.hasAttribute("required")){
            p23.removeAttribute("required");
        }
        var p24 = document.getElementById('perg24');
        if (p24.hasAttribute("required")){
            p24.removeAttribute("required");
        }
        var p25 = document.getElementById('perg25');
        if (p25.hasAttribute("required")){
            p25.removeAttribute("required");
        }
        var p26 = document.getElementById('perg26');
        if (p26.hasAttribute("required")){
            p26.removeAttribute("required");
        }
        var p35 = document.getElementById('perg35');
        p35.setAttribute("required", "required");            
    }
}

function abre26(){
    var q26 = document.getElementsByName('perg26');
    if (q26[0].checked){
        var q27 = document.getElementById('vinteesete');
        q27.classList.remove("esconde");
        var qN = document.getElementById('nao');
        qN.classList.add("esconde1");
        var p27 = document.getElementById('perg27');
        p27.setAttribute("required", "required");
        var p28 = document.getElementById('perg28');
        p28.setAttribute("required", "required");
        var p29 = document.getElementById('perg29');
        p29.setAttribute("required", "required");
        var p35 = document.getElementById('perg35');
        if (p35.hasAttribute("required")){
            p35.removeAttribute("required");
        }
    }else if (q26[1].checked){
        var q27 = document.getElementById('vinteesete');
        q27.classList.add("esconde");
        var qN = document.getElementById('nao');
        qN.classList.remove("esconde1");
        var p27 = document.getElementById('perg27');
        if (p27.hasAttribute("required")){
            p27.removeAttribute("required");
        }
        var p28 = document.getElementById('perg28');
        if (p28.hasAttribute("required")){
            p28.removeAttribute("required");
        }
        var p29 = document.getElementById('perg29');
        if (p29.hasAttribute("required")){
            p29.removeAttribute("required");
        }
        var p35 = document.getElementById('perg35');
        p35.setAttribute("required", "required");            
    }
}

function abre29(){
    var q29 = document.getElementsByName('perg29');
    if (q29[0].checked){
        var q30 = document.getElementById('trinta');
        q30.classList.remove("esconde");
        var q34 = document.getElementById('trintaequatro');
        q34.classList.add("esconde1");
        var p30 = document.getElementById('perg30');
        p30.setAttribute("required", "required");
        var p31 = document.getElementById('perg31');
        p31.setAttribute("required", "required");
        var p32 = document.getElementById('perg32');
        p32.setAttribute("required", "required");
        var p34 = document.getElementById('perg34');
        if (p34.hasAttribute("required")){
            p34.removeAttribute("required");
        }
    }else if (q29[1].checked){
        var q30 = document.getElementById('trinta');
        q30.classList.add("esconde");
        var q34 = document.getElementById('trintaequatro');
        q34.classList.remove("esconde1");
        var p30 = document.getElementById('perg30');
        if (p30.hasAttribute("required")){
            p30.removeAttribute("required");
        }
        var p31 = document.getElementById('perg31');
        if (p31.hasAttribute("required")){
            p31.removeAttribute("required");
        }
        var p32 = document.getElementById('perg32');
        if (p32.hasAttribute("required")){
            p32.removeAttribute("required");
        }
        var p34 = document.getElementById('perg34');
        p34.setAttribute("required", "required");            
    }
}

function abre48(){
    var q47 = document.getElementsByName('perg47');
    if (q47[0].checked){
        var q48 = document.getElementById('quarentaeoito');
        q48.classList.remove("esconde");
    }else if (q47[1].checked){
        var q48 = document.getElementById('quarentaeoito');
        q48.classList.add("esconde");
    }
}