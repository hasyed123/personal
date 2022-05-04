<?php
    class skill{
        public $name;

        public function __construct($name){
            $this->name = $name;
        }
    }

    class skillType{
        public $name;
        public $skills;

        public function __construct($name, $skillNames){
            $this->name = $name; 
            $this->skills = array();
            foreach ($skillNames as $skillName){
                $this->skills[] = new skill($skillName);
            }
        }
    }

    $frontend = new skillType("Frontend", array("HTML", "CSS", "Javascript"));
    $backend = new skillType("Backend", array("PHP", "Java Spring Boot"));
    $database = new skillType("Database", array("MYSQL", "SQL Server"));
    $editors = new skillType("Editors", array("Visual Studio Code", "Visual Studio", "Eclipse"));
    $otherTech = new skillType("Other", array("Microsoft Office", "Jira"));
    

    $skillTypes = array($frontend, $backend, $database, $editors, $otherTech);

    

?>