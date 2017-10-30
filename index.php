<!DOCTYPE html>
<html>
<head>
  <style>
      #compteur.warning{
          color:red;
      }
      #mot{
          margin-top:15%;
          display:flex;
          justify-content:center;
      }
      #mot .letter{
          font-size:15px;
          border-bottom:2px solid black;
          width:40px;
          height:40px;
          margin-right:10px;
      }
      #saisie{
          display:flex;
          justify-content : "center";
      }
      
  </style>
</head>
<body>
    <div id="mot">
        
    </div>
    <div id="saisie">
        <input id="typedLetter" type="text">
        <button onClick="submit(this.value)">VALIDER</button>
    </div>
    <div id="compteur">
    </div>
</body>
    <script type="text/javascript">                
               
        var motToRandom = ["PROFFESSEUR", "COURS", "ELEVE", "WEB", "LOL"];
        var chosenWord;
        var nbMaxChances = 10;
        var compteur = document.getElementById('compteur');
        var motDiv = document.getElementById('mot');
            
        function initCompteur()
        {
            compteur.innerHTML = nbMaxChances;
        }
        
        function decCompteur(){
            compteur.innerHTML -= 1;
            var nbChances = compteur.innerHTML;            
            if(nbChances < 0){
                alert('you lost');
            }
        }
        
        function placerLettres(){
            var length = chosenWord.split('').length;
            motDiv.innerHTML = '';
            
            for(var i=0; i < length; i++)
            {
                motDiv.innerHTML += "<div class='letter'></div>";
            }
        }
        
        function submit(){
            var letters = chosenWord.split('');
            var letterTotest = document.getElementById('typedLetter');
            var letterIndex = letters.indexOf(letterTotest);
            var letterExist = false;
            var indices = [];
            
            var idx = letters.indexOf(letterTotest);
            alert(letterTotest.innerHTML);
            while (idx != -1) {
              indices.push(idx);
              idx = tableau.indexOf(élément, idx + 1);
            }         
            
            if(indices.length > 0){
                letterExist = true;
            }
           
            if(letterExist){
                //placer la letter a chaque indice
                var lengthIndices = indices.length;
                var lettersDiv = document.getElementByClass('letter');
                for(var i =0; i < lengthIndices; i++){
                    lettersDiv[indices[i]].innerHTML = chosenWord.split('')[indices[i]];
                }
            }
            else{
                decCompteur();
            }
        }
        
        function init()
        {
            //def mot
            chosenWord = motToRandom[Math.floor(Math.random() * motToRandom.length)];
            placerLettres();
            initCompteur();
        }
        
        init();
    </script>
</html>
