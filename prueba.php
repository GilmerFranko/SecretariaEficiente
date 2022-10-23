<?php



$data = array(
  'dni'         => '28542820',
  'passport'    => '',
  'names'       => 'Gilmer Antonio',
  'surnames'    => 'Franco Moreno',
  'email'       => 'gilmerfranko@saadmin.com',
  'num_phone'   => '04168367620',
  'gender'      => '0',
  'birth'       => '21/11/2001',
  'birth_place' => 'Valera',
  'state'       => 'Merida',
  'country'     => 'Venezuela',
  'tutor_id'    => 'Maria Moreno',
  'address'     => 'address Amarilla',
  'status'      => '1',
);

$estruct = array_keys($data);$estruct = implode($estruct, '`,`');
$values = array_values($data); $values = implode($values, '\',\'');
echo ('INSERT INTO `docente` (`'.$estruct.'`) VALUES (\''.$values.'\')');
?>
