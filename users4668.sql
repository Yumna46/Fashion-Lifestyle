-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 07:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users4668`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `aid` int(11) NOT NULL,
  `about1` varchar(255) NOT NULL,
  `about2` varchar(6565) NOT NULL,
  `about3` varchar(6565) NOT NULL,
  `about4` varchar(100) NOT NULL,
  `about5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`aid`, `about1`, `about2`, `about3`, `about4`, `about5`) VALUES
(1, 'Welcome to our little world,Aloha,\nwhere you\'ll see bits and pieces of trending outfits,\nbeauty tips & tricks,life hacks.\nGet sneak peaks of cool outfit ideas,\nhacks, makeup and clothing inspirations + more!', 'Aloha is a happy place where \n				we love to share fashion and lifestyle related blogs\n				with you and bring you along for the ride!\n				It\'s a place where dreaming big is always\n				encouraged and following your heart is too!\n				We hope sharing our blogs \n				can somehow inspire you to live out your own dreams!These blogs \n				can definitely help you to get trendy and creative ideas for your day-to-day life.\n			It\'s an open journal to you, We hope you enjoy it &\n				it becomes your daily read because we always love having you come by and\n				give us your feedback in the comments.', 'We post new blogs frequently and try to keep\n				our blogs section up to date.\n				If there\'s one thing we\'d love for you to take away from visiting our blog is \n				that YOU CAN DO ANYTHING you set your mind to! Believe in yourself and never \n				give up even if it feels unreachable, trust the process and be patient and you\'ll \n				see results! As we always say DREAM,BELIEVE,ACHIEVE.\n				A little inspiration from team Aloha to you', '.....What  You    Love    Doing   Should    Never  Feel  Like    Work.....', 'XoXo\r\n				With Love,\r\n				Team Aloha');

-- --------------------------------------------------------

--
-- Table structure for table `allproducts`
--

