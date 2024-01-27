<?php

// Assume $marks is the variable containing the exam marks

$marks = 40;

// Test conditions and display appropriate messages
if ($marks >= 90) {
    echo "Excellent! You scored an A+.";
} elseif ($marks >= 80) {
    echo "Great job! You scored an A.";
} elseif ($marks >= 70) {
    echo "Well done! You scored a B.";
} elseif ($marks >= 60) {
    echo "Good effort! You scored a C.";
} elseif ($marks >= 50) {
    echo "You passed! You scored a D.";
} else {
    echo "Sorry, you did not pass. You scored an F.";
}

?>
