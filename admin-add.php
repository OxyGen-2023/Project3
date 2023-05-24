<?php include 'header.php'; ?>

<!-- HTML form for adding adventures -->

<html>
    <body class="admin-add-body">
        <br>
        <br>
        <br>
        <h1 class="admin-text">Admin - Add Adventure</h1>
        
        <form action="admin-confirm.php" method="post">
            <div class="form-container">
                <label for="heading">Heading</label>
                <input type="text" name="heading" required><br>

                <label for="tripDate">Trip Date</label>
                <input type="date" name="tripDate" required><br>

                <label for="duration">Duration</label>
                <input type="number" name="duration" required><br>
                <label for="summary">Summary</label>
            <textarea name="summary" rows="4" required></textarea><br>

            <input type="submit" value="Add Adventure">
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>
</body>
</html>

<?php include 'footer.php'; ?>