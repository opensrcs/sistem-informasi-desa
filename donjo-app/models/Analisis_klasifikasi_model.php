<?php

use App\Libraries\Paging;
use App\Models\BaseModel as Model;

class Analisis_klasifikasi_model extends Model
{
    public function search_sql()
    {
        if (isset($_SESSION['cari'])) {
            $cari       = $_SESSION['cari'];
            $kw         = $this->db->escape_like_str($cari);
            $kw         = '%' . $kw . '%';
            $search_sql = " AND (u.pertanyaan LIKE '{$kw}' OR u.pertanyaan LIKE '{$kw}')";

            return $search_sql;
        }
    }

    public function master_sql()
    {
        if (isset($_SESSION['analisis_master'])) {
            $kf         = $_SESSION['analisis_master'];
            $filter_sql = " AND u.id_master = {$kf}";

            return $filter_sql;
        }
    }

    public function paging($p = 1, $o = 0)
    {
        $paging = new Paging();

        $sql = 'SELECT COUNT(id) AS id FROM analisis_klasifikasi u WHERE 1';
        $sql .= $this->search_sql();
        $sql .= $this->master_sql();
        $query    = $this->db->query($sql);
        $row      = $query->row_array();
        $jml_data = $row['id'];

        $cfg['page']     = $p;
        $cfg['per_page'] = $_SESSION['per_page'];
        $cfg['num_rows'] = $jml_data;

        $paging->init($cfg);

        return $paging;
    }

    public function list_data($o = 0, $offset = 0, $limit = 500)
    {
        switch ($o) {
            case 1: $order_sql = ' ORDER BY u.minval';
                break;

            case 2: $order_sql = ' ORDER BY u.minval DESC';
                break;

            case 3: $order_sql = ' ORDER BY u.minval';
                break;

            case 4: $order_sql = ' ORDER BY u.minval DESC';
                break;

            case 5: $order_sql = ' ORDER BY g.minval';
                break;

            case 6: $order_sql = ' ORDER BY g.minval DESC';
                break;

            default:$order_sql = ' ORDER BY u.minval';
        }

        $paging_sql = ' LIMIT ' . $offset . ',' . $limit;

        $sql = 'SELECT u.* FROM analisis_klasifikasi u WHERE 1 ';

        $sql .= $this->search_sql();
        $sql .= $this->master_sql();
        $sql .= $order_sql;
        $sql .= $paging_sql;

        $query = $this->db->query($sql);
        $data  = $query->result_array();

        $i = 0;
        $j = $offset;

        while ($i < count($data)) {
            $data[$i]['no'] = $j + 1;

            $i++;
            $j++;
        }

        return $data;
    }

    public function delete($id = '')
    {
        $sql  = 'DELETE FROM analisis_klasifikasi WHERE id=?';
        $outp = $this->db->query($sql, [$id]);

        if ($outp) {
            $_SESSION['success'] = 1;
        } else {
            $_SESSION['success'] = -1;
        }
    }

    public function delete_all()
    {
        $id_cb = $_POST['id_cb'];

        if (count($id_cb)) {
            foreach ($id_cb as $id) {
                $sql  = 'DELETE FROM analisis_klasifikasi WHERE id=?';
                $outp = $this->db->query($sql, [$id]);
            }
        } else {
            $outp = false;
        }

        if ($outp) {
            $_SESSION['success'] = 1;
        } else {
            $_SESSION['success'] = -1;
        }
    }

    public function get_analisis_klasifikasi($id = 0)
    {
        $sql   = 'SELECT * FROM analisis_klasifikasi WHERE id=?';
        $query = $this->db->query($sql, $id);

        return $query->row_array();
    }

    public function get_analisis_master()
    {
        $sql   = 'SELECT * FROM analisis_master WHERE id=?';
        $query = $this->db->query($sql, $_SESSION['analisis_master']);

        return $query->row_array();
    }
}
