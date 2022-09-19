<?php
    require_once './dao/Connection.php';

    class DaoTeacher {
        public function insert(Teacher $teacher) {
            $sql = 'INSERT INTO teacher(name, subject) VALUES(?, ?);';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $teacher->getName());
            $pst->bindValue(2, $teacher->getSubject());

            if($pst->execute()) return true;
            else return false;
        }

        public function list() {
            $list = [];
            $pst = Connection::getPreparedStatement('SELECT * FROM teacher;');
            $pst->execute();
            $list = $pst->fetchAll(PDO::FETCH_ASSOC);
            return $list;
        }

        public function delete(Teacher $teacher) {
            $sql = 'DELETE FROM teacher WHERE id = ?;';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $teacher->getId());

            if($pst->execute()) return $pst->rowCount();
            else return false;
        }

        public function update(Teacher $teacher) {
            $sql = 'UPDATE teacher SET name = ? subject = ? WHERE id = ?;';
            $pst = Connection::getPreparedStatement($sql);
            $pst->bindValue(1, $teacher->getName());
            $pst->bindValue(2, $teacher->getSubject());
            $pst->bindValue(3, $teacher->getId());

            if($pst->execute()) return $pst->rowCount();
            else return false;
        }
    }
?>