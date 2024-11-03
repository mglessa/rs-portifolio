<?php
    $itens = [
        [
            'url' => 'www.google.com.br',
            'alt' => 'Logo Linkedin',
            'src' => '/assets/images/linkedin.png'
        ],
        [
            'url' => 'www.google.com.br',
            'alt' => 'Logo facebook',
            'src' => '/assets/images/facebook.png'
        ],
        [
            'url' => 'www.google.com.br',
            'alt' => 'Logo youtube.png',
            'src' => '/assets/images/youtube.png'
        ],
        [
            'url' => 'www.google.com.br',
            'alt' => 'Logo twitter',
            'src' => '/assets/images/twitter.png'
        ]
    ];

?>


<section id="sobre" class="flex justify-between items-stretch">
    <div class="w-2/3">
        <h2 class="text-6xl font-semibold text-white">Matheus Lessa</h2>
        <p class="leading-7 my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugit provident
            delectus
            laborum cum consequuntur assumenda, aperiam esse similique expedita sed, id nulla sequi,
            consequatur remdeleniti! Qui, voluptas iste.</p>
        <div class="flex">
            <?php foreach($itens as $i): ?>

                <a href="<?=$i['href']?>" target="_blank"><img class="w-10 hover:animate-bounce"
                        src="<?=$i['src']?>" alt="<?=$i['alt']?>">
                </a>

            <?php endforeach; ?>

        </div>
    </div>
    <div class="w-1/3 flex justify-center items-center">
        <div class="w-60 h-60 rounded-full bg-gray-200">
            <img class="w-full h-full rounded-full outline outline-4 outline-violet-800"
                src="/assets/images/kratos.jpg" alt="">
        </div>
    </div>
</section>