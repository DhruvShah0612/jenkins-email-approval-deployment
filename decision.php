<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $decision = $_POST['decision'];
    file_put_contents("decision.txt", $decision); // Save the decision

    // Display the current decision from the file
    $currentDecision = file_get_contents("decision.txt");
    echo "Your decision ($currentDecision) has been recorded.";
} else {
    // Read and display the current decision if the page is accessed without submitting the >
    $currentDecision = file_get_contents("decision.txt");
    echo "Current Decision: $currentDecision";
}
?>
