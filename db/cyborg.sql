CREATE TABLE `details` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `game_name` varchar(32) DEFAULT NULL,
  `game_genre` varchar(32) DEFAULT NULL,
  `image_feature_left` varchar(32) DEFAULT NULL,
  `image_feature_right` varchar(32) DEFAULT NULL,
  `youtube_video_url` varchar(128) DEFAULT NULL, 
  `game_description` varchar(2048) DEFAULT NULL,
  `game_stars` VARCHAR(16) DEFAULT NULL,
  `game_downloads` VARCHAR(16) DEFAULT NULL,
  `game_size` VARCHAR(16) DEFAULT NULL,
  `game_type` VARCHAR(16) DEFAULT NULL,
  `image_example_1` varchar(32) DEFAULT NULL,
  `image_example_2` varchar(32) DEFAULT NULL,
  `image_example_3` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `details` VALUES (1,'fortnite','Sandbox','fortnite-feature-left.jpg','fortnite-feature-right.jpg', 'https://www.youtube.com/watch?v=r1b03uKWk_M', '<p>Fortnite is a sandbox survival video game developed by Epic Games and People Can Fly. The game was released as a paid-for early access title for Microsoft Windows, macOS, PlayStation 4 and Xbox One on July 25, 2017, with a full free-to-play release expected in 2018. It features cross-progression between the PlayStation 4 and PC versions. Fortnite is set in contemporary Earth, where the sudden appearance of a worldwide storm causes 98% of the worlds population to disappear, and zombie-like creatures rise to attack the remainder. Considered by Epic as a cross between Minecraft and Left 4 Dead, Fortnite has up to four players cooperating on various missions on randomly-generated maps to collect resources, build fortifications around defensive objectives that are meant to help fight the storm and protect survivors, and construct weapons and traps to engage in combat with waves of these creatures that attempt to destroy the objectives. Players gain rewards through these missions to improve their hero characters, support teams, and arsenal of weapon and trap schematics to be able to take on more difficult missions. The game is supported through microtransactions to purchase in-game currency that can be used towards these upgrades.</p>', '4.8', '2.3M', '36GB', 'Action', 'fortnite-example-1.jpg', 'fortnite-example-2.jpg', 'fortnite-example-3.jpg');
INSERT INTO `details` VALUES (2,'pubg','Battle Royale','pubg-feature-left.jpg','pubg-feature-right.png', 'https://www.youtube.com/watch?v=3b0_uPm_ggs', '<p>PlayerUnknowns Battlegrounds (PUBG) is an online multiplayer battle royale game developed and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole. The game is based on previous mods that were created by Brendan "PlayerUnknown" Greene for other games using the film Battle Royale for inspiration, and expanded into a standalone game under Greenes creative direction. In the game, up to one hundred players parachute onto an island and scavenge for weapons and equipment to kill others while avoiding getting killed themselves. The available safe area of the games map decreases in size over time, directing surviving players into tighter areas to force encounters. The last player or team standing wins the round.</p>', '4.5', '1.2M', '36GB', 'Action', 'pubg-example-1.jpg', 'pubg-example-2.jpg', 'pubg-example-3.jpg');
INSERT INTO `details` VALUES (3,'minecraft','Sandbox','minecraft-feature-left.jpg','minecraft-feature-right.jpg', 'https://youtu.be/0HLplffQrJk?feature=shared&t=1373', '<p>Minecraft is a sandbox video game created and designed by Swedish game designer Markus "Notch" Persson, and later fully developed and published by Mojang. The creative and building aspects of Minecraft allow players to build with a variety of different cubes in a 3D procedurally generated world. Other activities in the game include exploration, resource gathering, crafting, and combat. Multiple gameplay modes are available, including a survival mode where the player must acquire resources to build the world and maintain health, a creative mode where players have unlimited resources to build with and the ability to fly, an adventure mode where players can play custom maps created by other players, and a spectator mode where players can fly around and clip through blocks, but cannot place or destroy any. The PC version of the game is noted for its modding scene, where a dedicated community creates new gameplay mechanics, items, and assets for the game.</p>', '4.9', '1.5M', '5GB', 'Action', 'minecraft-example-1.jpg', 'minecraft-example-2.jpg', 'minecraft-example-3.jpg');

CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `users` VALUES (1,'admin','827ccb0eea8a706c4c34a16891f84e7b');
INSERT INTO `users` VALUES (2,'user','81dc9bdb52d04dc20036dbd8313ed055');