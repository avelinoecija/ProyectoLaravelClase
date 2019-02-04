<?php

use Illuminate\Database\Seeder;
use App\Games;
use App\User;

class DatabaseSeeder extends Seeder
{
    
private $arrayJuegos = array(
			array(
				'name' => 'Kigndom Hearts III Non-Deluxe',
				'price' => '69.99', 
				'category' => 'RPG', 
				'image' => 'jhon', 
				'video' => 'gato', 
				'description' => 'El juego cuenta la tercera aventura de Sora quien va acompañado de sus amigos Donald y Goofy a través de mundos basados en películas clásicas de Disney combatiendo a los Sincorazón e Incorpóreos. Además, un mundo basado en Toy Story fue mostrado en acción, marcando así el debut de las películas de Pixar en la franquicia.', 
				'launch' => '2019-10-10',
				'creator' => 'Jordi',
				'editor' => 'Balbe',
				'key' => 'E3NE-23DJ-DKR1'
			),
			array(
				'name' => 'Dishonored',
				'price' => '9.99', 
				'category' => 'Aventura', 
				'image' => 'jhon', 
				'video' => 'gato', 
				'description' => 'l juego tiene lugar en la ciudad industrial de Dunwall, una urbe que se encuentra azotada por una plaga letal, y sigue la historia de Corvo Attano, el legendario guardaespaldas de la emperatriz. Corvo es acusado injustamente de asesinarla, y luego de escapar a su ejecución se ve obligado a convertirse en un asesino para vengarse de los que conspiraron contra él.', 
				'launch' => '2019-10-10',
				'creator' => 'Jordi',
				'editor' => 'Balbe',
				'key' => 'JDD2-87SJ-01JS'
			),
			array(
				'name' => 'The Elder Scrolls V: Skyrim',
				'price' => '24.99', 
				'category' => 'RPG', 
				'image' => 'jhon', 
				'video' => 'gato', 
				'description' => 'La historia de Skyrim se centra en los esfuerzos del personaje, dovahkiin(sangre de dragon), para derrotar a Alduin, un dragón/dovah que, según la profecía, destruirá el mundo. La trama está fechada doscientos años después de los sucesos de Oblivion y tiene lugar en la provincia ficticia de Skyrim', 
				'launch' => '2019-10-10',
				'creator' => 'Jordi',
				'editor' => 'Balbe',
				'key' => 'LSM4-D3D2-VB3N'
			),
			array(
				'name' => 'The Witcher 3: Wild Hunt',
				'price' => '44.95', 
				'category' => 'Accion', 
				'image' => 'jhon', 
				'video' => 'gato', 
				'description' => 'Es un juego de perspectiva en tercera persona, el jugador controla al protagonista Geralt de Rivia, un cazador de monstruos conocido como Lobo Blanco, es un brujo, el cual emprende un largo viaje a través de Los reinos del norte. En el juego, el jugador lucha contra el peligroso mundo mediante magia y espadas, mientras interactúa con los NPC y completa tanto misiones secundarias como la misión principal de la historia.', 
				'launch' => '2019-10-10',
				'creator' => 'Jordi',
				'editor' => 'Balbe',
				'key' => 'HDFS-PING-JAVA'	
			)
	);
private $arraySocios = array(
			array(
				'name' => 'gato',
				'subname' => 'gato', 
				'email' => 'gato@gmail.com', 
				'password' => 'gato',
				'address' => 'C/San gato 3', 
				'admin' => false, 
				'user' => 'gato'
				
			),
			array(
				'name' => 'Jose',
				'subname' => 'Herrera', 
				'email' => 'jose@gmail.com', 
				'password' => 'admin',
				'address' => 'C/San Carlos 2', 
				'admin' => true, 
				'user' => 'admin'
				
			)
	);

    public function run()
    {
		self::seedCatalog();
		self::seedUsers();

    }
    private function seedCatalog() {
    	DB::table('games')->delete();
    	foreach ($this->arrayJuegos as $juegos) {
    		$p = new Games;
    		$p->name = $juegos['name']; 
    		$p->price = $juegos['price']; 
    		$p->category = $juegos['category']; 
    		$p->image = $juegos['image']; 
    		$p->video = $juegos['video']; 
    		$p->description = $juegos['description'];
    		$p->launch = $juegos['launch']; 
    		$p->creator = $juegos['creator']; 
    		$p->editor = $juegos['editor'];  
    		$p->key = $juegos['key']; 
    		$p->save();

    	}

    }
    private function seedUsers() {
    	DB::table('users')->delete();
    	foreach ($this->arraySocios as $users) {
    		$p = new user;
    		$p->name = $users['name']; 
    		$p->subname = $users['subname']; 
    		$p->email = $users['email']; 
    		$p->address = $users['address']; 
    		$p->admin = $users['admin']; 
    		$p->user = $users['user']; 
    		$p->password = bcrypt($users['password']); 
    		$p->save();

    	}

    }
}
