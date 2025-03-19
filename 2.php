<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $country = $_POST["country"];
    $message = "";

    switch ($country) {
        case "USA":
            $message = "Visa required for most applicants.";
            break;
        case "Canada":
            $message = "Visa required unless you have an eTA.";
            break;
        case "India":
            $message = "Visa required before travel.";
            break;
        case "UK":
            $message = "Visa depends on the duration of stay.";
            break;
        case "Australia":
            $message = "eVisa available for eligible travelers.";
            break;
        default:
            $message = "Invalid country selection.";
    }

    echo "<h2>Visa Requirement</h2>";
    echo "<p>$message</p>";
}
?>
