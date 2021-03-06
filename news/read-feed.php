<?
//read-feed.php derivived from
//read-feed-simpleXML.php
//our simplest example of consuming an RSS feed

  $request = "https://www.osha.gov/pls/oshaweb/federalregister.xml";
  $response = file_get_contents($request);
  $xml = simplexml_load_string($response);
  print '<h1>' . $xml->channel->title . '</h1>';
  foreach($xml->channel->item as $story)
  {
    echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
    echo '<p>' . $story->description . '</p><br /><br />';
  }
?>