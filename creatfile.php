<?PHP
$data_array = array(
 array(
 'title' => 'title1',
 'content' => 'content1',
 'pubdate' => '2009-10-11',
 ),
 array(
 'title' => 'title2',
 'content' => 'content2',
 'pubdate' => '2009-11-11',
 )
);
$title_size = 1;
 
$xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
$xml .= "<article>\n";
 
foreach ($data_array as $data) {
$xml .= create_item($data['title'], $title_size, $data['content'], $data['pubdate']);
}
 
$xml .= "</article>\n";
 
echo $xml;
 
// 创建XML单项
function create_item($title_data, $title_size, $content_data, $pubdate_data)
{
 $item = "<item>\n";
 $item .= "<title size=\"" . $title_size . "\">" . $title_data . "</title>\n";
 $item .= "<content>" . $content_data . "</content>\n";
 $item .= " <pubdate>" . $pubdate_data . "</pubdate>\n";
 $item .= "</item>\n";
 
 return $item;
}