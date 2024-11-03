<?php
    $itens = [
        [
            'title' => 'Home',
            'url' => '#'
        ],
        [
            'title' => 'Sobre',
            'url' => '#sobre'
        ],
        [
            'title' => 'Projetos',
            'url' => '#projetos'
        ],
        [
            'title' => 'Contato',
            'url' => '#contato'
        ]
    ];
?>

<header class="flex justify-between py-10">
    <h1 class="text-xl font-semibold text-violet-600">Meu Portfolio...</h1>
    <nav>
        <ul class="flex gap-10">
            <?php foreach($itens as $i): ?>
                <li class="hover:text-white">
                    <a href="<?=$i['url']?>">
                        <?=$i['title']?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>