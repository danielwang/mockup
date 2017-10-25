
 <?php
 compileIndex();
 function compileIndex(){
   $url = 'http://localhost:9000/pui/index.php';
   $ch = curl_init();
   // tell cURL what the URL is
   curl_setopt($ch, CURLOPT_URL, $url);
   // tell cURL that you want the data back from that URL
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   // run cURL
   $output = curl_exec($ch);
   // end the cURL call (this also cleans up memory so it is
   // important)
   curl_close($ch);
   // display the output
   file_put_contents("index.html", $output);
   echo "<h3>Index is done</h3>";
 }

?>
