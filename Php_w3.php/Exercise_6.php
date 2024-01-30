<?php

class Post {
    public $title;
    public $content;

    public function displayInfo() {
        echo "Title: $this->title<br>Content: $this->content";
    }
}

class Blog {
    private $posts = [];

    public function addPost(Post $post) {
        $this->posts[] = $post;
    }

    public function displayAllPosts() {
        foreach ($this->posts as $post) {
            $post->displayInfo();
            echo "<br><br>";
        }
    }
}

$post = new Post();
$post->title = $_POST['title'];
$post->content = $_POST['cont'];

$blog = new Blog();
$blog->addPost($post); 
$blog->displayAllPosts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <input type="text" value="" name ="title">Title
            <br>
            <input type="text" value="" name ="cont">Content
            <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>