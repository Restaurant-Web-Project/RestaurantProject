<?php
require_once 'DbConnection.php';
class StafCrudModel extends DbConnection
{
    private $id;
    private $name;
    private $description;
    private $dateStarted;

    private $dbConn;

    public function __construct($id = '', $name = '', $description = '', $dateStarted = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->dateStarted = $dateStarted;

        $this->dbConn = $this->connect();
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDateCreated($dateStarted)
    {
        $this->dateStarted = $dateStarted;
    }

    public function getDateCreated()
    {
        return $this->dateStarted;
    }


    public function checkIfStafExists()
    {
        try {
            $name = mysqli_real_escape_string($this->dbConn, $this->name);
            $sql = "SELECT COUNT(*) AS count FROM staf WHERE name='$name'";
            $result = mysqli_query($this->dbConn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                return $row["count"] > 0;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function insertByAdmin()
    {
        try {
            $exists = $this->checkIfStafExists();
            if ($exists) {
                echo "<script>alert('The staf with this name already exists!')</script>";
                echo "<script>window.location.href = '../Staf/addStaf.php';</script>";
                return;
            }
            
            $query = "INSERT INTO staf(name, description, dateStarted) VALUES('$this->name', '$this->description', NOW())";
            if ($sql = $this->dbConn->query($query)) {
                echo "<script>alert('Staf is added successfully!');</script>";
                echo "<script>window.location.href = '../Staf/StafDashboard.php';</script>";
            } else {
                echo "<script>alert('Adding the staf failed!');</script>";
                echo "<script>window.location.href = '../Staf/addStaf.php';</script>";
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function getAll()
    {
        $data = null;
        $query = "SELECT * FROM staf";
        if ($sql = $this->dbConn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }


    public function get($id)
    {
        $data = null;
        $query = "SELECT * FROM staf WHERE id = '$id'";
        if ($sql = $this->dbConn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

  
    public function update($data)
    {
        $query = "UPDATE staf SET name='$data[name]', description='$data[description]', dateStarted=NOW() WHERE id='$data[id] '";
        if ($sql = $this->dbConn->query($query)) {
            return true;
        } else {
            return false;
        }
    }


    public function delete($id)
    {
        $query = "DELETE FROM staf WHERE id = '$id'";
        if ($sql = $this->dbConn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}
