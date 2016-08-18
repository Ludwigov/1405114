<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Diary Entry Page</title>
    <link rel="stylesheet" type="text/css" href="diary.css">
</head>
<body>
<fieldset>
    <header>
        <img id="logo" src="../1405114/images/diary.png">
        <div id="titles">
            <h1>myDiary</h1>
            <h2>Keeping track of all my thoughts</h2>
        </div>
    </header>
</fieldset>
<main>

    <div class="nav">
        <nav>
            <ul>
                <li><a href="bugs.html">All Bug Items</a>
                    <ul>
                        <li><a href="addbugs.php">Add Bug</a></li>
                        <li><a href="showbugs.php">Show Bug</a></li>
                    </ul>
                </li>
                <li><a href="bugs.html">Andriod Bugs</a></li>
                <li><a href="bugs.html">iOS Bugs</a></li>
                <li><a href="bugs.html">Windows Bugs</a></li>
                <li><a href="bugs.html">Insert Bug</a></li>
            </ul>
        </nav>
    </div>


    <div class="content">
        <?php
        include('connect.php');

        $sql = "SELECT Category, Entry, Title
            FROM MyDairy ";
        $result = mysqli_query($db,$sql);
        echo "
            <table>
                <tr>
                    <th>Category </th>
                    <th>Entry Summary</th>
                    <th>Title</th>
                    </tr> ";

        if(mysqli_num_rows($result)>0){

            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                    <td>".$row['category']."</td>
                    <td>".$row['Entry Summary']."</td>
                    <td>".$row['Title']."</td>
                </tr>";
            }
        }
        echo "</table>";
        ?>
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