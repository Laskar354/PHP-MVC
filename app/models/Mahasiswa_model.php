<?php



class Mahasiswa_model{
    
    // protected $mahasiswa = 
    // [
    //     [
    //         "nama" => "Laskar Jihad",
    //         "jurusan" => "Informatika",
    //         "email" => "laskar@gmail.com",
    //         "umur" => "22"
    //     ],
    //     [
    //         "nama" => "Usman",
    //         "jurusan" => "Administrasi",
    //         "email" => "usman@gmail.com",
    //         "umur" => "22"
    //     ],
    //     [
    //         "nama" => "Nurul",
    //         "jurusan" => "Teknik Komputer",
    //         "email" => "nurul@gmail.com",
    //         "umur" => "21"
    //     ]
    // ];
    
    private $table = "mahasiswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllMahasiswa()
    {
        $this->db->query("SELECT * FROM ".$this->table);

        return $this->db->resultAll();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query("SELECT * FROM ".$this->table." WHERE id=:id");

        $this->db->bind('id', $id);

        return $this->db->resultSingle();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO ".$this->table. " VALUES('', :nama, :nim, :jurusan, :email)";

        $this->db->query($query);
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("nim", $data['nim']);
        $this->db->bind("jurusan", $data['jurusan']);
        $this->db->bind("email", $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function deleteDataMahasiswa($id)
    {
        $query = "DELETE FROM ".$this->table. " WHERE id = :id";

        $this->db->query($query);

        $this->db->bind("id", $id);

        $this->db->execute();

        return $this->db->rowCount();

    }


    public function editDataMahasiswa($data)
    {
        $query = "UPDATE ".$this->table." SET nama = :nama, nim = :nim, jurusan = :jurusan, email = :email WHERE id = :id";

        $this->db->query($query);

        $this->db->bind("id", $data["id"]);
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("nim", $data["nim"]);
        $this->db->bind("jurusan", $data["jurusan"]);
        $this->db->bind("email", $data["email"]);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataMahasiswa($keyword)
    {
        $query = "SELECT * FROM ".$this->table." WHERE nama LIKE :keyword OR nim LIKE :keyword OR email LIKE :keyword";

        $this->db->query($query);
        $this->db->bind("keyword", "%".$keyword."%");
        $this->db->execute();

        return $this->db->resultAll();
    }


}

?>