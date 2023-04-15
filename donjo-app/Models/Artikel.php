<?php

namespace App\Models;

use App\Libraries\Paging;
use CodeIgniter\Model;

class Artikel extends Model
{
    protected $table            = 'artikel';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'gambar',
        'isi',
        'enabled',
        'tgl_upload',
        'id_kategori',
        'id_user',
        'judul',
        'headline',
        'gambar1',
        'gambar2',
        'gambar3',
        'dokumen',
        'link_dokumen',
    ];

    /**
     * Join dengan tabel 'user'
     *
     * @return $this
     */
    public function joinUser()
    {
        $this->builder()
            ->join('user', 'artikel.id_user=user.id', 'left');

        return $this;
    }

    /**
     * Join dengan tabel 'kategori'
     *
     * @return $this
     */
    public function joinKategori()
    {
        $this->builder()
            ->join('kategori', 'artikel.id_kategori=kategori.id', 'left');

        return $this;
    }

    /**
     * ambil data artikel, berhubungan dengan `joinKategori()`
     *
     * @return $this
     */
    public function artikelShow()
    {
        $this->builder()
            ->where([
                'artikel.enabled'      => '1',
                'artikel.headline <>'  => '1',
                'kategori.tipe'        => '1',
                'kategori.kategori <>' => 'teks_berjalan',
            ]);

        return $this;
    }

    public function get_headline()
    {
        $sql   = 'SELECT a.*,u.nama AS owner FROM artikel a LEFT JOIN user u ON a.id_user = u.id WHERE headline = 1 ORDER BY tgl_upload DESC LIMIT 1 ';
        $query = $this->db->query($sql);
        $data  = $query->getRowArray();
        if (empty($data)) {
            $data = null;
        } else {
            $id = $data['id'];
        }

        return $data;
    }

    public function get_teks_berjalan()
    {
        $sql   = "SELECT a.isi FROM artikel a LEFT JOIN kategori k ON a.id_kategori = k.id WHERE k.kategori = 'teks_berjalan' AND k.enabled = 1";
        $query = $this->db->query($sql);

        return $query->getResultArray();
    }

    public function get_widget()
    {
        $sql   = 'SELECT * FROM widget LIMIT 1 ';
        $query = $this->db->query($sql);

        return $query->getResultArray();
    }

    public function paging($p = 1)
    {
        $paging = new Paging();

        $sql = "SELECT COUNT(a.id) AS id FROM artikel a
			LEFT JOIN kategori k ON a.id_kategori = k.id
			WHERE ((a.enabled=1) AND (headline <> 1) AND (k.tipe = 1)) AND k.kategori <> 'teks_berjalan'
			ORDER BY a.tgl_upload DESC";
        $query    = $this->db->query($sql);
        $row      = $query->getRowArray();
        $jml_data = $row['id'];

        $cfg['page']     = $p;
        $cfg['per_page'] = 5;
        $cfg['num_rows'] = $jml_data;

        $paging->init($cfg);

        return $paging;
    }

    public function paging_kat($p = 1, $id = 0)
    {
        $paging = new Paging();

        $sql = 'SELECT COUNT(a.id) AS id FROM artikel a LEFT JOIN user u ON a.id_user = u.id LEFT JOIN kategori k ON a.id_kategori = k.id WHERE 1 ';
        if ($id !== 0) {
            $sql .= 'AND ((id_kategori = ' . $id . ') OR (parrent = ' . $id . '))';
        }
        $query    = $this->db->query($sql);
        $row      = $query->getRowArray();
        $jml_data = $row['id'];

        $cfg['page']     = $p;
        $cfg['per_page'] = 8;
        $cfg['num_rows'] = $jml_data;

        $paging->init($cfg);

        return $paging;
    }

    public function arsip_show()
    {
        $sql   = 'SELECT a.*,u.nama AS owner,k.kategori AS kategori FROM artikel a LEFT JOIN user u ON a.id_user = u.id LEFT JOIN kategori k ON a.id_kategori = k.id WHERE a.enabled=? ORDER BY a.tgl_upload DESC LIMIT 7 ';
        $query = $this->db->query($sql, 1);
        $data  = $query->getResultArray();

        $i = 0;

        while ($i < count($data)) {
            $id = $data[$i]['id'];

            $pendek                = str_split($data[$i]['isi'], 100);
            $pendek2               = str_split($pendek[0], 90);
            $data[$i]['isi_short'] = $pendek2[0] . '...';
            $panjang               = str_split($data[$i]['isi'], 150);
            $data[$i]['isi']       = '<label>' . $panjang[0] . "...</label><a href='" . site_url("first/artikel/{$id}") . "'>baca selengkapnya</a>";
            $i++;
        }

        return $data;
    }

    public function paging_arsip($p = 1)
    {
        $paging = new Paging();

        $sql      = 'SELECT COUNT(a.id) AS id FROM artikel a LEFT JOIN user u ON a.id_user = u.id LEFT JOIN kategori k ON a.id_kategori = k.id WHERE a.enabled=1';
        $query    = $this->db->query($sql);
        $row      = $query->getRowArray();
        $jml_data = $row['id'];

        $cfg['page']     = $p;
        $cfg['per_page'] = 20;
        $cfg['num_rows'] = $jml_data;

        $paging->init($cfg);

        return $paging;
    }

    public function full_arsip($offset = 0, $limit = 50)
    {
        $paging_sql = ' LIMIT ' . $offset . ',' . $limit;
        $sql        = 'SELECT a.*,u.nama AS owner,k.kategori AS kategori FROM artikel a LEFT JOIN user u ON a.id_user = u.id LEFT JOIN kategori k ON a.id_kategori = k.id WHERE a.enabled=? ORDER BY a.tgl_upload DESC';

        $sql .= $paging_sql;

        $query = $this->db->query($sql, 1);
        $data  = $query->getResultArray();
        if ($query->getNumRows() > 0) {
            $i = 0;

            while ($i < count($data)) {
                $nomer = $offset + $i + 1;
                $id    = $data[$i]['id'];
                $tgl   = date('d/m/Y', strtotime($data[$i]['tgl_upload']));

                $data[$i]['no']  = $nomer;
                $data[$i]['tgl'] = $tgl;
                $data[$i]['isi'] = "<a href='" . site_url("first/artikel/{$id}") . "'>" . $data[$i]['judul'] . '</a>, <i class="fa fa-user"></i> ' . $data[$i]['owner'];
                $i++;
            }
        } else {
            $data = false;
        }

        return $data;
    }

    public function slide_show()
    {
        $sql = 'SELECT gambar FROM artikel WHERE enabled=1
		UNION SELECT gambar1 FROM artikel WHERE enabled=1
		UNION SELECT gambar2 FROM artikel WHERE enabled=1
		UNION SELECT gambar3 FROM artikel WHERE enabled=1
		ORDER BY RAND() LIMIT 10 ';
        $query = $this->db->query($sql);
        if ($query->getNumRows() > 0) {
            $data = $query->getResultArray();
        } else {
            $data = false;
        }

        return $data;
    }

    public function cos_widget()
    {
        $sql = "SELECT a.*,u.nama AS owner,k.kategori AS kategori FROM artikel a LEFT JOIN user u ON a.id_user = u.id LEFT JOIN kategori k ON a.id_kategori = k.id WHERE id_kategori='1003' ORDER BY a.tgl_upload DESC";
        $sql = "SELECT a.*,u.nama AS owner,k.kategori AS kategori
		FROM artikel a
		LEFT JOIN user u ON a.id_user = u.id
		LEFT JOIN kategori k ON a.id_kategori = k.id
		WHERE a.id_kategori='1003' AND a.enabled=1
		ORDER BY a.tgl_upload DESC";
        $query = $this->db->query($sql);
        if ($query->getNumRows() > 0) {
            $data = $query->getResultArray();
        } else {
            $data = false;
        }

        return $data;
    }

    public function agenda_show()
    {
        $sql   = "SELECT a.*,u.nama AS owner,k.kategori AS kategori FROM artikel a LEFT JOIN user u ON a.id_user = u.id LEFT JOIN kategori k ON a.id_kategori = k.id WHERE id_kategori='4' ORDER BY a.tgl_upload DESC";
        $query = $this->db->query($sql);

        return $query->getResultArray();
    }

    public function komentar_show()
    {
        $sql   = 'SELECT * FROM komentar WHERE enabled=? AND id_artikel <> 775 order by tgl_upload desc limit 10';
        $query = $this->db->query($sql, 1);
        $data  = $query->getResultArray();

        $i = 0;

        while ($i < count($data)) {
            $id = $data[$i]['id_artikel'];

            $pendek                     = str_split($data[$i]['komentar'], 25);
            $pendek2                    = str_split($pendek[0], 90);
            $data[$i]['komentar_short'] = $pendek2[0] . '...';
            $panjang                    = str_split($data[$i]['komentar'], 50);
            $data[$i]['komentar']       = '' . $panjang[0] . "...<a href='" . site_url("first/artikel/{$id}") . "'>baca selengkapnya</a>";
            $i++;
        }

        return $data;
    }

    public function get_artikel($id = 0)
    {
        $sql   = 'SELECT a.*,u.nama AS owner FROM artikel a LEFT JOIN user u ON a.id_user = u.id WHERE a.id=?';
        $query = $this->db->query($sql, $id);
        if ($query->getNumRows() > 0) {
            $data = $query->getRowArray();
        } else {
            $data = false;
        }

        return $data;
    }

    public function list_artikel($offset = 0, $limit = 50, $id = 0)
    {
        $paging_sql = ' LIMIT ' . $offset . ',' . $limit;
        $sql        = 'SELECT a.*,u.nama AS owner,k.kategori AS kategori FROM artikel a LEFT JOIN user u ON a.id_user = u.id LEFT JOIN kategori k ON a.id_kategori = k.id WHERE a.enabled=1 ';
        if ($id !== 0) {
            $sql .= "AND id_kategori = {$id} OR parrent = {$id}";
        }
        $sql .= ' ORDER BY a.tgl_upload DESC ';
        $sql .= $paging_sql;
        $query = $this->db->query($sql);
        if ($query->getNumRows() > 0) {
            $data = $query->getResultArray();
        } else {
            $data = false;
        }

        return $data;
    }

    public function insert_comment($id = 0)
    {
        $data['komentar'] = strip_tags($_POST['komentar']);
        $data['owner']    = strip_tags($_POST['owner']);
        $data['email']    = strip_tags($_POST['email']);

        $data['enabled']    = 2;
        $data['id_artikel'] = $id;
        $outp               = $this->db->insert('komentar', $data);

        if ($outp) {
            $_SESSION['success'] = 1;
        } else {
            $_SESSION['success'] = -1;
        }
    }

    public function list_komentar($id = 0)
    {
        $sql   = 'SELECT * FROM komentar WHERE id_artikel = ? ORDER BY tgl_upload DESC';
        $query = $this->db->query($sql, $id);
        if ($query->getNumRows() > 0) {
            $data = $query->getResultArray();

            $i = 0;

            while ($i < count($data)) {
                $i++;
            }
        } else {
            $data = false;
        }

        return $data;
    }

    public function list_sosmed()
    {
        $sql   = 'SELECT * FROM media_sosial WHERE enabled=1';
        $query = $this->db->query($sql);
        if ($query->getNumRows() > 0) {
            $data = $query->getResultArray();
        } else {
            $data = false;
        }

        return $data;
    }
}
