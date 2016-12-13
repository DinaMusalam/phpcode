<?php $page = basename($_SERVER['SCRIPT_NAME']); ?> 

<?php
  error_reporting(E_ALL ^E_NOTICE);
// define my variables 
    $title = $_POST['title'].";";
    $betyg = $_POST['betyg'].";";
    $imdb = $_POST['imdb'].";";
    $bild = $_POST['bild'].";";
    $desc = $_POST['handling'].";";
    $send = $_POST['laggTill'];
    $file = 'filmer.txt';
    $doc = file_get_contents($file);
// if my values is posted 
    if(isset($_POST['laggTill']))
    {
      $f = @fopen ($file,"a");
	  // End Of Line to gives a new line for each film
      $nyFilm = PHP_EOL.$title.$betyg.$imdb.$bild.$desc;
      fwrite($f,$nyFilm);
      fclose($f);
        $lines = explode("\n",$doc);
        foreach ($lines as $newlines)
        {
		// Loopar igen varje film (har ska ni explodera filen genom ";")
          list($title,$betyg,$imdb,$bild,$desc) = explode(";",$newlines);
          echo "
            <div class='filmName'><a href='?title=rawurlencode($title)'>$title</a><div class='stars'>";?>
          <?php
         for($i = 0; $i<= 5; $i++)
          { if ($betyg >= $i){
			// Skriver ut en guldstjärna
				echo"<img src='yellowStar.png' allt='Betyg'/>";	 
			}else{
				echo "<img src='star.png' allt='Betyg'/>";								 
			}
			}?>
          <?php echo"</div></div>";
        }
    }
    else
    {
      if(isset($_GET['title']))
      {
        $searchfor = $_GET['title'];
        $pattern = preg_quote($searchfor, '/');
        $pattern = "/^.*$pattern.*\$/m";
        if(preg_match_all($pattern, $doc, $matches))
        {
          $movie = implode ("\n",$matches[0]);
          list($title,$betyg,$imdb,$bild,$desc) = explode(";",$movie);
         ?>
		 <?php
		 echo "<div class='info'>";
		 echo"<div id='desc'>
            <h2>$title</h2>
            <p class='desc'>$desc</p>
            </div>";
		  ?>
		  
		  
		  
          <?php
		  echo "<img class='cover' src='$bild' alt='$title' title='$title'/><br>
          ";		  
		  echo " <br><br><br>         
            <h3 class='imdb'>Länk till IMDB:  <a class='imdblink' href='$imdb' target='_blank'>$imdb</a></h3>";
		echo "<div id='star'>";
		echo "Betyg   :  ";
          for($i = 0; $i<= 5; $i++)
		  
          { if ($betyg >= $i){
			// Skriver ut en guldstjärna
				
				echo"<img src='yellowStar.png' alt='Betyg'/>";	 
			}else{
				echo "<img src='star.png' alt='Betyg'/>";								 
			}
			}
		
			echo "</div></div>";
			?>
          <?php 
        }
        else
        {
          echo "No matches found";
        }
      }
      else
      {
        $lines = explode("\n",$doc);
        foreach ($lines as $newlines)
        {
          list($title,$betyg,$imdb,$bild,$desc) = explode(";",$newlines);
          echo "
            <div class='filmName'><a href='?title=$title'>$title</a><div class='stars'>";?>
          <?php
          for($i = 0; $i<= 5; $i++)
          { if ($betyg >= $i){
			// Skriver ut en guldstjärna
				echo"<img src='yellowStar.png' alt='Betyg'/>";	 
			}else{
				echo "<img src='star.png' alt='Betyg'/>";								 
			}
			}?>
          <?php echo"</div></div>";
        }
      }
    }
?>