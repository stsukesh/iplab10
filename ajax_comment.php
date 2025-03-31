<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])):
    include('config.php');
    include('function.php');
    dbConnect();

    if (!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['comment']) && !empty($_POST['postid'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $mail = mysqli_real_escape_string($conn, $_POST['mail']);
        $comment = mysqli_real_escape_string($conn, $_POST['comment']);
        $postId = mysqli_real_escape_string($conn, $_POST['postid']);

        mysqli_query($conn, "INSERT INTO comment (name, mail, comment, post_id) VALUES ('{$name}', '{$mail}', '{$comment}', '{$postId}')");
    }
?>
<div class="comment-item">
    <div class="comment-avatar">
        <img src="<?php echo avatar($mail); ?>" alt="avatar">
    </div>
    <div class="comment-post">
        <h3><?php echo htmlspecialchars($name); ?> <span>said...</span></h3>
        <p><?php echo htmlspecialchars($comment); ?></p>
    </div>
</div>
<?php
dbConnect(false);
endif;
?>
