<? include('connect.php') ?>
<? if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header("location: add.php");
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = $_POST['category'];
    $entrysummary = $_POST['summary'];
    $title = $_POST['title'];

    $sql = "INSERT INTO Mydiary (category,entrySummary,title) VALUES ('$category','$entrysummary','$title')";
    if (mysqli_query($db, $sql)) {
        header("location: diary.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
else{header("location: index.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Diary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <img id="logo" src="logo.png" alt="logo"/>
    <h1>Bug Tracker</h1>
    <p id=p1>Keeping track of all my thoughts</p>
</header>
<main>
    <div class="nav">
        <nav>
            <ul>
                    <ul>
                        <li><a href="diary.php">myDiary</a></li>
                    </ul>
                </li>
                <li><a href="diary.html">All Dairy items</a></li>
                <li><a href="diary.html">Work items</a></li>
                <li><a href="diary.html">University items</a></li>
                <li><a href="diary.html">Family items</a></li>
                <li><a href="add.html">Insert a Dairy item</a></li>
            </ul>
        </nav>
     </div>
   <div class="content">
        <form action="<? {$_SERVER["PHP_SELF"];} ?>" method="POST">
            <label>Category</label>
            <label>
                <input type="text" name="category">
            </label><br><br>
            <label>Entry Summary</label>
            <label>
                <textarea name="summary" rows="3" cols="20"></textarea>
            </label><br><br>
            <label>Title
                <select name="title">
                    <option value="Category">Category</option>
                    <option value="Entry Summary">Entry Summary</option>
                    <option value="Title">Title</option>
                </select></label><br><br>
            <input type="submit" value="submit"><br>
            <br>
        </form>
    </div>
</main>
<fieldset>
    <footer>
        <div id="footer">
            Designed by Ludwig van de l'Isle, 2016
        </div>
    </footer>
</fieldset>
</body>
</html>
