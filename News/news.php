<html>
<head>
  <title>
   CHESS Breaking News
 </title>
 <link rel="stylesheet" type="text/css" href="../css/homepage.css">
 <style type="text/css">
   @font-face{
    font-family: superstar5;
    src:url("../font/Montserrat-UltraLight.otf");
  }

  #latestNews {
   width:45%;
   height:350px;
   border: 2px solid white;
   border-radius: 10px;
   margin: 10px;
   margin-left: 0%;
   margin-right: 2%;
   padding: 10px;
   float: left;
   margin-top: 6%;
 }
 #image{
   width: 475px;
   height: 225px;
   margin: 0px;
   align:middle;
 }

 #mainTitle{
 }
 #Title{
   font-family: superstar5;
   text-align: center;
   color: #F5DD90;
   padding: 5px;
   font-size: 25px;
 }

 #description{
  font: 25px;
  width: 75px;
  height: 25px;
  margin: 0px;
}
#pubdate{
	float: right;
	font-size: 11px;
	color: white;
}
#readmore{
	font-size: 14px;
	color: white;
}

#foot{
  background: black;
  height:7%;
  position: absolute;
  left: 0px;
  margin-top: 172%;
  width: 100%;
  clear: both;
}
</style>
</head>
<body style="font-family: superstar5; color:#82E2FE">
  <?php
  include('header.php');
  include('C:\xampp\htdocs\homepage\News\simplehtmldom_1_5\simple_html_dom.php');
  try {
   $xmlURL = 'http://topics.nytimes.com/top/reference/timestopics/subjects/c/chess/index.html?rss=1';
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $xmlURL);

   curl_setopt($ch, CURLOPT_HEADER, false);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

   curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
   curl_setopt($ch, CURLOPT_TIMEOUT, 10);

   $response = curl_exec($ch);

   curl_close($ch);
   $obj = new SimpleXMLElement($response);
   foreach ($obj->channel->item as $item)
   {
     $title=$item->title;
     $link=$item->link;
     $content=$item->description;
     $author=$item->author;
     $pubDate=$item->pubDate;
     $content2 = '<div>' . $content . '</div>';
     $html = str_get_html($content2);

     foreach($html->find('a') as $e)
     {
       $e->href=null;
     }
     foreach($html->find('p') as $e)
     {
       $e->href=null;
     }
     foreach($html->find('img') as $e)
     {
       $e->height=150;
       $e->width=150;
     }
     echo '<div id="latestNews"><h4 id="Title">'.$title.'</h4><p id="description">'.$html.'<br>'.$author.'<br>'.$pubDate.'</p><a id="readmore" href='.$link.'>Know More</a></div>';

   }

 }
 catch(Exception $e){
  var_dump($e);exit;
}
?>
<div id="foot">        
    <div class="ftabs-left"><a class="nav_element hvr-underline-from-center">@2015  ChessPlay</a></div>
    <div class="ftabs-right"><a class="nav_element hvr-underline-from-center">All rights reserved</a></div>
</div>
</body>
</html>