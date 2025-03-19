<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $country = $_POST["country"];
    $msg = "";

    switch ($country) {
        case "Australia":
            $msg = "eVisa available for eligible travelers.";
            break;
        case "Canada":
            $msg = "Visa required unless you have an eTA.";
            break;
        case "USA":
            $msg = "Visa required for most applicants.";
            break;
        case "UK":
            $msg = "Visa depends on the duration of stay.";
            break;
        case "India":
            $msg = "Visa required before travel.";
            break;
        default:
            $msg = "Invalid country selection.";
    }

    echo "<h2>Visa Requirement</h2>";
    echo "<p>$msg</p>";
}
?>
