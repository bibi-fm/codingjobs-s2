<?php

/*

In this exercise, you have to use PDO.

Step 0 : 
	Crate a new database 'flower_db' and create the Flowers table.
	It will contain: The name of the flower and the price


Step 1 : Display flowers
	
	- Create a class FlowerManager.
	Create a public method findAll() that will retrieve all the flowers and return the result using PDO::FETCH_ASSOC.

	- Create the page view-flowers.php
	Display all the flowers on the page using FlowerManager->findAll();

Step 2 : 

	- Create the class Flower.
	This class will represent a flower (name, price).
abndna 
	- Create getter and setter

	- Edit FlowerManager::findAll() method.
	This method should now return an array of Flower objects.

	TIPS : You have to use PDO::FETCH_CLASS

Step 3 :

	- Edit the FlowerManager class.
	Add a new public method find($id).
	This function retrieve one specific flower (thanks to the id in the argument) and returns it.

	- On the view-flowers page, add a link 'see more' next to each flowers.
	This link redirect to 'flower-detail' page.

	- Create page 'flower-detail.php'
	Use get method (same as movie) to grab the id of the flower.

	- Display the flower in this page using FlowerManager->find($id)
	

 ?>