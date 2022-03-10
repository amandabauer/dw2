<?php

class Table{
    private $table;
    private $th;
    private $tds;

    public function __construct($table, $th, $tds){
        $this->table = $table;
        $this->th = $th;
        $this->tds = $tds;
    }

    public function __toString(){  
        $retorno = '<table class="'.$this->table.'">';
        $retorno .= '<thead> <tr>';
        foreach ($this->th as $th) {
            $retorno .= $th;
        }
        $retorno .= '</tr> </thead> <tbody>';
        foreach ($this->tds as $tds) { //$tds
            $retorno .= '<tr>';
            foreach ($tds as $td){
                // [[a1, a2, a3], [b1, b2, b3]]
                $retorno .= $td;
            }
            $retorno .= '</tr>';
        }
        $retorno .= '</tbody></table>';
        return $retorno;
    }

}

/*
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Primeiro</th>
      <th scope="col">Último</th>
      <th scope="col">Nickname</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
*/