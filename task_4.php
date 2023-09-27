<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $mathGrade = $grades['Math'];
        $englishGrade = $grades['English'];
        $scienceGrade = $grades['Science'];
        $averageGrade = ($mathGrade + $englishGrade + $scienceGrade) / 3;

        echo "Average grade for $student: $averageGrade\n";
    }
}
$studentGrades = array(
    'Student 1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student 2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student 3' => array('Math' => 75, 'English' => 84, 'Science' => 88)
);
calculateAverageGrades($studentGrades);
?>



