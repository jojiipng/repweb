<?php session_start();?>

<head>
    <?php include 'includes/db.php'; ?>

</head>
<body>
        <?php print_r($_SESSION); ?>

    <h1 id="welcome">Welcome! <?php echo $row['username'] ?></h1>
    <div id="timecontainer">
        <p>The date is <?php echo date("Y/m/d");?></p>
    </div>
    <div id="indexcontainer">
        <ul>
            <li>
                <form action="markspage.php" method="POST">
                    <input type="submit" value="Proceed to Marks Page"/>
                </form>
            </li>
            <li>
                <input type="button" value="Support" onclick="window.location.replace('https://aau.ac.ae/en/contact-alain-university/');"/>
            </li>
        </ul>
    </div>
</body>