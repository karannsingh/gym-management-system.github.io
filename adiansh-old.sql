-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 28, 2022 at 09:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adiansh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `designation`) VALUES
(1, 'admin - Almas', 'admin@gmail.com', 'admin', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(20) NOT NULL,
  `comment` text NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(2, 'karan', 'karan@gmail.com', 2147483647, 'Contact', '2022-03-27 18:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `plan_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `category_id`, `status`, `added_on`) VALUES
(1, 0, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 1, '2022-03-26 07:08:33'),
(2, 0, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 2, 1, '2022-03-26 07:08:33'),
(3, 0, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, 1, '2022-03-26 07:58:11'),
(4, 0, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 3, 1, '2022-03-26 07:58:11'),
(5, 0, 'Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', 1, 1, '2022-03-26 07:58:57'),
(6, 0, '1914 translation by H. Rackham', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"', 2, 1, '2022-03-26 07:58:57'),
(7, 0, 'Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', '\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"', 3, 1, '2022-03-26 07:59:36'),
(8, 0, '1914 translation by H. Rackham', '\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', 2, 1, '2022-03-26 07:59:36'),
(9, 4, 'The standard Lorem Ipsum passage, used since the 1500s', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 1, 1, '2022-03-26 08:00:32'),
(10, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis erat vitae pretium suscipit. Donec luctus tempus mauris quis gravida. Nunc et tellus vulputate, commodo tortor id, eleifend lectus. In eget nibh cursus nulla tincidunt tempor nec aliquet nibh. Donec auctor ipsum vel eros posuere gravida. Duis elementum purus ex, quis vehicula tellus ultricies molestie. Vivamus commodo tellus id scelerisque porta. Sed sodales eget velit ultrices dictum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam consequat dolor quam, quis viverra nibh malesuada id. Nunc nec metus erat. Phasellus nisl massa, posuere lacinia augue et, lacinia feugiat libero. Phasellus fringilla elementum mi eu posuere. Quisque in lectus congue, efficitur orci at, maximus odio. Quisque sollicitudin gravida dignissim. Quisque ligula justo, laoreet quis placerat in, facilisis eu nisl.', 3, 1, '2022-03-26 08:00:32'),
(11, 0, 'Etiam vestibulum, ipsum non vulputate hendrerit', 'Etiam vestibulum, ipsum non vulputate hendrerit, sem massa bibendum mi, et laoreet ex felis vel lectus. Sed vel purus condimentum, faucibus mi ac, sagittis quam. In velit nisl, consectetur et lobortis nec, lobortis at sem. Etiam efficitur nisl ornare consequat consequat. Cras suscipit est sodales nisl auctor tincidunt. Curabitur quam turpis, egestas et libero vel, vestibulum accumsan neque. In venenatis quis urna eget suscipit. Pellentesque eget risus eu mauris aliquam venenatis. Proin eu dui in leo lobortis mollis vehicula et enim. Donec at egestas elit. Sed dictum, lectus vel venenatis tristique, quam diam egestas felis, at fringilla enim arcu et turpis. Aenean velit dui, tempor id magna maximus, ornare ornare risus. Maecenas consequat ac urna sit amet mattis. Mauris non ligula enim. Ut sit amet sodales dui.', 1, 0, '2022-03-26 08:01:17'),
(12, 0, 'Cras luctus neque sed elit mattis semper.', 'Cras luctus neque sed elit mattis semper. Donec et iaculis nisi, eu ultrices ipsum. Nunc lacinia erat purus, sed volutpat eros scelerisque eget. Nulla facilisi. Vivamus elementum lorem sit amet ante posuere auctor. Phasellus tempus nunc ac dui vulputate, quis sollicitudin leo viverra. Sed sit amet ante sit amet dui varius auctor. Maecenas consectetur consequat sapien et rhoncus.\r\n\r\nAenean a dui ut massa posuere sodales. Donec accumsan dapibus rutrum. In at elit volutpat, interdum quam at, tincidunt libero. Vivamus ac ex lobortis, iaculis nisi nec, imperdiet quam. Aenean a facilisis magna, vel facilisis massa. Curabitur ut dignissim dolor. Vestibulum facilisis ipsum feugiat tellus facilisis, blandit commodo sem condimentum. Ut imperdiet ante vitae nunc pulvinar ullamcorper. Duis efficitur turpis vel quam aliquam tristique. Integer quis cursus turpis, sed accumsan lacus. Etiam eget enim vel ex hendrerit tristique. Nam et mattis justo, nec rutrum arcu. Aliquam erat volutpat.', 2, 0, '2022-03-26 08:01:17'),
(13, 4, 'Test', 'content', 1, 1, '2022-03-27 06:52:59'),
(14, 4, 'Home', 'Post Content', 1, 1, '2022-03-27 07:20:58'),
(15, 4, 'Test', 'image', 2, 1, '2022-03-27 07:50:31'),
(16, 4, 'Test', 'image', 2, 1, '2022-03-27 07:52:05'),
(17, 3, 'Demo', 'Yes', 3, 1, '2022-03-27 07:55:56'),
(18, 3, 'User Id', 'User Id check', 1, 1, '2022-03-27 07:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `category_name`, `status`) VALUES
(1, 'Nutrition', 1),
(2, 'Diet', 1),
(3, 'Exercise', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `user_id`, `post_id`, `name`, `comments`, `added_on`, `status`) VALUES
(2, 4, 10, 'Shruti', '2nd Comment', '2022-03-26 18:00:02', 1),
(9, 1, 12, 'karan', 'id 11 test comment', '2022-03-26 22:08:05', 1),
(11, 3, 11, 'karan singh', 'test', '2022-03-26 22:13:38', 1),
(12, 4, 11, 'shruti', 'Test', '2022-03-26 22:14:39', 1),
(13, 4, 16, 'shruti', 'Image', '2022-03-27 07:52:19', 1),
(14, 1, 18, 'karan', 'user id test', '2022-03-27 11:32:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` int(1) NOT NULL,
  `post_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`id`, `post_id`, `image`) VALUES
(1, 10, 'services-1.jpg'),
(2, 10, 'services-2.jpg'),
(3, 0, 'services-3.jpg'),
(4, 9, 'bg_1.jpg'),
(5, 0, 'bg_2.jpg'),
(6, 13, 'bg_2.jpg'),
(7, 13, 'bg_3.jpg'),
(8, 14, 'bg_1.jpg'),
(9, 14, 'services-2.jpg'),
(10, 15, 'services-1.jpg'),
(11, 15, 'services-2.jpg'),
(12, 15, 'services-3.jpg'),
(13, 16, 'services-1.jpg'),
(14, 16, 'services-2.jpg'),
(15, 16, 'services-3.jpg'),
(16, 17, 'services-1.jpg'),
(17, 17, 'services-2.jpg'),
(18, 18, 'bg_2.jpg'),
(19, 18, 'bg_3.jpg'),
(20, 18, 'services-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `mobile`, `user_type`, `status`, `added_on`) VALUES
(1, 'karan', 'admin', 'karan@gmail.com', '12345679', 'Client', 1, '2022-03-25 05:09:29'),
(3, 'karan singh', 'admin', 'karansingh@gmail.com', '8928673855', 'Client', 1, '2022-03-24 22:51:28'),
(4, 'shruti', 'admin', 'shruti@gmail.com', '12344', 'Client', 1, '2022-03-25 01:26:59'),
(7, 'karan', 'admin', 'karansingh@gmail.com', '8969527271', 'Trainer', 1, '2022-03-27 18:35:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
