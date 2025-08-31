<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

   
    <?php foreach ($filterBooks as $book): ?>
        <ul>
            <li><strong>Title:</strong> <?php echo $book['title']; ?></li>
            <li><strong>Author:</strong> <?php echo $book['author']; ?></li>
            <li><strong>Year:</strong> <?php echo $book['releaseYear']; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>