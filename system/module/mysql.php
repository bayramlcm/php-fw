<?php
class Mysql {

  protected $db;

  function __construct() {
    $this->db = new PDO(
      'mysql:host=' . App::$appConfig['mysql']['host'] . ';dbname=' . App::$appConfig['mysql']['db'],
      App::$appConfig['mysql']['user'], App::$appConfig['mysql']['pass']
    );
    $this->db->exec('SET NAMES `UTF-8`');
  }

  // NOTE: Yeni ekle
  public function insert($sql, $params = []) {
    $query = $this->db->prepare($sql);
    $query->execute($params);
    return $this->db->lastInsertId();
  }

  // NOTE: Tek veri getir
  public function get($sql, $params = []) {
    $query = $this->db->prepare($sql);
    $query->execute($params);
    return $query->fetch(PDO::FETCH_ASSOC);
  }

  // NOTE: Tüm veriyi getir
  public function getAll($sql, $params = []) {
    $query = $this->db->prepare($sql);
    $query->execute($params);
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  // NOTE: Veriyi sil
  public function delete($sql, $params = []) {
    $query = $this->db->prepare($sql);
    return $query->execute($params);
  }

  // NOTE: veriyi güncelle
  public function update($sql, $params = []) {
    $query = $this->db->prepare($sql);
    return $query->execute($params);
  }


}
