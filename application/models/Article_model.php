<?php

class Article_model extends CI_Model
{
    private $_table = 'article';

    public function get()
    {
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    public function get_published($limit = null, $offset = null)
    {
        if (!$limit && $offset) {
            $query = $this->db
                ->get_where($this->_table, ['draft' =>'FALSE']);

        } else {
            $query = $this->db
                ->get_where($this->_table,['draft' =>'FALSE'],$limit, $offset);
        }
        return $query->result();
    }
    public function find_by_slug($slug)
    {
        if(!$slug){
            return;
        }
        $query = $this->db->get_where($this->_table, ['slug'=>$slug]);
        return $query->row();
    }
    public function find($id)
    {
        if(!$id) {
            return;
        }
        $query = $this->db->get_where($this->_table,array('id'=>$id));
        return $query->row();
    }
    public function insert($article)
    {
        return $this->db->insert($this->_table, $article);
    }

    public function delete ($id)
    {
        if (!$id){
            return;
        }
        return $this->db->delete($this->_table,['id' => $id]);
    }
}
