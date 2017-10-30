<!DOCTYPE html>
<html>
<head>
  <style>
      body{
          display:flex;
          justify-content:center;
          font-family:"sans-serif";
      }
      #compteur.warning{
          color:red;
      }
      #mot{
          margin-top:15%;
      }
      #mot .letter{
          font-size:1vw;
          border-bottom:2px solid black;
          width:40px;
          height:40px;
          margin-right:10px;
          text-align:center;
      }
      #saisie{
          margin-top:10%;
          display:flex;
          justify-content : center;
      }
      #compteur{
          
      }
      
      
  </style>
</head>
<body>
    <div id="mot">
        
    </div>
    <div id="saisie">
        <input id="typedLetter" type="text">
        <button onClick="submit(document.getElementById('typedLetter').value)">VALIDER</button>
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
        
        function submit(letter){
            var letters = chosenWord.split('');
            var letterExist = false;
            var indices = [];
            var idx = letters.indexOf(letter);
            
            while (idx !== -1) {
              indices.push(idx);
              idx = letters.indexOf(letter, idx + 1);
            }         
            
            if(indices.length > 0){
                letterExist = true;
            }
           
            if(letterExist){
                //placer la letter a chaque indice
                var lengthIndices = indices.length;
                var lettersDiv = document.getElementsByClassName('letter');
                for(var i =0; i < lengthIndices; i++)
                {
                    alert(i);
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
