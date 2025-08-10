<!DOCTYPE html>
<html>
<head>
    <title>Game Library</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Game Library</h1>
        
    <?php 
        require('connect.php');
        
        $sql_query = "SELECT 
                        g.title, 
                        g.genre, 
                        g.platform, 
                        g.price, 
                        g.rating, 
                        g.release_date, 
                        g.developer, 
                        g.multiplayer,
                        COUNT(r.id) as review_count,
                        AVG(r.review_score) as avg_review_score
                      FROM games g
                      LEFT JOIN reviews r ON g.id = r.game_id
                      WHERE g.rating >= 7.0
                      GROUP BY g.title, g.genre, g.platform, g.price, g.rating, g.release_date, g.developer, g.multiplayer
                      ORDER BY g.rating DESC
                      LIMIT 10";
        
        $result = mysqli_query($connect, $sql_query);
    ?>
    <?php
        $counter = 0;
        while ($game = mysqli_fetch_assoc($result)) {
            $counter++;
            
            if ($game['price'] > 30.00) {
                $class = 'expensive';
            } else {
                $class = 'cheap';
            }
            
            if ($game['rating'] >= 8.5) {
                $rating_class = 'rating-high';
            } else {
                $rating_class = 'rating-low';
            }
            
            echo '<div class="game ' . $class . '">';
            echo '<h3>' . $game['title'] . '</h3>';
            echo '<p>Genre: ' . $game['genre'] . '</p>';
            echo '<p>Platform: ' . $game['platform'] . '</p>';
            echo '<p>Developer: ' . $game['developer'] . '</p>';
            echo '<p>Price: $' . $game['price'] . '</p>';
            echo '<p class="' . $rating_class . '">Rating: ' . $game['rating'] . '/10</p>';
            echo '<p>Released: ' . $game['release_date'] . '</p>';
            
            if ($game['multiplayer'] == 1) {
                echo '<p>Multiplayer: Yes</p>';
            } else {
                echo '<p>Multiplayer: No</p>';
            }
            
            if ($game['review_count'] > 0) {
                echo '<p>Reviews: ' . $game['review_count'] . ' (avg score: ' . number_format($game['avg_review_score'], 1) . '/100)</p>';
            }
            echo '</div>';
        }
    ?>
    
    <p>Total games displayed: <?php echo $counter; ?></p>
    
    <?php
        mysqli_close($connect);
    ?>
</body>
</html>