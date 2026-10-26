<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

 $articles = [

    [
        'id' => 1,
        'name' => 'Attack on Titan',
        'image' => 'images/Attack on titans.jpg',
        'story' => 'Humanity fights for survival behind massive walls against giant, man-eating Titans in a dark, twist-filled war story.'
    ],

    [
        'id' => 2,
        'name' => 'Fullmetal Alchemist: Brotherhood',
        'image' => 'images/full-metal-alchemist-brotherhood-wallpaper-preview.jpg',
        'story' => " Two brothers use alchemy to search for a Philosopher's Stone to restore their bodies after a failed ritual."
    ],

    [
        'id' => 3,
        'name' => 'One Piece',
        'image' => 'images/onepiece.png',
        'story' => ' Monkey D. Luffy and his pirate crew sail across the ocean to find the ultimate treasure and become King of the Pirates.'
    ],

    [
        'id' => 4,
        'name' => 'HunterxHunter',
        'image' => 'images/hunterXhunter.jpg',
        'story' => 'Gon sets out to pass the dangerous Hunter Exam and find his long-lost father.'
    ],

    [
        'id' => 5,
        'name' => 'Death Note',
        'image' => 'images/DeathNote.png',
        'story' => 'A high school student discovers a supernatural notebook that kills anyone whose name is written inside.'
    ],

    [
        'id' => 6,
        'name' => 'Cowboy Bebop',
        'image' => 'images/cowboy bepop.jpg',
        'story' => 'A crew of bounty hunters travels across the solar system, chasing targets while escaping their own pasts.'
    ],

    [
        'id' => 7,
        'name' => 'Frieren: Beyond Journey’s End',
        'image' => 'images/wallpapersden.com_frieren-hd-frieren-beyond-journey-s-end_4500x2761.jpg',
        'story' => 'An elven mage outlives her heroic companions and begins a journey to understand human life and emotions.'
    ],

    [
        'id' => 8,
        'name' => 'Dragon Ball Z',
        'image' => 'images/DragonBallZ.jpg',
        'story' => 'Goku and his friends defend Earth against powerful enemies in epic battles that push their strength to the limit.'
    ],

    [
        'id' => 9,
        'name' => 'Vinland Saga',
        'image' => 'images/vinland saga.jpeg',
        'story' => "Thorfinn, a young Viking, seeks revenge for his father's death while discovering a path toward peace."
    ],

    [
        'id' => 10,
        'name' => 'Steins;Gate',
        'image' => 'images/steins gate.jpg',
        'story' => 'A scientist and his friends discover a way to send messages into the past, triggering dangerous timeline changes.'
    ],
];
     

     return view('Homepage',['articles'=>$articles]);

     
})->name('homepage');

Route::get('/info', function () {
    return view('info');
})->name('info');


Route::get('/servizi', function () {
     $links=[
        [
            "id"=>1,
            "name"=>"Anime Streaming",
            "link"=>"https://aniwaves.ru/",
        ],
        [
            "id"=>2,
            "name"=>"Manga Online",
            "link"=>"https://mangareader.pro/",
        ],
        [
            "id"=>3,
            "name"=>"Anime Shops",
            "link"=>"https://www.emp-online.it/fan-merch/anime/"
        ],
    ];
   
           
       return view('servizi', ['serviziolink' => $links]);
    
        
    
})->name('servizi');


