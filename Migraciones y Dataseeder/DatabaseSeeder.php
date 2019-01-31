<?php

use Illuminate\Database\Seeder;
use App\Juego;
use App\Usuario;

class DatabaseSeeder extends Seeder
{
    
private $arrayJuegos = array(
			array(
				'nombre' => 'Kigndom Hearts III Non-Deluxe',
				'precio' => '69.99', 
				'categoria' => 'RPG', 
				'imagen' => 'jhon', 
				'video' => 'gato', 
				'descripcion' => 'El juego cuenta la tercera aventura de Sora quien va acompañado de sus amigos Donald y Goofy a través de mundos basados en películas clásicas de Disney combatiendo a los Sincorazón e Incorpóreos. Además, un mundo basado en Toy Story fue mostrado en acción, marcando así el debut de las películas de Pixar en la franquicia.', 
				'clave_juego' => 'E3NE-23DJ-DKR1'
			),
			array(
				'nombre' => 'Dishonored',
				'precio' => '9.99', 
				'categoria' => 'Aventura', 
				'imagen' => 'jhon', 
				'video' => 'gato', 
				'descripcion' => 'l juego tiene lugar en la ciudad industrial de Dunwall, una urbe que se encuentra azotada por una plaga letal, y sigue la historia de Corvo Attano, el legendario guardaespaldas de la emperatriz. Corvo es acusado injustamente de asesinarla, y luego de escapar a su ejecución se ve obligado a convertirse en un asesino para vengarse de los que conspiraron contra él.', 
				'clave_juego' => 'JDD2-87SJ-01JS'
			),
			array(
				'nombre' => 'The Elder Scrolls V: Skyrim',
				'precio' => '24.99', 
				'categoria' => 'RPG', 
				'imagen' => 'jhon', 
				'video' => 'gato', 
				'descripcion' => 'La historia de Skyrim se centra en los esfuerzos del personaje, dovahkiin(sangre de dragon), para derrotar a Alduin, un dragón/dovah que, según la profecía, destruirá el mundo. La trama está fechada doscientos años después de los sucesos de Oblivion y tiene lugar en la provincia ficticia de Skyrim', 
				'clave_juego' => 'LSM4-D3D2-VB3N'
			),
			array(
				'nombre' => 'The Witcher 3: Wild Hunt',
				'precio' => '44.95', 
				'categoria' => 'Accion', 
				'imagen' => 'jhon', 
				'video' => 'gato', 
				'descripcion' => 'Es un juego de perspectiva en tercera persona, el jugador controla al protagonista Geralt de Rivia, un cazador de monstruos conocido como Lobo Blanco, es un brujo, el cual emprende un largo viaje a través de Los reinos del norte. En el juego, el jugador lucha contra el peligroso mundo mediante magia y espadas, mientras interactúa con los NPC y completa tanto misiones secundarias como la misión principal de la historia.', 
				'clave_juego' => 'HDFS-PING-JAVA'	
			)
	);
private $arraySocios = array(
			array(
				'nombre' => 'gato',
				'apellidos' => 'gato', 
				'email' => 'gato@gmail.com', 
				'direccion' => 'C/San gato 3', 
				'admin' => false, 
				'usuario' => 'gato',
				'clave' => 'gato'
			),
			array(
				'nombre' => 'Jose',
				'apellidos' => 'Herrera', 
				'email' => 'jose@gmail.com', 
				'direccion' => 'C/San Carlos 2', 
				'admin' => true, 
				'usuario' => 'admin',
				'clave' => 'admin'
			)
	);

    public function run()
    {
		self::seedCatalog();
		self::seedUsers();

    }
    private function seedCatalog() {
    	DB::table('juegos')->delete();
    	foreach ($this->arrayJuegos as $juegos) {
    		$p = new Juego;
    		$p->nombre = $juegos['nombre']; 
    		$p->precio = $juegos['precio']; 
    		$p->categoria = $juegos['categoria']; 
    		$p->imagen = $juegos['imagen']; 
    		$p->video = $juegos['video']; 
    		$p->descripcion = $juegos['descripcion']; 
    		$p->clave_juego = $juegos['clave_juego']; 
    		$p->save();

    	}

    }
    private function seedUsers() {
    	DB::table('usuarios')->delete();
    	foreach ($this->arraySocios as $usuarios) {
    		$p = new Usuario;
    		$p->nombre = $usuarios['nombre']; 
    		$p->apellidos = $usuarios['apellidos']; 
    		$p->email = $usuarios['email']; 
    		$p->direccion = $usuarios['direccion']; 
    		$p->admin = $usuarios['admin']; 
    		$p->usuario = $usuarios['usuario']; 
    		$p->clave = bcrypt($usuarios['clave']); 
    		$p->save();

    	}

    }
}
