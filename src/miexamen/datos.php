<?php

	/**
	 * Desarrollo web en Entorno Servidor
	 * Examen: GAME LIBRARY 
	 * Array asociativo con información sobre videojuegos
	 */

	$videojuegos = [
	  [
	    "titulo"        => "Horizon Forbidden West",
	    "desarrollador" => "Guerrilla Games",
	    "codigo"        => "PS5HZDFW2022",
	    "descripcion"   => "Aventura de mundo abierto en un futuro posapocalíptico.",
	    "formato"       => "Físico",
	    "plataforma"    => "PS5"
	  ],
	  [
	    "titulo"        => "The Legend of Zelda: Tears of the Kingdom",
	    "desarrollador" => "Nintendo",
	    "codigo"        => "SWZELDA2023",
	    "descripcion"   => "Secuela de Breath of the Wild con nuevas mecánicas y exploración aérea.",
	    "formato"       => "Físico",
	    "plataforma"    => "Switch"
	  ],
	  [
	    "titulo"        => "Starfield",
	    "desarrollador" => "Bethesda Game Studios",
	    "codigo"        => "XBXSTARFLD2023",
	    "descripcion"   => "RPG espacial de exploración interplanetaria.",
	    "formato"       => "Digital",
	    "plataforma"    => "Xbox Series"
	  ],
	  [
	    "titulo"        => "Baldur's Gate 3",
	    "desarrollador" => "Larian Studios",
	    "codigo"        => "PCBG32023",
	    "descripcion"   => "RPG basado en Dungeons & Dragons con decisiones complejas y combates tácticos.",
	    "formato"       => "Digital",
	    "plataforma"    => "PC"
	  ],
	  [
	    "titulo"        => "Cyberpunk 2077",
	    "desarrollador" => "CD Projekt Red",
	    "codigo"        => "PCCP20772020",
	    "descripcion"   => "Acción y rol en un mundo futurista lleno de tecnología y corrupción.",
	    "formato"       => "Digital",
	    "plataforma"    => "PC"
	  ],
	  [
	    "titulo"        => "God of War Ragnarök",
	    "desarrollador" => "Santa Monica Studio",
	    "codigo"        => "PS5GOWR2022",
	    "descripcion"   => "Kratos y Atreus se enfrentan al fin de los dioses nórdicos.",
	    "formato"       => "Físico",
	    "plataforma"    => "PS5"
	  ],
	  [
	    "titulo"        => "Elden Ring",
	    "desarrollador" => "FromSoftware",
	    "codigo"        => "PS5ELDRN2022",
	    "descripcion"   => "Aventura de acción en mundo abierto con mitología y dificultad extrema.",
	    "formato"       => "Físico",
	    "plataforma"    => "PS5"
	  ],
	  [
	    "titulo"        => "Spider-Man 2",
	    "desarrollador" => "Insomniac Games",
	    "codigo"        => "PS5SPDMN2023",
	    "descripcion"   => "Peter Parker y Miles Morales unen fuerzas para proteger Nueva York.",
	    "formato"       => "Digital",
	    "plataforma"    => "PS5"
	  ],
	  [
	    "titulo"        => "Resident Evil 4 Remake",
	    "desarrollador" => "Capcom",
	    "codigo"        => "PCRE42023",
	    "descripcion"   => "Remake del clásico de acción y terror con gráficos modernizados.",
	    "formato"       => "Digital",
	    "plataforma"    => "PC"
	  ],
	  [
	    "titulo"        => "Super Mario Bros Wonder",
	    "desarrollador" => "Nintendo",
	    "codigo"        => "SWMARIO2023",
	    "descripcion"   => "Plataformas clásico reinventado con nuevos poderes y mundos coloridos.",
	    "formato"       => "Físico",
	    "plataforma"    => "Switch"
	  ],
	  [
	    "titulo"        => "Alan Wake 2",
	    "desarrollador" => "Remedy Entertainment",
	    "codigo"        => "PS5ALNWK2023",
	    "descripcion"   => "Terror psicológico y narrativa dual con gráficos de nueva generación.",
	    "formato"       => "Digital",
	    "plataforma"    => "PS5"
	  ],
	  [
	    "titulo"        => "Assassin’s Creed Mirage",
	    "desarrollador" => "Ubisoft Bordeaux",
	    "codigo"        => "XBXACMIRG2023",
	    "descripcion"   => "Regreso a las raíces de sigilo e infiltración en Bagdad.",
	    "formato"       => "Digital",
	    "plataforma"    => "Xbox Series"
	  ],
	  [
	    "titulo"        => "Diablo IV",
	    "desarrollador" => "Blizzard Entertainment",
	    "codigo"        => "PCDIABLO42023",
	    "descripcion"   => "Acción y rol en un mundo oscuro repleto de demonios y saqueos.",
	    "formato"       => "Digital",
	    "plataforma"    => "PC"
	  ],
	  [
	    "titulo"        => "Lies of P",
	    "desarrollador" => "NEOWIZ",
	    "codigo"        => "PS5LIESP2023",
	    "descripcion"   => "Versión oscura del cuento de Pinocho con combates tipo souls.",
	    "formato"       => "Digital",
	    "plataforma"    => "PS5"
	  ],
	  [
	    "titulo"        => "Metroid Prime Remastered",
	    "desarrollador" => "Retro Studios",
	    "codigo"        => "SWMETPR2023",
	    "descripcion"   => "Revisión en alta definición del clásico de exploración en primera persona.",
	    "formato"       => "Digital",
	    "plataforma"    => "Switch"
	  ],
	  [
	    "titulo"        => "Forza Horizon 5",
	    "desarrollador" => "Playground Games",
	    "codigo"        => "XBXFH52021",
	    "descripcion"   => "Conducción en mundo abierto ambientada en México.",
	    "formato"       => "Digital",
	    "plataforma"    => "Xbox Series"
	  ],
	  [
	    "titulo"        => "Final Fantasy XVI",
	    "desarrollador" => "Square Enix",
	    "codigo"        => "PS5FFXVI2023",
	    "descripcion"   => "RPG de acción con ambientación medieval y espectaculares invocaciones.",
	    "formato"       => "Físico",
	    "plataforma"    => "PS5"
	  ],
	  [
	    "titulo"        => "Street Fighter 6",
	    "desarrollador" => "Capcom",
	    "codigo"        => "PCSF62023",
	    "descripcion"   => "Nueva entrega de lucha con modo historia y sistema de control moderno.",
	    "formato"       => "Digital",
	    "plataforma"    => "PC"
	  ],
	  [
	    "titulo"        => "Star Wars Jedi Survivor",
	    "desarrollador" => "Respawn Entertainment",
	    "codigo"        => "PS5JEDIS2023",
	    "descripcion"   => "Acción y aventura en tercera persona ambientada en el universo Star Wars.",
	    "formato"       => "Físico",
	    "plataforma"    => "PS5"
	  ],
	  [
	    "titulo"        => "Mario Kart 8 Deluxe",
	    "desarrollador" => "Nintendo",
	    "codigo"        => "SWMK82017",
	    "descripcion"   => "Carreras frenéticas con personajes clásicos y circuitos mejorados.",
	    "formato"       => "Físico",
	    "plataforma"    => "Switch"
	  ],
	  [
	    "titulo"        => "Call of Duty Modern Warfare III",
	    "desarrollador" => "Sledgehammer Games",
	    "codigo"        => "PCCODMW32023",
	    "descripcion"   => "Shooter bélico con campaña intensa y modo multijugador competitivo.",
	    "formato"       => "Digital",
	    "plataforma"    => "PC"
	  ],
	  [
	    "titulo"        => "Lords of the Fallen",
	    "desarrollador" => "HEXWORKS",
	    "codigo"        => "PCLOTF2023",
	    "descripcion"   => "RPG de acción oscuro con combates exigentes y escenarios góticos.",
	    "formato"       => "Digital",
	    "plataforma"    => "PC"
	  ],
	  [
	    "titulo"        => "Sea of Stars",
	    "desarrollador" => "Sabotage Studio",
	    "codigo"        => "SWSEAST2023",
	    "descripcion"   => "RPG por turnos con estética retro inspirado en clásicos de los 90.",
	    "formato"       => "Digital",
	    "plataforma"    => "Switch"
	  ],
	  [
	    "titulo"        => "Hi-Fi Rush",
	    "desarrollador" => "Tango Gameworks",
	    "codigo"        => "XBXHIFIR2023",
	    "descripcion"   => "Juego de acción y ritmo con estética de cómic animado.",
	    "formato"       => "Digital",
	    "plataforma"    => "Xbox Series"
	  ],
	  [
	    "titulo"        => "Persona 5 Royal",
	    "desarrollador" => "Atlus",
	    "codigo"        => "SWP5R2022",
	    "descripcion"   => "RPG japonés con estilo anime y una narrativa profunda sobre identidad.",
	    "formato"       => "Digital",
	    "plataforma"    => "Switch"
	  ],
	  [
	    "titulo"        => "Dredge",
	    "desarrollador" => "Black Salt Games",
	    "codigo"        => "PCDREDGE2023",
	    "descripcion"   => "Pesca y exploración en un archipiélago con un trasfondo misterioso.",
	    "formato"       => "Digital",
	    "plataforma"    => "PC"
	  ],
	  [
	    "titulo"        => "The Last of Us Part I",
	    "desarrollador" => "Naughty Dog",
	    "codigo"        => "PS5TLOU12022",
	    "descripcion"   => "Remake del clásico de supervivencia y narrativa emocional.",
	    "formato"       => "Físico",
	    "plataforma"    => "PS5"
	  ],
	  [
	    "titulo"        => "Returnal",
	    "desarrollador" => "Housemarque",
	    "codigo"        => "PS5RETURN2021",
	    "descripcion"   => "Acción roguelike en un planeta alienígena cambiante.",
	    "formato"       => "Digital",
	    "plataforma"    => "PS5"
	  ],
	  [
	    "titulo"        => "Metaphor ReFantazio",
	    "desarrollador" => "Studio Zero",
	    "codigo"        => "PCMETAREF2024",
	    "descripcion"   => "RPG de fantasía con sistema de combate estratégico y estética estilizada.",
	    "formato"       => "Digital",
	    "plataforma"    => "PC"
	  ],
	  [
	    "titulo"        => "Palworld",
	    "desarrollador" => "Pocketpair",
	    "codigo"        => "PCPALW2024",
	    "descripcion"   => "Aventura de supervivencia con criaturas coleccionables en mundo abierto.",
	    "formato"       => "Digital",
	    "plataforma"    => "PC"
	  ],
	  [
	    "titulo"        => "Senua’s Saga: Hellblade II",
	    "desarrollador" => "Ninja Theory",
	    "codigo"        => "XBXHELLB2",
	    "descripcion"   => "Acción psicológica con narración inmersiva y realismo cinematográfico.",
	    "formato"       => "Digital",
	    "plataforma"    => "Xbox Series"
	  ]
	];
