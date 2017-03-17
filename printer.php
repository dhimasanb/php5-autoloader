<?php
class Printer {
  public function cetakBuku($buku){
    echo "Class " . __CLASS__ . " : ";
    echo "Mencetak Buku $buku\n";
    return "Buku $buku";
  }
}
?>
