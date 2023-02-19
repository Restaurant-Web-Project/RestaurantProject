<?php
class FoodCrudModel extends DbConnection{
    private $id;
    private $name;
    private $description;
    private $price;
    private $dateCreated;
    private $createdBy;

    private $dbConn;

    public function __construct($id = '', $name = '', $description = '', $price = '', $dateCreated='',  $createdBy='')
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->dateCreated = $dateCreated;
        $this->createdBy = $createdBy;

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

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    public function getCreatedBy()
    {
        return $this->createdBy;
    }



    public function checkIfFoodExists()
    {
        try {
            $name = mysqli_real_escape_string($this->dbConn, $this->name);
            $sql = "SELECT COUNT(*) AS count FROM menu WHERE name='$name'";
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
    public function insert()
    {
        try {
            $exists = $this->checkIfFoodExists();
            if ($exists) {
                echo "<script>alert('The food with this name already exists!')</script>";
                echo "<script>window.location.href = '../login.php';</script>";
                return;
            }
            $query = "INSERT INTO menu(name, description, price, dateCreated, createdBy) VALUES('$this->name', '$this->description', '$this->price', '$this->dateCreated', '$this->createdBy')";
            if ($sql = $this->dbConn->query($query)) {
                echo "<script>alert('Food is added successfully!');</script>";
                echo "<script>window.location.href = '../index.php';</script>";
            } else {
                echo "<script>alert('Registration failed!');</script>";
                echo "<script>window.location.href = '../register.php';</script>";
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }


    public function getAll()
    {
        $data = null;
        $query = "SELECT * FROM menu";
        if ($sql = $this->dbConn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function update($data)
    {
        $query = "UPDATE menu SET name='$data[name]', description='$data[description]', price='$data[price]', createdBy='$data[createdBy]', dateCreated='$data[dateCreated]' WHERE id='$data[id] '";
        if ($sql = $this->dbConn->query($query)) {
            return true;
        } else {
            return false;
        }
    }


    public function delete($id)
    {
        $query = "DELETE FROM menu WHERE id = '$id'";
        if ($sql = $this->dbConn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

}
?>
