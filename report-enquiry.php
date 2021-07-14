<?php
if(isset($_POST["report"])){
    // Capture selected report
    $report = $_POST["report"];
     
    // Define report and requirement array
    $reportArr = array(
                    "CDR" => array("Full CDR Report", "Career Episodes", "CPD", "Summary Statement", "CDR Review", "Stage 2", "Stage 1", "Plagiarism Check", "Resume Preparation"),
                    "RPL" => array("RPL Report", "RPL Review", "Complete RPL Sample"),
                    "KA02" => array("KA02 Report", "KA02 Review", "Episode Writing", "Review Writing", "KA02 Editing & Proofreading", "KA02 Plagiarism Check", "KA02 Plagiarism Removal"),
					"APEGs" => array("Competency Based Assessment CBA report", "Work Experience Reporting", "Engineering Licensee", "Geoscience Licensee", "P.Eng licensee")
                );
     
    // Display Requiremnt dropdown based on Report Type
    if($report !== 'Select'){
        echo "<select id='requirement' class='form-control'>";
        foreach($reportArr[$report] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>