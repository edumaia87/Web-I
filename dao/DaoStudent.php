<?php
    require_once './dao/Connection.php';

    class DaoStudent {
        public function insert(Student $student) {
            $sql = 'INSERT INTO student(name, ra) VALUES (?, ?);';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $student->getName());
            $pst->bindValue(2, $student->getRA());

            if($pst->execute()) return true;
            else return false;
        }

        public function list() {
            $list = [];
            $pst = Connection::getPreparedStatement('SELECT * FROM student;');
            $pst->execute();
            $list = $pst->fetchAll(PDO::FETCH_ASSOC);
            return $list;
        }

        public function localiza($id) {
            $list = [];
            $pst = Connection::getPreparedStatement('SELECT * FROM student WHERE id=?');
            $pst->bindValue(1, $id);
            $pst->execute();
            $list = $pst->fetchAll(PDO::FETCH_ASSOC);
            return $list;
        }

        public function deleteStudent(Student $student) {
            $sql = 'DELETE FROM student WHERE id = ?;';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $student->getId());
            
            if ($pst->execute()) return $pst->rowCount();
            else return false;
        }

        public function updateStudent(Student $student) {
            $sql = 'update student SET name = ?, ra = ? WHERE id = ?;';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $student->getName());
            $pst->bindValue(2, $student->getRa());
            $pst->bindValue(3, $student->getId());
            
            if ($pst->execute()) return $pst->rowCount();
            else return false;
        }
    }

?>