<?php 

namespace App\Controllers; 

use \App\Models\Lists; 

class ListController {

    public function index() {

        $Lists = Lists::selectAll(); 
        
        \App\View::make('lists.index', 
        
            [ 'Lists' => $Lists,
        ]);
    }

    public function grafics() {

        $Lists = Lists::selectAll(); 
        
        \App\View::make('lists.grafics', 
        
            [ 'Lists' => $Lists,
        ]);
    }

    public function create()
    {
        \App\View::make('lists.create');
    }

    public function store()
    {
        $location_name = isset($_POST['location_name']) ? $_POST['location_name'] : null;
        $location_number = isset($_POST['location_number']) ? $_POST['location_number'] : null;
        $location_state = isset($_POST['location_state']) ? $_POST['location_state'] : null;
        $location_city = isset($_POST['location_city']) ? $_POST['location_city'] : null;
        $location_country = isset($_POST['location_country']) ? $_POST['location_country'] : null;
 
        if (Lists::save($location_name, $location_number, $location_state, $location_city, $location_country))
        {
            header('Location: /');
            exit;
        }
    }

    public function edit($location_id)
    {
        $Lists = Lists::selectAll($location_id)[0];
 
        \App\View::make('lists.edit',[
            'Lists' => $Lists,
        ]);
    }

    public function update()
    {
        $location_id = $_POST['location_id'];
        $location_name = isset($_POST['location_name']) ? $_POST['location_name'] : null;
        $location_number = isset($_POST['location_number']) ? $_POST['location_number'] : null;
        $location_state = isset($_POST['location_state']) ? $_POST['location_state'] : null;
        $location_city = isset($_POST['location_city']) ? $_POST['location_city'] : null;
        $location_country = isset($_POST['location_country']) ? $_POST['location_country'] : null;
 
        if (Lists::update($location_id, $location_name, $location_number, $location_state, $location_city, $location_country))
        {
            header('Location: /');
            exit;
        }
    }

    public function remove($location_id)
    {
        if (Lists::remove($location_id))
        {
            header('Location: /');
            exit;
        }
    }
}