SELECT title, users.first_name, users.last_name FROM playlists INNER JOIN users ON user_id = users.id;

SELECT * FROM songs WHERE artist_id = 2;

SELECT COUNT(title), category FROM music INNER JOIN categories ON category_id = categories.id GROUP BY category_id;