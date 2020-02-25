//Cor do grafico
function randomRgbPizza() {
    var cor = ["#000080", "#0000CD", "#0000FF", "#00FA9A", "#008B8B", "#00FFFF", "#00BFFF", "#00CED1", "#006400", "#008000",    
               "#191970", "#1E90FF", "#20B2AA", "#228B22", "#32CD32", "#3CB371", "#48D1CC", "#40E0D0", "#4682B4", "#4169E1",  
               "#483D8B", "#6495ED", "#66CDAA", "#66CDAA", "#7FFFD4", "#7FFF00", "#87CEFA", "#E0FFFF", "#B0E0E6", "#98FB98"];
    var posicao = Math.floor(Math.random() * 29 + 1);
    return cor[posicao];
}

function randomRgbBarra() {
    var cor = ["#00FA9A", "#00CED1", "#20B2AA", "#008B8B", "#00FFFF", "#00BFFF",   
               "#1E90FF", "#4169E1", "#6495ED", "#66CDAA", "#7FFFD4", "#87CEFA"];
    var posicao = Math.floor(Math.random() * 11 + 1);
    return cor[posicao];
}

//Grafico de barra
var urlBarra = 'http://localhost/questionario/Administrador/graficoBarraTecnico.txt';
var xhttpBarra = new XMLHttpRequest();
xhttpBarra.open("GET", urlBarra);
xhttpBarra.send();

xhttpBarra.onload = function(){
    var dadosBarra = JSON.parse(xhttpBarra.responseText);  
    createChartBarra(dadosBarra);
} 

function createChartBarra(dadosBarra){         
    var dadosBarra = dadosBarra;
    var j, i, k = 0, color = [], c;

    for (j in dadosBarra) {                        
        for (i = 1; i <= 57; i++) {                            
            if (i != 19 && i != 21 && i != 57){
               
                while (dadosBarra[k].Id_perg == i){
                    var indice = dadosBarra[k].Id_perg.concat(dadosBarra[k].Id_sub);
                    const elementBarra = document.getElementById(`grafico${indice}`);

                    for(c = 0; c < 30; c++){
                        color[c] = randomRgbBarra();
                    }

                    new Chart(elementBarra, {
                        type: 'bar',
                        data: {
                            labels: dadosBarra[k].Alternativa,
                            datasets: [
                                {
                                    label: dadosBarra[k].SubPergunta,
                                    data: dadosBarra[k].Quantidade,
                                    backgroundColor: color
                                }
                            ]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });  
                    k++;
                }                                    
            }
        }
    }
}


//Grafico de pizza
var urlPizza = 'http://localhost/questionario/Administrador/graficoPizzaTecnico.txt';
var xhttpPizza = new XMLHttpRequest();
xhttpPizza.open("GET", urlPizza);
xhttpPizza.send();

xhttpPizza.onload = function(){
    var dadosPizza = JSON.parse(xhttpPizza.responseText);  
    createChartPizza(dadosPizza);
} 

function createChartPizza(jsonObj){         
    var dadosPizza = jsonObj;
    var j, i, k = 0, color = [], c;

    for (j in dadosPizza) {                        
        for (i = 1; i < 57; i++) {                            
            if (i < 13 || (i > 15 && i < 19) || i == 20 || (i > 21 && i < 33) || (i > 33 && i < 38) || (i > 43 && i < 48) || (i > 50 && i < 55) || i == 56){
                if (dadosPizza[k].Respondida != 0){
                    const element = document.getElementById(`grafico${i}`);

                    for(c = 0; c < 30; c++){
                        color[c] = randomRgbPizza();
                    }

                    new Chart(element, {
                        type: "pie",
                        data: {
                            labels: dadosPizza[k].Alternativa,
                            datasets: [
                                {
                                    data: dadosPizza[k].Quantidade,
                                    backgroundColor: color
                                }
                            ]
                        }
                    });  
                }k++;                                    
            }
        }
    }
} 