CREATE TABLE `allproducts` (
  `id` int(7) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `alldesc` varchar(6565) NOT NULL,
  `description` varchar(6565) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allproducts`
--

INSERT INTO `allproducts` (`id`, `title`, `img`, `category`, `alldesc`, `description`, `created`) VALUES
(1, 'Go-To Brunch\r\nOutfit Ideas!', 'css/images/Fashion_1.jpg', 'fashion', 'For a casual brunch, there\'s nothing chicer than a pair of white jeans - they can make any outfit look fresh and polished.', 'Go-To Brunch Outfit Ideas!, For a casual brunch, there\'s nothing chicer than a pair of white jeans - they can make any outfit look fresh and polished. I styled them with a crossover neckline top. Completed this look with sandals, statement earrings and a straw bag. If you\'re looking to elevate this look, simply swap the sandals for a kitten heel.', '2021-10-01'),
(2, 'Cute End Of Summer\r\nOutfit Ideas!', 'css/images/Fashion_4.jpg', 'fashion', 'And just like that, our summer days are numbered. However, this does not mean we\'re fully ready to give up our warm weather outfits.', 'And just like that, our summer days are numbered. However, this does not mean we\'re fully ready to give up our warm weather outfits. If you\'re like someone who  holds on to summer for dear life, here\'s an easy outfit idea to get you through your end-of-summer blues!      When in doubt, reach for a cute maxi style dress, it\'s perfect for that in between weather. Styled it here, with a pearl necklace. Footwear is optional, but you could finish this look with some strappy sandals or a kitten heel. This simple & fresh ensemble is perfect for a stroll through the city or hanging by the beach.    Xx Team ALOHA  ', '2021-10-01'),
(3, 'How To Style a Blazer For \r\nYour Office Look', 'css/images/Fashion_2.jpg', 'fashion', ' We always like to find white dresses that offer an interesting detail or go for a plain sleek silhouette. Oh and did We mention there are endless ways to style this little number?         For a polished/classy look, pair a mini LWD with neutral fabrics like an oversized  blazer, as seen here.', '   A little white crop top is a must-have staple during the summer! There\'s just something so chic, clean and effortless about them + summer whites pair so well against sun-kissed skin. We always like to find white dresses that offer an interesting detail or go for a plain sleek silhouette. Oh and did We mention there are endless ways to style this little number?         For a polished/classy look, pair a mini LWD with neutral fabrics like an oversized  blazer, as seen here. Mastered this look, with statement earrings, high heels and a tote for that chic office style vibe. For a more casual look that requires minimal effort,  swap the blazer for a denim jacket and throw on some sleek sneakers. Perfect ensemble to explore a cute town or a picnic setting. Lastly, don\'t be afraid to throw in a pop of color to your LWD look, try fun colorful statement earrings (like these) and a bag for a playful ensemble (love this cutie).       XOXO Team ALOHA ', '2021-10-01'),
(4, 'Get Some Dawat Outfit Ideas!', 'css/images/Fashion_5.jpg', 'fashion', 'It\'s always amazing to style yourself for a dawat in a traditional way.', ' It\'s always amazing to style yourself for a dawat in a traditional way.This \'ankhrakha\' style dresses are so in trend now. You can easily pair this look with any \'khussas/juti\' and with a pair of \'jhumkas\'.   You can also wear this dress with \'gharara\'.But while pairing this look with a gharara you can also go with a shorter length \'kurti\'. You can also do a classic hairbun with long  \'jhumkas\'.     XOXO Team ALOHA    ', '2021-10-01'),
(5, 'How To Get A Chic Look \nWith a Black And White Outfit!<3', 'css/images/Fashion_3.jpg', 'fashion', 'statement earrings for a polished finish. This look is easily wearable to attend any formal events, a brunch date or if you have an important meeting to attend, simply layer on a blazer!', 'We\'re in full favor of wearing black pants, no matter the season. From fitted-skinny jeans to laid-back BF jeans to wide leg denim, like the pair the model wearing here. No matter the style they always seem to add a fresh take to any ensemble.     This look- they literally go with everything! Recently, we\'ve been in a minimalistic mood so this  can be paired them with a white tank top, high heels, straw bag and statement earrings for a polished finish. This look is easily wearable to attend any formal events, a brunch date or if you have an important meeting to attend, simply layer on a blazer! A t-shirt and sneaker combo is the perfect alternative for those casual running errand days or hitting your local farmers market!       How do you wear your black pants/denims? Comment below!      Xx Team ALOHA!   ', '2021-10-01'),
(6, 'How To Style Yourself \r\nAs a Wedding Guest!', 'css/images/Fashion_6.jpg', 'fashion', 'You can never go wrong with sarees.They can always make you look elegant. As a wedding guest, sarees are the best option.', '  You can never go wrong with sarees.They can always make you look elegant.As a wedding guest,sarees are the best option.You can wear minimal makeup for a more neutral look based on the color of the saree.Also can pair the look with classic tight hair bun if you love wearing heavy jewelleries.If you are a more of a open hair kind of person you can go with less jewelleries.Always keep in mind to balance your saree with makeup and accessories.Don\'t miss a classy or a traditional hand clutch for completing your look.      XOXO Team ALOHA', '2021-10-01'),
(7, '6 Tips To Help\r\nYou De-Stress', 'css/images/lifestyle7.jpg', 'lifestyle', 'We get asked for advice by a lot of readers. One of the most common is how to destress your life and live a simpler, calmer existence.  Now, we\'ll admit, paring down and living a life with less stuff has helped address the root cause of our stress quite a bit. The simpler your lifestyle, the less chaos you need to worry about. Minimalism lends itself to a calm, orderly way to focus on what matters.  But, of course, there are plenty of times when we get stressed out about money, too many commitments, or social drama. Even though we\'ve managed to cut way back on the typical stressors, there are times when I still have to step back and destress. So, if you\'re wondering how to destress your life, here are the practical steps I take to cut out the chaos', 'Because stress is a fact of life, how we navigate it is crucial to our health. Here are some helpful ways to de-stress your life: 1.Exercis:   Perhaps the most popular way to tackle stress is with a healthy dose of exercise. Walking, jogging, biking, dancing-whatever is enjoyable-will all contribute to reducing stress. 2.Meditation:   With the advent of popular smartphone apps, it\'s easier than ever to access guided meditations to help us chill out.3.Rest: It It may seem silly to suggest rest if one of the challenges of stress we face is insomnia, but the more sleep we get, the better we feel.4.Nutrition: Eating poorly is sometimes how we react to stress, but we should be doing just the opposite. Adhering to a healthy diet will make us feel better and give us the fuel we need to combat stressors.5.Socialize:  Isolation can be unhealthy when we\'re stressed. Even introverts need human contact, whether it be sharing a meal with a loved one or enjoying a night out with friends.6.Escape:  We all need to get out of our own heads from time to time, and an escape-whether literal or mental-is the perfect way to do that. Travel, if possible, just for a change of scenery.', '2021-10-01'),
(8, 'The Perfect Travel \r\nEssentials!!', 'css/images/lifestyle3.jpg', 'lifestyle', 'Most people aren\'t born savvy travelers.The following tips for traveling will have you saving money, sleeping better, getting off the beaten path more, meeting locals, and just being a better traveler', 'Most people aren\'t born savvy travelers.   It\'s something that only comes with on-the-road experience.   The following tips for traveling will have you saving money, sleeping better, getting off the beaten path more, meeting locals, and just being a better traveler.       	1.Always pack a towel:	It\'s the key to successful galactic hitchhiking and plain common sense. You never know when you will need it, whether it\'s at the beach, on a picnic, or just to dry off.       	2.Buy a small backpack/suitcase: By purchasing a small backpack ,  you will be forced you to pack light and avoid carrying too much stuff.	 Humans have a natural tendency to want to fill space so if you pack light but have lots of extra room in your bag.     	 	3.Pack light: It\'s OK to wear the same t-shirt a few days in a row. Take half the clothes you think you will need.you won\'t need as much as you think. Write down a list of essentials, cut it in half, and then only pack that! ', '2021-10-01'),
(9, 'Healthy Diet Plan \r\nYou Wish To Follow', 'css/images/lifestyle2.jpg', 'lifestyle', 'An eating plan that helps manage your weight includes a variety of healthy foods. Add an array of colors to your plate and think of it as eating the rainbow.', 'An eating plan that helps manage your weight includes a variety of healthy foods. Add an array of colors to your plate and think of it as eating the rainbow. Dark, leafy greens, oranges, and tomatoes-even fresh herbs-are loaded with vitamins, fiber, and minerals. Adding frozen peppers, broccoli, or onions to stews and omelets gives them a quick and convenient boost of color and nutrients.Emphasizes fruits, vegetables, whole grains, and fat-free or low-fat milk and milk products. Includes a variety of protein foods such as seafood, lean meats and poultry, eggs, legumes (bean and     peas), soy products, nuts, and seeds. Is low in saturated fats, trans fats, cholesterol, salt (sodium), and added sugars Stays within your daily calorie needs. Some general tips for comfort foods: Eat them less often. If you normally eat these foods every day, cut back to once a week or once a month. Eat smaller amounts. If your favorite higher-calorie food is a chocolate bar, have a smaller size or only half a bar.Try a lower-calorie version. Use lower-calorie ingredients or prepare food differently. For example, if your macaroni and cheese recipe includes whole milk, butter, and full-fat cheese, try remaking it with non-fat milk, less butter, low-fat cheese, fresh spinach and tomatoes. Just remember to not increase your portion size.', '2021-10-01'),
(10, 'How To Get More \r\nWork Done- Get Some\r\nProductivity Tips', 'css/images/lifestyle6.jpg', 'lifestyle', 'Follow these tips on how to increase productivity and become your best, most productive self at work.', ' Imagine closing each workday with a satisfied sigh, knowing that you had been so productive that you accomplished everything on your list. And knowing, too, that you were at the top of your creative game-getting your tasks done both efficiently and well. See yourself whistling as you walk away from work?      1.Do Your Heavy Lifting When You\'re at Your Best. ...     2.Stop Multitasking. ...     3.Prepare a To-Do List Each Night. ...     4.Cut Down Your To-Do List. ...     5.Delegate Properly. ...     6.Eliminate Distractions. ...     7.Plan Phone Calls. ...     8. Break up Work Periods With Exercise.', '2021-10-01'),
(11, 'Fitness Tips \r\nAnd Routine', 'css/images/lifestyle4.jpg', 'lifestyle', 'Exercise Daily.Read more to get more fitness tips ', 'Exercise Daily. Exercise daily for at least an hour.Exercise daily for at least an hour. You do not have to kill yourself from running, jogging, etc., but you should have some sort of moderate physical activity in your everyday life.Eat the Right Foods and Portion Each Meal. No matter how bad your stomach is telling you to go for  candy over healthy food, try to stay away from sweets.Keep Track of Calories and Food Intake Per Day.Keeping track of how many calories you eat in a day will be helpful in planning out your physical exercising. Be Sure to Get Sleep.Even though most of us have eight-hour jobs during the day or night, it is crucial to get enough sleep to recharge the body\'s batteries. Stay Motivated.An important key to being in shape is to set goals and keep a positive mindset. If you stay positive, you will be able to push yourself to get that fit body you\'ve always wanted.', '2021-10-01'),
(12, '3 Secrets Behind\r\nGlowing Skin', 'css/images/lifestyle5.png', 'lifestyle', ' We dug out the most well-kept glowing skin secrets to help you out with this skin struggle. Here, we have 3 beauty secrets for glowing that actually works like a charm.', 'We dug out the most well-kept glowing skin secrets to help you out with this skin struggle. Here, we have 3 beauty secrets for glowing that actually works like a charm. So, get ready to make some lifestyle and skincare changes for the glowing skin you always wanted...	1.Exfoliate two or three times a week:   Over-exfoliating (every day) can lead to skin irritation, dryness and accelerated signs of aging, exfoliating two to three times per week (or just once if your skin is sensitive) can help keep pores from becoming clogged and leave the skin feeling refreshed and rejuvenated.  	2.Massage your face daily:   A daily massage improves facial muscle tone, enhances product absorption and improves blood circulation, all of which can help increase your skin\'s glow. So next time grab some lovely oil-argan or jojoba are good options-and give your face a well-deserved massage.  	3.Get enough sleep: It\'s called \"beauty sleep\" for a reason, and without enough of it, you can exacerbate existing skin conditions and accelerate the aging process. Between 7-9 hours of estful,regenerative sleep each night contribute to better health and beautiful skin.', '2021-10-01'),
(13, 'Get Some Morning\r\nRoutine Ideas!', 'css/images/lifestyle10.jpg', 'lifestyle', 'Tired of being tired? Of feeling like you\'re wasting your morning and, in turn, wasting your day? You need to revamp your morning routine! ', 'Tired of being tired? Of feeling like you\'re wasting your morning and, in turn, wasting your day? You need to revamp your morning routine! And good news. I have just the thing you need -morning routine ideas that you can use to do more with your mornings.Ah, morning routine ideas. There are a seemingly endless supply of them that you can implement to become your best self. To help set your day up in a deliberate manner so that you can do more, achieve more, and be more.    Make your bed.Some things you definitely need in your morning routine-     Brush your teeth.     Get dressed for the day.     Make tea or coffee.     Say hello to a loved one.     Make breakfast.     Open the curtains and let some sunshine in.     Prepare your lunch or dinner for the day.', '2021-10-01'),
(14, 'How To Avoid Online \r\nDistractions And \r\nFocus On Work', 'css/images/lifestyle11.jpg', 'lifestyle', ' Let\'s face it, the Internet can be a very distracting place. Whether you\'re taking an online class or simply trying to complete your schoolwork outside of the classroom, all efforts of productivity can fly out the window as soon as a viral video pops-up on your social media feed.', 'Let\'s face it, the Internet can be a very distracting place. Whether you\'re taking an online class or simply trying to complete your schoolwork outside of the classroom, all efforts of productivity can fly out the window as soon as a viral video pops-up on your social media feed. 1.Get into a study routine.By establishing and sticking to an online study schedule, you can make sure that you are focused during the times you plan to do your schoolwork, resulting in better productivity! 2.Silence all nonessential notifications.Nothing is worse than having constant pings, buzzes, whistles, and bells throw off your concentration.To alleviate yourself of these distractions, make sure to temporarily silence all nonessential notifications when you are working online.3.Block access to distracting websites.f you\'re someone who might want a little more impulse control, then you might be interested in getting a free third-party application or browser extension that blocks access to distracting websites. Third-party extensions, such as StayFocused and Block Site on Google Chrome, allow you to create a blacklist of distracting websites and then easily activate when you plan to study.4.Take a screen break.However, if you plan to return to schoolwork, make sure your break doesn\'t extend beyond your scheduled limit. Try setting a timer so your study routine stays on track. 5.Get some rest.First look at your sleep schedule for opportunities of improvement. If you\'re not getting the standard eight hours, try to go to bed earlier, reorganize your daily schedule, and eliminate any late-night distractions that could be keeping you up.', '2021-10-01'),
(15, 'List Of Some \r\nInspirational Quotes', 'css/images/lifestyle8.jpg', 'lifestyle', 'Motivational quotes can help you reach your potential each day. Sure, they\'re just words. But they\'re positive words.', 'Motivational quotes can help you reach your potential each day. Sure, they\'re just words. But they\'re positive words. And if you\'re on the verge of giving up or struggling to push yourself to the next level, sometimes that\'s just what you need.   1. \"All our dreams can come true, if we have the courage to pursue them.\" - Walt Disney 2. \"The secret of getting ahead is getting started.\" -Mark Twain 3. \"I\'ve missed more than 9,000 shots in my career. I\'ve lost almost 300 games. 26 times I\'ve been trusted to take the game winning shot and missed. I\'ve failed over and over and over again in my life and that is why I succeed.\"-Michael Jordan 4. \"Don\'t limit yourself. Many people limit themselves to what they think they can do. You can go as far as your mind lets you. What you believe, remember, you can achieve.\" - Mary Kay Ash 5. \"The best time to plant a tree was 20 years ago. The second best time is now.\" - Chinese Proverb', '2021-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(8) NOT NULL,
  `id` int(7) NOT NULL,
  `comment_by` varchar(255) NOT NULL,
  `content` varchar(6565) NOT NULL,
  `c_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `id`, `comment_by`, `content`, `c_time`) VALUES
