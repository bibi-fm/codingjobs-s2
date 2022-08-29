SELECT title, users.first_name, users.last_name FROM playlists INNER JOIN users ON user_id = users.id;

SELECT * FROM songs WHERE artist_id = 2;

SELECT COUNT(songs.title), categories.title FROM songs INNER JOIN categories ON categ_id = categories.id GROUP BY categ_id;