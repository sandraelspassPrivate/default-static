 <div class="wrapper">
  <div class="container">
    <div class="content">
			
      <div class="breadcrumb">
        <?php 
          $path = $_SERVER["PHP_SELF"];
          $parts = explode('/',$path);
          if (count($parts) < 2){
           echo("<ul><li>Startseite</li></ul>");
          }
          else{
          echo('<ul>');
          echo ("<li><a href=\"/\">Startseite</a></li>");
          for ($i = 2; $i < count($parts)-1; $i++){
            
              if (!strstr($parts[$i],".")){
                if($i == count($parts)-2){
                  $str = ucfirst($parts[$i]);
                  echo('<li>');
                  echo str_replace(str_split('-_'), ' ', ucfirst($parts[$i]));
                  echo('</li>');
                }else{
                  echo('<li>');
                  echo("<a href=\"");
                  for ($j = 0; $j <= $i; $j++) {echo $parts[$j]."/";};
                  echo("\">". str_replace(str_split('-_'), ' ', ucfirst($parts[$i]))."</a>");
                  echo('</li>');
                }
              }
            }
            echo('</ul>');
          }
        ?>
      </div>
		</div>
  </div>
</div>