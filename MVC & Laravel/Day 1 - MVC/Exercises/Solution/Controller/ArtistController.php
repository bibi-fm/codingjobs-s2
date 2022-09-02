<?php

class ArtistController
{

    // Method to display the form
    public function create()
    {
        require_once './View/NewArtistView.php';
    }

    public function insert_artist()
    {
        // Controller make the validation
        $errors = array();

        if (empty($_POST['name']))
            $errors['name'] = 'Name is mandatory';

        if (empty($_POST['bio']))
            $errors['bio'] = 'Bio is mandatory';

        if (empty($_POST['birth_year']))
            $errors['birth_year'] = 'Birth Year is mandatory';

        if (empty($errors)) {
            // Ask the model to insert
            require_once './Model/ArtistModel.php';
            $artistModel = new ArtistModel();
            $res = $artistModel->insert($_POST['name'], $_POST['gender'], $_POST['birth_year'], $_POST['bio']);

            if ($res)
                $msg = 'Successfully inserted<br>';
            else
                $msg = 'Problem inserting<br>';

            require_once './View/NewArtistView.php';
        } else {
            require_once './View/NewArtistView.php';
        }
    }
}
