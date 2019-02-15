-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 15 fév. 2019 à 14:56
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetblogv3`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chapter`
--

INSERT INTO `chapter` (`id`, `title`, `content`, `creation_date`) VALUES
(4, 'Chapitre 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat mi nisl quis eros. Integer ornare libero quis risus fermentum consequat. Mauris pharetra odio sagittis, vulputate magna at, lobortis nulla. Proin efficitur, nisi vel finibus elementum, orci sem volutpat eros, eget ultrices velit mi sagittis massa. Vestibulum sagittis ullamcorper cursus. Ut turpis dolor, tempor ut tellus et, sodales ultricies elit. Ut pharetra tristique est ac dictum. Integer ac consectetur purus, vehicula efficitur urna. Donec ultrices accumsan ipsum vitae faucibus. Quisque malesuada ex nisi, a bibendum erat commodo in. Pellentesque suscipit varius gravida. Nam scelerisque est sit amet laoreet pharetra. Vivamus quis ligula sed lacus mattis mollis. Vivamus facilisis orci rutrum nulla porta dignissim. Fusce fermentum id nibh laoreet volutpat. Suspendisse venenatis, risus sed euismod finibus, risus arcu fringilla augue, nec vulputate felis nisl et enim. In ornare, massa a cursus cursus, nisl mi ornare mauris, nec porttitor risus erat ut odio. Integer malesuada hendrerit purus ullamcorper molestie. Fusce imperdiet orci vitae purus suscipit rutrum. Nunc ac metus ac mi commodo sagittis at in leo. Vestibulum est lorem, consequat vel dictum non, imperdiet eu felis. Vivamus molestie sapien id quam rutrum, eget hendrerit eros finibus. Morbi in justo at felis blandit fringilla at faucibus purus. Donec ac aliquet purus, vitae tincidunt nulla. Curabitur ultricies auctor quam tincidunt molestie. Quisque tristique metus nunc, in pretium lectus dictum at. Nullam scelerisque placerat dui, maximus commodo augue mollis quis. Nulla gravida ex sed lectus consectetur laoreet et vel ex. Proin pretium libero non leo mattis, ullamcorper scelerisque diam hendrerit. Quisque gravida, dui a porttitor interdum, velit quam pulvinar arcu, eu blandit sapien velit ut lacus. Vestibulum congue eleifend odio, in aliquam leo sodales sed. Nam eu lacinia ipsum. Aenean sagittis nisl eu sodales lacinia. Duis nulla ante, suscipit a nibh sit amet, blandit luctus elit. Etiam a pellentesque lectus. Morbi pulvinar dolor a mi volutpat, sit amet finibus est mattis. Nunc egestas feugiat odio sed mollis. Vestibulum accumsan, velit id facilisis fermentum, nisi risus faucibus nulla, non condimentum mauris tortor eu dui. In urna ante, consectetur ac nunc in, hendrerit elementum lacus. Pellentesque pharetra felis sit amet erat pellentesque malesuada. Sed vel placerat lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque sit amet bibendum diam, sit amet convallis mi. Sed tristique leo sit amet urna lacinia ullamcorper sit amet non sem. Aliquam erat volutpat. Etiam accumsan sit amet odio sit amet posuere. Sed lobortis auctor est a mollis. Duis leo leo, condimentum finibus magna et, tempus tincidunt nisi. Praesent quis molestie elit. Mauris ante orci, luctus et lectus nec, vestibulum suscipit sem. Duis consequat felis id est pellentesque, sit amet vulputate dui commodo. Vestibulum efficitur, elit eu mattis faucibus, turpis nisl lacinia sapien, nec mattis ante massa non felis. Nulla at gravida orci, nec blandit nisl. Duis sed erat a tortor accumsan scelerisque. Donec congue quam vel urna consequat, id sagittis ante pretium. Vivamus posuere, arcu nec tincidunt eleifend, ligula metus convallis odio, nec pulvinar dui leo at tortor. Suspendisse potenti. Sed a euismod mi. Maecenas suscipit luctus enim, ut facilisis elit venenatis ut. Aenean ullamcorper at erat a dictum. Donec vel nulla elit. Aliquam pharetra massa elit, sed maximus lectus mollis ut. Phasellus a ligula et neque fringilla efficitur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam euismod lobortis enim et condimentum. Suspendisse pharetra.', '2019-02-13 12:24:38'),
(11, 'Test de configuration du blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat mi nisl quis eros. Integer ornare libero quis risus fermentum consequat. Mauris pharetra odio sagittis, vulputate magna at, lobortis nulla. Proin efficitur, nisi vel finibus elementum, orci sem volutpat eros, eget ultrices velit mi sagittis massa. Vestibulum sagittis ullamcorper cursus. Ut turpis dolor, tempor ut tellus et, sodales ultricies elit. Ut pharetra tristique est ac dictum. Integer ac consectetur purus, vehicula efficitur urna. Donec ultrices accumsan ipsum vitae faucibus. Quisque malesuada ex nisi, a bibendum erat commodo in. Pellentesque suscipit varius gravida. Nam scelerisque est sit amet laoreet pharetra. Vivamus quis ligula sed lacus mattis mollis. Vivamus facilisis orci rutrum nulla porta dignissim. Fusce fermentum id nibh laoreet volutpat. Suspendisse venenatis, risus sed euismod finibus, risus arcu fringilla augue, nec vulputate felis nisl et enim. In ornare, massa a cursus cursus, nisl mi ornare mauris, nec porttitor risus erat ut odio. Integer malesuada hendrerit purus ullamcorper molestie. Fusce imperdiet orci vitae purus suscipit rutrum. Nunc ac metus ac mi commodo sagittis at in leo. Vestibulum est lorem, consequat vel dictum non, imperdiet eu felis. Vivamus molestie sapien id quam rutrum, eget hendrerit eros finibus. Morbi in justo at felis blandit fringilla at faucibus purus. Donec ac aliquet purus, vitae tincidunt nulla. Curabitur ultricies auctor quam tincidunt molestie. Quisque tristique metus nunc, in pretium lectus dictum at. Nullam scelerisque placerat dui, maximus commodo augue mollis quis. Nulla gravida ex sed lectus consectetur laoreet et vel ex. Proin pretium libero non leo mattis, ullamcorper scelerisque diam hendrerit. Quisque gravida, dui a porttitor interdum, velit quam pulvinar arcu, eu blandit sapien velit ut lacus. Vestibulum congue eleifend odio, in aliquam leo sodales sed. Nam eu lacinia ipsum. Aenean sagittis nisl eu sodales lacinia. Duis nulla ante, suscipit a nibh sit amet, blandit luctus elit. Etiam a pellentesque lectus. Morbi pulvinar dolor a mi volutpat, sit amet finibus est mattis. Nunc egestas feugiat odio sed mollis. Vestibulum accumsan, velit id facilisis fermentum, nisi risus faucibus nulla, non condimentum mauris tortor eu dui. In urna ante, consectetur ac nunc in, hendrerit elementum lacus. Pellentesque pharetra felis sit amet erat pellentesque malesuada. Sed vel placerat lectus. Pellentesque habitant morbi tristique.', '2019-02-14 15:43:43'),
(12, 'Chapitre 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat sem at mauris suscipit porta. Cras metus velit, elementum sed pellentesque a, pharetra eu eros. Etiam facilisis placerat euismod. Nam faucibus neque arcu, quis accumsan leo tincidunt varius. In vel diam enim. Sed id ultrices ligula. Maecenas at urna arcu. Sed quis nulla sapien. Nam felis mauris, tincidunt at convallis id, tempor molestie libero. Quisque viverra sollicitudin nisl sit amet hendrerit. Etiam sit amet arcu sem. Morbi eu nibh condimentum, interdum est quis, tempor nisi. Vivamus convallis erat in pharetra elementum. Phasellus metus neque, commodo vitae venenatis sed, pellentesque non purus. Pellentesque egestas convallis suscipit. Ut luctus, leo quis porta vulputate, purus purus pellentesque ex, id consequat mi nisl quis eros. Integer ornare libero quis risus fermentum consequat. Mauris pharetra odio sagittis, vulputate magna at, lobortis nulla. Proin efficitur, nisi vel finibus elementum, orci sem volutpat eros, eget ultrices velit mi sagittis massa. Vestibulum sagittis ullamcorper cursus. Ut turpis dolor, tempor ut tellus et, sodales ultricies elit. Ut pharetra tristique est ac dictum. Integer ac consectetur purus, vehicula efficitur urna. Donec ultrices accumsan ipsum vitae faucibus. Quisque malesuada ex nisi, a bibendum erat commodo in. Pellentesque suscipit varius gravida. Nam scelerisque est sit amet laoreet pharetra. Vivamus quis ligula sed lacus mattis mollis. Vivamus facilisis orci rutrum nulla porta dignissim. Fusce fermentum id nibh laoreet volutpat. Suspendisse venenatis, risus sed euismod finibus, risus arcu fringilla augue, nec vulputate felis nisl et enim. In ornare, massa a cursus cursus, nisl mi ornare mauris, nec porttitor risus erat ut odio. Integer malesuada hendrerit purus ullamcorper molestie. Fusce imperdiet orci vitae purus suscipit rutrum. Nunc ac metus ac mi commodo sagittis at in leo. Vestibulum est lorem, consequat vel dictum non, imperdiet eu felis. Vivamus molestie sapien id quam rutrum, eget hendrerit eros finibus. Morbi in justo at felis blandit fringilla at faucibus purus. Donec ac aliquet purus, vitae tincidunt nulla. Curabitur ultricies auctor quam tincidunt molestie. Quisque tristique metus nunc, in pretium lectus dictum at. Nullam scelerisque placerat dui, maximus commodo augue mollis quis. Nulla gravida ex sed lectus consectetur laoreet et vel ex. Proin pretium libero non leo mattis, ullamcorper scelerisque diam hendrerit. Quisque gravida, dui a porttitor interdum, velit quam pulvinar arcu, eu blandit sapien velit ut lacus. Vestibulum congue eleifend odio, in aliquam leo sodales sed. Nam eu lacinia ipsum. Aenean sagittis nisl eu sodales lacinia. Duis nulla ante, suscipit a nibh sit amet, blandit luctus elit. Etiam a pellentesque lectus. Morbi pulvinar dolor a mi volutpat, sit amet finibus est mattis. Nunc egestas feugiat odio sed mollis. Vestibulum accumsan, velit id facilisis fermentum, nisi risus faucibus nulla, non condimentum mauris tortor eu dui. In urna ante, consectetur ac nunc in, hendrerit elementum lacus. Pellentesque pharetra felis sit amet erat pellentesque malesuada. Sed vel placerat lectus. Pellentesque habitant morbi tristique.', '2019-02-15 10:37:24');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  `id_chapter` int(11) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `content`, `creation_date`, `id_chapter`, `id_member`) VALUES
(1, 'test commentaire', '2019-02-13 16:09:34', 4, 2),
(7, 'test', '2019-02-14 15:29:49', 4, 23),
(8, 'RETEST', '2019-02-14 15:30:23', 4, 23),
(9, 'TEST', '2019-02-14 16:20:31', 4, 23),
(13, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem.', '2019-02-15 13:57:20', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `member`
--

INSERT INTO `member` (`id`, `pseudo`, `password`, `rang`) VALUES
(1, 'admin', '$2y$10$nnBSIPGV0l6KLbv4jhv.oOLm0s.47t4rQneINIc1Rb2xWJczzDDAK', 1),
(2, 'member', '$2y$10$N3xdXki.XvkgomuKnsJowuB04ontBLzqLnxHkHP97A9GwJ3dnBtDu', 0),
(23, 'soan', '$2y$10$1b105yG/p3qNlh9yPDD9EerM8W88d1SGCJM.ZE5sPMPjKH4UMrPJa', 0),
(24, 'jerem', '$2y$10$8UPEWu2ODQ4Q0KxgmJFZGeXGc9xL7xVy.rZO/NVbreMmMSkGlBkhy', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_chapter_FK` (`id_chapter`),
  ADD KEY `comment_member0_FK` (`id_member`);

--
-- Index pour la table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_chapter_FK` FOREIGN KEY (`id_chapter`) REFERENCES `chapter` (`id`),
  ADD CONSTRAINT `comment_member0_FK` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
