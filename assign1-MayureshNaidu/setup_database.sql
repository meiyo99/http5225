CREATE DATABASE IF NOT EXISTS games_db;
USE games_db;

CREATE TABLE games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    genre VARCHAR(100) NOT NULL,
    platform VARCHAR(50) NOT NULL,
    price DECIMAL(5,2) NOT NULL DEFAULT 0.00,
    rating DECIMAL(3,1) NOT NULL,
    release_date DATE NOT NULL,
    developer VARCHAR(200) NOT NULL,
    multiplayer BOOLEAN DEFAULT FALSE,
    description TEXT
);

CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    game_id INT NOT NULL,
    reviewer_name VARCHAR(100) NOT NULL,
    review_score INT NOT NULL CHECK (review_score >= 0 AND review_score <= 100),
    review_date DATE NOT NULL,
    review_text TEXT,
    FOREIGN KEY (game_id) REFERENCES games(id) ON DELETE CASCADE
);

INSERT INTO games (title, genre, platform, price, rating, release_date, developer, multiplayer, description) VALUES
('The Witcher 3: Wild Hunt', 'RPG', 'PC', 39.99, 9.3, '2015-05-19', 'CD Projekt Red', FALSE, 'An expansive open-world RPG featuring Geralt of Rivia. Embark on a massive adventure filled with meaningful choices, memorable characters, and incredible storytelling in a beautifully crafted fantasy world.'),
('Cyberpunk 2077', 'Action RPG', 'PC', 59.99, 8.1, '2020-12-10', 'CD Projekt Red', FALSE, 'Experience the dark future of Night City in this immersive RPG. Create your own cyberpunk story in a world of endless possibilities, advanced technology, and corporate intrigue.'),
('Minecraft', 'Sandbox', 'Multi-platform', 26.95, 9.0, '2011-11-18', 'Mojang Studios', TRUE, 'Build, explore, and survive in procedurally generated worlds. From simple constructions to architectural marvels, unleash your creativity in this beloved block-building adventure.'),
('Grand Theft Auto V', 'Action', 'Multi-platform', 29.99, 8.7, '2013-09-17', 'Rockstar Games', TRUE, 'Experience the intertwining stories of three unique criminals in the sprawling city of Los Santos. Heists, mayhem, and an incredible open world await in this crime saga.'),
('Red Dead Redemption 2', 'Action Adventure', 'Multi-platform', 59.99, 9.7, '2018-10-26', 'Rockstar Games', TRUE, 'Live the life of an outlaw in America\'s heartland. This epic western adventure features an incredibly detailed world, compelling characters, and a gripping story of loyalty and betrayal.'),
('Overwatch 2', 'FPS', 'Multi-platform', 0.00, 7.8, '2022-10-04', 'Blizzard Entertainment', TRUE, 'Join the fight for the future in this team-based shooter. Choose from dozens of unique heroes and work together to secure victory in this fast-paced, competitive multiplayer experience.'),
('Valorant', 'FPS', 'PC', 0.00, 8.3, '2020-06-02', 'Riot Games', TRUE, 'Blend your style and experience on a global, competitive stage. This tactical shooter demands precise gunplay and unique agent abilities in intense 5v5 matches.'),
('Among Us', 'Party', 'Multi-platform', 4.99, 7.9, '2018-06-15', 'InnerSloth', TRUE, 'Work together to complete tasks aboard a spaceship, but beware of impostors among the crew. This social deduction game became a global phenomenon with its simple yet engaging gameplay.'),
('Hades', 'Roguelike', 'Multi-platform', 24.99, 9.4, '2020-09-17', 'Supergiant Games', FALSE, 'Defy the god of death in this award-winning roguelike dungeon crawler. Battle out of hell with ever-changing challenges, incredible art, and a compelling narrative that unfolds with each escape attempt.'),
('Animal Crossing: New Horizons', 'Life Simulation', 'Nintendo Switch', 59.99, 8.9, '2020-03-20', 'Nintendo', TRUE, 'Create your perfect island paradise in this relaxing life simulation. Customize everything from your character to your entire island while making friends with adorable animal villagers.'),
('Fall Guys', 'Party', 'Multi-platform', 0.00, 7.5, '2020-08-04', 'Mediatonic', TRUE, 'Compete in chaotic obstacle courses with up to 60 players. This colorful battle royale party game features whimsical challenges and competitive multiplayer mayhem.'),
('Apex Legends', 'Battle Royale', 'Multi-platform', 0.00, 8.5, '2019-02-04', 'Respawn Entertainment', TRUE, 'Master an ever-growing roster of legendary characters in this fast-paced battle royale. Combine unique abilities with strategic teamplay in the ultimate survival competition.'),
('FIFA 23', 'Sports', 'Multi-platform', 59.99, 8.2, '2022-09-30', 'EA Sports', TRUE, 'Experience the world\'s most authentic football simulation. Play with your favorite teams and players in the most realistic football game featuring updated rosters and improved gameplay.'),
('Call of Duty: Modern Warfare II', 'FPS', 'Multi-platform', 69.99, 8.4, '2022-10-28', 'Infinity Ward', TRUE, 'Return to the iconic Modern Warfare series with cutting-edge graphics and intense multiplayer action. Engage in tactical combat across diverse maps and game modes.'),
('Elden Ring', 'Action RPG', 'Multi-platform', 59.99, 9.6, '2022-02-25', 'FromSoftware', FALSE, 'Explore a vast fantasy world crafted by Hidetaka Miyazaki and George R.R. Martin. This challenging action RPG combines innovative gameplay with incredible world design and storytelling.');

