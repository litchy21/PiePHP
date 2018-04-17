<?php
namespace Model;

use \Core\Entity;
use \Core\ORM;
use \Core\Database;

class FilmModel extends Entity
{
	public $table = 'film';

	public function find_movies()
	{
		$db = new \Core\Database;
		$db->query("SELECT film.id id_film, film.titre AS titre, genre.nom AS genre, distrib.nom AS distrib 
			FROM film
			LEFT JOIN genre ON genre.id = film.id_genre 
			LEFT JOIN distrib ON distrib.id_distrib = film.id_distrib");
		return $db->fetch_all();
	}
	public function find_movie($id)
	{
		$db = new \Core\Database;
		$db->query("SELECT film.id as id_film, film.titre AS titre, 
			genre.nom AS genre, distrib.nom AS distrib, 
			film.resum AS resum,film.duree_min AS duree,
			film.annee_prod AS annee
			FROM film
			LEFT JOIN genre ON genre.id = film.id 
			LEFT JOIN distrib ON distrib.id_distrib = film.id_distrib
			WHERE film.id = $id");
		return $db->fetch();
	}
	public function find_genres(){
		$db = new \Core\Database;
		$db->query("SELECT * FROM genre");
		return $db->fetch_all();
	}
	public function find_distribs(){
		$db = new \Core\Database;
		$db->query("SELECT * FROM distrib");
		return $db->fetch_all();
	}
}