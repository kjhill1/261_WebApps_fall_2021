
<footer>
    <ul>
    <li>Copyright &copy; 
    <?php 
    $date_current = date('Y');
    $date_created = 2017;

    if($date_current == $date_created) {
        echo $date_current;
        } else {
            echo ''.$date_created.' - '.$date_current.' ';
        }
    
    ?> 
    
</li>
            <li>All Rights Reserved</li>
            <li><a href="">Terms of Use</a></li>
            <li><a href="">Seven Sites Designs</a></li>
            <li><?php 
  $w3Url = 'https://validator.w3.org/nu/?doc=';

  $myUrl = $_SERVER['REQUEST_SCHEME']
          . '%3A%2F%2F'
          . $_SERVER['SERVER_NAME']
          . '' 
          . $_SERVER['REQUEST_URI']
          ;
  $params = '&amp;showoutline=yes'
          . '&amp;showsource=yes'
          ;

  $link  =  $w3Url
          . $myUrl
          . $params
          ;

// Usage:
   echo '<a href="' .$link .'"> HTML5 Validate </a>';?>
   
   </li>
   
            <li><?php 
        
              $url    = $_SERVER['REQUEST_SCHEME'] 
                      . '://'
                      . $_SERVER['SERVER_NAME'] 
                      . $_SERVER['REQUEST_URI'] 
                      ; 
              $vEnc   = urlencode ($url) ;
           
              $vCss   = '<a href="'
                      .   'https://jigsaw.w3.org/css-validator/validator?uri='
                      .     $vEnc
                      .   '&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en"'
                      . '>CSS: Validator'
                      . '</a>';
                      echo $vCss;
                     
            ?></li> 
    </ul>

</footer>

 </div> <!--closes wrapper -->

</body>
</html>