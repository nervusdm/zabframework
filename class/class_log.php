<?php
class log {
public $view =  array('title_h1'=>"Page de Log",'body'=>'','description'=>"Restauration et enregistrement des actions.");

static function save($class,$method,$t)
{





$tableau = serialize($t);
$sql ="INSERT INTO cc_log (ccLO_class,ccLO_method,ccLO_date,ccLO_tableau) VALUES (:ccLO_class,:ccLO_method,:ccLO_date,:ccLO_tableau)";
$rsql  = maquery_sql(array(":ccLO_class"=>$class,":ccLO_method"=>$method,":ccLO_date"=>aujourdhui,":ccLO_tableau"=>$tableau),$sql);


}



public function load($id=null)
{
$sql ="SELECT * FROM cc_log WHERE ccLO_id=:id";
$rsql = maquery_sql(array(":id"=>$id),$sql);
if (!isset($rsql['0'])) { $this->view['alert_error'] = "Aucune id correspondante trouvée." ; return false ;}
$class = New $rsql['0']['ccLO_class'];
$method =$rsql['0']['ccLO_method'];
$tableau = unserialize($rsql['0']['ccLO_tableau']);

if (isset($tableau['post'])) {
foreach($tableau['post'] as $k=>$v)
{
$_POST[$k]=$v;

}


}
$x[1] = null;
$x[2]=null;
$x[3]=null;
$i=1;
foreach($tableau as $k=>$v)
{
if ($k=='post') { continue ;}
$x[$i]=$v;

$i++;
}

$x = $class->$method($x[1],$x[2],$x[3]);

$this->view['alert_succes'] = 'ok';
$this->view['body'] = 'ok';


}

public function liste($t=null)
{



$sql ="SELECT * FROM cc_log ORDER BY ccLO_date DESC  LIMIT 0,2000";
$rsql = maquery_sql(null,$sql);

$table='';
foreach($rsql as $k)
		{
$table.= $this->render_table($k);


		}

$txt =<<<EOD
<table class="table">
<thead><th>N°</th><th>Classe</th><th>Méthode</th><th>Date</th><th>Contenu brut</th><th>Action</th>
</thead>
<tbody>
$table
</tbody>
</table>
EOD;

$this->view['body'] = $txt;

}

public function render_table($t)
{
	$url_projet=url_projet;
$id = $t['ccLO_id'];
$tableau =@print_r(unserialize($t['ccLO_tableau']),true);
$action =<<<EOD
<a href="$url_projet/r/log/load/$id">Restaurer</a>
EOD;
$txt="<tr><td>".$t['ccLO_id']."</td><td>".$t['ccLO_class']."</td><td>".$t['ccLO_method']."</td><td>".datefr_longue($t['ccLO_date'])."</td><td>$tableau</td><td>".$action."</td></tr>";
return $txt;

}



}


?>