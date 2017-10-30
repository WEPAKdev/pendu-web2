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
      
  </style>
</head>
<body>
    <div id="mot">
        <div class="letter">
            
        </div>
    </div>
    <div id="saisie">
        <input type="text">
        <button onClick="submit(this.value)">
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
            alert(length);
            
            for(var i=0; i < length; i++)
            {
                motDiv.innerHTML += "<div class='letter'></div>";
            }
        }
        
        function submit(){
            alert('test');
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