INSERT INTO reviews (game_id, reviewer_name, review_score, review_date, review_text) VALUES
(1, 'GameMaster_2023', 95, '2023-01-15', 'Absolutely incredible RPG with amazing storytelling and character development.'),
(1, 'RPG_Enthusiast', 92, '2023-02-20', 'The Witcher 3 sets the gold standard for open-world RPGs. A masterpiece.'),
(1, 'CasualGamer99', 88, '2023-03-10', 'Great game but can be overwhelming for newcomers to the series.'),
(2, 'TechReviewer', 75, '2023-01-05', 'Improved significantly since launch, but still has some technical issues.'),
(2, 'NightCityResident', 85, '2023-04-12', 'The story and world-building are fantastic, bugs aside.'),
(3, 'BlockBuilder', 98, '2023-05-01', 'Minecraft never gets old. Endless creativity and fun with friends.'),
(3, 'FamilyGamer', 94, '2023-05-15', 'Perfect game for all ages. Educational and entertaining.'),
(4, 'OpenWorldFan', 90, '2023-02-28', 'GTA V remains one of the best open-world experiences ever created.'),
(5, 'WesternLover', 97, '2023-03-20', 'Red Dead Redemption 2 is a cinematic masterpiece with incredible attention to detail.'),
(6, 'CompetitivePlayer', 80, '2023-06-10', 'Good gameplay but lacks content compared to the original Overwatch.'),
(7, 'TacticalShooter', 87, '2023-07-05', 'Valorant offers precise gunplay and strategic depth for competitive players.'),
(9, 'IndieGameLover', 96, '2023-08-20', 'Hades combines perfect gameplay with an amazing story. Supergiant Games outdid themselves.'),
(10, 'RelaxedGamer', 91, '2023-09-12', 'Animal Crossing is the perfect escape from reality. So relaxing and charming.'),
(12, 'BattleRoyalePro', 89, '2023-10-01', 'Apex Legends continues to evolve and improve. Great character abilities and fast-paced action.'),
(15, 'SoulsVeteran', 98, '2023-11-15', 'Elden Ring is FromSoftware\'s magnum opus. Challenging, beautiful, and rewarding.');