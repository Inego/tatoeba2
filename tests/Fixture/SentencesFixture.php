<?php
/* Sentence Fixture generated on: 2014-10-26 16:46:13 : 1414341973 */
namespace App\Test\Fixture;

use Cake\Database\ConnectionManager;
use Cake\TestSuite\Fixture\TestFixture;

class SentencesFixture extends TestFixture {
	public $name = 'Sentence';

	public $fields = array(
		'id' => ['type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false],
		'lang' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'],
		'text' => ['type' => 'text', 'null' => false, 'default' => null, 'length' => 1500],
		'correctness' => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'unsigned' => false],
		'user_id' => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
		'created' => ['type' => 'datetime', 'null' => true, 'default' => null],
		'modified' => ['type' => 'datetime', 'null' => true, 'default' => null],
		'script' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'],
		'hash' => ['type' => 'string', 'null' => false, 'default' => null, 'length' => 16],
		'license' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
		'based_on_id' => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
		'_indexes' => [
			'user_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
			'lang' => ['type' => 'index', 'columns' => ['lang'], 'length' => []],
			'modified_idx' => ['type' => 'index', 'columns' => ['modified'], 'length' => []],
			'hash' => ['type' => 'index', 'columns' => ['hash'], 'length' => []],
		],
		'_constraints' => ['primary' => ['type' => 'primary', 'columns' => ['id']]],
		'_options' => ['charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB']
	);

