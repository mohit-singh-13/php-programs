<?php
    echo "PHP tutorial on Functions <br/><br/>";

    function processMarks($marksArr) {
        $sum = 0;
        foreach($marksArr as $value) {
            $sum += $value;
        }
        return $sum;
    }

    $rohan = [34, 98, 45, 12, 98, 93];
    $sumMarksRohan = processMarks($rohan);
    echo "Total marks scored by Rohan out of 600 is : $sumMarksRohan <br/>";

    $mohit = [34, 56, 45, 12, 98, 86];
    $sumMarksMohit = processMarks($mohit);
    echo "Total marks scored by Mohit out of 600 is : $sumMarksMohit <br/>";