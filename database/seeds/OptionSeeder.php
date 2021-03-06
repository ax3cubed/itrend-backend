<?php

use Illuminate\Database\Seeder;
use App\QuestionsOption;
class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions_options = array(
            array('id' => '1','question_id' => '1','option' => 'Vanilla ','created_at' => '2020-05-09 01:35:32','updated_at' => '2020-05-09 01:35:32','deleted_at' => NULL),
            array('id' => '2','question_id' => '1','option' => 'Chocolate ','created_at' => '2020-05-09 01:35:32','updated_at' => '2020-05-09 01:35:32','deleted_at' => NULL),
            array('id' => '3','question_id' => '1','option' => 'Strawberry ','created_at' => '2020-05-09 01:35:32','updated_at' => '2020-05-09 01:35:32','deleted_at' => NULL),
            array('id' => '4','question_id' => '2','option' => 'Shy','created_at' => '2020-05-09 01:36:07','updated_at' => '2020-05-09 01:36:07','deleted_at' => NULL),
            array('id' => '5','question_id' => '2','option' => 'outgoing','created_at' => '2020-05-09 01:36:07','updated_at' => '2020-05-09 01:36:07','deleted_at' => NULL),
            array('id' => '6','question_id' => '3','option' => 'Fashion','created_at' => '2020-05-09 01:37:25','updated_at' => '2020-05-09 01:37:25','deleted_at' => NULL),
            array('id' => '7','question_id' => '3','option' => 'music','created_at' => '2020-05-09 01:37:25','updated_at' => '2020-05-09 01:37:25','deleted_at' => NULL),
            array('id' => '8','question_id' => '4','option' => 'Novel','created_at' => '2020-05-09 01:38:31','updated_at' => '2020-05-09 01:38:31','deleted_at' => NULL),
            array('id' => '9','question_id' => '4','option' => 'music','created_at' => '2020-05-09 01:38:31','updated_at' => '2020-05-09 01:38:31','deleted_at' => NULL),
            array('id' => '10','question_id' => '5','option' => 'Eat out ','created_at' => '2020-05-09 01:39:14','updated_at' => '2020-05-09 01:39:14','deleted_at' => NULL),
            array('id' => '11','question_id' => '5','option' => 'Home made food','created_at' => '2020-05-09 01:39:14','updated_at' => '2020-05-09 01:39:14','deleted_at' => NULL),
            array('id' => '12','question_id' => '6','option' => 'Wedge ','created_at' => '2020-05-09 01:39:49','updated_at' => '2020-05-09 01:39:49','deleted_at' => NULL),
            array('id' => '13','question_id' => '6','option' => 'heels','created_at' => '2020-05-09 01:39:49','updated_at' => '2020-05-09 01:39:49','deleted_at' => NULL),
            array('id' => '14','question_id' => '6','option' => 'sneakers','created_at' => '2020-05-09 01:39:49','updated_at' => '2020-05-09 01:39:49','deleted_at' => NULL),
            array('id' => '15','question_id' => '7','option' => 'Spicy Food','created_at' => '2020-05-09 01:40:28','updated_at' => '2020-05-09 01:40:28','deleted_at' => NULL),
            array('id' => '16','question_id' => '7','option' => 'Not spicy Food','created_at' => '2020-05-09 01:40:28','updated_at' => '2020-05-09 01:40:28','deleted_at' => NULL),
            array('id' => '17','question_id' => '8','option' => 'Shoes','created_at' => '2020-05-09 01:40:49','updated_at' => '2020-05-09 01:40:49','deleted_at' => NULL),
            array('id' => '18','question_id' => '8','option' => 'sneakers','created_at' => '2020-05-09 01:40:49','updated_at' => '2020-05-09 01:40:49','deleted_at' => NULL),
            array('id' => '19','question_id' => '8','option' => 'palms','created_at' => '2020-05-09 01:40:49','updated_at' => '2020-05-09 01:40:49','deleted_at' => NULL),
            array('id' => '20','question_id' => '9','option' => 'English','created_at' => '2020-05-09 01:42:24','updated_at' => '2020-05-09 01:42:24','deleted_at' => NULL),
            array('id' => '21','question_id' => '9','option' => 'native','created_at' => '2020-05-09 01:42:24','updated_at' => '2020-05-09 01:42:24','deleted_at' => NULL),
            array('id' => '22','question_id' => '10','option' => 'Sharwama ','created_at' => '2020-05-09 01:42:55','updated_at' => '2020-05-09 01:42:55','deleted_at' => NULL),
            array('id' => '23','question_id' => '10','option' => 'Pizza ','created_at' => '2020-05-09 01:42:55','updated_at' => '2020-05-09 01:42:55','deleted_at' => NULL),
            array('id' => '24','question_id' => '11','option' => 'Dinner','created_at' => '2020-05-09 01:43:20','updated_at' => '2020-05-09 01:43:20','deleted_at' => NULL),
            array('id' => '25','question_id' => '11','option' => 'go to movies','created_at' => '2020-05-09 01:43:20','updated_at' => '2020-05-09 01:43:20','deleted_at' => NULL),
            array('id' => '26','question_id' => '12','option' => 'Egg','created_at' => '2020-05-09 01:43:45','updated_at' => '2020-05-09 01:43:45','deleted_at' => NULL),
            array('id' => '27','question_id' => '12','option' => 'Fish','created_at' => '2020-05-09 01:43:45','updated_at' => '2020-05-09 01:43:45','deleted_at' => NULL),
            array('id' => '28','question_id' => '13','option' => 'Money','created_at' => '2020-05-09 01:44:16','updated_at' => '2020-05-09 01:44:16','deleted_at' => NULL),
            array('id' => '29','question_id' => '13','option' => 'love','created_at' => '2020-05-09 01:44:16','updated_at' => '2020-05-09 01:44:16','deleted_at' => NULL),
            array('id' => '30','question_id' => '14','option' => 'Fashion ','created_at' => '2020-05-09 01:44:40','updated_at' => '2020-05-09 01:44:40','deleted_at' => NULL),
            array('id' => '31','question_id' => '14','option' => 'Music','created_at' => '2020-05-09 01:44:40','updated_at' => '2020-05-09 01:44:40','deleted_at' => NULL),
            array('id' => '32','question_id' => '15','option' => 'Flowers','created_at' => '2020-05-09 01:45:12','updated_at' => '2020-05-09 01:45:12','deleted_at' => NULL),
            array('id' => '33','question_id' => '15','option' => 'pets','created_at' => '2020-05-09 01:45:12','updated_at' => '2020-05-09 01:45:12','deleted_at' => NULL),
            array('id' => '34','question_id' => '16','option' => 'Novels','created_at' => '2020-05-09 01:45:35','updated_at' => '2020-05-09 01:45:35','deleted_at' => NULL),
            array('id' => '35','question_id' => '16','option' => 'Movies','created_at' => '2020-05-09 01:45:35','updated_at' => '2020-05-09 01:45:35','deleted_at' => NULL),
            array('id' => '36','question_id' => '17','option' => 'Twitter','created_at' => '2020-05-09 01:46:03','updated_at' => '2020-05-09 01:46:03','deleted_at' => NULL),
            array('id' => '37','question_id' => '17','option' => 'WhatsApp','created_at' => '2020-05-09 01:46:03','updated_at' => '2020-05-09 01:46:03','deleted_at' => NULL),
            array('id' => '38','question_id' => '18','option' => 'Movies','created_at' => '2020-05-09 01:47:56','updated_at' => '2020-05-09 01:47:56','deleted_at' => NULL),
            array('id' => '39','question_id' => '18','option' => 'dinner','created_at' => '2020-05-09 01:47:56','updated_at' => '2020-05-09 01:47:56','deleted_at' => NULL),
            array('id' => '40','question_id' => '19','option' => 'Quarantine ','created_at' => '2020-05-09 01:48:33','updated_at' => '2020-05-09 01:48:33','deleted_at' => NULL),
            array('id' => '41','question_id' => '19','option' => 'Christmas ','created_at' => '2020-05-09 01:48:33','updated_at' => '2020-05-09 01:48:33','deleted_at' => NULL),
            array('id' => '42','question_id' => '19','option' => 'Halloween ','created_at' => '2020-05-09 01:48:33','updated_at' => '2020-05-09 01:48:33','deleted_at' => NULL),
            array('id' => '43','question_id' => '19','option' => 'New year','created_at' => '2020-05-09 01:48:33','updated_at' => '2020-05-09 01:48:33','deleted_at' => NULL),
            array('id' => '44','question_id' => '19','option' => 'Muslim holiday ','created_at' => '2020-05-09 01:48:33','updated_at' => '2020-05-09 01:48:33','deleted_at' => NULL),
            array('id' => '45','question_id' => '20','option' => 'Movies','created_at' => '2020-05-09 01:50:29','updated_at' => '2020-05-09 01:50:29','deleted_at' => NULL),
            array('id' => '46','question_id' => '20','option' => 'dinner','created_at' => '2020-05-09 01:50:29','updated_at' => '2020-05-09 01:50:29','deleted_at' => NULL),
            array('id' => '47','question_id' => '21','option' => 'Deaf','created_at' => '2020-05-09 01:51:28','updated_at' => '2020-05-09 01:51:28','deleted_at' => NULL),
            array('id' => '48','question_id' => '21','option' => 'Blind','created_at' => '2020-05-09 01:51:28','updated_at' => '2020-05-09 01:51:28','deleted_at' => NULL),
            array('id' => '49','question_id' => '21','option' => 'Death','created_at' => '2020-05-09 01:51:28','updated_at' => '2020-05-09 01:51:28','deleted_at' => NULL),
            array('id' => '50','question_id' => '22','option' => 'Facebook','created_at' => '2020-05-09 01:52:57','updated_at' => '2020-05-09 01:52:57','deleted_at' => NULL),
            array('id' => '51','question_id' => '22','option' => 'Instagram','created_at' => '2020-05-09 01:52:57','updated_at' => '2020-05-09 01:52:57','deleted_at' => NULL),
            array('id' => '52','question_id' => '23','option' => 'Cartoons','created_at' => '2020-05-09 01:53:26','updated_at' => '2020-05-09 01:53:26','deleted_at' => NULL),
            array('id' => '53','question_id' => '23','option' => 'Animė','created_at' => '2020-05-09 01:53:26','updated_at' => '2020-05-09 01:53:26','deleted_at' => NULL),
            array('id' => '54','question_id' => '23','option' => 'None','created_at' => '2020-05-09 01:53:26','updated_at' => '2020-05-09 01:53:26','deleted_at' => NULL),
            array('id' => '55','question_id' => '24','option' => 'Summer','created_at' => '2020-05-09 01:53:42','updated_at' => '2020-05-09 01:53:42','deleted_at' => NULL),
            array('id' => '56','question_id' => '24','option' => 'winter','created_at' => '2020-05-09 01:53:42','updated_at' => '2020-05-09 01:53:42','deleted_at' => NULL),
            array('id' => '57','question_id' => '24','option' => 'rainy','created_at' => '2020-05-09 01:53:42','updated_at' => '2020-05-09 01:53:42','deleted_at' => NULL),
            array('id' => '58','question_id' => '25','option' => 'Calls','created_at' => '2020-05-09 01:54:35','updated_at' => '2020-05-09 01:54:35','deleted_at' => NULL),
            array('id' => '59','question_id' => '25','option' => 'chats ','created_at' => '2020-05-09 01:54:35','updated_at' => '2020-05-09 01:54:35','deleted_at' => NULL),
            array('id' => '60','question_id' => '25','option' => 'none','created_at' => '2020-05-09 01:54:35','updated_at' => '2020-05-09 01:54:35','deleted_at' => NULL),
            array('id' => '61','question_id' => '26','option' => 'Simple','created_at' => '2020-05-09 01:56:55','updated_at' => '2020-05-09 01:56:55','deleted_at' => NULL),
            array('id' => '62','question_id' => '26','option' => 'luxurious ','created_at' => '2020-05-09 01:56:55','updated_at' => '2020-05-09 01:56:55','deleted_at' => NULL),
            array('id' => '63','question_id' => '27','option' => 'Family','created_at' => '2020-05-09 01:58:28','updated_at' => '2020-05-09 01:58:28','deleted_at' => NULL),
            array('id' => '64','question_id' => '27','option' => 'friends','created_at' => '2020-05-09 01:58:28','updated_at' => '2020-05-09 01:58:28','deleted_at' => NULL),
            array('id' => '65','question_id' => '27','option' => 'lover','created_at' => '2020-05-09 01:58:28','updated_at' => '2020-05-09 01:58:28','deleted_at' => NULL),
            array('id' => '66','question_id' => '27','option' => 'online friend','created_at' => '2020-05-09 01:58:28','updated_at' => '2020-05-09 01:58:28','deleted_at' => NULL),
            array('id' => '67','question_id' => '28','option' => 'One','created_at' => '2020-05-09 01:59:52','updated_at' => '2020-05-09 01:59:52','deleted_at' => NULL),
            array('id' => '68','question_id' => '28','option' => 'twin','created_at' => '2020-05-09 01:59:52','updated_at' => '2020-05-09 01:59:52','deleted_at' => NULL),
            array('id' => '69','question_id' => '28','option' => 'triplet','created_at' => '2020-05-09 01:59:52','updated_at' => '2020-05-09 01:59:52','deleted_at' => NULL),
            array('id' => '70','question_id' => '29','option' => 'A song','created_at' => '2020-05-09 02:00:25','updated_at' => '2020-05-09 02:00:25','deleted_at' => NULL),
            array('id' => '71','question_id' => '29','option' => 'A surprise','created_at' => '2020-05-09 02:00:25','updated_at' => '2020-05-09 02:00:25','deleted_at' => NULL),
            array('id' => '72','question_id' => '29','option' => 'A Comedy','created_at' => '2020-05-09 02:00:25','updated_at' => '2020-05-09 02:00:25','deleted_at' => NULL),
            array('id' => '73','question_id' => '29','option' => 'A tight hug','created_at' => '2020-05-09 02:00:25','updated_at' => '2020-05-09 02:00:25','deleted_at' => NULL),
            array('id' => '74','question_id' => '29','option' => 'Food','created_at' => '2020-05-09 02:00:25','updated_at' => '2020-05-09 02:00:25','deleted_at' => NULL),
            array('id' => '75','question_id' => '30','option' => 'Cat person','created_at' => '2020-05-09 02:01:37','updated_at' => '2020-05-09 02:01:37','deleted_at' => NULL),
            array('id' => '76','question_id' => '30','option' => 'dog person','created_at' => '2020-05-09 02:01:37','updated_at' => '2020-05-09 02:01:37','deleted_at' => NULL),
            array('id' => '77','question_id' => '30','option' => 'Both','created_at' => '2020-05-09 02:01:37','updated_at' => '2020-05-09 02:01:37','deleted_at' => NULL),
            array('id' => '78','question_id' => '30','option' => 'None','created_at' => '2020-05-09 02:01:37','updated_at' => '2020-05-09 02:01:37','deleted_at' => NULL),
            array('id' => '79','question_id' => '31','option' => 'Morning person','created_at' => '2020-05-09 02:04:40','updated_at' => '2020-05-09 02:04:40','deleted_at' => NULL),
            array('id' => '80','question_id' => '31','option' => 'night owl ','created_at' => '2020-05-09 02:04:40','updated_at' => '2020-05-09 02:04:40','deleted_at' => NULL),
            array('id' => '81','question_id' => '32','option' => 'Always come late','created_at' => '2020-05-09 02:06:45','updated_at' => '2020-05-09 02:06:45','deleted_at' => NULL),
            array('id' => '82','question_id' => '32','option' => 'always come early','created_at' => '2020-05-09 02:06:45','updated_at' => '2020-05-09 02:06:45','deleted_at' => NULL),
            array('id' => '83','question_id' => '32','option' => 'Sometimes late, sometimes early','created_at' => '2020-05-09 02:06:45','updated_at' => '2020-05-09 02:06:45','deleted_at' => NULL),
            array('id' => '84','question_id' => '33','option' => 'Foodie','created_at' => '2020-05-09 02:07:53','updated_at' => '2020-05-09 02:07:53','deleted_at' => NULL),
            array('id' => '85','question_id' => '33','option' => 'Sleeping being','created_at' => '2020-05-09 02:07:53','updated_at' => '2020-05-09 02:07:53','deleted_at' => NULL),
            array('id' => '86','question_id' => '33','option' => 'Both','created_at' => '2020-05-09 02:07:53','updated_at' => '2020-05-09 02:07:53','deleted_at' => NULL),
            array('id' => '87','question_id' => '34','option' => 'Death','created_at' => '2020-05-09 02:08:47','updated_at' => '2020-05-09 02:08:47','deleted_at' => NULL),
            array('id' => '88','question_id' => '34','option' => 'Failure','created_at' => '2020-05-09 02:08:47','updated_at' => '2020-05-09 02:08:47','deleted_at' => NULL),
            array('id' => '89','question_id' => '34','option' => 'Unloved','created_at' => '2020-05-09 02:08:47','updated_at' => '2020-05-09 02:08:47','deleted_at' => NULL),
            array('id' => '90','question_id' => '34','option' => 'Ghost','created_at' => '2020-05-09 02:08:47','updated_at' => '2020-05-09 02:08:47','deleted_at' => NULL),
            array('id' => '91','question_id' => '35','option' => 'Tea','created_at' => '2020-05-09 02:10:53','updated_at' => '2020-05-09 02:10:53','deleted_at' => NULL),
            array('id' => '92','question_id' => '35','option' => 'cofee','created_at' => '2020-05-09 02:10:53','updated_at' => '2020-05-09 02:10:53','deleted_at' => NULL),
            array('id' => '93','question_id' => '35','option' => 'Yoghurt','created_at' => '2020-05-09 02:10:53','updated_at' => '2020-05-09 02:10:53','deleted_at' => NULL),
            array('id' => '94','question_id' => '35','option' => 'Juice','created_at' => '2020-05-09 02:10:53','updated_at' => '2020-05-09 02:10:53','deleted_at' => NULL),
            array('id' => '95','question_id' => '35','option' => 'Water','created_at' => '2020-05-09 02:10:53','updated_at' => '2020-05-09 02:10:53','deleted_at' => NULL),
            array('id' => '96','question_id' => '36','option' => 'Smile','created_at' => '2020-05-09 02:13:45','updated_at' => '2020-05-09 02:13:45','deleted_at' => NULL),
            array('id' => '97','question_id' => '36','option' => 'Walk away','created_at' => '2020-05-09 02:13:45','updated_at' => '2020-05-09 02:13:45','deleted_at' => NULL),
            array('id' => '98','question_id' => '36','option' => 'Scream','created_at' => '2020-05-09 02:13:45','updated_at' => '2020-05-09 02:13:45','deleted_at' => NULL),
            array('id' => '99','question_id' => '36','option' => 'React immediately ','created_at' => '2020-05-09 02:13:45','updated_at' => '2020-05-09 02:13:45','deleted_at' => NULL),
            array('id' => '100','question_id' => '37','option' => 'Paris','created_at' => '2020-05-09 02:15:51','updated_at' => '2020-05-09 02:15:51','deleted_at' => NULL),
            array('id' => '101','question_id' => '37','option' => 'UK','created_at' => '2020-05-09 02:15:51','updated_at' => '2020-05-09 02:15:51','deleted_at' => NULL),
            array('id' => '102','question_id' => '37','option' => 'US','created_at' => '2020-05-09 02:15:51','updated_at' => '2020-05-09 02:15:51','deleted_at' => NULL),
            array('id' => '103','question_id' => '37','option' => 'Canada','created_at' => '2020-05-09 02:15:51','updated_at' => '2020-05-09 02:15:51','deleted_at' => NULL),
            array('id' => '104','question_id' => '37','option' => 'Mexico','created_at' => '2020-05-09 02:15:51','updated_at' => '2020-05-09 02:15:51','deleted_at' => NULL),
            array('id' => '105','question_id' => '38','option' => 'Cry','created_at' => '2020-05-09 02:18:20','updated_at' => '2020-05-09 02:18:20','deleted_at' => NULL),
            array('id' => '106','question_id' => '38','option' => 'Be alone','created_at' => '2020-05-09 02:18:20','updated_at' => '2020-05-09 02:18:20','deleted_at' => NULL),
            array('id' => '107','question_id' => '38','option' => 'Have fun','created_at' => '2020-05-09 02:18:20','updated_at' => '2020-05-09 02:18:20','deleted_at' => NULL),
            array('id' => '108','question_id' => '38','option' => 'Watch a movie','created_at' => '2020-05-09 02:18:20','updated_at' => '2020-05-09 02:18:20','deleted_at' => NULL),
            array('id' => '109','question_id' => '38','option' => 'Love is a scam','created_at' => '2020-05-09 02:18:20','updated_at' => '2020-05-09 02:18:20','deleted_at' => NULL),
            array('id' => '110','question_id' => '39','option' => 'Very much','created_at' => '2020-05-09 02:21:25','updated_at' => '2020-05-09 02:21:25','deleted_at' => NULL),
            array('id' => '111','question_id' => '39','option' => 'A little','created_at' => '2020-05-09 02:21:25','updated_at' => '2020-05-09 02:21:25','deleted_at' => NULL),
            array('id' => '112','question_id' => '39','option' => 'Not at all','created_at' => '2020-05-09 02:21:25','updated_at' => '2020-05-09 02:21:25','deleted_at' => NULL),
            array('id' => '113','question_id' => '39','option' => 'Averagely ','created_at' => '2020-05-09 02:21:25','updated_at' => '2020-05-09 02:21:25','deleted_at' => NULL),
            array('id' => '114','question_id' => '40','option' => 'Shape','created_at' => '2020-05-09 15:02:48','updated_at' => '2020-05-09 15:02:48','deleted_at' => NULL),
            array('id' => '115','question_id' => '40','option' => 'private part','created_at' => '2020-05-09 15:02:48','updated_at' => '2020-05-09 15:02:48','deleted_at' => NULL),
            array('id' => '116','question_id' => '40','option' => 'face','created_at' => '2020-05-09 15:02:48','updated_at' => '2020-05-09 15:02:48','deleted_at' => NULL),
            array('id' => '117','question_id' => '40','option' => 'hair','created_at' => '2020-05-09 15:02:48','updated_at' => '2020-05-09 15:02:48','deleted_at' => NULL),
            array('id' => '118','question_id' => '41','option' => 'A surprise','created_at' => '2020-05-09 15:04:47','updated_at' => '2020-05-09 15:04:47','deleted_at' => NULL),
            array('id' => '119','question_id' => '41','option' => 'A text','created_at' => '2020-05-09 15:04:47','updated_at' => '2020-05-09 15:04:47','deleted_at' => NULL),
            array('id' => '120','question_id' => '41','option' => 'a kiss','created_at' => '2020-05-09 15:04:47','updated_at' => '2020-05-09 15:04:47','deleted_at' => NULL),
            array('id' => '121','question_id' => '41','option' => 'my favorite song','created_at' => '2020-05-09 15:04:47','updated_at' => '2020-05-09 15:04:47','deleted_at' => NULL),
            array('id' => '122','question_id' => '42','option' => 'Crazy','created_at' => '2020-05-09 15:05:29','updated_at' => '2020-05-09 15:05:29','deleted_at' => NULL),
            array('id' => '123','question_id' => '42','option' => 'quiet','created_at' => '2020-05-09 15:05:29','updated_at' => '2020-05-09 15:05:29','deleted_at' => NULL),
            array('id' => '124','question_id' => '42','option' => 'stubborn','created_at' => '2020-05-09 15:05:29','updated_at' => '2020-05-09 15:05:29','deleted_at' => NULL),
            array('id' => '125','question_id' => '42','option' => 'funny','created_at' => '2020-05-09 15:05:29','updated_at' => '2020-05-09 15:05:29','deleted_at' => NULL),
            array('id' => '126','question_id' => '43','option' => 'Hip hop','created_at' => '2020-05-09 15:06:31','updated_at' => '2020-05-09 15:06:31','deleted_at' => NULL),
            array('id' => '127','question_id' => '43','option' => 'slow and emotional','created_at' => '2020-05-09 15:06:31','updated_at' => '2020-05-09 15:06:31','deleted_at' => NULL),
            array('id' => '128','question_id' => '43','option' => 'Country','created_at' => '2020-05-09 15:06:31','updated_at' => '2020-05-09 15:06:31','deleted_at' => NULL),
            array('id' => '129','question_id' => '43','option' => 'traditional','created_at' => '2020-05-09 15:06:31','updated_at' => '2020-05-09 15:06:31','deleted_at' => NULL),
            array('id' => '130','question_id' => '44','option' => 'Yes','created_at' => '2020-05-09 15:07:11','updated_at' => '2020-05-09 15:07:11','deleted_at' => NULL),
            array('id' => '131','question_id' => '44','option' => 'no','created_at' => '2020-05-09 15:07:11','updated_at' => '2020-05-09 15:07:11','deleted_at' => NULL),
            array('id' => '132','question_id' => '44','option' => 'maybe','created_at' => '2020-05-09 15:07:11','updated_at' => '2020-05-09 15:07:11','deleted_at' => NULL),
            array('id' => '133','question_id' => '45','option' => 'Bunny','created_at' => '2020-05-09 15:08:11','updated_at' => '2020-05-09 15:08:11','deleted_at' => NULL),
            array('id' => '134','question_id' => '45','option' => 'peacock','created_at' => '2020-05-09 15:08:11','updated_at' => '2020-05-09 15:08:11','deleted_at' => NULL),
            array('id' => '135','question_id' => '45','option' => 'goat','created_at' => '2020-05-09 15:08:11','updated_at' => '2020-05-09 15:08:11','deleted_at' => NULL),
            array('id' => '136','question_id' => '45','option' => 'tortoise','created_at' => '2020-05-09 15:08:11','updated_at' => '2020-05-09 15:08:11','deleted_at' => NULL),
            array('id' => '137','question_id' => '45','option' => 'Parrot','created_at' => '2020-05-09 15:08:11','updated_at' => '2020-05-09 15:08:11','deleted_at' => NULL),
            array('id' => '138','question_id' => '46','option' => 'Cold shower','created_at' => '2020-05-09 15:08:56','updated_at' => '2020-05-09 15:08:56','deleted_at' => NULL),
            array('id' => '139','question_id' => '46','option' => 'hot shower','created_at' => '2020-05-09 15:08:56','updated_at' => '2020-05-09 15:08:56','deleted_at' => NULL),
            array('id' => '140','question_id' => '46','option' => 'warm shower','created_at' => '2020-05-09 15:08:56','updated_at' => '2020-05-09 15:08:56','deleted_at' => NULL),
            array('id' => '141','question_id' => '47','option' => 'Romance','created_at' => '2020-05-09 15:09:23','updated_at' => '2020-05-09 15:09:23','deleted_at' => NULL),
            array('id' => '142','question_id' => '47','option' => 'sex','created_at' => '2020-05-09 15:09:23','updated_at' => '2020-05-09 15:09:23','deleted_at' => NULL),
            array('id' => '143','question_id' => '48','option' => 'Tight hugs','created_at' => '2020-05-09 15:10:01','updated_at' => '2020-05-09 15:10:01','deleted_at' => NULL),
            array('id' => '144','question_id' => '48','option' => 'deep kiss','created_at' => '2020-05-09 15:10:01','updated_at' => '2020-05-09 15:10:01','deleted_at' => NULL),
            array('id' => '145','question_id' => '49','option' => 'Below 50','created_at' => '2020-05-09 15:10:59','updated_at' => '2020-05-09 15:10:59','deleted_at' => NULL),
            array('id' => '146','question_id' => '49','option' => 'average','created_at' => '2020-05-09 15:10:59','updated_at' => '2020-05-09 15:10:59','deleted_at' => NULL),
            array('id' => '147','question_id' => '49','option' => '80%','created_at' => '2020-05-09 15:10:59','updated_at' => '2020-05-09 15:10:59','deleted_at' => NULL),
            array('id' => '148','question_id' => '49','option' => 'Absolutely','created_at' => '2020-05-09 15:10:59','updated_at' => '2020-05-09 15:10:59','deleted_at' => NULL),
            array('id' => '149','question_id' => '50','option' => 'Yes','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '150','question_id' => '50','option' => 'no','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '151','question_id' => '50','option' => 'not really','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '152','question_id' => '50','option' => 'I don\'t Care!','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '153','question_id' => '50','option' => 'Kinda','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),


            array('id' => '154','question_id' => '51','option' => 'Eating','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '155','question_id' => '51','option' => 'dancing','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '156','question_id' => '51','option' => 'Gisting','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '157','question_id' => '51','option' => 'Sleeping','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '158','question_id' => '51','option' => 'Other','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),

            array('id' => '159','question_id' => '52','option' => 'Hardworking','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '160','question_id' => '52','option' => 'Lazy','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),

            array('id' => '161','question_id' => '53','option' => 'Horror','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '162','question_id' => '53','option' => 'comedy','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '163','question_id' => '53','option' => 'romance','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '164','question_id' => '53','option' => 'action','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),


            array('id' => '165','question_id' => '54','option' => ' an island','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '166','question_id' => '54','option' => 'ocean','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '167','question_id' => '54','option' => 'cave','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '168','question_id' => '54','option' => 'dessert','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),

            array('id' => '169','question_id' => '55','option' => ' Pool','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '170','question_id' => '55','option' => 'beach','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),



            array('id' => '173','question_id' => '56','option' => '  Heights','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '174','question_id' => '56','option' => 'public speaking','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '175','question_id' => '56','option' => 'death','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '176','question_id' => '56','option' => 'ghosts','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),


            array('id' => '177','question_id' => '57','option' => 'Large guests ','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),
            array('id' => '178','question_id' => '57','option' => 'only a few','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),

        );

          foreach ($questions_options as $options =>$option ) {
            QuestionsOption::create([
                'id'=> $option['id'],
              'question_id' => $option['question_id'],
              'option' => $option['option']
            ]);
          }

    }
}