	public $records = array(
		array(
			'id' => '1',
			'lang' => 'eng',
			'text' => 'The fundamental cause of the problem is that in the modern world, idiots are full of confidence, while the intelligent are full of doubt.',
			'correctness' => NULL,
			'user_id' => '7',
			'created' => '2014-04-15 00:32:08',
			'modified' => '2014-04-15 00:32:08',
			'script' => null,
			'hash' => "316iri9\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '2',
			'lang' => 'cmn',
			'text' => '问题的根源是，在当今世界，愚人充满了自信，而智者充满了怀疑。',
			'correctness' => NULL,
			'user_id' => '7',
			'created' => '2014-04-15 00:32:43',
			'modified' => '2014-04-15 00:32:43',
			'script' => 'Hans',
			'hash' => "lpq7hv\0\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '3',
			'lang' => 'spa',
			'text' => 'La causa fundamental del problema es que en el mundo moderno, los idiotas están llenos de confianza, mientras que los inteligentes están llenos de dudas.',
			'correctness' => NULL,
			'user_id' => '7',
			'created' => '2014-04-15 00:33:18',
			'modified' => '2014-04-15 00:33:18',
			'script' => null,
			'hash' => "2hfhma4\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '4',
			'lang' => 'fra',
			'text' => 'La cause fondamentale du problème est que dans le monde moderne, les imbéciles sont plein d\'assurance, alors que les gens intelligents sont pleins de doute.',
			'correctness' => NULL,
			'user_id' => '7',
			'created' => '2014-04-15 00:34:28',
			'modified' => '2014-04-15 00:34:28',
			'script' => null,
			'hash' => "1ufg349\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '5',
			'lang' => 'deu',
			'text' => 'Das grundlegende Problem ist, dass in der modernen Welt die Dummköpfe sich vollkommen sicher sind, während die Klugen voller Zweifel sind.',
			'correctness' => NULL,
			'user_id' => '7',
			'created' => '2014-04-15 00:35:03',
			'modified' => '2014-04-15 00:35:03',
			'script' => null,
			'hash' => "p7gnh5\0\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '6',
			'lang' => 'jpn',
			'text' => 'その問題の根本原因は、現代の世界において、賢明な人々が猜疑心に満ちている一方で、愚かな人々が自信過剰であるということである。',
			'correctness' => NULL,
			'user_id' => '7',
			'created' => '2014-04-15 00:39:23',
			'modified' => '2014-04-15 00:39:36',
			'script' => null,
			'hash' => "3pn2l5o\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '7',
			'lang' => 'eng',
			'text' => 'This is a lonely sentence.',
			'correctness' => NULL,
			'user_id' => '7',
			'created' => '2014-04-15 00:49:21',
			'modified' => '2014-04-15 00:49:21',
			'script' => null,
			'hash' => "2s5ig1i\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '8',
			'lang' => 'fra',
			'text' => 'Voici une phrase qu’il serait bien de traduire.',
			'correctness' => NULL,
			'user_id' => '7',
			'created' => '2014-04-15 00:52:01',
			'modified' => '2014-04-15 00:52:01',
			'script' => null,
			'hash' => "3oob3mm\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '9',
			'lang' => NULL,
			'text' => 'This sentences purposely misses its flag.',
			'correctness' => NULL,
			'user_id' => '3',
			'created' => '2014-04-15 21:12:03',
			'modified' => '2014-04-15 21:12:03',
			'script' => null,
			'hash' => "g14gos\0\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
                array(
                        'id' => '10',
                        'lang' => 'jpn',
                        'text' => 'ちょっと待って。',
                        'correctness' => NULL,
                        'user_id' => '7',
                        'created' => '2014-04-15 21:13:23',
                        'modified' => '2014-04-15 21:13:36',
                        'script' => null,
			'hash' => "3cekb1u\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
                ),
		array(
			'id' => '11',
			'lang' => 'yue',
			'text' => '如果你唔想要我就俾第個㗎喇。',
			'correctness' => NULL,
			'user_id' => '7',
			'created' => '2015-04-15 21:14:00',
			'modified' => '2015-04-15 21:14:00',
			'script' => 'Hant',
			'hash' => "1d04e4e\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '12',
			'lang' => 'fra',
			'text' => 'La cause fondamentale du problème est que dans le monde moderne, les imbéciles sont emplis d\'assurance, alors que les gens intelligents sont emplis de doute.',
			'correctness' => NULL,
			'user_id' => '7',
			'created' => '2015-06-15 00:34:28',
			'modified' => '2015-06-15 00:34:28',
                        'script' => null,
			'hash' => "223h6bm\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		// Intentionally nonexistant. It has been deleted.
		// See ContributionFixture.php.
		//array(
		//    'id' => '13',
		//    ...
		//),
		array(
			'id' => '14',
			'lang' => 'eng',
			'text' => 'An orphan sentence.',
			'correctness' => NULL,
			'user_id' => NULL,
			'created' => '2015-08-17 21:56:27',
			'modified' => '2015-08-17 21:56:27',
			'script' => NULL,
			'hash' => "1nvs6as\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '15',
			'lang' => 'eng',
			'text' => 'The swimming pool is used in common by all the children in the neighborhood.',
			'correctness' => '0',
			'user_id' => null,
			'created' => null,
			'modified' => null,
			'script' => null,
			'hash' => "3al20v9\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '16',
			'lang' => 'jpn',
			'text' => '彼女は何でも自分の思うとおりにしようよする。',
			'correctness' => '0',
			'user_id' => null,
			'created' => null,
			'modified' => null,
			'script' => null,
			'hash' => "3ncj5ov\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '17',
			'lang' => 'fra',
			'text' => 'Elle donna une réponse évasive.',
			'correctness' => '0',
			'user_id' => '3',
			'created' => null,
			'modified' => '2011-06-07 08:51:32',
			'script' => null,
			'hash' => "2i992fp\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '18',
			'lang' => 'eng',
			'text' => 'There is nothing like sleep.',
			'correctness' => '0',
			'user_id' => null,
			'created' => null,
			'modified' => null,
			'script' => null,
			'hash' => "embpt2\0\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '19',
			'lang' => 'eng',
			'text' => 'Where did they come from?',
			'correctness' => '0',
			'user_id' => '4',
			'created' => null,
			'modified' => null,
			'script' => null,
			'hash' => "15a909e\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '20',
			'lang' => 'fra',
			'text' => 'Rien ne vaut le sommeil.',
			'correctness' => '0',
			'user_id' => '102',
			'created' => '2016-01-17 19:01:17',
			'modified' => '2016-01-17 19:01:17',
			'script' => null,
			'hash' => "26ec6h2\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '21',
			'lang' => 'fra',
			'text' => 'D\'où est-ce qu\'ils venaient ?',
			'correctness' => '0',
			'user_id' => '5',
			'created' => '2016-01-24 00:41:50',
			'modified' => '2016-01-24 00:41:50',
			'script' => null,
			'hash' => "4qtmdb\0\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '22',
			'lang' => 'fra',
			'text' => 'Cela fera deux ans que nous vivons ici avril prochain.',
			'correctness' => '0',
			'user_id' => '5',
			'created' => '2016-06-19 22:54:08',
			'modified' => '2016-06-19 22:54:08',
			'script' => null,
			'hash' => "2q30etf\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '23',
			'lang' => 'fra',
			'text' => 'La piscine est utilisée en commun par tous les enfants du voisinage.',
			'correctness' => '0',
			'user_id' => '5',
			'created' => '2016-06-19 22:56:52',
			'modified' => '2016-06-19 22:56:52',
			'script' => null,
			'hash' => "36dmbge\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '24',
			'lang' => 'cmn',
			'text' => '到明年四月我们住在这儿就满两年了。',
			'correctness' => '0',
			'user_id' => '4',
			'created' => '2016-06-19 22:56:52',
			'modified' => '2016-06-19 22:56:52',
			'script' => 'Hans',
			'hash' => "1ek6f1h\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '25',
			'lang' => 'cmn',
			'text' => '她给了个模糊的答案。',
			'correctness' => '0',
			'user_id' => '4',
			'created' => '2016-12-26 20:26:24',
			'modified' => '2016-12-26 20:26:24',
			'script' => 'Hans',
			'hash' => "1m1ktg\0\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '26',
			'lang' => 'spa',
			'text' => 'Ella siempre intenta hacer lo que piensa.',
			'correctness' => '0',
			'user_id' => '7',
			'created' => '2016-12-26 20:26:24',
			'modified' => '2016-12-26 20:26:24',
			'script' => null,
			'hash' => "vrhq7n\0\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '27',
			'lang' => 'eng',
			'text' => 'What are you doing?',
			'correctness' => '0',
			'user_id' => '8',
			'created' => null,
			'modified' => '2017-04-06 19:23:01',
			'script' => null,
			'hash' => "11o3n4g\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '28',
			'lang' => 'ara',
			'text' => 'ماذا تفعل؟',
			'correctness' => '0',
			'user_id' => '2',
			'created' => '2017-04-06 19:39:48',
			'modified' => '2017-04-06 19:39:48',
			'script' => null,
			'hash' => "l812a2\0\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '29',
			'lang' => 'eng',
			'text' => 'The log of this sentence shows two creation records.',
			'correctness' => '0',
			'user_id' => '7',
			'created' => '2017-04-07 18:50:00',
			'modified' => '2017-04-07 18:50:00',
			'script' => null,
			'hash' => "1v62jg1\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '30',
			'lang' => 'fra',
			'text' => 'L’historique de cette phrase fait apparaître deux créations.',
			'correctness' => '0',
			'user_id' => '1',
			'created' => '2017-04-07 18:50:00',
			'modified' => '2017-04-07 18:50:00',
			'script' => null,
			'hash' => "3n0s29g\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '31',
			'lang' => 'eng',
			'text' => 'This sentence will be linked twice shortly after being created.',
			'correctness' => '0',
			'user_id' => '3',
			'created' => '2017-04-08 03:10:00',
			'modified' => '2017-04-08 03:10:00',
			'script' => null,
			'hash' => "1s0obfo\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '32',
			'lang' => 'pol',
			'text' => 'Aktorka pozdrowiła fanów ze sceny.',
			'correctness' => '0',
			'user_id' => '3',
			'created' => '2010-02-14 21:05:54',
			'modified' => '2010-02-14 21:05:54',
			'script' => null,
			'hash' => "2vshapt\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '33',
			'lang' => 'pol',
			'text' => 'Czas i rozmyślania łagodzą nawet największą rozpacz.',
			'correctness' => '0',
			'user_id' => '3',
			'created' => '2010-02-14 21:05:54',
			'modified' => '2010-02-14 21:05:54',
			'script' => null,
			'hash' => "3rhic3o\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '34',
			'lang' => 'pol',
			'text' => 'Niezbyt ufam tłumaczeniom.',
			'correctness' => '0',
			'user_id' => '3',
			'created' => '2010-02-14 21:05:54',
			'modified' => '2010-02-14 21:05:54',
			'script' => null,
			'hash' => "10gv9hj\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '35',
			'lang' => 'fra',
			'text' => 'Soyez exigeant envers vous-même.',
			'correctness' => '0',
			'user_id' => '7',
			'created' => '2017-04-08 04:00:00',
			'modified' => '2017-04-08 04:00:04',
			'script' => null,
			'hash' => "2n2cpvv\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '36',
			'lang' => 'eng',
			'text' => 'He\'s not in the least interested in what is happening in the world.',
			'correctness' => '0',
			'user_id' => '1',
			'created' => '2017-04-09 09:00:00',
			'modified' => '2017-04-09 09:00:00',
			'script' => null,
			'hash' => "2ecgfs\0\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '37',
			'lang' => 'ukr',
			'text' => 'Він зовсім не цікавиться тим, що відбувається у світі.',
			'correctness' => '0',
			'user_id' => '2',
			'created' => '2017-04-09 11:28:49',
			'modified' => '2017-04-09 11:28:49',
			'script' => null,
			'hash' => "36hp9qe\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '38',
			'lang' => 'wuu',
			'text' => '侬老快就会欢喜上搿个城市。',
			'correctness' => '0',
			'user_id' => '3',
			'created' => '2017-04-09 11:38:30',
			'modified' => '2017-04-09 11:38:30',
			'script' => null,
			'hash' => "298ghmi\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '39',
			'lang' => 'rus',
			'text' => 'Слишком темно, чтобы ясно видеть.',
			'correctness' => '0',
			'user_id' => '4',
			'created' => '2017-04-09 11:38:44',
			'modified' => '2017-04-09 11:38:44',
			'script' => null,
			'hash' => "3fisnpv\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '40',
			'lang' => 'fra',
			'text' => 'J\'ai incité mes étudiants à travailler davantage.',
			'correctness' => '0',
			'user_id' => '5',
			'created' => '2017-04-09 11:38:51',
			'modified' => '2017-04-09 11:38:51',
			'script' => null,
			'hash' => "29umd5v\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '41',
			'lang' => 'tur',
			'text' => 'Bana ne önerirsin?',
			'correctness' => '0',
			'user_id' => '6',
			'created' => '2017-04-09 11:38:58',
			'modified' => '2017-04-09 11:38:58',
			'script' => null,
			'hash' => "3tmgmdi\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '42',
			'lang' => 'tur',
			'text' => 'Hava nasıl?',
			'correctness' => '0',
			'user_id' => '7',
			'created' => '2017-04-09 11:39:02',
			'modified' => '2017-04-09 11:39:02',
			'script' => null,
			'hash' => "23jek2o\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '43',
			'lang' => 'fra',
			'text' => 'Je suis étranger.',
			'correctness' => '0',
			'user_id' => '10311',
			'created' => '2017-04-09 12:51:41',
			'modified' => '2017-04-09 12:51:41',
			'script' => null,
			'hash' => "20on7kp\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => '42424242',
		),
		array(
			'id' => '44',
			'lang' => 'eng',
			'text' => 'Original sentence C.',
			'correctness' => '0',
			'user_id' => '7',
			'created' => '2017-04-09 13:00:00',
			'modified' => '2017-04-09 13:00:00',
			'script' => null,
			'hash' => "2gt2j2d\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '45',
			'lang' => 'eng',
			'text' => 'Original sentence A.',
			'correctness' => '0',
			'user_id' => '7',
			'created' => '2017-04-09 14:00:00',
			'modified' => '2017-04-09 14:00:00',
			'script' => null,
			'hash' => "32tqlj8\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '46',
			'lang' => 'eng',
			'text' => 'This sentence only has one link logged.',
			'correctness' => '0',
			'user_id' => '7',
			'created' => '2017-04-09 15:00:00',
			'modified' => '2017-04-09 15:00:00',
			'script' => null,
			'hash' => "3nj3ac2\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '47',
			'lang' => 'eng',
			'text' => 'This sentence was linked by someone else.',
			'correctness' => '0',
			'user_id' => '1',
			'created' => '2017-04-09 15:10:00',
			'modified' => '2017-04-09 15:10:00',
			'script' => null,
			'hash' => "3ffmkr8\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => NULL,
		),
		array(
			'id' => '48',
			'lang' => 'eng',
			'text' => 'An original sentence (not initially added as a translation).',
			'correctness' => '0',
			'user_id' => '4',
			'created' => '2017-04-10 01:22:00',
			'modified' => '2017-04-10 01:22:00',
			'script' => null,
			'hash' => "2qkarjg\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => '0',
		),
		array(
			'id' => '49',
			'lang' => 'eng',
			'text' => 'A sentence initially added as a translation of #48.',
			'correctness' => '0',
			'user_id' => '3',
			'created' => '2017-04-10 01:23:00',
			'modified' => '2017-04-10 01:23:00',
			'script' => null,
			'hash' => "pk4rjj\0\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => '48',
		),
		array(
			'id' => '50',
			'lang' => 'eng',
			'text' => 'An original sentence whose owner changed.',
			'correctness' => '0',
			'user_id' => '4',
			'created' => '2017-04-10 01:24:00',
			'modified' => '2017-04-10 01:25:00',
			'script' => null,
			'hash' => "33q0qru\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => '0',
		),
		array(
			'id' => '51',
			'lang' => 'eng',
			'text' => 'An original sentence added under CC0.',
			'correctness' => '0',
			'user_id' => '3',
			'created' => '2017-04-10 01:26:00',
			'modified' => '2017-04-10 01:26:00',
			'script' => null,
			'hash' => "1nkk5e4\0\0\0\0\0\0\0\0\0",
			'license' => 'CC0 1.0',
			'based_on_id' => '0',
		),
		array(
			'id' => '52',
			'lang' => 'eng',
			'text' => 'An original sentence with a null license.',
			'correctness' => '0',
			'user_id' => '3',
			'created' => '2017-04-10 01:27:00',
			'modified' => '2017-04-10 01:27:00',
			'script' => null,
			'hash' => "25b050m\0\0\0\0\0\0\0\0\0",
			'license' => null,
			'based_on_id' => '0',
		),
		array(
			'id' => '53',
			'lang' => 'eng',
			'text' => 'Another original sentence (not initially added as a translation).',
			'correctness' => '0',
			'user_id' => '4',
			'created' => '2017-04-11 13:49:10',
			'modified' => '2017-04-11 13:49:10',
			'script' => null,
			'hash' => "29a5rjn\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => '0',
		),
		array(
			'id' => '54',
			'lang' => 'eng',
			'text' => 'Kazuki\'s original sentence (not initially added as a translation).',
			'correctness' => '0',
			'user_id' => '7',
			'created' => '2017-04-13 01:12:43',
			'modified' => '2017-04-13 01:12:43',
			'script' => null,
			'hash' => "1nba57l\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => '0',
		),
		array(
			'id' => '55',
			'lang' => 'fra',
			'text' => 'Je peux utiliser ton téléphone ?',
			'correctness' => '0',
			'user_id' => '2',
			'created' => '2018-04-12 06:43:01',
			'modified' => '2018-04-12 06:43:01',
			'script' => null,
			'hash' => "2e2rnbe\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => '0',
		),
		array(
			'id' => '56',
			'lang' => 'jpn',
			'text' => '電話借りてもいい？',
			'correctness' => '0',
			'user_id' => '7',
			'created' => '2018-04-12 12:12:11',
			'modified' => '2018-04-12 12:12:11',
			'script' => null,
			'hash' => "18f4kkg\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => '55',
		),
		array(
			'id' => '57',
			'lang' => 'jpn',
			'text' => '電話使ってもいいかな。',
			'correctness' => '0',
			'user_id' => '7',
			'created' => '2018-04-12 12:12:19',
			'modified' => '2018-04-12 12:12:19',
			'script' => null,
			'hash' => "3ad4rp7\0\0\0\0\0\0\0\0\0",
			'license' => 'CC BY 2.0 FR',
			'based_on_id' => '55',
		),
	);
}
