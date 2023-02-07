<?php
$name = $_POST['name'];
$message = $_POST['content'];


$blogs = '<div class="background-blog"><div class="blog-text-group"><span class="blog-title"><h2>' . $name . '</h2></span><div class="blog-message"><p>' . $message . '</p></div></div></div>' . "\n";

file_put_contents('../backend/blogController.txt', $blogs, FILE_APPEND);
echo $blogs

  ?>