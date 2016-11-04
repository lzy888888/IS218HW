<?php
function build_table($array){
$html = '<table>';
$html .= '<tr>';
foreach($array[0] as $key=>$value){
        $html .= '<th>' . $key . '</th>';
        }
$html .= '</tr>';
    
foreach( $array as $key=>$value){
    $html .= '<tr>';
    foreach($value as $key2=>$value2){	 
	$html .= '<td>' . $value2 . '</td>';
    }
    $html .= '</tr>';
}
		
$html .= '</table>';
return $html;

}				

$array = array(				
    array('First'=>'Kevin', 'Last'=>'Li', 'Email'=>'Kevin@gmail.com', 'Company'=>'Siemens'),
    array('First'=>'Livy', 'Last'=>'Li', 'Email'=>'Livy@gmail.com', 'Company'=>'Siemens'),
    array('First'=>'Joy', 'Last'=>'Park', 'Email'=>'Joy@gmail.com', 'Company'=>'Siemens')
);

echo build_table($array);
?>