Route::get('/article/{id}', function ($id) {

$articles = [
    [
        'id' => 1,
        'name' => 'Attack on Titan',
        'image' => 'images/Attack on titans.jpg',
        'story' => 'Attack on Titan takes place in a world where humanity lives inside three enormous walls to protect itself from giant creatures called Titans. These terrifying beings attack and eat humans, forcing people to live in constant fear. The story follows Eren Yeager, a young boy who dreams of exploring the world beyond the walls. His life changes when a gigantic Titan breaks through the outer wall, allowing other Titans to enter his hometown. During the attack, Eren witnesses the destruction of his home and loses someone very important to him. Determined to eliminate every Titan, he joins the military alongside his childhood friends Mikasa Ackerman and Armin Arlert. As they fight against the Titans, they discover that the truth behind these creatures is far more complicated than they imagined. Eren also discovers that he possesses a mysterious power that allows him to transform into a Titan himself. The characters gradually uncover secrets about their world, their history, and the origins of humanity’s conflict. The series combines intense battles, emotional relationships, political struggles, and unexpected revelations. As the story progresses, the characters must question their beliefs about freedom, revenge, sacrifice, and what it truly means to protect humanity.'
    ],

    [
        'id' => 2,
        'name' => 'Fullmetal Alchemist: Brotherhood',
        'image' => 'images/full-metal-alchemist-brotherhood-wallpaper-preview.jpg',
        'story' => 'Fullmetal Alchemist: Brotherhood follows brothers Edward and Alphonse Elric, who live in a world where alchemy allows people to transform matter according to scientific principles. After their mother dies, the brothers attempt the forbidden act of human transmutation to bring her back. The experiment fails catastrophically. Edward loses an arm and a leg, while Alphonse loses his entire body. Edward sacrifices his arm to bind his brother’s soul to a suit of armor. Determined to restore what they have lost, Edward becomes a State Alchemist and joins the military, hoping to discover the legendary Philosopher’s Stone. Together, the brothers travel across their country, meeting allies and enemies while searching for answers. Their investigation gradually reveals a dangerous conspiracy involving powerful military officials, mysterious beings known as Homunculi, and a plan that threatens the entire nation. Throughout their journey, Edward and Alphonse face difficult moral decisions and learn that every action has consequences. The series explores themes of family, sacrifice, responsibility, war, and the value of human life. As the truth behind the conspiracy emerges, the brothers must rely on their intelligence, courage, and loyalty to protect the people they care about and find a way to recover their original bodies.'
    ],

    [
        'id' => 3,
        'name' => 'One Piece',
        'image' => 'images/one-piece.jpg',
        'story' => 'One Piece follows Monkey D. Luffy, an adventurous young pirate who dreams of becoming the King of the Pirates. Inspired by the pirate Shanks, Luffy sets out to find the legendary treasure known as the One Piece, which was left behind by the previous Pirate King, Gol D. Roger. After eating a mysterious Devil Fruit, Luffy gains the ability to stretch his body like rubber, although he loses the ability to swim. During his journey, he recruits a diverse crew called the Straw Hat Pirates. Each member has a personal dream, including becoming the world’s greatest swordsman, drawing a map of the entire world, and discovering the true history of the seas. Together, they explore strange islands, encounter powerful enemies, and become involved in conflicts that affect entire nations. Their adventures bring them into confrontation with rival pirates, corrupt rulers, and the powerful World Government. Despite the dangers they face, the crew continues moving forward because of their friendship and determination. The story combines comedy, emotional moments, exciting battles, and mysteries that unfold over many adventures. At its heart, One Piece is about freedom, loyalty, dreams, and the importance of standing beside friends even when the world seems determined to stop you.'
    ],

    [
        'id' => 4,
        'name' => 'HunterXHunter',
        'image' => 'images/hunterXhunter.jpg',
        'story' => 'Hunter x Hunter follows Gon Freecss, a cheerful and determined boy who discovers that his father, Ging Freecss, is alive and is a legendary Hunter. Hunters are licensed adventurers who undertake dangerous missions involving treasure, rare creatures, criminals, and unexplored territories. Wanting to understand why his father chose this life, Gon leaves his home to take the difficult Hunter Examination. Along the way, he meets Killua Zoldyck, a boy from a famous family of assassins, as well as Kurapika and Leorio, who have their own ambitions. The four develop strong friendships while facing dangerous tests and powerful opponents. After becoming Hunters, Gon and his friends explore a world full of hidden abilities, political conflicts, and extraordinary dangers. They learn about Nen, a technique that allows individuals to control and use their life energy in unique ways. Their adventures lead them into conflicts with criminals, dangerous organizations, and increasingly powerful enemies. As the story develops, the characters discover that achieving their goals often requires difficult sacrifices. Hunter x Hunter combines strategic battles, humor, emotional storytelling, and complex moral questions. It explores friendship, ambition, revenge, and the consequences of pursuing one’s desires, showing that the world is far more complicated than it first appears.'
    ],

    [
        'id' => 5,
        'name' => 'Death Note',
        'image' => 'images/DeathNote.png',
        'story' => 'Death Note tells the story of Light Yagami, an exceptionally intelligent student who discovers a mysterious notebook dropped by a Shinigami named Ryuk. The notebook, called the Death Note, allows its user to kill anyone simply by writing that person’s name while picturing their face. Believing that the world is filled with criminals and injustice, Light begins using the notebook to eliminate people he considers evil. He hopes to create a new world without crime and become its god. However, his actions attract international attention, and authorities begin investigating the mysterious deaths. The investigation becomes a battle of intelligence between Light and L, an eccentric and brilliant detective determined to discover the killer’s identity. As their rivalry intensifies, both characters use elaborate strategies, deception, and psychological manipulation to gain the advantage. Light gradually becomes increasingly consumed by his desire for control, while L risks everything to uncover the truth. Ryuk watches the events unfold with amusement, interested in the chaos created by the notebook. Death Note explores morality, justice, power, and the dangers of believing that one person has the right to decide who deserves to live. Its suspenseful story challenges viewers to consider the difference between justice and revenge.'
    ],

    [
        'id' => 6,
        'name' => 'Cowboy Bebop',
        'image' => 'images/cowboy bepop.jpg',
        'story' => 'Cowboy Bebop is set in the year 2071, when humanity has spread across the solar system following a disaster that made Earth increasingly difficult to inhabit. The story follows Spike Spiegel, a skilled martial artist and former criminal who works as a bounty hunter aboard the spaceship Bebop. His partner, Jet Black, is a former police officer who tries to keep their missions organized. As they travel from planet to planet searching for criminals, they encounter a variety of unusual characters and dangerous situations. Their crew eventually grows to include Faye Valentine, a gambler with a mysterious past; Edward, an eccentric young hacker; and Ein, an unusually intelligent dog. Although the group often struggles financially, their adventures take them into the lives of people facing loneliness, desperation, and difficult choices. Beneath the episodic bounty-hunting stories, Spike remains haunted by his previous life and his complicated relationship with a dangerous criminal organization. The series blends science fiction, action, comedy, and elements of film noir with a memorable jazz-inspired atmosphere. Each character carries emotional wounds that influence their decisions and relationships. Cowboy Bebop ultimately explores themes of regret, identity, freedom, and the difficulty of escaping the past, asking whether people can truly begin again when their memories continue to follow them.'
    ],

    [
        'id' => 7,
        'name' => 'Frieren: Beyond Journey’s End',
        'image' => 'images/wallpapersden.com_frieren-hd-frieren-beyond-journey-s-end_4500x2761.jpg',
        'story' => 'Frieren: Beyond Journey’s End begins after a group of heroes has already defeated the Demon King and returned peace to the world. Frieren, an elf mage with an exceptionally long lifespan, traveled with the hero Himmel, the priest Heiter, and the warrior Eisen during their original adventure. Because elves experience time differently from humans, Frieren does not fully understand how meaningful their ten-year journey was to her companions. Years later, Himmel dies of old age, and Frieren begins to recognize how little she understood about the people who traveled beside her. Regretting the distance she kept between herself and her friends, she decides to learn more about human emotions and relationships. She sets out on another journey, eventually taking Fern, a young mage she has helped raise, as her apprentice. They later travel with Stark, a courageous warrior trained by Eisen. Together, they visit places connected to Frieren’s past and meet people whose lives have been shaped by the heroes’ original achievements. Their adventures focus on memories, everyday kindness, and the passage of time. The series explores grief, friendship, regret, and the importance of appreciating people while they are still present. Through Frieren’s experiences, it shows how even a very long life can feel incomplete without meaningful connections.'
    ],

    [
        'id' => 8,
        'name' => 'Dragon Ball Z',
        'image' => 'images/DragonBallZ.jpg',
        'story' => 'Dragon Ball Z follows Goku, a powerful martial artist who protects Earth from increasingly dangerous enemies. The story begins when a mysterious warrior arrives and reveals that Goku belongs to the Saiyan race, a powerful alien species known for its fighting abilities. This discovery leads to battles that threaten the survival of Earth and introduces Goku to the wider universe. Alongside his friends, including Vegeta, Piccolo, Gohan, Krillin, and Bulma, Goku faces powerful opponents who seek domination, revenge, or immortality. The heroes train constantly, develop extraordinary techniques, and discover new transformations that allow them to challenge enemies far stronger than themselves. Their adventures take them beyond Earth, including journeys to Planet Namek, where the Dragon Balls can grant wishes. The series introduces memorable villains such as Frieza, Cell, and Majin Buu, each presenting a different threat to the world. Goku’s son Gohan also becomes an important character, gradually discovering his own strength and potential. Although the story is famous for its spectacular battles, it also emphasizes friendship, perseverance, family, and personal growth. The characters repeatedly overcome setbacks by learning from their failures and supporting one another. Dragon Ball Z celebrates the determination to improve, the courage to protect others, and the belief that even overwhelming challenges can be overcome through effort and teamwork.'
    ],

    [
        'id' => 9,
        'name' => 'Vinland Saga',
        'image' => 'images/vinland saga.jpeg',
        'story' => 'Vinland Saga is a historical adventure set during the Viking Age, a time marked by warfare, conquest, and political ambition. The story follows Thorfinn, the son of Thors, a legendary warrior who has abandoned violence to live peacefully with his family. Thorfinn’s life changes when his father is killed during a confrontation involving the cunning mercenary Askeladd. Consumed by grief and anger, Thorfinn joins Askeladd’s band of warriors, hoping to become strong enough to challenge him in a fair duel and avenge his father. As he grows older, Thorfinn experiences the brutality of war and witnesses the suffering caused by revenge and ambition. His journey brings him into contact with Prince Canute, whose transformation from a timid young royal into a determined political leader influences the fate of kingdoms. The story examines the complicated lives of warriors, rulers, and ordinary people caught in violent conflicts. As Thorfinn faces the consequences of his choices, he begins to question whether revenge can ever bring peace. Vinland Saga combines historical events with fictional characters to explore slavery, freedom, responsibility, and the human cost of war. It challenges traditional ideas of strength by suggesting that true courage may involve refusing to harm others. Thorfinn’s journey becomes a search for a place where people can live without violence, offering hope beyond the cycle of hatred.'
    ],

    [
        'id' => 10,
        'name' => 'Steins;Gate',
        'image' => 'images/steins gate.jpg',
        'story' => 'Steins;Gate follows Rintaro Okabe, an eccentric university student who calls himself a mad scientist and runs a small laboratory with his friends in Akihabara, Tokyo. Alongside the clever programmer Itaru Hashida and the curious Mayuri Shiina, Okabe experiments with unusual inventions. Their lives change when they discover that a modified microwave can send text messages into the past. At first, the discovery seems entertaining, allowing them to influence small events and experiment with different outcomes. However, they soon realize that changing the past can create serious consequences in the present. The brilliant neuroscientist Kurisu Makise becomes involved in their research and helps them understand the science behind their discovery. As the group experiments further, they attract the attention of powerful organizations and encounter increasingly dangerous situations. Okabe discovers that certain changes to the timeline can lead to devastating outcomes for the people he loves. Determined to protect his friends, he struggles to find a way to correct the consequences of their experiments. The series combines science fiction, mystery, humor, and emotional drama, gradually transforming a lighthearted story about young inventors into a tense battle against fate. Steins;Gate explores time travel, friendship, sacrifice, and the responsibility that comes with scientific discovery, showing how even seemingly small decisions can have enormous consequences.'
    ],
];

    foreach($articles as $article){
        if($article['id']==$id){
            return view('article',["article"=>$article]);
        }
    }
})->name('article');

