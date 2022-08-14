function calcularBhaskara(){   
    var video = window.document.getElementById('iframe')
    var mostrar = window.document.getElementById('direita')    
    var numa = document.getElementById('valora')
    var numb = document.getElementById('valorb')
    var numc = document.getElementById('valorc')       
    var vlra = Number(numa.value)
    var vlrb = Number(numb.value)
    var vlrc = Number(numc.value)
    if(numa.value.length == 0 || numb.value.length == 0 || numc.value.length == 0 ){
        window.alert("Todos os campos devem estar preenchidos!")
    } 
    else{
    var delta = Math.pow(vlrb,2)-(4*vlra*vlrc)
    var raiz = Math.sqrt(delta)
    var xl = (-vlrb + raiz)/(2*vlra)
    var xll = (-vlrb - raiz)/(2*vlra)
    mostrar.innerHTML = 
    `    <h1>   A = ${vlra}<br>
                B = ${vlrb}<br>
                C = ${vlrc}<br>
           Delta: ${delta} <br> 
     Raíz de Delta: ${raiz}<br> 
                 X': ${xl} <br> 
              X'': ${xll} </h1>
              
                        
              `/*<input type="button" value="Reset" onclick="resetar()">*/
              if (xl == -2 && xll == 3){
                video.innerHTML = 
                `
                <br><br>
                <h1>Origem da fórmula de Bhaskara</h1>
                <br>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xcaqcEkTKK4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <audio id="music" autoplay>
                <source src="audio/win.mp3" type = "audio/mpeg">
               </audio>
                `
               /* <iframe width="560" height="315" src="https://www.youtube.com/embed/QkVgC24Hv-Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>*/
               
              }
              else{
                  video.innerHTML = 
                  `
                  <h2>Para aparecer o vídeo tente novamente até que o resultado das raízes sejam -2 e 3.
                  <br>
                  Não conseguiu. Tente -1, 1 e 6 que agora vai.
                  </h2>
                  <img width="500" height="400" src="../Meu-primeiro-site-main/imagens/duvida.gif" alt="bhaskara">
                  
                
                  <audio id="music" autoplay>
                  <source src="audio/perdeu.mp3" type = "audio/mpeg">
                 </audio>
                  `
              }

   }
}