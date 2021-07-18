<?php
#--------broji_stranice_u_xml_mapi-----------#
function count_pages() {
  $xmlDoc=new DOMDocument(); 
  $xmlDoc->load("sitemap.xml");
  $count = $xmlDoc->getElementsByTagName('loc')->length; 
  echo  '(pages: ' . $count . ')';
}
?>