(57, 2, 'Farhana', 'hello', '2021-10-02 13:43:30'),
(59, 2, 'Farhana', 'nice dress', '2021-10-02 13:46:31'),
(60, 2, 'Farhana', 'love this look', '2021-10-02 13:46:56'),
(61, 2, 'Farhana', 'love this look', '2021-10-02 13:47:58'),
(62, 3, 'yumna', 'hi', '2021-10-02 13:48:51'),
(63, 6, 'yumna', 'asi valoi', '2021-10-02 14:34:46'),
(64, 2, 'yumna', 'hello', '2021-10-02 15:26:04'),
(65, 2, 'yumna', 'asi valoi', '2021-10-02 15:38:40'),
(66, 1, 'yumna', 'love this pant', '2021-10-02 16:29:05'),
(67, 12, 'Farhana', 'This glow receipe products are amazing.I love using them.\r\nLove you all guys<3\r\nTeam aloha is doing a great jod', '2021-10-03 02:13:38'),
(68, 14, 'yashna', 'but i can not stop playing video games..', '2021-10-03 22:52:27'),
(70, 3, 'Farhana', 'nice dress', '2021-10-07 10:58:29'),
(71, 2, 'yumna', 'helo', '2021-10-07 19:06:12'),
(72, 9, 'yumna', 'hello', '2021-10-07 20:21:11'),
(73, 9, 'Farhana', 'Very helpful blog!', '2021-10-09 17:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `contactusinfo`
--

CREATE TABLE `contactusinfo` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `message` varchar(6565) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactusinfo`
--

INSERT INTO `contactusinfo` (`id`, `username`, `email`, `phoneno`, `message`) VALUES
(1, 'yumna', 'yumna46@gmail.c', '0178965432', '  helu'),
(2, 'Farhana', 'badcupcake@gmai', '01432678934', '   Hel'),
(3, 'mona', 'm@gmail.com', '0187256357', ' hello!');

-- --------------------------------------------------------

--
-- Table structure for table `heading`
--

CREATE TABLE `heading` (
  `hid` int(11) NOT NULL,
  `heading1` varchar(255) NOT NULL,
  `heading2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heading`
--

INSERT INTO `heading` (`hid`, `heading1`, `heading2`) VALUES
(1, 'Welcome to Aloha', '......Aloha offers you some fashion and lifestyle inspiration. Hope you will enjoy our blogs \r\n			& have nice time here......');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sliderid` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `desc1` varchar(50) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sliderid`, `img1`, `desc1`, `img2`, `img3`) VALUES
(1, 'css/images/background.jpg', '.....Bonjour....', 'css/images/slider1.jpg', 'css/images/slider2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(7) NOT NULL,
  `team_img` varchar(255) NOT NULL,
  `team_title` varchar(255) NOT NULL,
  `team_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_img`, `team_title`, `team_desc`) VALUES
(1, 'css/images/member1.jpg', 'Farhana Azad', 'ID:180204068\r\nEmail:180204068@gmail.com'),
(2, 'css/images/member2.jpg', 'Yumna Islam', 'ID:180204046\r\nEmail:180204046@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users4668`
--

CREATE TABLE `users4668` (
  `sno` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(20) NOT NULL,
  `phoneno` int(11) DEFAULT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users4668`
--

INSERT INTO `users4668` (`sno`, `username`, `password`, `dt`, `email`, `phoneno`, `address`) VALUES
(11, 'Farhana', '202cb962ac59075b964b07152d234b70', '2021-10-04 19:44:09', 'badcupcake@gmail.com', 1356826322, 'Bashundhara R/A'),
(13, 'Suzashouts', 'b2f6d8bb54ad0cfce81e03af8d91b8a7', '2021-10-06 23:13:45', 'suzakha@gmail.com', 1452678241, 'Naryanganj'),
(14, 'yumna ', '202cb962ac59075b964b07152d234b70', '2021-10-07 10:37:47', 'yu@gmail.com', 179638765, 'dhanmondi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `allproducts`
--
ALTER TABLE `allproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contactusinfo`
--
ALTER TABLE `contactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heading`
--
ALTER TABLE `heading`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sliderid`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `users4668`
--
ALTER TABLE `users4668`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allproducts`
--
ALTER TABLE `allproducts`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `contactusinfo`
--
ALTER TABLE `contactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `heading`
--
ALTER TABLE `heading`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sliderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users4668`
--
ALTER TABLE `users4668`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
