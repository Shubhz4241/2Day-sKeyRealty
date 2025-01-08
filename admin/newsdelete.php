<?php
// Start session
session_start();

// Include database configuration
require("config.php");

// Check if the user is logged in as an admin
if (!isset($_SESSION['auser'])) {
    header("Location: index.php");
    exit();
}

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    // Get the id from the URL
    $id = intval($_GET['id']); // Sanitize the input

    // Query to retrieve the news details (to delete the image file)
    $query = "SELECT image FROM news WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = "news/" . $row['image'];

        // Delete the image file from the server (if it exists)
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Query to delete the news record from the database
        $deleteQuery = "DELETE FROM news WHERE id = ?";
        $deleteStmt = $con->prepare($deleteQuery);
        $deleteStmt->bind_param("i", $id);

        if ($deleteStmt->execute()) {
            // Redirect back to the news view page with a success message
            header("Location: newsview.php?msg=News deleted successfully");
            exit();
        } else {
            // Redirect back to the news view page with an error message
            header("Location: newsview.php?msg=Failed to delete news");
            exit();
        }
    } else {
        // Redirect back to the news view page with an error message
        header("Location: newsview.php?msg=News not found");
        exit();
    }
} else {
    // Redirect back to the news list page if no id is provided
    header("Location: newsview.php?msg=Invalid request");
    exit();
}
?>
