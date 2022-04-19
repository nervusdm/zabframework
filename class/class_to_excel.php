<?php
class to_excel {
public $view = array('title_h1'=>"Table To Excel");


public function table_to_excel($t=null,$p=null,$params=null)
{
include_once root_dir . '/lib/phptoexcel/Classes/PHPExcel.php';
include_once root_dir.'/lib/phptoexcel/Classes/PHPExcel/Writer/Excel5.php';
$filename = "Report.xlsx";

if ($t=='blob')
{
    $postdata = file_get_contents("php://input");
    $postdata = json_decode($postdata,true);
    $_POST=$postdata;
}




json_decode($_POST['table']);
$is_json = json_last_error() === JSON_ERROR_NONE;

if ($is_json)
{
    $html = utf8_decode(json_decode($_POST['table']));

}
else 
{
    $html = utf8_decode(($_POST['table']));

}




$html=strip_tags($html,("<table><tbody><thead><tr><th><td><span><b><i><col><colgroup><img><input>"));



$html = str_replace(array(">="),array(">egal"),$html);

// Put the html into a temporary file
$tmpfile = sys_get_temp_dir() .  '/'.time().'.html';
file_put_contents($tmpfile, $html);
ob_clean();

ob_start();
// Read the contents of the file into PHPExcel Reader class
$reader = new PHPExcel_Reader_HTML; 
$content = $reader->load($tmpfile);  

ob_clean();


// Delete temporary file
unlink($tmpfile);



if (droit(array('admin')) && isset($params['to_file']))
{
$file = upload_dir  . $params['to_file'];	

$objWriter = PHPExcel_IOFactory::createWriter($content, 'Excel2007');
$objWriter->save($file);

return;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); // header for .xlxs file
header('Content-Disposition: attachment;filename='.$filename); // specify the download file name
header('Cache-Control: max-age=0');

// Pass to writer and output as needed
$objWriter = PHPExcel_IOFactory::createWriter($content, 'Excel2007');
$objWriter->save('php://output');
exit;


}

static function to_csv($fileName, $assocDataArray)
{
    ob_clean();
    header('Pragma: public');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Cache-Control: private', false);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename=' . $fileName);    
    echo "\xEF\xBB\xBF"; // UTF-8 BOM

    if(isset($assocDataArray['0'])){
        $fp = fopen('php://output', 'w');
        fputcsv($fp, array_keys($assocDataArray['0']),';');
        foreach($assocDataArray AS $values){
            fputcsv($fp, $values,';');
        }
        fclose($fp);
    }
    ob_flush();
}



    static function to_xls($nom_fichier=null,$data=null,$params=null)
    {
        include_once root_dir . '/lib/phptoexcel/Classes/PHPExcel.php';
        include_once root_dir.'/lib/phptoexcel/Classes/PHPExcel/Writer/Excel5.php';

        $objPHPExcel = new PHPExcel();


        $objPHPExcel->setActiveSheetIndex(0);
        $sheet=$objPHPExcel->getActiveSheet();


        $ligne = 1 ; // On commence à la ligne 0.
        $nom_colonne=$data[0];

        $i="A";

        if (!empty($params['header_sup']))

        {
            $sheet->SetCellValue($i.$ligne, $params['header_sup']);
           
            $ligne++;

        }


        foreach ($nom_colonne as $k => $v)
        {
            $sheet->SetCellValue($i.$ligne, $k);
            $i++;
        }


        $ligne++;



        foreach ($data as $k => $v)
        {
            $i='A';
            foreach($v as $kk)
            {
                if (is_string($kk) || is_numeric($kk))
                {
                    $sheet->SetCellValue($i . $ligne, $kk);
                }
                $i++;
            }
            $ligne++;
        }


        if (empty($params['return_string']))
        {

        }



        $writer = new PHPExcel_Writer_Excel5($objPHPExcel);
    if (!empty($params['return_string']))
    {
        ob_start();
        $writer->save('php://output');
        return ob_get_clean();
    }
    else
    {
        ob_end_clean();
        ob_start();

        header("content-type: application/vnd.ms-excel");
        header('Content-Disposition: attachment;filename="' . "$nom_fichier");
        header('Cache-Control: max-age=0');
        $writer->save('php://output');

    }

        exit();




    }


}





?>