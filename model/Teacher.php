<?php
    class Teacher {
        private $id;
        private $name;
        private $subject;

        public  function __construct($id, $name, $subject) {
            $this->id = $id;
            $this->name = $name;
            $this->subject = $subject;
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

        public function getSubject() {
            return $this->subject;
        }

        public function setSubject($subject) {
            $this->subject = $subject;
            return $this;
        }
    }
?>