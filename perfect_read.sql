-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 08:59 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfect_read`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `aadvertisement_id` int(11) NOT NULL,
  `advertisement_text` int(11) NOT NULL,
  `advertisement_image` int(11) NOT NULL,
  `no_of_clicks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(35) NOT NULL,
  `genre_count` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`, `genre_count`) VALUES
(0, 'any', 0),
(1, 'fiction', 0),
(2, 'culture', 2),
(3, 'technology', 2),
(4, 'adventure', 0),
(5, 'travel', 1),
(6, 'cooking', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recommendation`
--

CREATE TABLE `recommendation` (
  `recommendation_id` int(10) NOT NULL,
  `recommendation_recommendation` varchar(300) DEFAULT NULL,
  `upload_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(10) NOT NULL,
  `upload_id` int(10) NOT NULL,
  `review_review` varchar(300) DEFAULT NULL,
  `time_taken_for_read` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(10) NOT NULL,
  `type_name` varchar(30) NOT NULL,
  `type_count` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`, `type_count`) VALUES
(0, 'any', 0),
(1, 'Article', 5),
(2, 'Story', 0),
(3, 'Novel', 0),
(4, 'News', 1);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `upload_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `type_id` int(10) NOT NULL,
  `upload_title` varchar(35) NOT NULL DEFAULT '',
  `upload_abstract` varchar(300) DEFAULT NULL,
  `upload_content` mediumtext NOT NULL,
  `upload_length` varchar(10) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1: Active 0: Deleted',
  `view_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`upload_id`, `user_id`, `genre_id`, `type_id`, `upload_title`, `upload_abstract`, `upload_content`, `upload_length`, `upload_time`, `status`, `view_count`) VALUES
