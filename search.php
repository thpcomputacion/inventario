<? 

/* 
* search.php 
* 
* Script for searching a database populated with keywords by the 
* populate.php-script. 

*/ 

print "<html><head><title>My Search Engine</title></head><body>\n"; 

if( $_POST['keyword'] ) 
{ 
/* Connect to the database: */ 
mysql_pconnect("localhost","construyasl","lzdttV6u0MoC") 
or die("ERROR: Could not connect to database!"); 
mysql_select_db("construyasl"); 

/* Get timestamp before executing the query: */ 
$start_time = getmicrotime(); 

/* Set $keyword and $results, and use addslashes() to 
* minimize the risk of executing unwanted SQL commands: */ 
$keyword = addslashes( $_POST['keyword'] ); 
$results = addslashes( $_POST['results'] ); 

/* Execute the query that performs the actual search in the DB: */ 
$result = mysql_query(" SELECT p.page_url AS url, 
COUNT(*) AS occurrences 
FROM page p, word w, occurrence o 
WHERE p.page_id = o.page_id AND 
w.word_id = o.word_id AND 
w.word_word = \"$keyword\" 
GROUP BY p.page_id 
ORDER BY occurrences DESC 
LIMIT $results" ); 

/* Get timestamp when the query is finished: */ 
$end_time = getmicrotime(); 

/* Present the search-results: */ 
print "<h2>Search results for '".$_POST['keyword']."':</h2>\n"; 
for( $i = 1; $row = mysql_fetch_array($result); $i++ ) 
{ 
print "$i. <a href='".$row['url']."'>".$row['url']."</a>\n"; 
print "(occurrences: ".$row['occurrences'].")<br><br>\n"; 
} 

/* Present how long it took the execute the query: */ 
print "query executed in ".(substr($end_time-$start_time,0,5))." seconds."; 
} 
else 
{ 
/* If no keyword is defined, present the search page instead: */ 
print "<form method='post'> Keyword: 
<input type='text' size='20' name='keyword'>\n"; 
print "Results: <select name='results'><option value='5'>5</option>\n"; 
print "<option value='10'>10</option><option value='15'>15</option>\n"; 
print "<option value='20'>20</option></select>\n"; 

print "<input type='submit' value='Search'></form>\n"; 
} 

print "</body></html>\n"; 

/* Simple function for retrieving the current timestamp in microseconds: */ 
function getmicrotime() 
{ 
list($usec, $sec) = explode(" ",microtime()); 
return ((float)$usec + (float)$sec); 
} 

?> 

Y el otro es populate.php: 


<? 
/* 
* populate.php 
* 
* Script for populating the search database with words, 
* pages and word-occurences. 
*/ 

/* Connect to the database: */ 
mysql_pconnect("localhost","root","secret") 
or die("ERROR: Could not connect to database!"); 

mysql_select_db("test"); 

/* Define the URL that should be processed: */ 

$url = addslashes( $_GET['url'] ); 

if( !$url ) 
{ 
die( "You need to define a URL to process." ); 
} 
else if( substr($url,0,7) != "http://" ) 
{ 
$url = "http://$url"; 
} 

/* Does this URL already have a record in the page-table? */ 
$result = mysql_query("SELECT page_id FROM page WHERE page_url = \"$url\""); 
$row = mysql_fetch_array($result); 

if( $row['page_id'] ) 
{ 
/* If yes, use the old page_id: */ 
$page_id = $row['page_id']; 
} 
else 
{ 
/* If not, create one: */ 
mysql_query("INSERT INTO page (page_url) VALUES (\"$url\")"); 
$page_id = mysql_insert_id(); 
} 

/* Start parsing through the text, and build an index in the database: */ 
if( !($fd = fopen($url,"r")) ) 
die( "Could not open URL!" ); 

while( $buf = fgets($fd,1024) ) 
{ 
/* Remove whitespace from beginning and end of string: */ 
$buf = trim($buf); 

/* Try to remove all HTML-tags: */ 
$buf = strip_tags($buf); 
$buf = ereg_replace('/&\w;/', '', $buf); 

/* Extract all words matching the regexp from the current line: */ 
preg_match_all("/(\b[\w+]+\b)/",$buf,$words); 

/* Loop through all words/occurrences and insert them into the database: */ 
for( $i = 0; $words[$i]; $i++ ) 
{ 
for( $j = 0; $words[$i][$j]; $j++ ) 
{ 
/* Does the current word already have a record in the word-table? */ 
$cur_word = addslashes( strtolower($words[$i][$j]) ); 

$result = mysql_query("SELECT word_id FROM word 
WHERE word_word = '$cur_word'"); 
$row = mysql_fetch_array($result); 
if( $row['word_id'] ) 
{ 
/* If yes, use the old word_id: */ 
$word_id = $row['word_id']; 
} 
else 
{ 
/* If not, create one: */ 
mysql_query("INSERT INTO word (word_word) VALUES (\"$cur_word\")"); 
$word_id = mysql_insert_id(); 
} 

/* And finally, register the occurrence of the word: */ 
mysql_query("INSERT INTO occurrence (word_id,page_id) 
VALUES ($word_id,$page_id)"); 
print "Indexing: $cur_word<br>"; 
} 
} 
} 

fclose($fd); 

?>