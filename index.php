<!DOCTYPE html>
<html>
<head>
  <style>
      #compteur.warning{
          color:red;
      }
      #mot{
          display:flex;
          justify-content:center;
      }
      #mot .letter{
          font-size:15px;
          border-bottom:2px solid black;
          width:15px;
          height:15px;
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
    </div>
    <div id="compteur">
    </div>
</body>
    <script type="text/javascript">
        var mots = {
                    "PROFFESSEUR" : ["P","R", "O", "F", "F", "E", "S", "S", "E", "U", "R"],
                    "COURS" : ["C", "O", "U", "R", "S"],
                    "ELEVE" : ["E", "L", "E", "V", "E"],
                    "WEB" : ["W", "E", "B"],
                    "LOL" : ["L", "O", "L"]
                };
                
        var motToRandom = ["PROFFESSEUR", "COURS", "ELEVE", "WEB", "LOL"];
        
        function init(){
            //def mot
            var chosenWord = motToRandom[Math.floor(Math.random() * motToRandom.length)];
            alert(mots["'+ chosenWord +'"][0]);
        }
        
        function placerLettres(){
            var length = chosenWord.length;
            for(var i=0; i < length; i++){
                
            }
        }
        
        init();
    </script>
</html>