(1, 1, 5, 1, 'Boston', '“Hub of Universe”,America’s greatest walking city, and it’s easy to stroll its historic districts, see a museum or three, and grab dinner on the waterfront within one day.', 'Called the “Hub of Universe” by some, Boston remains a bookish and cerebral enclave that welcomes millions of visitors every year. It’s arguably America’s greatest walking city, and it’s easy to stroll its historic districts, see a museum or three, and grab dinner on the waterfront within one day.\r\n\r\nSome also call it America’s intimate metropolis, or its biggest small town, and either way, it’s a classic and charming New England destination. Boston’s narrow streets and brick buildings give it a distinctive European air—much more so than in most American cities—though it also has its share of modern touches, too. Hotels like the Fairmont Copley and the Langham Boston may be classic mainstays, but the city is now home to a Mandarin Oriental and the proudly rock and roll Verb. Similarly, the city’s food scene spans from impeccable seafood and New England classics to innovative menus from celebrity chefs like Barbara Lynch and Ken Oringer. No matter what your preference, T+L’s Boston travel guide has you covered.\r\n\r\nThis applies to the city’s many sites, too. Faneuil Hall and shopping on Newbury Street are tried-and-true activities popular among visitors, but dig a little deeper and view masterpieces of art that span millennia at the Museum of Fine Arts, sample gourmet treats from the newly opened Boston Public Market, or get some fresh air hiking around the Boston Harbor Islands.\r\n\r\nThe weather in Boston is pretty typical to that of other cities in the Northeastern United States: mild springs, warm summers, and snowy winters, but with all it has to offer, there’s no bad time to travel to Boston to see these sites for yourself.', '1640', '2018-12-09 18:38:13', 1, 0),
(2, 2, 3, 1, 'Quantum Computing', 'What is quantum computing?\r\nSuperposition and entanglement\r\nWhy do quantum effects matter?\r\nWhat can a quantum computer do that a classical computer can\'t?\r\nA quantum computer can hack into my private data?\r\nHow can quantum mechanics create ultra-secret keys?\r\nWhat else can we do with quantum mechan', 'Although quantum information has been around for a long time, we\'re starting to see more about it in the media. We hope to give you a quickstart guide on:\r\n\r\nWhat is quantum computing?\r\nSuperposition and entanglement\r\nWhy do quantum effects matter?\r\nWhat can a quantum computer do that a classical computer can\'t?\r\nA quantum computer can hack into my private data?\r\nHow can quantum mechanics create ultra-secret keys?\r\nWhat else can we do with quantum mechanics?\r\nWhere can I get a quantum computer?\r\nWhat is required to build a quantum computer?\r\nWhen will there be a real quantum computer?\r\nIs quantum technology still years away?\r\n\r\nWhat is quantum computing?\r\n\r\nQuantum computing is essentially harnessing and exploiting the amazing laws of quantum mechanics to process information. A traditional computer uses long strings of “bits,” which encode either a zero or a one. A quantum computer, on the other hand, uses quantum bits, or qubits. What\'s the difference? Well a qubit is a quantum system that encodes the zero and the one into two distinguishable quantum states. But, because qubits behave quantumly, we can capitalize on the phenomena of \"superposition\" and \"entanglement.\"\r\nSuperposition and entanglement? Pardon?\r\nIt’s OK to be a bit baffled by these concepts, since we don’t experience them in our day-to-day lives. It’s only when you look at the tiniest quantum particles – atoms, electrons, photons and the like – that you see intriguing things like superposition and entanglement.\r\n\r\nSuperposition is essentially the ability of a quantum system to be in multiple states at the same time — that is, something can be “here” and “there,” or “up” and “down” at the same time.\r\n\r\nEntanglement is an extremely strong correlation that exists between quantum particles — so strong, in fact, that two or more quantum particles can be inextricably linked in perfect unison, even if separated by great distances. The particles remain perfectly correlated even if separated by great distances. The particles are so intrinsically connected, they can be said to “dance” in instantaneous, perfect unison, even when placed at opposite ends of the universe. This seemingly impossible connection inspired Einstein to describe entanglement as “spooky action at a distance.”\r\n\r\nWhy do these quantum effects matter?\r\nFirst of all, they’re fascinating. Even better, they’ll be extremely useful to the future of computing and communications technology.\r\n\r\nThanks to superposition and entanglement, a quantum computer can process a vast number of calculations simultaneously. Think of it this way: whereas a classical computer works with ones and zeros, a quantum computer will have the advantage of using ones, zeros and “superpositions” of ones and zeros. Certain difficult tasks that have long been thought impossible (or “intractable”) for classical computers will be achieved quickly and efficiently by a quantum computer.\r\n\r\nWhat can a quantum computer do that a classical computer can’t?\r\nFactoring large numbers, for starters. Multiplying two large numbers is easy for any computer. But calculating the factors of a very large (say, 500-digit) number, on the other hand, is considered impossible for any classical computer. In 1994, a mathematician from the Massachusetts Institute of Technology (MIT) Peter Shor, who was working at AT&T at the time, unveiled that if a fully working quantum computer was available, it could factor large numbers easily.\r\n\r\nBut I don’t want to factor very large numbers…\r\nNobody wants to factor very large numbers! That’s because it’s so difficult – even for the best computers in the world today. In fact, the difficulty of factoring big numbers is the basis for much of our present day cryptography. It’s based on math problems that are too tough to solve. RSA encryption, the method used to encrypt your credit card number when you’re shopping online, relies completely on the factoring problem. The website you want to purchase from gives you a large \"public\" key (which anyone can access) to encode your credit card information.\r\n\r\nThis key actually is the product of two very large prime numbers, known only to the seller. The only way anyone could  intercept your information is to know those two prime numbers that multiply to create the key. Since factoring is very hard, no eavesdropper will be able to access your credit card number and your bank account is safe. Unless, that is, somebody has built a quantum computer and is running Peter Shor\'s algorithm!\r\n\r\nWait… so a quantum computer will be able to hack into my private data? That’s not good.\r\nDon’t worry — classical cryptography is not completely jeopardized. Although certain aspects of classical cryptography would be jeopardized by quantum computing,  quantum mechanics also allows for a new type of highly secure cryptography.\r\n\r\nLet’s look at a common cryptographic protocol called the one-time pad: Say party A and party B (let\'s call them Alice and Bob) share a long string of random zeros and ones — the secret key. As long as they only use this key once and they are the only ones who know this key, they can transmit a secret message such that no eavesdropper (we’ll call her Eve) will be able to decipher the message. The main difficulty with the one-time pad is the actual distribution of the secret key. In the past, governments sent people to exchange books full of random data to be used as keys. That, of course, is impractical and imperfect. This is where quantum mechanics comes in very handy once again: Quantum Key Distribution (QKD) allows for the distribution of completely random keys at a distance.', '5665', '2018-12-09 18:38:13', 1, 0),
(3, 1, 3, 1, 'Facial Recognition Technology', 'Facial Recognition Technology Is a Burgeoning Threat to Freedom, AI Report Says', 'If you thought the face of AI oppression was going to take the form of robots going down the street killing people (as Elon Musk warned), think again. As AI permeates more and more technologies and industries, there\'s a rapidly growing acceptance that artificial intelligence will soon be woven into the fabric of everyday society, including surveillance and security. According to a recent report by the AI Now Institute, one of the biggest threats to individual privacy and freedom will be AI-powered face and \"affect\" recognition.\r\n\r\nPart of the report is spurred by the growing use of AI-backed surveillance in China, which ranges from gait recognition technology to picking someone out of a crowd based on their height, gender, and shirt color. Paired with the rise of a society-wide \"social credit\" system, the combination of constant surveillance and government sanctions on citizens seems to represent the blueprint for a new type of high-tech authoritarian society. Here\'s how the report describes it:\r\n\r\n\"In China, military and state-sanctioned automated surveillance technology is being deployed to monitor large portions of the population...Reports include installation of facial recognition tools at the Hong Kong-Shenzhen border, using flocks of robotic dove-like drones in five provinces across the country, and the widely reported social credit monitoring system, each of which illustrates how AI-enhanced surveillance systems can be mobilized as a means of far-reaching social control.\"\r\n\r\nAs similar systems mature in the US, the Institute fears that lack of regulation will cause the proliferation of AI-based facial recognition technology and threaten civil liberties. They\'re also concerned about the accountability of the organizations that use AI surveillance and technologyâ€”#1 on their list of \'key issues\' is \"The growing accountability gap in AI, which favors those who create and deploy these technologies at the expense of those most affected.\"\r\n\r\nSpeaking at the Brookings Institution, Microsoft president Brad Smith echoed these fears: \"We believe it\'s important for governments in 2019 to start adopting laws to regulate this technology. The facial recognition genie, so to speak, is just emerging from the bottle. Unless we act, we risk waking up five years from now to find that facial recognition services have spread in ways that exacerbate societal issues. By that time, these challenges will be much more difficult to bottle back up.\"\r\n\r\nConsidering the recent scandal involving Google\'s collection and use of geo-location data from smart phones, it\'s becoming clearer that without pushback, corporations and governments may soon have the ability to track the movements and collect the identities of millions of people, effectively ending the individual right to privacy and enabling greater control over (and knowledge of) people\'s everyday lives.', '438', '2018-12-09 18:38:30', 1, 0),
(4, 2, 6, 1, 'German GlÃ¼hwein', 'How to Make Traditional German GlÃ¼hwein', 'GlÃ¼-what? GlÃ¼hwein is a spiced red wine thatâ€™s traditionally served at Christmas markets in Germany and Austria. Translated roughly as â€œglowing wineâ€ which refers to the temperature the wine is heated to, this holiday drink is meant to warm you up as you make your way around the market stalls, chatting and shopping and will ensure you wonâ€™t get cold.\r\n\r\nMulled wine, as we call it in English, is actually really simple to make and even better, itâ€™s easy to make large batches which makes it perfect for entertaining over the holidays.\r\n\r\nMaking mulled wine is simple but it does involve a little bit more than just heating the wine â€“ itâ€™s a delicate balance of spices (cinnamon, star anise, cloves), citrus fruits, alcohol and sugar. Play around with the ratios to see what you like best. Mull your wine early to fill your house with the wonderful smells of the season to greet your guests as they arrive. Keep the pot on very low heat through the party and keep an eye on it â€“ youâ€™ll surely need to make more at some point!\r\nGlÃ¼hwein Recipe\r\nMakes: Approximately 2L (enough for 12-24 depending on if you are serving tasting portions or full serves)\r\n\r\nIngredients:\r\n1/2 cup granulated sugar\r\n1 cinnamon stick\r\n8 cloves\r\n2 clementines or small oranges\r\npeel and juice of 1 lemon (approx. 1/4 â€“ 1/3 cup)\r\npeel and juice of 2 clementines or small oranges (approx. 1/2 â€“ 3/4 cup)\r\n2 x 750 mL bottles fruity red wine\r\n1/2 cup port\r\n1/2 cup Grand Marnier or Cointreau\r\n1/2 cup brandy\r\nclementine or orange slices, for garnish\r\ncinnamon sticks, for garnish\r\n\r\nDirections:\r\n1. Place the sugar and cinnamon stick in a large (2 litre) pot.\r\n2. Stick 4 cloves into each whole clementine and place them in the pot with the sugar.\r\n3. Add the lemon and clementine peel and juice (you should have around 3/4 â€“ 1 cup juice in total) to the pot.\r\n4. Pour in just enough wine to cover the clementines and heat over medium heat until it boils. Simmer for around 5 minutes.\r\n5. Add the rest of the wine, the port, the Grand Marnier (or Cointreau) and brandy and stir well. Heat for around 15 minutes on low-medium heat. Do not allow the wine to boil.\r\n6. Serve hot with a slice of orange or clementine and perhaps a dash of cinnamon or cinnamon stick as garnish.', '388', '2018-12-09 13:43:23', 1, 0),
(5, 1, 2, 1, 'India', 'Explore great India', 'India, country that occupies the greater part of South Asia. It is a constitutional republic consisting of 29 states, each with a substantial degree of control over its own affairs; 6 less fully empowered union territories; and the Delhi national capital territory, which includes New Delhi, Indiaâ€™s capital. With roughly one-sixth of the worldâ€™s total population, India is the second most-populous country, after China.\r\nâ€¢	 \r\nnorthern Indian citiesTime-lapse video tour of the northern Indian cities of Delhi, Agra, Jaipur, Udaipur, and Varanasi.Emilio Carral\r\nâ€¢	 \r\nIndiaIndiaEncyclopÃ¦dia Britannica, Inc.\r\nIt is known from archaeological evidence that a highly sophisticated urbanized cultureâ€”the Indus civilizationâ€”dominated the northwestern part of the subcontinent from about 2600 to 2000 BCE. From that period on, India functioned as a virtually self-contained political and cultural arena, which gave rise to a distinctive tradition that was associated primarily with Hinduism, the roots of which can largely be traced to the Indus civilization. Other religions, notably Buddhism and Jainism, originated in Indiaâ€”though their presence there is now quite smallâ€”and throughout the centuries residents of the subcontinent developed a rich intellectual life in such fields as mathematics, astronomy, architecture, literature, music, and the fine arts.\r\n \r\nIndiaEncyclopÃ¦dia Britannica, Inc.\r\nThroughout its history, India was intermittently disturbed by incursions from beyond its northern mountain wall. Especially important was the coming of Islam, brought from the northwest by Arab, Turkish, Persian, and other raiders beginning early in the 8th century CE. Eventually, some of those raiders stayed; by the 13th century much of the subcontinent was under Muslim rule, and the number of Muslims steadily increased. Only after the arrival of the Portuguese navigator Vasco da Gama in 1498 and the subsequent establishment of European maritime supremacy in the region did India become exposed to major external influences arriving by sea, a process that culminated in the decline of the ruling Muslim elite and absorption of the subcontinent within the British Empire.\r\nâ€¢	 \r\nThe Taj Mahal in Agra, India, one of the world\'s great architectural masterpieces.Brand X Pictures/Jupiterimages\r\nâ€¢	 \r\nRajput fort overlooking (foreground) Jaisalmer, Rajasthan, India.Â© John Isaac\r\nDirect administration by the British, which began in 1858, effected a political and economic unification of the subcontinent. When British rule came to an end in 1947, the subcontinent was partitioned along religious lines into two separate countriesâ€”India, with a majority of Hindus, and Pakistan, with a majority of Muslims; the eastern portion of Pakistan later split off to form Bangladesh. Many British institutions stayed in place (such as the parliamentary system of government); English continued to be a widely used lingua franca; and India remained within the Commonwealth. Hindi became the official language (and a number of other local languages achieved official status), while a vibrant English-language intelligentsia thrived.\r\nIndia remains one of the most ethnically diverse countries in the world. Apart from its many religions and sects, India is home to innumerable castes and tribes, as well as to more than a dozen major and hundreds of minor linguistic groups from several language families unrelated to one another. Religious minorities, including Muslims, Christians, Sikhs, Buddhists, and Jains, still account for a significant proportion of the population; collectively, their numbers exceed the populations of all countries except China. Earnest attempts have been made to instill a spirit of nationhood in so varied a population, but tensions between neighbouring groups have remained and at times have resulted in outbreaks of violence. Yet social legislation has done much to alleviate the disabilities previously suffered by formerly â€œuntouchableâ€ castes, tribal populations, women, and other traditionally disadvantaged segments of society. At independence, India was blessed with several leaders of world stature, most notably Mohandas (Mahatma) Gandhi and Jawaharlal Nehru, who were able to galvanize the masses at home and bring prestige to India abroad. The country has played an increasing role in global affairs.\r\nContemporary Indiaâ€™s increasing physical prosperity and cultural dynamismâ€”despite continued domestic challenges and economic inequalityâ€”are seen in its well-developed infrastructure and a highly diversified industrial base, in its pool of scientific and engineering personnel (one of the largest in the world), in the pace of its agricultural expansion, and in its rich and vibrant cultural exports of music, literature, and cinema. Though the countryâ€™s population remains largely rural, India has three of the most populous and cosmopolitan cities in the worldâ€”Mumbai (Bombay), Kolkata (Calcutta), and Delhi. Three other Indian citiesâ€”Bengaluru (Bangalore), Chennai (Madras), and Hyderabadâ€”are among the worldâ€™s fastest-growing high-technology centres, and most of the worldâ€™s major information technology and software companies now have offices in India.\r\n \r\nGateway to India monument near the entrance to Mumbai (Bombay) Harbour, western India, on the east coast of the Arabian Sea.Â© Smarta/Shutterstock.com\r\nThe history section of the articles Pakistan and Bangladesh discuss those countries since their creation.\r\nJoseph E. SchwartzbergThe Editors of Encyclopaedia Britannica\r\nLand\r\nIndiaâ€™s frontier, which is roughly one-third coastline, abuts six countries. It is bounded to the northwest by Pakistan, to the north by Nepal, China, and Bhutan; and to the east by Myanmar(Burma). Bangladesh to the east is surrounded by India to the north, east, and west. The islandcountry of Sri Lanka is situated some 40 miles (65 km) off the southeast coast of India across the Palk Strait and Gulf of Mannar.\r\n \r\nSettlement in the Kullu Valley, central Himachal Pradesh, India.The Holton Collection/SuperStock\r\nThe land of Indiaâ€”together with Bangladesh and most of Pakistanâ€”forms a well-defined subcontinent, set off from the rest of Asia by the imposing northern mountain rampart of the Himalayas and by adjoining mountain ranges to the west and east. In area, India ranks as the seventh largest country in the world.\r\nMuch of Indiaâ€™s territory lies within a large peninsula, surrounded by the Arabian Sea to the west and the Bay of Bengal to the east; Cape Comorin, the southernmost point of the Indian mainland, marks the dividing line between those two bodies of water. India has two union territories composed entirely of islands: Lakshadweep, in the Arabian Sea, and the Andaman and Nicobar Islands, which lie between the Bay of Bengal and the Andaman Sea.\r\nRelief\r\nIt is now generally accepted that Indiaâ€™s geographic position, continental outline, and basic geologic structure resulted from a process of plate tectonicsâ€”the shifting of enormous, rigid crustal plates over the Earthâ€™s underlying layer of molten material. Indiaâ€™s landmass, which forms the northwestern portion of the Indian-Australian Plate, began to drift slowly northward toward the much larger Eurasian Plate several hundred million years ago (after the former broke away from the ancient southern-hemispheric supercontinent known as Gondwana, or Gondwanaland). When the two finally collided (approximately 50 million years ago), the northern edge of the Indian-Australian Plate was thrust under the Eurasian Plate at a low angle. The collision reduced the speed of the oncoming plate, but the underthrusting, or subduction, of the plate has continued into contemporary times.\r\n \r\nEncyclopÃ¦dia Britannica, Inc.\r\nThe effects of the collision and continued subduction are numerous and extremely complicated. An important consequence, however, was the slicing off of crustal rock from the top of the underthrusting plate. Those slices were thrown back onto the northern edge of the Indian landmass and came to form much of the Himalayan mountain system. The new mountainsâ€”together with vast amounts of sediment eroded from themâ€”were so heavy that the Indian-Australian Plate just south of the range was forced downward, creating a zone of crustal subsidence. Continued rapid erosion of the Himalayas added to the sediment accumulation, which was subsequently carried by mountain streams to fill the subsidence zone and cause it to sink more.\r\nIndiaâ€™s present-day relief features have been superimposed on three basic structural units: the Himalayas in the north, the Deccan (peninsular plateau region) in the south, and the Indo-Gangetic Plain (lying over the subsidence zone) between the two. Further information on the geology of India is found in the article Asia.\r\nThe Himalayas\r\nThe Himalayas (from the Sanskrit words hima, â€œsnow,â€ and alaya, â€œabodeâ€), the loftiest mountain system in the world, form the northern limit of India. That great, geologically young mountain arc is about 1,550 miles (2,500 km) long, stretching from the peak of Nanga Parbat (26,660 feet [8,126 metres]) in the Pakistani-administered portion of the Kashmir region to the Namcha Barwa peak in the Tibet Autonomous Region of China. Between those extremes the mountains fall across India, southern Tibet, Nepal, and Bhutan. The width of the system varies between 125 and 250 miles (200 and 400 km).\r\n\r\nWithin India the Himalayas are divided into three longitudinal belts, called the Outer, Lesser, and Great Himalayas. At each extremity there is a great bend in the systemâ€™s alignment, from which a number of lower mountain ranges and hills spread out. Those in the west lie wholly within Pakistan and Afghanistan, while those to the east straddle Indiaâ€™s border with Myanmar (Burma). North of the Himalayas are the Plateau of Tibet and various Trans-Himalayan ranges, only a small part of which, in the Ladakh region of Jammu and Kashmir state (in the Indian-administered portion of Kashmir), are within the territorial limits of India.\r\n\r\nBecause of the continued subduction of the Indian peninsula against the Eurasian Plate, the Himalayas and the associated eastern ranges remain tectonically active. As a result, the mountains are still rising, and earthquakesâ€”often accompanied by landslidesâ€”are common. Several since 1900 have been devastating, including one in 1934 in what is now Bihar state that killed more than 10,000 people. In 2001 another tremor (the Bhuj earthquake), farther from the mountains, in Gujarat state, was less powerful but caused extensive damage, taking the lives of more than 20,000 people and leaving more than 500,000 homeless. Still othersâ€”notably the 2005 quake in Pakistani-administered Kashmir and the 2015 temblor in Nepalâ€”principally affected those regions but also caused widespread damage and hundreds of deaths in adjacent parts of India. The relatively high frequency and wide distribution of earthquakes likewise have generated controversies about the safety and advisability of several hydroelectric and irrigation projects.\r\nThe Outer Himalayas (the Siwalik Range)\r\nThe southernmost of the three mountain belts are the Outer Himalayas, also called the Siwalik (or Shiwalik) Range. Crests in the Siwaliks, averaging from 3,000 to 5,000 feet (900 to 1,500 metres) in elevation, seldom exceed 6,500 feet (2,000 metres). The range narrows as it moves east and is hardly discernible beyond the Duars, a plains region in West Bengal state. Interspersed in the Siwaliks are heavily cultivated flat valleys (duns) with a high population density. To the south of the range is the Indo-Gangetic Plain. Weakly indurated, largely deforested, and subject to heavy rain and intense erosion, the Siwaliks provide much of the sediment transported onto the plain.\r\nThe Lesser Himalayas\r\nTo the north of the Siwaliks and separated from them by a fault zone, the Lesser Himalayas (also called the Lower or Middle Himalayas) rise to heights ranging from 11,900 to 15,100 feet (3,600 to 4,600 metres). Their ancient name is Himachal (Sanskrit: hima, â€œsnow,â€ and acal, â€œmountainâ€). The mountains are composed of both ancient crystalline and geologically young rocks, sometimes in a reversed stratigraphic sequence because of thrust faulting. The Lesser Himalayas are traversed by numerous deep gorges formed by swift-flowing streams (some of them older than the mountains themselves), which are fed by glaciers and snowfields to the north.\r\nThe Great Himalayas\r\nThe northernmost Great, or Higher, Himalayas (in ancient times, the Himadri), with crests generally above 16,000 feet (4,900 metres) in elevation, are composed of ancient crystalline rocks and old marine sedimentary formations. Between the Great and Lesser Himalayas are several fertile longitudinal vales; in India the largest is the Vale of Kashmir, an ancient lake basin with an area of about 1,700 square miles (4,400 square km). The Great Himalayas, ranging from 30 to 45 miles (50 to 75 km) wide, include some of the worldâ€™s highest peaks. The highest in the range, Mount Everest (at 29,035 feet [8,850 metres]; see Researcherâ€™s Note: Height of Mount Everest), is on the China-Nepal border, but India also has many lofty peaks. Notable among those is Kanchenjunga (28,169 feet [8,586 metres]) on the border of Nepal and the state of Sikkim, which is the worldâ€™s third tallest peak and Indiaâ€™s highest point. Other high mountains in India include Nanda Devi (25,646 feet [7,817 metres]), Kamet (25,446 feet [7,755 metres]), and Trisul (23,359 feet [7,120]) in Uttarakhand. The Great Himalayas lie mostly above the line of perpetual snow and thus contain most of the Himalayan glaciers.\r\n', '2053', '2018-12-11 18:03:55', 1, 0),
(6, 1, 2, 4, 'Delta Airlines', 'Delta changes the way fliers board planes', 'A new boarding process is coming to Delta Air Lines.\r\n\r\nBeginning on January 23, 2019, the airline will ditch zone boarding in favor of a new -- and more complex -- process based on ticket type and color.\r\nDespite the expansion in number of groups from six to eight, Delta said the new format hopes to \"encourage fewer customers to line up in the gate area\" and ultimately speed up boarding.\r\nThe Atlanta-based carrier will still begin boarding with passengers that need extra time, followed by premium passengers sitting in its Delta One suites (applicable on select domestic and all international flights) and then its new Premium Select cabin on some international flights or First Class on domestic flights.\r\nAfter that, it gets complicated: The airline used to board the Sky Priority zone -- passengers sitting in Comfort+ and Gold and Platinum Medallion members -- together.\r\nMoving forward, that group will split into two, with Comfort+ passengers boarding first followed by Sky Priority, meaning high-spending members of its frequent flier program will have to wait a little bit longer.\r\nFollowing that, Delta will board economy passengers by announcing Main Cabin 1 though 3, instead of Zone 1 though 4.\r\nFliers that purchase Delta\'s cheapest tickets will board last in a new group: Zone 4 will now be called Basic Economy. Delta credit card holders and Silver Medallion members will board with Main Cabin 1.\r\nEach section will have different colors displayed when they purchase their ticket on Delta\'s website and on airport screens to help.\r\n\"This latest enhancement further refines how Delta\'s process works and is designed to better link the Delta product they purchased to differentiated experiences throughout their journey,\" said Tim Mapes, Delta\'s chief marketing officer, in a statement.', '283', '2018-12-11 18:23:12', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `age` tinyint(2) DEFAULT NULL,
  `birth_date` tinyint(2) NOT NULL,
  `birth_month` tinyint(2) NOT NULL,
  `birth_year` int(4) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zipcode` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `account_status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `email`, `first_name`, `middle_name`, `last_name`, `gender`, `age`, `birth_date`, `birth_month`, `birth_year`, `city`, `state`, `country`, `zipcode`, `address`, `mobile`, `timestamp`, `account_status`) VALUES
(1, 'ratotla', 'r', 'r@t', 'r', NULL, 't', 'f', 22, 30, 3, 1996, 'neemuch', 'mp', 'india', 458441, '27 28 gn', 9425994259, '2018-11-14 20:28:25', 'active'),
(2, 'rt', 'r', 'r@t', 'Rajshri', NULL, 'Totla', 'f', 21, 30, 3, 1997, 'nee', 'madhyapradesh', 'indiaaa', 458441, '263472', 9425512565, '2018-11-14 20:29:21', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `word_limit`
--

CREATE TABLE `word_limit` (
  `word_limit_id` int(11) NOT NULL,
  `word_limit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `word_limit`
--

INSERT INTO `word_limit` (`word_limit_id`, `word_limit`) VALUES
(1, '0-100'),
(2, '101-500'),
(3, '501-1000'),
(4, '1000+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `recommendation`
--
ALTER TABLE `recommendation`
  ADD PRIMARY KEY (`recommendation_id`),
  ADD KEY `upload_id` (`upload_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `upload_id` (`upload_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`upload_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `upload_id` FOREIGN KEY (`upload_id`) REFERENCES `upload` (`upload_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `genre_id` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `type_id` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
