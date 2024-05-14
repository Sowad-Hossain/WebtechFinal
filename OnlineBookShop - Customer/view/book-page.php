<?php
    require '../controller/status-message.php';
    require('../model/user-model.php');
    require('../model/book-model.php');
    require('../model/wishlist-model.php');
    require('../model/rating-model.php');
    require('../model/order-model.php');
    require('../model/review-model.php');
    require '../controller/cart-essential-functions.php';

    if(!isset($_GET['book_id'])) {
        $_GET['book_id'] = 1;
    }

    $book = get_book_by_id($_GET['book_id']);
    $related_books = array_slice(get_books_by_genre($book['genre']), 0, 5);
    $reviews = get_reviews_for_book($book['book_id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Page</title>
    <link rel="stylesheet" href="css/bookPageStyles.css" />
</head>

<body>
    <?php require_once ('navbar.php') ?>
    <?php if(isset($_GET['status']))  echo get_status_message($_GET['status']) ?> <br>
    <div class="container">
        <table>
            <tr>
                <td>
                <img src="../vendor/<?= $book['imgdir'] ?>" alt="x"><br>
                    <img src="../vendor//book1.jpg" alt="as">
                </td>
                <td>
                    <div class="book-details">
                        <h2><?= $book['title'] ?></h2>
                        <p>by <?= $book['author'] ?></p>
                        <p>ISBN: <?= $book['isbn'] ?></p>
                        <p>Genre: <?= $book['genre'] ?></p>
                        <p>4 Ratings | 2 Reviews</p>
                        <p>Description: <?= $book['description'] ?></p>
                        <p><strike><?= $book['price'] ?></strike> Tk <?= $book['price'] - 20 ?> (20 Taka Off!)</p>
                        <p>In Stock (Only <?= $book['stock_quantity'] ?> Copies left)</p>
                        <p>Order before out of stock</p>
                        <?php if (is_exist_in_cart($book['book_id'])): ?>
                        <p class="addedTo">Book already in the <a href="cart.php">Cart</a></p>
                        <?php else: ?>
                        <a
                            href="../controller/add-remove-book-from-cart.php?book_id=<?= $book['book_id'] ?>&action=1&return_url=book-page.php?book_id=<?= $book['book_id'] ?>">
                            <button>Add to Cart</button>
                        </a>
                        <?php endif; ?>
                        <p><img src="" alt=""> The opportunity to pay the price by getting the book <img src="" alt="">
                            Exchange opportunity within 7 days</p>
                        <?php if (is_book_in_wishlist($_SESSION['user']['user_id'], $book['book_id'])): ?>
                        <p class="addedTo">Book already in the <a href="wishlist.php">Wishlist</a></p>
                        <?php else: ?>
                        <a href="../controller/add-book-to-wishlist-controller.php?book_id=<?= $book['book_id'] ?>">
                            <button>Add to Wishlist</button>
                        </a>
                        <?php endif; ?>
                    </div>
                </td>

            </tr>
        </table>
        <table class="related-products-table" id="related-products-table">
            <tr>
                <td>
                    <h2>Related Products</h2>
                    <a href="view-all-related-products.php">View All</a>
                </td>
            </tr>
            <tr>
                <?php
                foreach($related_books as $_book) {
                    ?>
                <td>
                    Title: <?= $_book['title'] ?> <br>
                    Author Name: <?= $_book['author'] ?> <br>
                    <img src="<?= $_book['imgdir'] ?>" alt="x"><br>
                    Taka: <?= $_book['price'] ?>
                </td>
                <?php
                }
            ?>
            </tr>
        </table>
        <table class="reviews-and-ratings-table" id="reviews-and-ratings-table">
            <tr>
                <td>

                    <?= get_average_rating($book['book_id']) ?> <br>
                    <?= get_no_of_rating($book['book_id']) ?> people have rated this. <br>

                    <form action="../controller/add-rating-controller.php" method="post">
                        <input type="hidden" name="book_id" value="<?=$book['book_id'] ?>">
                        <input type="hidden" name="return_url" value="book-page.php?book_id=<?=$book['book_id'] ?>">

                        <input type="radio" name="rating" value="1"> *
\                        <input type="radio" name="rating" value="2"> **
                        <input type="radio" name="rating" value="3"> ***
                        <input type="radio" name="rating" value="4"> ****
                        <input type="radio" name="rating" value="5"> ***** <br><br>

                        <?php
                    if(has_ordered_book($_SESSION['user']['user_id'], $book['book_id'])) {
                        ?>
                        <button type="submit">Submit Rating</button>
                        <?php
                    } else {
                        ?>
                        **Order first to Rate This
                        <?php
                    }
                ?>
                    </form>

                    <br><br>
                    Product Q&A <br>
                    Have a question regarding this product? Ask us.
                </td>
                <td>
                    <table class="reviews-table" id="reviews-table">

                        <?php
                        foreach($reviews as $review) {
                            ?>
                        <tr>
                            <td>
                                <?= get_user_by_id($review['user_id'])['username'] ?> <br>
                                <?= $review['review_text'] ?>
                            </td>
                        </tr>
                        <?php
                        }
                    ?>
                    </table>
                    <?php
                    if(has_ordered_book($_SESSION['user']['user_id'], $book['book_id'])) {
                        ?>
                    <form action="../controller/add-review-controller.php" method="post">
                        <input type="hidden" name="book_id" value="<?=$book['book_id'] ?>">
                        <input type="hidden" name="return_url" value="book-page.php?book_id=<?=$book['book_id'] ?>">

                        <textarea name="review"></textarea><br>
                        <button>Post</button>
                    </form>
                    <?php
                    } else {
                        ?>
                    **Order first to Review
                    <?php
                    }
                ?>
                </td>
            </tr>
        </table>
    </div><br>
    <a href="customer-home.php"><button>Back</button></a>

    <?php require_once ('footer.php') ?>
</body>

</html>