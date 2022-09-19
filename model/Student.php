<?php
    class Student {
        private $id;
        private $name;
        private $ra;

        public function __construct($id, $name, $ra) {
            $this->id = $id;
            $this->name = $name;
            $this->ra = $ra;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
            return $this;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
            return $this;
        }

        public function getRa() {
            return $this->ra;
        }
 
        public function setRa($ra) {
            $this->ra = $ra;
            return $this;
        }
    }
?>