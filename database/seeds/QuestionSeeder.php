<?php

use Illuminate\Database\Seeder;
use App\Question;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = array(
            array('id' => '1','topic_id' => '5','question_text' => 'My loveliest flavour','created_at' => '2020-05-09 01:35:32','updated_at' => '2020-05-09 01:35:32','deleted_at' => NULL),
            array('id' => '2','topic_id' => '6','question_text' => 'This or that?','created_at' => '2020-05-09 01:36:07','updated_at' => '2020-05-09 01:36:07','deleted_at' => NULL),
            array('id' => '3','topic_id' => '6','question_text' => 'This or that?','created_at' => '2020-05-09 01:37:25','updated_at' => '2020-05-09 01:37:25','deleted_at' => NULL),
            array('id' => '4','topic_id' => '6','question_text' => 'This or that?','created_at' => '2020-05-09 01:38:31','updated_at' => '2020-05-09 01:38:31','deleted_at' => NULL),
            array('id' => '5','topic_id' => '5','question_text' => 'Which do I prefer?','created_at' => '2020-05-09 01:39:14','updated_at' => '2020-05-09 01:39:14','deleted_at' => NULL),
            array('id' => '6','topic_id' => '6','question_text' => 'This or that?','created_at' => '2020-05-09 01:39:49','updated_at' => '2020-05-09 01:39:49','deleted_at' => NULL),
            array('id' => '7','topic_id' => '5','question_text' => 'Which do I prefer?','created_at' => '2020-05-09 01:40:28','updated_at' => '2020-05-09 01:40:28','deleted_at' => NULL),
            array('id' => '8','topic_id' => '6','question_text' => 'This or that','created_at' => '2020-05-09 01:40:49','updated_at' => '2020-05-09 01:40:49','deleted_at' => NULL),
            array('id' => '9','topic_id' => '6','question_text' => 'This or that?','created_at' => '2020-05-09 01:42:24','updated_at' => '2020-05-09 01:42:24','deleted_at' => NULL),
            array('id' => '10','topic_id' => '5','question_text' => 'Which do I prefer?','created_at' => '2020-05-09 01:42:55','updated_at' => '2020-05-09 01:42:55','deleted_at' => NULL),
            array('id' => '11','topic_id' => '6','question_text' => 'This or that?','created_at' => '2020-05-09 01:43:20','updated_at' => '2020-05-09 01:43:20','deleted_at' => NULL),
            array('id' => '12','topic_id' => '5','question_text' => 'Which do I prefer?','created_at' => '2020-05-09 01:43:45','updated_at' => '2020-05-09 01:43:45','deleted_at' => NULL),
            array('id' => '13','topic_id' => '6','question_text' => 'This or that?','created_at' => '2020-05-09 01:44:16','updated_at' => '2020-05-09 01:44:16','deleted_at' => NULL),
            array('id' => '14','topic_id' => '5','question_text' => 'Which do I prefer?','created_at' => '2020-05-09 01:44:40','updated_at' => '2020-05-09 01:44:40','deleted_at' => NULL),
            array('id' => '15','topic_id' => '6','question_text' => 'This or that','created_at' => '2020-05-09 01:45:12','updated_at' => '2020-05-09 01:45:12','deleted_at' => NULL),
            array('id' => '16','topic_id' => '5','question_text' => 'Which do I prefer?','created_at' => '2020-05-09 01:45:35','updated_at' => '2020-05-09 01:45:35','deleted_at' => NULL),
            array('id' => '17','topic_id' => '6','question_text' => 'This or that?','created_at' => '2020-05-09 01:46:03','updated_at' => '2020-05-09 01:46:03','deleted_at' => NULL),
            array('id' => '18','topic_id' => '6','question_text' => 'This or that?','created_at' => '2020-05-09 01:47:56','updated_at' => '2020-05-09 01:47:56','deleted_at' => NULL),
            array('id' => '19','topic_id' => '5','question_text' => 'Favourite holiday?','created_at' => '2020-05-09 01:48:33','updated_at' => '2020-05-09 01:48:33','deleted_at' => NULL),
            array('id' => '20','topic_id' => '3','question_text' => 'Which do I prefer','created_at' => '2020-05-09 01:50:29','updated_at' => '2020-05-09 01:50:29','deleted_at' => NULL),
            array('id' => '21','topic_id' => '5','question_text' => 'If I was to choose an ailment or die. Which one will i choose?','created_at' => '2020-05-09 01:51:28','updated_at' => '2020-05-09 01:51:28','deleted_at' => NULL),
            array('id' => '22','topic_id' => '3','question_text' => 'What do I prefer?','created_at' => '2020-05-09 01:52:57','updated_at' => '2020-05-09 01:52:57','deleted_at' => NULL),
            array('id' => '23','topic_id' => '5','question_text' => 'Which do I prefer?','created_at' => '2020-05-09 01:53:26','updated_at' => '2020-05-09 01:53:26','deleted_at' => NULL),
            array('id' => '24','topic_id' => '3','question_text' => 'Which do I prefer?','created_at' => '2020-05-09 01:53:42','updated_at' => '2020-05-09 01:53:42','deleted_at' => NULL),
            array('id' => '25','topic_id' => '3','question_text' => 'Which do I prefer','created_at' => '2020-05-09 01:54:35','updated_at' => '2020-05-09 01:54:35','deleted_at' => NULL),
            array('id' => '26','topic_id' => '3','question_text' => 'My dressing?','created_at' => '2020-05-09 01:56:54','updated_at' => '2020-05-09 01:56:54','deleted_at' => NULL),
            array('id' => '27','topic_id' => '3','question_text' => 'Who knows most of my secrets','created_at' => '2020-05-09 01:58:28','updated_at' => '2020-05-09 01:58:28','deleted_at' => NULL),
            array('id' => '28','topic_id' => '3','question_text' => 'Which set of babies do I like best','created_at' => '2020-05-09 01:59:52','updated_at' => '2020-05-09 01:59:52','deleted_at' => NULL),
            array('id' => '29','topic_id' => '2','question_text' => 'What cheers me up when I\'m sad?','created_at' => '2020-05-09 02:00:25','updated_at' => '2020-05-09 02:00:25','deleted_at' => NULL),
            array('id' => '30','topic_id' => '3','question_text' => 'Pets','created_at' => '2020-05-09 02:01:37','updated_at' => '2020-05-09 02:01:37','deleted_at' => NULL),
            array('id' => '31','topic_id' => '3','question_text' => 'Best time of the day','created_at' => '2020-05-09 02:04:40','updated_at' => '2020-05-09 02:04:40','deleted_at' => NULL),
            array('id' => '32','topic_id' => '3','question_text' => 'How do I respond to appointments','created_at' => '2020-05-09 02:06:45','updated_at' => '2020-05-09 02:06:45','deleted_at' => NULL),
            array('id' => '33','topic_id' => '3','question_text' => 'Which am I?','created_at' => '2020-05-09 02:07:53','updated_at' => '2020-05-09 02:07:53','deleted_at' => NULL),
            array('id' => '34','topic_id' => '2','question_text' => 'My biggest fear?','created_at' => '2020-05-09 02:08:47','updated_at' => '2020-05-09 02:08:47','deleted_at' => NULL),
            array('id' => '35','topic_id' => '3','question_text' => 'Most preferred drink','created_at' => '2020-05-09 02:10:53','updated_at' => '2020-05-09 02:10:53','deleted_at' => NULL),
            array('id' => '36','topic_id' => '2','question_text' => 'When angry what do I do?','created_at' => '2020-05-09 02:13:45','updated_at' => '2020-05-09 02:13:45','deleted_at' => NULL),
            array('id' => '37','topic_id' => '4','question_text' => 'If I was to visit a country which would it be?
          ','created_at' => '2020-05-09 02:15:51','updated_at' => '2020-05-09 02:15:51','deleted_at' => NULL),
            array('id' => '38','topic_id' => '2','question_text' => 'When heart broken?','created_at' => '2020-05-09 02:18:20','updated_at' => '2020-05-09 02:18:20','deleted_at' => NULL),
            array('id' => '39','topic_id' => '2','question_text' => 'How much do I like trouble?','created_at' => '2020-05-09 02:21:25','updated_at' => '2020-05-09 02:21:25','deleted_at' => NULL),
            array('id' => '40','topic_id' => '4','question_text' => 'Which part of my body do I like the most?','created_at' => '2020-05-09 15:02:48','updated_at' => '2020-05-09 15:02:48','deleted_at' => NULL),
            array('id' => '41','topic_id' => '4','question_text' => 'What gets me very emotional','created_at' => '2020-05-09 15:04:47','updated_at' => '2020-05-09 15:04:47','deleted_at' => NULL),
            array('id' => '42','topic_id' => '4','question_text' => 'First impression??','created_at' => '2020-05-09 15:05:29','updated_at' => '2020-05-09 15:05:29','deleted_at' => NULL),
            array('id' => '43','topic_id' => '4','question_text' => 'My favorite music?','created_at' => '2020-05-09 15:06:31','updated_at' => '2020-05-09 15:06:31','deleted_at' => NULL),
            array('id' => '44','topic_id' => '4','question_text' => 'Can I do a long term relationship','created_at' => '2020-05-09 15:07:11','updated_at' => '2020-05-09 15:07:11','deleted_at' => NULL),
            array('id' => '45','topic_id' => '4','question_text' => 'If I was an animal what would I be?','created_at' => '2020-05-09 15:08:11','updated_at' => '2020-05-09 15:08:11','deleted_at' => NULL),
            array('id' => '46','topic_id' => '4','question_text' => 'Which one do I prefer?','created_at' => '2020-05-09 15:08:56','updated_at' => '2020-05-09 15:08:56','deleted_at' => NULL),
            array('id' => '47','topic_id' => '4','question_text' => 'Which one do I prefer?','created_at' => '2020-05-09 15:09:23','updated_at' => '2020-05-09 15:09:23','deleted_at' => NULL),
            array('id' => '48','topic_id' => '4','question_text' => 'Which one do I prefer','created_at' => '2020-05-09 15:10:01','updated_at' => '2020-05-09 15:10:01','deleted_at' => NULL),
            array('id' => '49','topic_id' => '4','question_text' => 'How many percent do I know you?','created_at' => '2020-05-09 15:10:59','updated_at' => '2020-05-09 15:10:59','deleted_at' => NULL),
            array('id' => '50','topic_id' => '4','question_text' => 'Do you believe in true love','created_at' => '2020-05-09 15:12:20','updated_at' => '2020-05-09 15:12:20','deleted_at' => NULL),


            array('id' => '51','topic_id' => '2','question_text' => ' I can never get tired of?','created_at' => '2020-05-09 02:18:20','updated_at' => '2020-05-09 02:18:20','deleted_at' => NULL),
            array('id' => '52','topic_id' => '2','question_text' => ' Hard working or lazy?','created_at' => '2020-05-09 02:18:20','updated_at' => '2020-05-09 02:18:20','deleted_at' => NULL),
            array('id' => '53','topic_id' => '2','question_text' => ' Best type of movie?','created_at' => '2020-05-09 02:18:20','updated_at' => '2020-05-09 02:18:20','deleted_at' => NULL),
            array('id' => '54','topic_id' => '2','question_text' => ' I\'d prefer to b stranded in ??','created_at' => '2020-05-09 02:18:20','updated_at' => '2020-05-09 02:18:20','deleted_at' => NULL),
            array('id' => '55','topic_id' => '2','question_text' => 'I prefer to go to a ?','created_at' => '2020-05-09 02:18:20','updated_at' => '2020-05-09 02:18:20','deleted_at' => NULL),
            array('id' => '56','topic_id' => '2','question_text' => ' Afraid of?','created_at' => '2020-05-09 02:18:20','updated_at' => '2020-05-09 02:18:20','deleted_at' => NULL),
            array('id' => '57','topic_id' => '2','question_text' => ' Wedding guests?','created_at' => '2020-05-09 02:18:20','updated_at' => '2020-05-09 02:18:20','deleted_at' => NULL),


        );

          foreach ($questions as $question =>$value ) {
            Question::create([
                'id'=> $value['id'],
             "question_text"=> $value['question_text'],
             "topic_id"=>$value['topic_id']
                ]);
          }

    }
}
