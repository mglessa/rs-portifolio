<?php
    $itens = [
        [
            'title' => 'Project Web Design',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla soluta saepe dolores ea ut
            molestiae ipsam inventore consequatur laudantium! Porro placeat natus maxime cumque
            voluptate
            quia omnis officiis nisi est.',
            'tags' => [
                ['name' => 'Web design', 'style' => 'text-rose-900 bg-rose-400'],
                ['name' => 'Tailwind.css', 'style' => 'text-blue-900 bg-blue-400']
            ]
        ],
        [
            'title' => 'Gestão de Contratos',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla soluta saepe dolores ea ut',
            'tags' => [
                ['name' => 'PHP', 'style' => 'text-indigo-900 bg-indigo-400'],
                ['name' => 'HTML', 'style' => 'text-rose-900 bg-rose-400'],
                ['name' => 'CSS', 'style' => 'text-blue-900 bg-blue-400'],
                ['name' => 'JavaScript', 'style' => 'text-yellow-900 bg-yellow-400']
            ]
        ],
        [
            'title' => 'Landing Page',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla soluta saepe dolores ea ut',
            'tags' => [
                ['name' => 'HTML', 'style' => 'text-indigo-900 bg-indigo-400'],
                ['name' => 'Web design', 'style' => 'text-rose-900 bg-rose-400'],
                ['name' => 'CSS', 'style' => 'text-blue-900 bg-blue-400']
            ]
        ]
    ]
?>


<section id="projetos" class="flex flex-col gap-5">
    <h3 class="text-3xl font-semibold text-white">Projetos</h3>
    <div id="projects-list" class="flex flex-col gap-5">
        <?php foreach($itens as $i): ?>

            <div id="projeto" class="flex bg-slate-800 p-4 rounded-md">
                <div class="w-1/5">
                    Project Web Design
                </div>
                <div class="w-4/5 px-10">
                    <div class="flex gap-5 justify-between items-center my-2">
                        <h4 class="text-3xl font-semibold text-white"><?=$i['title']?></h4>
                        <div class="flex items-center gap-3">
                            <?php foreach($i['tags'] as $tag): ?>
                                <span class="px-2 py-1 rounded-md text-xs font-semibold <?=$tag['style']?>">
                                    <?=$tag['name']?>
                                </span> 
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <p><?=$i['description']?></p>
                </div>
            </div>
        <?php endforeach; ?>


    </div>
</section>