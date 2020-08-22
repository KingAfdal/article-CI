<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Artikel</title>
</head>

<body>
    <h1>artikel ku</h1>
    <?php foreach ($blogs as $key => $blog) : ?>
        <div class="blog">
            <h2>
                <a href="<?php echo site_url('blog/detail/' . $blog['url']); ?>">
                    <?php echo $blog['title']; ?>
                </a>
            </h2>
            <?php echo $blog['content']; ?>
        </div>
    <?php endforeach; ?>
</body>

</html>