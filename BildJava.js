// 1. I "fart" bestämmer du hur fort bilderna skall växla (i millisekunder, där 1000 = 1 sekund)

var fart = 1000
var Bild = new Array()

// 2. Ange vilka bildfiler som skall visas; för att använda fler än 4 bilder fortsätter du listan nedan

Bild[0] = 'bild1.jpg'
Bild[1] = 'bild2.jpg'
Bild[2] = 'bild3.jpg'
Bild[3] = 'bild4.jpg'

// Ändra ingenting i resten av skriptet

var f
var a = 0
var b = Bild.length

var laddaBild = new Array()
for (i = 0; i < b; i++){
   laddaBild[i] = new Image()
   laddaBild[i].src = Bild[i]
}

function startBildspel(){
   document.images.Bildspel.src = laddaBild[a].src
   a = a + 1
   if (a > (b-1)) a=0
   f = setTimeout('startBildspel()', fart)
}






// --Sluta gömma>
</SCRIPT>

2. I BODY-taggen lägger du till en hanterare (onload="startBildspel()") som startar bildspelet när sidan för övrigt är laddad.

<BODY onload="startBildspel()" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

3. I BODY-elementet placerar du visningen av bilder och anropet av javaskriptet. Sätt "height" och "width" till samma storlek i pixlar som bilderna (bilderna bör vara lika stora).

<IMG src="bild1.jpg" name='Bildspel' height="130" width="120">

Variant B: Låt besökaren klicka på första bilden för att starta bildspelet.
====================================================

1. Använd samma JavaScript som ovan.

2. Uteslut hanteraren onload="startBildspel()" ur BODY-taggen.

3. Lägg följande i BODY-elementet, på den plats där du vill att bildspelet skall visas:

<a href="javascript:startBildspel()"><IMG src="bild1.jpg" name='Bildspel' border="0" height="130" width="120"></A>
