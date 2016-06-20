<?php

return [
    'adminEmail' => 'admin@example.com',
    'hash'=>'gercpn2016',
    //Caminho utilizado para buscar os arquivos, contém '/' no início
    'dir' => [
        'usuarios' => [
            'imagem' => '/uploads/usuarios/imagem/',
        ],
    	'fotos' => [
    				'fotos' => '/uploads/',
    		]
    		
    ],
    //Caminho utilizado para realizar o upload dos arquivos, não contém '/' no início 
    'upload' => [
        'usuarios' => [
            'imagem' => 'uploads/usuarios/imagem/',
        ]
    ],
    'default' => [
        'usuarios' => [
            'imagem' => '/img/user.jpg',
        ]
    ],
];
