<?php 
$id = $_POST['id'];
function fetch_data()
{
    $id = $_POST['id'];
    $output = '';
    $link = mysqli_connect("localhost", "root", "", "login_db");



    $query1 = "SELECT * FROM subjects";
    $result3 = mysqli_query($link, $query1);
    $rows2 = mysqli_fetch_assoc($result3);
    $units = $rows2['TotalUnits'];

    $sql1 = "SELECT * FROM subjectlist WHERE stud_id = '$id'";
    $result1 = mysqli_query($link, $sql1);


    $totalUnits = 0;


    while ($row1 = mysqli_fetch_assoc($result1)) {
        $totalUnits += $row1['TotalUnits'];
    }
    $sql = "SELECT * FROM applicationform INNER JOIN subjectlist ON applicationform.stud_id=subjectlist.stud_id WHERE applicationform.stud_id = $id";
    $result = mysqli_query($link, $sql);
    $printedIds = array();
    while ($row = mysqli_fetch_array($result)) {
        if (!in_array($row['stud_id'], $printedIds)) {
            $output .= '<tr>   
         <td style="font-weight:bold;">' . $row["fName"] . $row['lName'] . '</td>
         <td style="font-weight:bold;">' . $row["year"] . '</td> 
         <td style="font-weight:bold;">' . $row["course"] . '</td>
         <td style="font-weight:bold;">' . $row["stud_id"] . '</td>  
         <td style="font-weight:bold;">' . $row["schoolYear"] . '</td>  
        </tr><br><br><br>';
            $printedIds[] = $row['stud_id'];
        }
        $sql1 = "SELECT * FROM subjectlist INNER JOIN subjectprice ON subjectlist.SubjectCode=subjectprice.SubjectCode WHERE subjectlist.stud_id = $id";
        $result1 = mysqli_query($link, $sql1);
        $totamount = 0;
        while ($row1 = mysqli_fetch_array($result1)) {
            $totamount += $row1['SubjectAmount'];
            $output .= '
        <tr>
            <td>' . $row["SubjectCode"] . '</td>
            <td>' . $row["SubjectTitle"] . '</td>
            <td>' . $row["TotalUnits"] . '</td>
            <td></td>
            <td>'. $row1['SubjectAmount'].'</td>
            <td></td>
        </tr>';
        }
        $output .= '
        <tr>
            <td></td>
            <td></td>
            <td style="font-weight:bold;">' . $totalUnits . 'Units</td>
            <td>Subject Amount</td>
            <td>'.$totamount.'</td>
        </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Total Amount : '. $totamount.'</td>
                <td></td>
            </tr>
            ';
        return $output;
    }
}


// remove the if statement below if you want to directly load pdf instead of a button
if(isset($_POST["generate"]))  // remove this only
{  
     
     require_once('tcpdf/tcpdf.php');  
     $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
     $obj_pdf->SetCreator(PDF_CREATOR);  
     $obj_pdf->SetTitle("Assessment Form");  
     $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
     $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
     $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
     $obj_pdf->SetDefaultMonospacedFont('helvetica');  
     $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
     $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
     $obj_pdf->setPrintHeader(false);  
     $obj_pdf->setPrintFooter(false);  
     $obj_pdf->SetAutoPageBreak(TRUE, 10);  
     $obj_pdf->SetFont('helvetica', '', 11);  
     $obj_pdf->AddPage();  
     $content = '';  
     $content .= ' 
    <table>
         <tr style = "text-align: center;">
              <th width = "10%"></th>
              <th width = "50%"></th>
              <th width = "10%"></th>
              <th width = "12%"></th>
              <th width = "13%"></th>
         </tr> 

         <tr>
         <th width = "30%"></th>
         <th width = "30%"></th>
         <th width = "13%"></th>
         <th width = "13%"></th>
         <th width = "13%"></th>
         </tr>

         <tr>
         <th></th>
         <th></th>
         <th width = "10%"></th>
         <th width = "30%"></th>
         </tr>
         <tr>
         <th width = "30%"></th>
         <th width = "30%"></th>
         </tr>
    ';
    $content .= fetch_data(); 
   $content .= '</table>'; 
    $obj_pdf->writeHTML($content);  
    $obj_pdf->Output('file.pdf', 'I');     
} 
?>  