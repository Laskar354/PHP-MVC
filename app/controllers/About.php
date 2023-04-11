<?php

class About extends Controller {

    public function index($name = "Laskar", $job = "Gamer", $age = "22")
    {
        $data["name"] = $name;
        $data["job"] = $job;
        $data["age"] = $age;
        $data["judul"] = "About";
        $this->view("templates/header", $data);
        $this->view("templates/navbar");
        $this->view("about/index", $data);
        $this->view("templates/footer", $data);
    }

    public function page()
    {
        $data["judul"] = "Page";
        $this->view("templates/header", $data);
        $this->view("templates/navbar");
        $this->view("about/page", $data);
        $this->view("templates/footer", $data);
    }
}


?>