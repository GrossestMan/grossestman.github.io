<div class="h1-divider"></div>
<h1 id="booksearch"> Library </h1>
<div class="h1-divider"></div>
<h3 style="float:left;">Books available on location</h3>
<form class="form-inline library-form" role="form" action="resources.php#booksearch" method="post">
    <div class="form-group">
        <input type="text" class="form-control" name="titleSearch" placeholder="Enter Search Term Here">
    </div>
    <input type="submit" class="btn btn-primary" name="search" value="Search Books">
</form>

<?php
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->errno) {
            print($mysqli->error);
            exit();
    }

    //Search books
    if(isset($_POST['search'])) {
        $searchQuery = "%".$_POST['titleSearch']."%";
        $bookQuery = "SELECT Books.bookID, Books.title, Books.year, Authors.fName, Authors.lName, Tags.tag
                  FROM WrittenBy
                    INNER JOIN Books
                    INNER JOIN Authors
                    INNER JOIN TaggedBy
                    INNER JOIN Tags
                  WHERE WrittenBy.bookID = Books.bookID &&
                        WrittenBy.authorID = Authors.authorID &&
                        TaggedBy.bookID = Books.bookID &&
                        TaggedBy.tag = Tags.tag &&
                        (Books.title LIKE '$searchQuery' OR Authors.fName LIKE '$searchQuery'
                            OR Authors.lName LIKE '$searchQuery' OR Tags.tag LIKE '$searchQuery'
                            OR Books.year LIKE '$searchQuery')
                  ORDER BY Books.bookID;";
    $bookResult = $mysqli->query($bookQuery);
    $prevID = -1;
    $tags = array();
    $titles = array();
    $years = array();
    $fNames = array();
    $lNames = array();
    $tagsLists = array();
    $bookID = -1;
    $firstRow = true;
    $title = $year = $fName = $lName = $tag = "";
    while($row = $bookResult->fetch_assoc()) {
        $bookID = $row['bookID'];
        if($bookID != $prevID) {
            if(!$firstRow) {
                array_push($titles, $title);
                array_push($years, $year);
                array_push($fNames, $fName);
                array_push($lNames, $lName);
                array_push($tagsLists, $tags);
                $tags = array();
            } else { $firstRow = false; }
            $title = $row['title'];
            $year = $row['year'];
            $fName = $row['fName'];
            $lName = $row['lName'];
        }
        array_push($tags, $row['tag']);
        $prevID = $bookID;
    }
    //TODO: add last book info
    array_push($titles, $title);
    array_push($years, $year);
    array_push($fNames, $fName);
    array_push($lNames, $lName);
    array_push($tagsLists, $tags);
    
    $i=0;
    echo "<table class='table table-bordered table-hover'>";
    echo "<thead><tr><th>Book title</th><th>Year published</th><th>Author</th><th>Tags</th></tr></thead>";
    echo "<tbody>";
    foreach($tagsLists as $tags) {
        $title = $titles[$i];
        $year = $years[$i];
        $fName = $fNames[$i];
        $lName = $lNames[$i];
        echo "<tr><td>$title</td><td>$year</td><td>$fName $lName</td><td style='line-height:175%'>";
        foreach($tags as $tag) {
            echo "<span class='tag'>$tag</span> ";
        }
        echo "</td></tr>";
        $i++;
    }
    echo "</tbody></table>";
    }
    else {
    // Display Library info
    $bookQuery = "SELECT Books.bookID, Books.title, Books.year, Authors.fName, Authors.lName, Tags.tag
                  FROM WrittenBy
                    INNER JOIN Books
                    INNER JOIN Authors
                    INNER JOIN TaggedBy
                    INNER JOIN Tags
                  WHERE WrittenBy.bookID = Books.bookID &&
                        WrittenBy.authorID = Authors.authorID &&
                        TaggedBy.bookID = Books.bookID &&
                        TaggedBy.tag = Tags.tag
                  ORDER BY Books.bookID;";
    $bookResult = $mysqli->query($bookQuery);
    $prevID = -1;
    $tags = array();
    $titles = array();
    $years = array();
    $fNames = array();
    $lNames = array();
    $tagsLists = array();
    $bookID = -1;
    $firstRow = true;
    $title = $year = $fName = $lName = $tag = "";
    while($row = $bookResult->fetch_assoc()) {
        $bookID = $row['bookID'];
        if($bookID != $prevID) {
            if(!$firstRow) {
                array_push($titles, $title);
                array_push($years, $year);
                array_push($fNames, $fName);
                array_push($lNames, $lName);
                array_push($tagsLists, $tags);
                $tags = array();
            } else { $firstRow = false; }
            $title = $row['title'];
            $year = $row['year'];
            $fName = $row['fName'];
            $lName = $row['lName'];
        }
        array_push($tags, $row['tag']);
        $prevID = $bookID;
    }
    //TODO: add last book info
    array_push($titles, $title);
    array_push($years, $year);
    array_push($fNames, $fName);
    array_push($lNames, $lName);
    array_push($tagsLists, $tags);
    
    $i=0;
    echo "<table class='table table-bordered table-hover'>";
    echo "<thead><tr><th>Book title</th><th>Year published</th><th>Author</th><th>Tags</th></tr></thead>";
    echo "<tbody>";
    foreach($tagsLists as $tags) {
        $title = $titles[$i];
        $year = $years[$i];
        $fName = $fNames[$i];
        $lName = $lNames[$i];
        echo "<tr><td>$title</td><td>$year</td><td>$fName $lName</td><td style='line-height:175%'>";
        foreach($tags as $tag) {
            echo "<span class='tag'>$tag</span> ";
        }
        echo "</td></tr>";
        $i++;
    }
    echo "</tbody></table>";    
    }
    
    // TODO: Only display the following edit information if admin is logged in
    // TODO: make this edit form collapsable
    
    $tags = array();
    $authorIDs = array();
    
    $tagQuery = "SELECT *
                 FROM Tags;";
    $tagResult = $mysqli->query($tagQuery);
    while($row = $tagResult->fetch_row()) {
        $tag = $row[0];
        array_push($tags, $tag);
    }
    $authorQuery = "SELECT authorID
                    FROM Authors;";
    $authorResult = $mysqli->query($authorQuery);
    while($row = $authorResult->fetch_row()) {
        $authorID = $row[0];
        array_push($authorIDs, $authorID);
    }
    if(isset($_SESSION['logged_user']) && $_SESSION['logged_user'] == ADMIN_USERNAME) {
?>

<h1>Add or edit a book</h1>
<div class="well" style="background: white; margin-top:20px">

<form role="form" action="adminEdit.php" method="post">
    <div class="form-group">
        <label for="bookTitle">Book title</label>
        <input type="text" class="form-control" name="title" id="bookTitle" placeholder="Book title" required>
    </div>
    <div class="form-group">
        <label for="bookYear">Year published</label>
        <input type="number" class="form-control" name="year" id="bookYear" placeholder="Year" min=1900 required>
    </div>
    <label>Author(s):</label><br>
    Select existing author(s) and/or add your own: <br>
    <div class="checkbox cols-full">
    <?php 
        foreach($authorIDs as $authorID) {
            $authorQuery = "SELECT fName, lName
                            FROM Authors
                            WHERE authorID = \"$authorID\";";
            $authorResult = $mysqli->query($authorQuery);
            $row = $authorResult->fetch_row();
            $author = $row[0]." ".$row[1];
            ?>
            <div class="col-third">
                <label><input type="checkbox" name="existingAuthors[]" value= <?php echo $authorID; ?>> <?php echo $author; ?> </label>
            </div>
    <?php } ?>
    </div>
    <label>Add new author(s): </label><br>
    <i class="fa fa-question"></i> (Note: Enter the author(s)'s first and last names, separated by a comma (,). If there is more than one author, enter each author on a separate line.) <br>
        
    <textarea name="newAuthors" class="form-control" rows="3" placeholder="John, Doe"></textarea><br>
    <label>Tags: </label><br>
    Select existing tag(s) and/or add your own: <br>
    <div class="checkbox cols-full">
    <?php 
        foreach($tags as $tag) { ?>
            <div class="col-third">
                <label><input type="checkbox" name="existingTags[]" value= <?php echo $tag; ?>> <?php echo $tag; ?> </label>
            </div>
    <? } ?>
    </div>
    <label>Add new tags: </label><br>
    <i class="fa fa-question"></i> (Note: Add as many new tags as you'd like, entering each tag on a separate line) <br>
    <textarea name="newTags" class="form-control" rows="3" placeholder="tag"></textarea> <br>
    <input type="submit" class="btn btn-primary btn-lg" name="addBook" value="Add Book">
</form>
</div>

<?php
    }
    $mysqli->close();
?>