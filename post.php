<?php
foreach ($_GET as $key => $value) {
  }
$article = [
    [
        'id' => 1,
        'title' => "The Road Ahead",
        'subtitle' => 'The road might be paved - it might not be',
        'image' => 'http://localhost:8001/static/images/the-road-ahead/IMAGE.jpg',
        'text' => 
            'Dark spruce forest frowned on either side the frozen waterway. The trees had been stripped by a recent wind of their white covering of frost, and they seemed to lean towards each other, black and ominous, in the fading light. A vast silence reigned over the land. The land itself was a desolation, lifeless, without movement, so lone and cold that the spirit of it was not even that of sadness. There was a hint in it of laughter, but of a laughter more terrible than any sadness—a laughter that was mirthless as the smile of the sphinx, a laughter cold as the frost and partaking of the grimness of infallibility. It was the masterful and incommunicable wisdom of eternity laughing at the futility of life and the effort of life. It was the Wild, the savage, frozen-hearted Northland Wild.<br><br>    
            But there was life, abroad in the land and defiant. Down the frozen waterway toiled a string of wolfish dogs. Their bristly fur was rimed with frost. Their breath froze in the air as it left their mouths, spouting forth in spumes of vapour that settled upon the hair of their bodies and formed into crystals of frost. Leather harness was on the dogs, and leather traces attached them to a sled which dragged along behind. The sled was without runners. It was made of stout birch-bark, and its full surface rested on the snow. The front end of the sled was turned up, like a scroll, in order to force down and under the bore of soft snow that surged like a wave before it. On the sled, securely lashed, was a long and narrow oblong box. There were other things on the sled—blankets, an axe, and a coffee-pot and frying-pan; but prominent, occupying most of the space, was the long and narrow oblong box.<br><br>
            In advance of the dogs, on wide snowshoes, toiled a man. At the rear of the sled toiled a second man. On the sled, in the box, lay a third man whose toil was over,—a man whom the Wild had conquered and beaten down until he would never move nor struggle again. It is not the way of the Wild to like movement. Life is an offence to it, for life is movement; and the Wild aims always to destroy movement. It freezes the water to prevent it running to the sea; it drives the sap out of the trees till they are frozen to their mighty hearts; and most ferociously and terribly of all does the Wild harry and crush into submission man—man who is the most restless of life, ever in revolt against the dictum that all movement must in the end come to the cessation of movement.<br><br>
            But at front and rear, unawed and indomitable, toiled the two men who were not yet dead. Their bodies were covered with fur and soft-tanned leather. Eyelashes and cheeks and lips were so coated with the crystals from their frozen breath that their faces were not discernible. This gave them the seeming of ghostly masques, undertakers in a spectral world at the funeral of some ghost. But under it all they were men, penetrating the land of desolation and mockery and silence, puny adventurers bent on colossal adventure, pitting themselves against the might of a world as remote and alien and pulseless as the abysses of space.<br><br>',
    ],
    [
        'id' => 2,
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'image' => 'http://localhost:8001/static/images/index/featered-posts/background2.jpg',
        'text' => 
            'Traveling is always an incredible adventure, new experiences and amazing meetings. However, many of us forget about the importance of constantly updating our experience and going to new places at least once a year.<br><br>
            Traveling helps us expand our worldview and learn about different cultures, customs and traditions. They also help us feel real freedom and go beyond our comfort zone. Every new place we visit leaves incredible memories in our soul and inspires us to new achievements.<br><br>
            Travel also contributes to our personal growth. We become more open, tolerant and adaptive, learn to accept surprises and quickly find a way out of difficult situations. In addition, constant travel improves our health - physically and emotionally. We are saturated with new emotions, get rid of stress and fatigue, strengthen the immune system and memorable impressions guarantee us a good mood for a long time.<br><br>
            However, it is not always possible to travel due to employment or financial constraints. But the most important step is making a decision and setting a goal to go to a new place. Even a short trip to the nearest town or village can bring a lot of positive emotions and reboot our body.<br><br>
            Therefore, do not postpone your travels for later. Once a year, go to a new place - it will help you discover a lot of new things, enjoy the beauty of the world and feel like a part of the big universe. Travel is an investment in yourself, in your happiness and peace of mind. Believe me, you will not regret every minute and penny you spend!<br><br>',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8001/static/style/style_the-road-ahead.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <title>Escape.</title>
</head>

<body>
    <header>
        <div class="wrapper">
            <div class="header_text">
                <div class="logo">
                    <img src="http://localhost:8001/static/images/Escape.svg" alt="Escape.">
                </div>
                <nav class=navigation>
                    <ul>
                        <li>
                            <a href="#">home</a>
                        </li>
                        <li>
                            <a href="#">categories</a>
                        </li>
                        <li>
                            <a href="#">about</a>
                        </li>
                        <li>
                            <a href="#">contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <?php
            foreach ($article as $post) {
                if($value == $post['id']){
                    include 'sample_post.php';
                }        
            }
        ?>
    </main>
    <footer>
        <div class="menu">
            <div class="selection_panel">
                <div class="logo_end">
                    <img src="http://localhost:8001/static/images/Escape_end.svg" alt="Escape.">
                </div>
                <nav class="navigation_end">
                    <ul>
                        <li>
                            <a href="#">home</a>
                        </li>
                        <li>
                            <a href="#">categories</a>
                        </li>
                        <li>
                            <a href="#">about</a>
                        </li>
                        <li>
                            <a href="#">contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
</body>

</html>